@extends('layouts.master')

@section('title','Registration')

@section('content')

    <!--=== Content Part ===-->
    <div class="container">
        <!--Reg Block-->

        <div class="reg-block reg-block-header">
            <h2>Sign Up</h2>
            <ul class="social-icons text-center">
                <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
            </ul>

            <p>Already Signed Up? Click <a class="color-green" href="{{route('hotel.login')}}">Sign In</a> to login your account.</p>

        </div>

        <form method="post" class="col-md-12" enctype="multipart/form-data" action="{{url('/hotel/register')}}">
            {{csrf_field()}}
            <div class="col-md-6 reg-block">



                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="name" required="required" value="{{$hotel->name}}" placeholder="Hotel Name">
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="text" class="form-control" value="{{$hotel->phone}}" name="phone" placeholder="Contact phone">
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" name="email" value="{{$hotel->email}}" required="required" placeholder="Email">
                </div>

                <div class="input-group margin-bottom-30">
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    <select name="region" class="form-control">
                        <option disabled selected value="1"> -- Select Region -- </option>
                        <option>Greater Accra</option>
                        <option>Ashanti</option>
                        <option>Volta</option>
                        <option>Central</option>
                        <option>Western</option>
                        <option>Eastern</option>
                        <option>Upper West</option>
                        <option>Brong Ahafo</option>
                        <option>Upper East</option>
                        <option>Northern</option>
                    </select>
                </div>
                <hr>

            </div>
            <div class="col-md-6 reg-block col-md-offset-2">

                <input type="hidden" name="token" value="{{$hotel->token}}">
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="input-group margin-bottom-30">
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="input-group margin-bottom-30">

                    <label class="form-control" for="image">Select Image</label>
                    <input type="file" id="image" name="image" class="form-control" >
                </div>
                <hr>

                <div class="checkbox">
                    <label>
                        <input required="required" type="checkbox">
                        I read <a target="_blank" href="#">Terms and Conditions</a>
                    </label>
                </div>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <button type="submit" class="btn-u btn-block">Register</button>
                    </div>
                </div>
            </div>





        <!--End Reg Block-->
        </form>
    </div><!--/container-->

@endsection