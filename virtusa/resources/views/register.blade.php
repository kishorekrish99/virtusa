@extends('layouts.app')
@section('css')
<link href="{{url('css/main.css')}}" rel="stylesheet" />
<link href="{{url('css/util.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="login">
        <div class="limiter">
            
            <div class="container-login100">
                <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-55">
                            REGISTRATION
                        </span>
                         
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid username is required: ex@abc">
                            <input class="input100" type="text" name="name" placeholder="Name">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <span class="lnr lnr-user"></span>
                            </span>
                        </div>
    
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="email" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <span class="lnr lnr-envelope"></span>
                            </span>
                        </div>
    
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <span class="lnr lnr-lock"></span>
                            </span>
                        </div>
                        
    
                        <div class="contact100-form-checkbox m-l-4">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>
                        
                        <div class="container-login100-form-btn p-t-25">
                            <button class="login100-form-btn">
                                REGISTER
                            </button>
                        </div>
    
                        <div class="text-center w-full p-t-42 p-b-22">
                            <span class="txt1">
                               <strong>MESSAGE BOARD</strong>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>

@endsection