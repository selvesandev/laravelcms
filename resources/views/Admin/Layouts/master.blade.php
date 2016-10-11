@include('Admin.Common.head')
@include('Admin.Common.foot')
@include('Admin.Common.left_nav')
@include('Admin.Common.foot_content')
@include('Admin.Common.top_nav')


@yield('head')
<div class="container body">
    <div class="main_container">

        @yield('left_nav')

        @yield('top_nav')

        @yield('content')

        @yield('foot_content')
    </div>
</div>


@yield('foot')