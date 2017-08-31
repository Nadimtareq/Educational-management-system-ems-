<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$roles = array("admin","superadmin","student","staff","teacher","deactivate");
		for($i=0;$i<6;$i++){
         DB::table('roles')->insert([
            'slug' => $roles[$i],
            'name' => $roles[$i],
            
        ]);
		
		}
    }
}
