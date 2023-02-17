


<aside class="sidebar">
                        <div class="sidebar-logo cols-center">
                                <img src="{{asset('backend/assets/images/logo/tran_logo.png')}}" alt="logo">
                                <div id="sidebar-close" class="sidebar-close">
                                        <i class="fas fa-arrow-left"></i>
                                </div>
                        </div>
                        <div class="sidebar-user">
                                <div class="sidebar-user-info vertical-center">
                                        <img src="{{asset('backend/assets/images/user-2.jpg')}}" alt="user">
                                        <div class="sidebar-user-name">Khun Tun</div>
                                </div>
                                <button class="btns btn-outlines">
                                        <i class="fas fa-arrow-alt-circle-right"></i>
                                </button>
                        </div>
                        <!----------------------------------
                                *  Side Bar Menus    *
                        ------------------------------------>
                        <ul class="sidebar-menus">
                                <li>
                                        <a href="./index.html"><i class="fas fa-home"></i><span>Home</span></a>
                                </li>
                                <li class="sidebar-sub-menus">
                                        <a href="#" class="sidebar-menu-dropdown">
                                                <i class="fas fa-users"></i>
                                                <span>User Management</span>
                                                <div class="dropdown-icons"></div>
                                        </a>
                                        <ul class="sidebar-menus sidebar-menu-dropdown-content">
                                                <li><a href="{{ route('users.index') }}" target="_blank"><span>Users</span></a></li>
                                                <li><a href="{{ route('roles.index') }}" target="_blank"><span>Roles</span></a></li>
                                                <li><a href="#"><span>Edit Profile</span></a></li>
                                                <li><a href="#"><span>Account Settings</span></a></li>
                                                <li><a href="#"><span>Billing</span></a></li>
                                        </ul>
                                </li>
                                <li>
                                        <a href="#"><i class="fas fa-shopping-cart"></i><span>Sales</span></a>
                                </li>
                                <li>
                                        <a href="#"><i class="fas fa-chart-line"></i><span>Analytics</span></a>
                                </li>
                                <li class="sidebar-sub-menus">
                                        <a href="#" class="sidebar-menu-dropdown">
                                                <i class="fas fa-cart-plus"></i>
                                                <span>E-commerce</span>
                                                <div class="dropdown-icons"></div>
                                        </a>
                                        <ul class="sidebar-menus sidebar-menu-dropdown-content">
                                                <li><a href="#"><span>Add Products</span></a></li>
                                                <li><a href="#"><span>Products List</span></a></li>
                                                <li><a href="#"><span>Orders</span></a></li>
                                        </ul>
                                </li>
                                <li>
                                        <a href=""><i class="fas fa-comments"></i><span>Chat</span></a>
                                </li>
                                <li>
                                        <a href="#"><i class="fas fa-calendar-alt"></i><span>Calendar</span></a>
                                </li>
                                <li>
                                        <a href="#"><i class="fas fa-tools"></i><span>Settings</span></a>
                                </li>
                                <li>
                                        <a href="{{ route('admin.logout')}}"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
                                </li>
                        </ul>

                </aside>