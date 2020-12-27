<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{asset('style/images/avatar.png')}}" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
              حسابى <span class="caret"></span></a>
                <div class="dropdown-menu animated flipInY">
                    <a href="{{url('admin/profile')}}" class="dropdown-item"><i class="ti-user"></i> الملف الشخصى </a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-divider"></div> <a href="{{url('admin/logout')}}" class="dropdown-item"><i class="fa fa-power-off"></i> تسجيل خروج</a>
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap"></li>
                <li>
                    <a class="has-arrow" href="{{url('admin')}}" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu"> الرئيسية </a>
                </li>
                <li class="@if(Request::segment(2) == 'settings' || Request::segment(2) == 'about') active @endif">
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu"> اعدادات الموقع </a>
                    <ul aria-expanded="false" class="collapse">
                      <li><a class="@if(Request::segment(2) == 'settings') active @endif" href="{{url('admin/settings')}}"> اعدادات رئيسية </a></li>
                      <li><a class="@if(Request::segment(2) == 'about') active @endif" href="{{url('admin/about')}}"> من نحن </a></li>
                    </ul>
                </li>
                <li class="@if(Request::segment(2) == 'admins') active @endif">
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-account-star"></i><span class="hide-menu"> المديرين </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a class="@if(Request::segment(2) == 'admins' && Request::segment(3) == '') active @endif" href="{{url('admin/admins')}}"> المديرين </a></li>
                        <li><a class="@if(Request::segment(2) == 'admins' && Request::segment(3) == 'create') active @endif" href="{{url('admin/admins/create')}}"> اضافة جديد </a></li>
                    </ul>
                </li>
                <li>
                    <a class="@if(Request::segment(2) == 'contacts') active @endif has-arrow" href="{{url('admin/contacts')}}" aria-expanded="false"><i class="mdi mdi-email-open-outline"></i><span class="hide-menu"> رسائل التواصل </a>
                </li>
                <li>
                    <a class="@if(Request::segment(2) == 'media') active @endif has-arrow" href="{{url('admin/media')}}" aria-expanded="false"><i class="mdi mdi-buffer"></i><span class="hide-menu"> الوسائط </a>
                </li>

                <li class="nav-devider"></li>
                <li class="nav-small-cap"></li>
                <li class="@if(Request::segment(2) == 'slides') active @endif">
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-animation"></i><span class="hide-menu"> السلايدر </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a class="@if(Request::segment(2) == 'slides' && Request::segment(3) == '') active @endif" href="{{url('admin/slides')}}"> السلايدر </a></li>
                        <li><a class="@if(Request::segment(2) == 'slides' && Request::segment(3) == 'create') active @endif" href="{{url('admin/slides/create')}}"> اضافة جديد </a></li>
                    </ul>
                </li>
                <li class="@if(Request::segment(2) == 'programs') active @endif">
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-star"></i><span class="hide-menu"> البرامج </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a class="@if(Request::segment(2) == 'programs' && Request::segment(3) == '') active @endif" href="{{url('admin/programs')}}"> البرامج </a></li>
                        <li><a class="@if(Request::segment(2) == 'programs' && Request::segment(3) == 'create') active @endif" href="{{url('admin/programs/create')}}"> اضافة جديد </a></li>
                    </ul>
                </li>
                <li class="@if(Request::segment(2) == 'news') active @endif">
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-newspaper"></i><span class="hide-menu"> الاخبار </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a class="@if(Request::segment(2) == 'news' && Request::segment(3) == '') active @endif" href="{{url('admin/news')}}"> الاخبار </a></li>
                        <li><a class="@if(Request::segment(2) == 'news' && Request::segment(3) == 'create') active @endif" href="{{url('admin/news/create')}}"> اضافة جديد </a></li>
                    </ul>
                </li>
                <li class="@if(Request::segment(2) == 'galaries') active @endif">
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-folder-multiple-image"></i><span class="hide-menu"> البومات الصور </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a class="@if(Request::segment(2) == 'galaries') active @endif" href="{{url('admin/galaries')}}"> البومات الصور  </a></li>
                        <li><a class="@if(Request::segment(2) == 'galaries' && Request::segment(3) == 'create') active @endif" href="{{url('admin/galaries/create')}}"> اضافة جديد </a></li>
                    </ul>
                </li>
                <li class="@if(Request::segment(2) == 'download_cats' || Request::segment(2) == 'downloads') active @endif">
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-folder-multiple-image"></i><span class="hide-menu"> مركز التحميل </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a class="@if(Request::segment(2) == 'download_cats') active @endif" href="{{url('admin/download_cats')}}"> الخطط  </a></li>
                        <li><a class="@if(Request::segment(2) == 'downloads') active @endif" href="{{url('admin/downloads')}}"> الروابط  </a></li>
                    </ul>
                </li>









                <li >
                  <a  href="#" aria-expanded="false"><i class="mdi"></i><span class="hide-menu"> <span class="label "></span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li></li>
                    </ul>
                </li>
                <li >
                    <a  href="#" aria-expanded="false"><i class="mdi"></i><span class="hide-menu"> <span class="label "></span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li></li>
                    </ul>
                </li>
                <li >
                    <a  href="#" aria-expanded="false"><i class="mdi"></i><span class="hide-menu"> <span class="label "></span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="{{url('admin/settings')}}" class="link" data-toggle="tooltip" title="اعدادات الموقع"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="{{url('admin/profile')}}" class="link" data-toggle="tooltip" title="الملف الشخصى"><i class="mdi mdi-account-check"></i></a>
        <!-- item-->
        <a href="{{url('admin/logout')}}" class="link" data-toggle="tooltip" title="تسجيل خروج"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
