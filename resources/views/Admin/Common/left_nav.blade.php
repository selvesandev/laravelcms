@section('left_nav')
    <!--Left Nav bar Control-->
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="index.html" class="site_title"><i class="fa fa-paw"></i>
                    <span>Laravel <strong>CMS</strong></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
                <div class="profile_pic">
                    <img src="/img/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>John Doe</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br/>


            <!----------------NAVIGATION START------------------------>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                @foreach($menu_items as $key => $menu_item)
                    <div class="menu_section">
                        <h3>{{$key}}</h3>
                        <ul class="nav side-menu">
                            @if(is_array($menu_item))
                                @foreach($menu_item as $menu)
                                    <ul class="nav side-menu">
                                        <li><a href="{{Route::has($menu['anchor']) ? route($menu['anchor']): '#'}}"><i
                                                        class="{{$menu['icon']}}"></i> {{$menu['text']}}{!!isset($menu['message']) ? '<span class="label label-'.$menu['message']['class'].' pull-right">'.$menu['message']['label'].'</span>' : ''!!}  {!! isset($menu['sub']) ? '<span class="fa fa-chevron-down"></span>': ''!!}
                                            </a>
                                            @if(isset($menu['sub']))
                                                <ul class="nav child_menu">
                                                    @foreach($menu['sub'] as $sub)
                                                        <li><a href="{{ Route::has($sub['anchor']) ? route($sub['anchor']) : '#'  }}">{{$sub['text']}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    </ul>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                @endforeach

                <!--
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <ul class="nav side-menu">
                            <li><a href="javascript:void(0)"><i class="fa fa-home"></i> Dashboard </a></li>
                        </ul>


                        <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="index.html">Add User</a></li>
                                <li><a href="index2.html">Manage User</a></li>
                                <li><a href="index3.html">User Status</a></li>
                            </ul>
                        </li>

                        <ul class="nav side-menu">
                            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                                            class="label label-success pull-right">Coming Soon</span></a></li>
                        </ul>

                    </ul>
                </div>
                -->
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
    </div>
    <!-- End of left nav bar control -->
@endsection