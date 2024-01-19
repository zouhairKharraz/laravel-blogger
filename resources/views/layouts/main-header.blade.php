        <!--=================================
 header start-->
        <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <!-- logo -->
            <div class="text-left navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="{{ route('home') }}"><img src="build/assets/images/logo-dark.png" alt=""></a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}"><img src="build/assets/images/logo-icon-dark.png" alt=""></a>
            </div>
            
            <!-- top bar right -->
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item fullscreen">
                    <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
                </li>
                <li class="nav-item dropdown mr-30">
                    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="build/assets/images/profile-avatar.jpg" alt="avatar">
                    </a>
                     <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0">{{auth()->user()->name}}</h5>
                                    {{auth()->user()->email}}
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                            <x-dropdown-link :href="route('profile.edit')">
                                <i class="text-warning ti-user"></i>
                                {{ __('Profile') }}
                            </x-dropdown-link>

                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="text-danger ti-unlock"></i>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <!--=================================
 header End-->
