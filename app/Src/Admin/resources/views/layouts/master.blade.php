<!DOCTYPE html>
<html>

<head>
    @include('admin::layouts.includes.head')
</head>

<body
    class="{{ (auth()->check() && auth()->user()->isAdmin()) ? 'hold-transition skin-blue sidebar-mini' : 'hold-transition login-page' }}">

    @role('Admin')

    <div class="wrapper">

        @include('admin::layouts.includes.header')

        @include('admin::layouts.includes.sidebar')

        <div class="content-wrapper">

            @include('admin::layouts.includes.page_header')

            <section class="content">

                @yield('content')

            </section>

        </div>

        @include('admin::layouts.includes.footer')

    </div>

    @else

    <div class="login-box">

        @yield('content')

    </div>

    @endrole


    @include('admin::layouts.includes.scripts')

</body>

</html>
