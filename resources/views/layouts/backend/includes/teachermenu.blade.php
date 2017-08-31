<div class="md-card">
    <div class="md-card-content">
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-large-1-1">
                <ul id="kUI_menu">
                    <li>
                        Deshboard
                        <ul>
                            <li> <a href=" {{ route('teacher_deshboard') }}" > Deshboard </a>  </li>



                        </ul>
                    </li>

                    <li>
                        Basic
                        <ul>
                            <li> <a href=" {{ route('teacher_basicinfo') }}" > Basic Info</a>  </li>
                            <li>Leisure Clothing
                                <ul>
                                    <li>T-Shirts</li>
                                    <li>Jackets</li>
                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li>
                       Elibrary
                        <ul>
                            <li> <a href=" {{ route('teacher_Elibrary') }}" > Elibrary</a>  </li>

                            <li> <a href=" {{ route('teacher_Elibrary_create') }}" >Add Elibrary</a>  </li>

                        </ul>
                    </li>
                    <li> <a href="{{ route('teacher_leave') }}">Leave</a> </li>
                    <li> <a href="{{ route('teacher_account') }}">Account</a> </li>
                    <li> <a href="{{ route('teacher_attendance') }}">My Attendance</a> </li>
                    <li> <a href="{{ route('teacher_student_result') }}">Student Result</a> </li>


                    <li>
                        MyClass
                        <ul>
                            <li> <a href="{{ route('teacher_myclass') }}">Class</a> </li>

                            <li> <a href=" {{ route('teacher_student_attendance') }}" >Student Attendance</a>  </li>

                        </ul>
                    </li>



                </ul>
            </div>

        </div>
    </div>
</div>

