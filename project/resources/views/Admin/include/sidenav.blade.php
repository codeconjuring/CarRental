<header class="main-header"> 
    <a href="index.html" class="logo"> <!-- Logo -->
        <span class="logo-mini">
            <!--<b>A</b>H-admin-->
            <img src="{{ url('assets/dist/img/logo-mini.png') }}" alt="img">
        </span>
        <span class="logo-lg">
            <!--<b>Admin</b>H-admin-->
            <img src="{{ url('assets/dist/img/logo.png') }}" alt="img">
        </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle hidden-sm hidden-md hidden-lg" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
            <span class="sr-only">Toggle navigation</span>
            <span class="ti-menu-alt"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-settings">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-email"></i><span class="badge fadeAnim">3</span></a>
                    <div class="dropdown-menu msg_box">
                        <div class="message-header">
                            <h4>3 new messages</h4>
                        </div>
                        <div class="message-body">
                            <div class=message_inner2>
                                <div class=message_widgets>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Farzana Yasmin</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status available pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="assets/dist/img/avatar2.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Mubin Khan</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status away pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="assets/dist/img/avatar3.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Mozammel Hoque</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status busy pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="assets/dist/img/avatar4.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Tanzil Ahmed</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm  available...</p>
                                            <span class="profile-status offline pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="assets/dist/img/avatar5.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Amir Khan</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status available pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Salman Khan</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status available pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Farzana Yasmin</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status available pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="assets/dist/img/avatar4.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Tanzil Ahmed</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status offline pull-right"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="message-footer">
                            <a href="#">see all messages<i class="fa fa-long-arrow-right"></i></a>
                         </div>
                    </div>
                </li>
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-user"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="profile.html"><i class="ti-user"></i> User Profile</a></li>
                        <li><a href="#"><i class="ti-settings"></i> Settings</a></li>
                        <li><a href="{{ route('admin_logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-key"></i> Logout</a></li>
                        {{-- logout form --}}
                        <form id="logout-form" action="{{ route('admin_logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Tab panes -->
    <aside class="main-sidebar">
        <!-- sidebar -->
        <div class="sidebar">
            <!-- sidebar menu -->
            <ul class="sidebar-menu">
                <li class="treeview active">
                    <a href="{{ url('/admin-dashboard') }}">
                        <i class="ti-home"></i><span>Dashboard</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-car"></i> <span>All Car</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal">Add New Car</a></li>
                        <li><a href="javascript:void(0);" onclick="showallcarlist();">Show All Car</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-home"></i><span>Rental Shops</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('show_all_rental_shop') }}">Show all Rental shops</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i><span>Driver info</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('add_new_dirver') }}">Add new Driver</a></li>
                        <li><a href="">Show All Driver List</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-sort-alpha-desc"></i> <span>UI Elements</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="button.html">Buttons</a></li>
                        <li><a href="notification.html">Notification</a></li>
                        <li><a href="panels.html">Panels</a></li>
                        <li><a href="tabs.html">Tab</a></li>
                        <li><a href="modals.html">Modals</a></li>
                        <li><a href="progressbars.html">Progressber</a></li>
                        <li><a href="list.html">List View</a></li>
                        <li><a href="icheck_toggle_pagination.html">iCheck, Toggle</a></li>
                        <li><a href="label-badge-alert.html">labels, Badges</a></li>
                        <li><a href="treeview.html">Tree View</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bar-chart"></i> <span>Charts</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="chart-float.html">Float Chart</a></li>
                        <li><a href="chart_morris.html">Morris Chart</a></li>
                        <li><a href="charts_js.html">Chart JS</a></li>
                        <li><a href="charts_am.html">Am Chart</a></li>
                        <li><a href="charts_sparklin.html">Chart Sparklin</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-font-awesome"></i> <span>Icons</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="icons-bootstrap.html"><i class="fa fa-bold"></i>Bootstrap Icons</a></li>
                        <li><a href="icons-fontawesome.html"><i class="fa fa-font-awesome"></i>Fontawesome</a></li>
                        <li><a href="icons-flag.html"><i class="fa fa-flag-checkered"></i>Flag Icons</a></li>
                        <li><a href="icons-material.html"><i class="fa fa-meetup"></i>Material Icons</a></li>
                        <li><a href="icons-weather.html"><i class="fa fa-bolt"></i>Weather Icons </a></li>
                        <li><a href="icons-line.html"><i class="fa fa-lemon-o"></i>Line Icons</a></li>
                        <li><a href="icons-pe.html"><i class="fa fa-diamond"></i>Pe Icons</a></li>
                        <li><a href="icons-socicon.html"><i class="fa fa-share-alt"></i>Socicon Icons</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="ti-location-pin"></i> <span>Maps</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="maps_amcharts.html">Amcharts Maps</a></li>
                        <li><a href="maps_gmaps.html">Maps Gmaps</a></li>
                        <li><a href="maps_data.html">Data Maps</a></li>
                        <li><a href="maps_jvector.html">Jvector Maps</a></li>
                        <li><a href="maps_google.html">Google map</a></li>
                        <li><a href="maps_snazzy.html">Snazzy Map</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="ti-email"></i> <span>Mailbox</span>  
                        <span class="pull-right-container">   
                            <i class="fa fa-angle-left pull-right"></i>  
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li><a href="maildetails.html">Mailbox Details</a></li>
                        <li><a href="compose.html">Compose</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="ti-mobile"></i> <span>App View</span>  
                        <span class="pull-right-container">   
                            <i class="fa fa-angle-left pull-right"></i>  
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="timeline.html">Vertical timeline</a></li>
                        <li><a href="horizontal_timeline.html">Horizontal timeline</a></li>
                        <li><a href="pricing.html">Pricing Table</a></li>
                        <li><a href="slider.html">Slider</a></li>
                        <li><a href="carousel.html">Carousel</a></li>
                        <li><a href="code_editor.html">Code editor</a></li>
                        <li><a href="gridSystem.html">Grid System</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="ti-agenda"></i><span>Other pages</span>  
                        <span class="pull-right-container">   
                            <i class="fa fa-angle-left pull-right"></i>  
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="forget_password.html">Forget password</a></li>
                        <li><a href="lockscreen.html">Lockscreen</a></li>
                        <li><a href="404.html">404 Error</a></li>
                        <li><a href="505.html">505 Error</a></li>
                    </ul>
                </li>
                <li><a href="calender.html"><i class="fa fa-calendar"></i>Calender</a></li>
                <li><a href="blank.html"><i class="fa fa-file-o"></i>Blank Page</a></li>
                <li class="treeview">
                    <a href="#">
                        <i class="ti-direction-alt"></i> <span>Multilevel</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Level One</a></li>
                        <li>
                            <a href="#">Level One
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"> Level Two</a></li>
                                <li>
                                    <a href="#">Level Two
                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#">Level Three</a></li>
                                        <li><a href="#">Level Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Level One</a></li>
                    </ul>
                </li>
            </ul>
        </div> <!-- /.sidebar -->
    </aside>
</header>