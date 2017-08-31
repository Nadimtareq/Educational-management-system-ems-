@extends('layouts.backend.master')

@section('title')
   Contact page
@endsection

@section('content')
         <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
            <div class="uk-width-large-10-10">
               <form action="{{ route('contact_info_store') }}" method="post" class="uk-form-stacked" id="user_edit_form">
                  <div class="uk-grid" data-uk-grid-margin>
                     <div class="uk-width-large-10-10">
                        <div class="md-card">
                           <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                              {{ csrf_field() }}
                              <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                 <div class="fileinput-preview fileinput-exists thumbnail"></div>
                              </div>
                              <div class="user_heading_content">
                                 <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Contact </span></h2>
                              </div>
                           </div>
                           <div class="user_content">

                                 <div class="uk-grid">
                                    <div class="uk-width-1-5">
                                       <div class="parsley-row">
                                          <label for="address">Address<span class="req"></span></label>
                                       </div>
                                    </div>
                                    <div class="uk-width-1-2">
                                       <div class="parsley-row">
                                          <input type="text" id="address" name="address" required class="md-input" />
                                       </div>
                                    </div>
                                 </div>

                              <div class="uk-grid">
                                 <div class="uk-width-1-5">
                                    <div class="parsley-row">
                                       <label for="email_1">Email-1<span class="req"></span></label>
                                    </div>
                                 </div>
                                 <div class="uk-width-1-2">
                                    <div class="parsley-row">
                                       <input type="text" id="email_1" name="email_1" required class="md-input" />
                                    </div>
                                 </div>
                              </div>

                              <div class="uk-grid">
                                 <div class="uk-width-1-5">
                                    <div class="parsley-row">
                                       <label for="email_2">Email-2<span class="req"></span></label>
                                    </div>
                                 </div>
                                 <div class="uk-width-1-2">
                                    <div class="parsley-row">
                                       <input type="text" id="email_2" name="email_2" required class="md-input" />
                                    </div>
                                 </div>
                              </div>
                              <div class="uk-grid">
                                 <div class="uk-width-1-5">
                                    <div class="parsley-row">
                                       <label for="course_name">Phone-1<span class="req"></span></label>
                                    </div>
                                 </div>
                                 <div class="uk-width-1-2">
                                    <div class="parsley-row">
                                       <input type="text" id="phone_1" name="phone_1" required class="md-input" />
                                    </div>
                                 </div>
                              </div>
                              <div class="uk-grid">
                                 <div class="uk-width-1-5">
                                    <div class="parsley-row">
                                       <label for="course_name">Phone-2<span class="req"></span></label>
                                    </div>
                                 </div>
                                 <div class="uk-width-1-2">
                                    <div class="parsley-row">
                                       <input type="text" id="phone_2" name="phone_2" required class="md-input" />
                                    </div>
                                 </div>
                              </div>
                                 <div class="uk-grid">
                                    <div class="uk-width-1-1 uk-float-right">
                                       <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                       <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

               </form>
            </div>
         </div>

@endsection