@extends('layouts.master')

@section('title','Admin Login')

@section('content')

    <!--=== Content Part ===-->
    <div class="container">
        <!--Reg Block-->
        <div class="reg-block">
            <div class="reg-block-header">
                <h2>Admin Log In</h2>
                <ul class="social-icons text-center">
                    <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                    <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                    <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                    <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
                </ul>
            </div>

            <form action="{{route('admin.login')}}" method="post">

{{csrf_field()}}

                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" required="required" name="email" placeholder="Email">
                </div>

                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" required="required" name="password" placeholder="Password">
                </div>

                <hr>


                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <button type="submit" class="btn-u btn-block">Login</button>
                    </div>
                </div>


            </form>

        </div>
        <!--End Reg Block-->
    </div><!--/container-->

@endsection