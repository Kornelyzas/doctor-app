@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <label for="selectGender"></label>
                                <select class="form-control" name="gender" id="selectGender" @error('email') is-invalid @enderror>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<!--Registration Form-->--}}

{{--<div class="auth-wrapper">--}}
{{--    <div class="container-fluid h-100">--}}
{{--        <div class="row flex-row h-100 bg-white">--}}
{{--            <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">--}}
{{--                <div class="lavalite-bg">--}}
{{--                    <img src="{{asset('public/template/img/auth/register-bg.jpg')}}" />--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">--}}
{{--                <div class="authentication-form mx-auto">--}}
{{--                    <div class="logo-centered">--}}
{{--                        <a href="../index.html"><img src="../src/img/brand.svg" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <h3>{{ __('Register') }}</h3>--}}
{{--                    <p>Join our clinic today! It takes only few steps</p>--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group">--}}
{{--                            <input type="text" name="name" class="form-control" placeholder="Name" required="">--}}
{{--                            <i class="ik ik-user"></i>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <input type="email" name="email" class="form-control" placeholder="Email" required="">--}}
{{--                            <i class="ik ik-user"></i>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="selectGender">Gender</label>--}}
{{--                            <select class="form-control" name="gender" id="selectGender">--}}
{{--                                <option>Male</option>--}}
{{--                                <option>Female</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <input type="text" name="address" class="form-control" placeholder="Adress" required="">--}}
{{--                            <i class="ik ik-user"></i>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <input type="number" name="phoneNumber" class="form-control" placeholder="Phone Number" required="">--}}
{{--                            <i class="ik ik-user"></i>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <input type="password" name="password" class="form-control" placeholder="Password" required="">--}}
{{--                            <i class="ik ik-lock"></i>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required="">--}}
{{--                            <i class="ik ik-eye-off"></i>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-12 text-left">--}}
{{--                                <label class="custom-control custom-checkbox">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">--}}
{{--                                    <span class="custom-control-label">&nbsp;I Accept <a href="#">Terms and Conditions</a></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="sign-btn text-center">--}}
{{--                            <button type="button" class="btn btn-secondary"><i class="ik ik-clipboard"></i>Submit</button>--}}
{{--                        </div>--}}

{{--                    </form>--}}
{{--                    <div class="register">--}}
{{--                        <p>Already have an account? <a href="login.html">Sign In</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
