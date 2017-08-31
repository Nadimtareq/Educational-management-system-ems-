<aside id="sidebar_main">

    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="index.html" class="sSidebar_hide sidebar_logo_large">
                <img class="logo_regular" src="assets/img/logo_main.png" alt="" height="15" width="71"/>
                <img class="logo_light" src="assets/img/logo_main_white.png" alt="" height="15" width="71"/>
            </a>
            <a href="index.html" class="sSidebar_show sidebar_logo_small">
                <img class="logo_regular" src="assets/img/logo_main_small.png" alt="" height="32" width="32"/>
                <img class="logo_light" src="assets/img/logo_main_small_light.png" alt="" height="32" width="32"/>
            </a>
        </div>

    </div>

    <div class="menu_section">
        <ul>
            @if(Sentinel::getUser()->inRole('admin') || Sentinel::getUser()->inRole('superadmin'))
            <li title="Dashboard">
                <a href="index.html">
                    <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                    <span class="menu_title">Dashboard </span>
                </a>

            </li>
            <li title="Mailbox">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE7EE;</i></span>
                    <span class="menu_title">Basic Info</span>
                </a>
                <ul>
                    <li><a href="{{ route('class') }}">Class</a>

                    </li>

                    <li><a href="{{ route('section') }}">Section</a>

                    </li>

                    <li><a href="{{ route('subject') }}">Subjects</a>

                    </li>
                    <li><a href="{{ route('session') }}">Session</a>

                    </li>
                    <li><a href="{{ route ('term') }}">Term</a>

                    </li>
                    <li><a href="{{ route('exam') }}">Exam</a>

                    </li>
                    </li>
                    <li><a href="{{ route('cteacher') }}">Class Teacher</a>

                    </li>
                </ul>

            </li>
            <li title="Gallery">
                <a href="{{ route('gallery') }}">
                <span class="menu_icon"><i class="material-icons">&#xE3F4;</i></span>
                    <span class="menu_title">Gallery</span> </a>

            </li>
            <li title="Gallery">
                <a href="{{ route('slider') }}">
                <span class="menu_icon"><i class="material-icons">&#xE41B;</i></span>
                    <span class="menu_title">slider</span> </a>

            </li>


            <li title="Chat">
                <a href="{{ route('leave') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE8A7;</i></span>
                    <span class="menu_title">Leave</span>
                </a>

            </li>

            <li title="Chat">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">widgets</i></span>
                    <span class="menu_title">Page</span>
                </a>
                <ul>
                    <li><a href="{{ route('page') }}">Pages</a>

                    </li>

                    <li><a href="{{ route('page_detail') }}">Page Details</a>

                    </li>

                </ul>

            </li>

            <li title="#">
                <a href="{{ route('message') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE0C9;</i></span>
                    <span class="menu_title">Message</span>
                </a>

            </li>


            <li title="#">
                <a href="{{ route('contact_info_create') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE0D0;</i></span>
                    <span class="menu_title">contactInfo</span>
                </a>

            </li>

            <li title="Snippets">
                <a href="{{ url('result/0') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE86D;</i></span>
                    <span class="menu_title">Result</span>
                </a>

            </li>
            <li title="Layout">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE412;</i></span>
                    <span class="menu_title">Gallery Type</span>
                </a>
                <ul>
                    <li><a href="{{ route('Gallery_cat') }}">All</a></li>
                    <li><a href="{{ route('Gallery_cat_create') }}">Add</a></li>
                </ul>

            </li>
            <li title="Layout">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE853;</i></span>
                    <span class="menu_title">Users</span>
                </a>
                <ul>
                    <li><a href="{{ route('Role') }}">Role</a></li>
                    <li><a href="{{ route('profile') }}">profile</a></li>
                    <li><a href="{{ route('user_superAdmin') }}">user superAdmin</a></li>
                    <li><a href="{{ route('user_teacher') }}">user teacher</a></li>
                    <li><a href="{{ route('user_staff') }}">user staff</a></li>
                    <li><a href="{{ route('user_student') }}">user student</a></li>
                </ul>

            </li>
            <li title="Kendo UI Widgets">
                <a href="{{ route('Elibrary') }}">
                    <span class="menu_icon"><i class="material-icons">&#xE02F;</i></span>
                    <span class="menu_title">Elibrary</span>
                </a>

            </li>
            <li title="Kendo UI Widgets">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE63D;</i></span>
                    <span class="menu_title">Student Batch</span>
                </a>
                <ul>
                    <li><a href="{{ route('studentbatch') }}">batch</a></li>
                    <li><a href="{{ route('studentattendance') }}">Attendance</a></li>

                </ul>

            </li>
            @endif
            @if(Sentinel::getUser()->inRole('student'))
            <li title="student">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE80C;</i></span>
                    <span class="menu_title">Student</span>
                </a>
                <ul>
                    <li><a href="{{ route('studentdashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('basic') }} ">Basic Info</a></li>
                    <li><a href="{{ route('batch') }}">Batches</a></li>
                    <li><a href="{{ route('student_result') }}">Result</a></li>
                    <li><a href="{{ route('lleave') }}">Leave</a></li>
                    <li><a href="{{ route('certificate_create')}}">Certificate</a></li>
                    <li><a href="{{ route('account') }}">Accounts</a></li>
                    <li><a href="{{ route('attendance') }}">Attendace</a></li>
                </ul>

            </li>
            @endif
            @if(Sentinel::getUser()->inRole('staff'))
            <li title="staff">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE7FC;</i></span>
                    <span class="menu_title">Staff</span>
                </a>
                <ul>
                    <li><a href="{{ route('staff') }}">Dashboard</a></li>
                    <li><a href="{{ route('staff_basic') }}">Basicinfo</a></li>
                    <li><a href="{{ route('staff_leave') }}">Leave</a></li>
                    <li><a href="{{ route('staff_accounts') }}">Accounts</a></li>
                    <li><a href="{{ route('staff_attendance') }}">Attendance</a></li>
                </ul>

            </li>
            @endif
            @if(Sentinel::getUser()->inRole('teacher'))
            <li title="teacher">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE7FD;</i></span>
                    <span class="menu_title">Teacher</span>
                </a>
                <ul>
                    <li><a href="{{ route('teacher_deshboard') }}">Deshboard</a></li>

                </ul>

            </li>
            @endif


                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside><!-- main sidebar end -->