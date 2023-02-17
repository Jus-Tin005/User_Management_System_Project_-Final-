<header class="main-header">
                                            <div class="header-inner flex-between">
                                                <!----------------------------------
                                                        *  Mobile Toggle   *
                                                        ------------------------------------>
                                                        <div class="mobile-toggle" id="mobile-toggle">
                                                                <i class="fas fa-bars"></i>
                                                        </div>

                                                        <!----------------------------------
                                                                *  Search Bar & Icons  *
                                                        ------------------------------------>
                                                        <div class="top-button vertical-center">
                                                                <button type="button">
                                                                        <i class="fas fa-search"></i>
                                                                        <input type="text" class="search-bar" placeholder="Search..."></span>
                                                                </button>
                                                        </div>


                                                                                <!----------------------------------
                                                                                        * Authenticate   *
                                                                                ------------------------------------>

                                                                                        <div class="auth-content">
                                                                                                @guest
                                                                                                @else
                                                                                                <div><a  href="{{ route('users.index') }}"><i class="fas fa-users"></i> Manage Users</a></div>
                                                                                                <div><a  href="{{ route('roles.index') }}"><i class="fas fa-user-tag"></i> Manage Role</a></div>
                                                                                                <div><a  href="{{ route('products.index') }}"><i class="fas fa-shopping-bag"></i> Manage Product</a></div>
                                                                                                @endguest
                                                                                        </div>

                                                                                        <!----------------------------------
                                                                                                * Icons   *
                                                                                        ------------------------------------>

                                                                                        <div class="top-corner vertical-center">
                                                                                                        <div class="flag-lang">
                                                                                                                <div class="flag-lang-inner">
                                                                                                                        <button type="button" class="flag-btns vertical-center all-corner-btns">
                                                                                                                                <span class="flag-img">
                                                                                                                                        <img src="{{asset('backend/assets/images/mm.png')}}" alt="mm">
                                                                                                                                </span>
                                                                                                                                <span class="lang vertical-center">MM</span>
                                                                                                                        </button>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="dark-mode">
                                                                                                                <div class="theme-toggler">
                                                                                                                                <i class="fas fa-sun active"></i>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="mail-icons">
                                                                                                                <button type="button" class="flag-btns">
                                                                                                                        <span class="mails"><i class="fas fa-envelope"></i></span>
                                                                                                                        <span class="mails-counter">77</span>
                                                                                                                </button>
                                                                                                        </div>
                                                                                                        <div class="mail-icons">
                                                                                                                <button type="button" class="flag-btns">
                                                                                                                        <span class="mails"><i class="fas fa-bell"></i></span>
                                                                                                                        <span class="mails-counter">10</span>
                                                                                                                </button>
                                                                                                        </div>
                                                                                                </div>
                                                                                </div>
                            </header>
