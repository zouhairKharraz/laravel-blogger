<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item home-->
                    <li>
                        <div class="absolute inset-0">
                            <a href="{{ route('home') }}">
                            <i class="ti-home"></i><span href="route('home')" :active="request()->routeIs('home')" class="right-nav-text"> {{ __('home') }}</span>
                            </a>
                        </div>
                    </li>


<br/> <br/>


                    <li> <h3 class="mt-10 mb-10 text-muted pl-4 font-medium menu-title ">User Name</h3> </li>

                    <div class="shrink-0 flex items-center " style="width:200px">
                        <x-responsive-nav-link  >
                            {{auth()->user()->name}}
                        </x-responsive-nav-link>
                    </div>

<br/> <br/>

                    <li> <h3 class="mt-10 mb-10 text-muted pl-4 font-medium menu-title ">Mes Posts</h3> </li>


                    <div class="shrink-0 flex items-center " style="width:200px">
                        <x-responsive-nav-link :href="route('mesposts')">
                            Mes Posts
                        </x-responsive-nav-link>
                    </div>





                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
