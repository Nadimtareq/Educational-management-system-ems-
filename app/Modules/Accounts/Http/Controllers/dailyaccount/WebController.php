<?php

namespace App\Modules\Accounts\Http\Controllers\dailyaccount;

use App\Model\Account\AccountType;
use App\Model\Account\DailyAccount;
use App\Model\User\User;
use App\Modules\Accounts\Http\Requests\daily\AccountPostRequest;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Psy\Exception\ErrorException;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $id = null;

    public function __construct()
    {

        $this->middleware('basicauth');
        $this->middleware('accountant');
    }
    public function index()
    {

        $DailyAccount = DailyAccount::orderBy('id', 'DESC')->get();
        return view('accounts::dailyaccounts.index')->with('DailyAccount',$DailyAccount);
    }

    public function SearchByDate(Request $request)
    {

        $DailyAccount = DailyAccount::whereBetween('date', [$request->from_date, $request->to_date])->get();
        return view('accounts::dailyaccounts.index')->with('DailyAccount',$DailyAccount);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ledger = AccountType::orderBy('id', 'DESC')->get();


        return view('accounts::dailyaccounts.create')->with('ledger',$ledger);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountPostRequest $request)
    {
       try
       {
           if ($request->hasFile('ledgerfile'))
           {
               $fileName = $request->ledgerfile->store('/attachment');
               $daily_account = new DailyAccount();

               $daily_account->date = $request->newdate;
               $daily_account->acc_type =$request->ledger;
               $daily_account->user_id =$request->user_id;
               $daily_account->ix_status =$request->ix;
               $daily_account->amount =$request->amount;
               $daily_account->f_url =$fileName;
               $daily_account->note =$request->newdate;
               $daily_account->created_by = Sentinel::getUser()->id;
               $daily_account->updated_by =Sentinel::getUser()->id;

               $daily_account->save();
               Input::file('ledgerfile')->move('attachment/', $fileName); // uploading file to given path
               Session::flash('success', 'Account created successfully with attachment');
               return Redirect::back();
           }
           else
           {

               $daily_account = new DailyAccount();

               $daily_account->date = $request->newdate;
               $daily_account->acc_type =$request->ledger;
               $daily_account->user_id =$request->user_id;
               $daily_account->ix_status =$request->ix;
               $daily_account->amount =$request->amount;
               $daily_account->note =$request->newdate;
               $daily_account->created_by = Sentinel::getUser()->id;
               $daily_account->updated_by =Sentinel::getUser()->id;

               $daily_account->save();

               Session::flash('success', 'Account created successfully');
               return Redirect::back();

           }

       }
       catch (QueryException $exception)
       {

           Session::flash('danger', 'Failed to added !!');
           return Redirect::back();
       }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ledger = AccountType::all();
        $singleaccount  = DailyAccount::find($id);



        return view('accounts::dailyaccounts.edit')->with(array('ledger'=>$ledger,'singleaccount'=>$singleaccount));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccountPostRequest $request, $id)
    {
        try
        {
            if ($request->hasFile('ledgerfile'))
            {
                $fileName = $request->ledgerfile->store('/attachment');
                $daily_account = DailyAccount::find($id);

                $daily_account->date = $request->newdate;
                $daily_account->acc_type =$request->ledger;
                $daily_account->user_id =$request->user_id;
                $daily_account->ix_status =$request->ix;
                $daily_account->amount =$request->amount;
                $daily_account->f_url =$fileName;
                $daily_account->note =$request->newdate;
                $daily_account->updated_by =Sentinel::getUser()->id;

                $daily_account->save();
                Input::file('ledgerfile')->move('attachment/', $fileName); // uploading file to given path
                Session::flash('success', 'Account created successfully with attachment');
                return Redirect::back();
            }
            else
            {

                $daily_account = DailyAccount::find($id);

                $daily_account->date = $request->newdate;
                $daily_account->acc_type =$request->ledger;
                $daily_account->user_id =$request->user_id;
                $daily_account->ix_status =$request->ix;
                $daily_account->amount =$request->amount;
                $daily_account->note =$request->newdate;

                $daily_account->updated_by =Sentinel::getUser()->id;

                $daily_account->save();

                Session::flash('success', 'Account Updated successfully');
                return Redirect::back();

            }

        }
        catch (QueryException $exception)
        {

            Session::flash('danger', 'Failed to Update !!');
            return Redirect::back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $account_type=DailyAccount::find($id);
            $link = $account_type->file;
            $account_type->delete();

            if($account_type->file!=null)
            {
                if(\File::exists(public_path($link))){
                    unlink(public_path($link));
                }

            }
            Session::flash('danger', 'Successfully deleted');
            return Redirect::back();
        }catch (ErrorException $exception)
        {
            Session::flash('info', 'No delete');
            return Redirect::back();
        }

    }

    public function getsingleuser(Request $request)
    {



            if (filter_var($request->student, FILTER_VALIDATE_EMAIL))
            {
                    $user = User::Email($request->student)->first();
                    if($user!=null)
                        {
                          $this->id = $user->id;
                          $user= $this->getRole($user->id);
                          return  response($this->getUserInfo($user,$this->id));

                        }

             // dd($user);
            }
            else
            {
                      $user = User::Username($request->student)->first();

                      if($user!=null)
                      {
                          $this->id = $user->id;
                        $user= $this->getRole($user->id);

                       return  response($this->getUserInfo($user,$this->id));

                      }


            }



            return response('{"jsonstatus":"failed"}');

    }

    public function getRole($id)
    {
        $user = DB::select('SELECT users.email,users.id as userid, users.first_name,users.phone, roles.slug FROM `users` JOIN role_users ON users.id = role_users.user_id JOIN roles on roles.id = role_users.role_id WHERE users.id =:id limit 1',['id'=>$id]);


       if($user){
           return $user[0]->slug;
        }else{

           return null;
        }


    }

    public function getUserInfo($user,$id)
    {



        if($user=="teacher")
        {

          $user = DB::select('SELECT users.email,users.id as userid, users.first_name,users.phone, roles.slug,teacher_infos.desination FROM `users` JOIN role_users ON users.id = role_users.user_id JOIN roles on roles.id = role_users.role_id JOIN teacher_infos on users.id = teacher_infos.users_id WHERE users.id =:id limit 1',['id'=>$id]);

          return $user;
        }
        elseif($user=="staff")
        {
          $user = DB::select('SELECT users.email,users.id as userid, users.first_name,users.phone, roles.slug,staff.desination FROM `users` JOIN role_users ON users.id = role_users.user_id JOIN roles on roles.id = role_users.role_id JOIN staff on users.id = staff.users_id WHERE users.id =:id limit 1',['id'=>$id]);

          return $user;
        }
        elseif ($user =="student")
        {

          $user = DB::select('SELECT users.email,users.id as userid, users.first_name,users.phone, roles.slug,studentbatches.student_roll,sections.name as sectionname,sessions.title as sessionname,classes.name as classname FROM `users` JOIN role_users ON users.id = role_users.user_id JOIN roles on roles.id = role_users.role_id JOIN studentbatches on users.id = studentbatches.user_id JOIN classes ON classes.id = studentbatches.classes_id JOIN sessions on sessions.id = studentbatches.sessions_id JOIN sections on sections.id = studentbatches.sections_id WHERE users.id =:id AND studentbatches.status = 1 LIMIT 1',['id'=>$id]);

          return $user;
        }


    }
}
