@extends('admin::layouts.master')

@section('content')
<div class="login-logo">
    <a href="{{ route('admin.index') }}"><b>Admin</b>LTE</a>
</div>

<div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ route('admin.login') }}" method="post">

        {{ csrf_field() }}

        <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }} ">
            @error(['field' => 'email'])
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
            @error(['field' => 'password'])
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="rememberme"> Remember Me
                    </label>
                </div>
            </div>
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-xs-12 text-right">
            <a href="{{ route('admin.forget-password') }}">I forgot my password</a>
        </div>
    </div>

</div>
@endsection
