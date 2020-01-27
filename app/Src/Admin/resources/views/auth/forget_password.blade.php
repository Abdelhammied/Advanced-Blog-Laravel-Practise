@extends('admin::layouts.master')


@section('content')

<div class="login-logo">
    <a href="{{ route('admin.index') }}"><b>Admin</b>LTE</a>
</div>

<div class="login-box-body">
    <p class="login-box-msg">Enter Your Email To Reset Password</p>

    <form action="{{ route('admin.forget-password') }}" method="post">

        {{ csrf_field() }}

        <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }} ">
            @error(['field' => 'email'])
            <input type="email" class="form-control" placeholder="Enter Your Email To Reset Password" name="email"
                value="{{ old('email') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Reset Password</button>
            </div>
        </div>
    </form>
</div>
@endsection
