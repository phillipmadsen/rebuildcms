<!-- start: SIDEBAR -->
<div class="main-navigation navbar-collapse collapse">
    {{--           <div class="user-panel"> <div class="pull-left image"> <img src="{!! gravatarUrl(Sentinel::getUser()->email) !!}" class="img-circle" alt="User Image" /> </div> <div class="pull-left info"> <p>{{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }}</p> <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div> </div> --}}
    <!-- start: MAIN MENU TOGGLER BUTTON -->
    <div class="navigation-toggler">
        <i class="clip-chevron-left"></i>
        <i class="clip-chevron-right"></i>
    </div>

    <!-- end: MAIN MENU TOGGLER BUTTON -->

    <!-- start: MAIN NAVIGATION MENU -->
    <ul class="main-navigation-menu">
        <li class="active open"> <a class="{{ setActive('admin') }}" href="{{ url(getLang() . '/admin') }}"><i class="clip-home-3"></i> <span class="title"> Dashboard </span><span class="selected"></span> </a> </li>
        <li class="{{ setActive('admin/menu*') }}"><a href="{{ url(getLang() . '/admin/menu') }}"> <i class="fa fa-bars"></i> <span>Menu</span> </a></li>



            <li class=" {{ setActive('admin/news*') }}"><a href="#"> <i class="fa fa-th"></i> <span>News</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="sub-menu">
                    <li><a href="{{ url(getLang() . '/admin/news') }}"><i class="fa fa-calendar"></i> All News</a>
                    </li>
                    <li><a href="{{ url(getLang() . '/admin/news/create') }}"><i class="fa fa-plus-square"></i> Add News</a>
                    </li>
                </ul>
            </li>


   <li class=" {{ setActive('admin/page*') }}"><a href="#"> <i class="fa fa-bookmark"></i> <span>Pages</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="sub-menu">
                    <li><a href="{{ url(getLang() . '/admin/page') }}"><i class="fa fa-folder"></i> All Pages</a>
                    </li>
                    <li><a href="{{ url(getLang() . '/admin/page/create') }}"><i class="fa fa-plus-square"></i> Add Page</a>
                    </li>
                </ul>
            </li>



            <li class="{{ setActive(['admin/photo-gallery*', 'admin/video*']) }}"><a href="#"> <i class="fa fa-picture-o"></i> <span>Galleries</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ url(getLang() . '/admin/photo-gallery') }}"><i class="fa fa-camera"></i> Photo Galleries</a>
                    </li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/video') }}"><i class="fa fa-play-circle-o"></i> Video Galleries</a>
                    </li>

                </ul>
            </li>
            <li class="{{ setActive('admin/article*') }}"><a href="#"> <i class="fa fa-book"></i> <span>Articles</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="sub-menu">
                    <li><a href="{{ url(getLang() . '/admin/article') }}"><i class="fa fa-archive"></i> All Articles</a>
                    </li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/article/create') }}"><i class="fa fa-plus-square"></i> Add Article</a>
                    </li>
                </ul>
            </li>
            <li class="{{ setActive('admin/slider*') }}"><a href="#"> <i class="fa fa-tint"></i> <span>Plugins</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="sub-menu">
                    <li><a href="{{ url(getLang() . '/admin/slider') }}"><i class="fa fa-toggle-up"></i> Sliders</a>
                    </li>
                </ul>
            </li>
            <li class="{{ setActive('admin/project*') }}"><a href="#"> <i class="fa fa-gears"></i> <span>Projects</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="sub-menu">
                    <li><a href="{{ url(getLang() . '/admin/project') }}"><i class="fa fa-gear"></i> All Projects</a>
                    </li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/project/create') }}"><i class="fa fa-plus-square"></i> Add Project</a>
                    </li>
                </ul>
            </li>
            <li class="{{ setActive('admin/faq*') }}"><a href="#"> <i class="fa fa-question"></i> <span>Faqs</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="sub-menu">
                    <li><a href="{{ url(getLang() . '/admin/faq') }}"><i class="fa fa-question-circle"></i> All Faq</a></li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/faq/create') }}"><i class="fa fa-plus-square"></i> Add Faq</a>
                    </li>
                </ul>
            </li>
            <li class="{{ setActive(['admin/user*', 'admin/group*']) }}"><a href="#"> <i class="fa fa-user"></i> <span>Users</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="sub-menu">
                    <li><a href="{{ url(getLang() . '/admin/user') }}"><i class="fa fa-user"></i> All Users</a>
                    </li>
                    <li><a href="{{ url(getLang() . '/admin/role') }}"><i class="fa fa-group"></i> Add Role</a>
                    </li>
                </ul>
            </li>
            <li class="{{ setActive(['admin/logs*', 'admin/form-post']) }}"><a href="#"> <i class="fa fa-thumb-tack"></i> <span>Records</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="sub-menu">
                    <li><a target="_blank" href="{{ url(getLang() . '/admin/logs') }}"><i class="fa fa-save"></i> Log</a></li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/form-post') }}"><i class="fa fa-envelope"></i> Form Post</a>
                    </li>
                </ul>
            </li>
            <li class="{{ setActive('admin/settings*') }}">
                <a href="{{ url(getLang() . '/admin/settings') }}"> <i class="fa fa-gear"></i> <span>Settings</span> </a>
            </li>
            <li class="{{ setActive('admin/logout*') }}">
                <a href="{{ url('/admin/logout') }}"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a>
            </li>







    </ul>
    <!-- end: MAIN NAVIGATION MENU -->
</div>
<!-- end: SIDEBAR -->