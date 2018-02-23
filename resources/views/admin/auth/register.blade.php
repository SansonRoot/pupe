@extends('layouts.master')

@section('title','Admin Registration')

@section('content')

    <!--=== Content Part ===-->
    <div class="container">
        <!--Reg Block-->
        <div class="reg-block">
            <div class="reg-block-header">
                <h2>Admin Sign Up</h2>
                <ul class="social-icons text-center">
                    <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                    <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                    <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                    <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
                </ul>
                <p>Already Signed Up? Click <a class="color-green" href="{{route('admin.login')}}">Sign In</a> to login your account.</p>
            </div>

            <form action="{{route('admin.register')}}" method="post">
{{csrf_field()}}

                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="name" required="required" placeholder="Name">
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" required="required" name="email" placeholder="Email">
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control" required="required" name="username" placeholder="Username">
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control" required="required" name="phone" placeholder="Phone">
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" required="required" name="password" placeholder="Password">
                </div>
                <div class="input-group margin-bottom-30">
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                </div>
                <hr>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" required="required">
                        I read <a target="_blank" href="#">Terms and Conditions</a>
                    </label>
                </div>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <button type="submit" class="btn-u btn-block">Register</button>
                    </div>
                </div>


            </form>

        </div>
        <!--End Reg Block-->
    </div><!--/container-->

@endsection