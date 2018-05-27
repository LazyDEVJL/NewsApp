@extends('layouts.app')
@include('layouts.register-body-top')
@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ route('register') }}"><b>News</b>App</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new account</p>

                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group has-feedback mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="name">
                            <i class="fa fa-user"></i>
                        </span>
                        </div>
                        <input id="name" type="text" placeholder="Username"
                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                               value="{{ old('name') }}" required autofocus aria-describedby="name">

                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="input-group has-feedback mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="email">
                            <i class="fa fa-at"></i>
                        </span>
                        </div>
                        <input id="email" type="email" placeholder="Email address"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" required aria-describedby="email">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="input-group has-feedback mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="password">
                            <i class="fa fa-key"></i>
                        </span>
                        </div>
                        <input id="password" type="password" placeholder="Password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               required aria-describedby="password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="input-group has-feedback mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="cfm_password">
                            <i class="fa fa-check-circle"></i>
                        </span>
                        </div>
                        <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control"
                               name="password_confirmation" required aria-describedby="cfm_password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <a href="{{ route('login') }}" class="text-center">I already have an account</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
@endsection

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row justify-content-center">--}}
{{--<div class="col-md-8">--}}
{{--<div class="card">--}}
{{--<div class="card-header">{{ __('Register') }}</div>--}}

{{--<div class="card-body">--}}
{{--<form method="POST" action="{{ route('register') }}">--}}
{{--@csrf--}}

{{--<div class="form-group row">--}}
{{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="name" type="text"--}}
{{--class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"--}}
{{--name="name" value="{{ old('name') }}" required autofocus>--}}

{{--@if ($errors->has('name'))--}}
{{--<span class="invalid-feedback">--}}
{{--<strong>{{ $errors->first('name') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<label for="email"--}}
{{--class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email"--}}
{{--class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"--}}
{{--name="email" value="{{ old('email') }}" required>--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="invalid-feedback">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<label for="password"--}}
{{--class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password"--}}
{{--class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
{{--name="password" required>--}}

{{--@if ($errors->has('password'))--}}
{{--<span class="invalid-feedback">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<label for="password-confirm"--}}
{{--class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password-confirm" type="password" class="form-control"--}}
{{--name="password_confirmation" required>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row mb-0">--}}
{{--<div class="col-md-6 offset-md-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--{{ __('Register') }}--}}
{{--</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
