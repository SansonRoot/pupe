@extends('layouts.master')

@section('title','Token Verification')

@section('content')

    <div class="container">
        <!--Reg Block-->
        <div class="reg-block">
            <div class="reg-block-header">
                <h2>Verify Token to register</h2>
                <ul class="social-icons text-center">
                    <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                    <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                    <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                    <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
                </ul>
            </div>

            <form action="{{route('hotel.token')}}" method="post">
                {{csrf_field()}}

                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" name="token" required="required" class="form-control" placeholder="Verification Code">
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <button type="submit" class="btn-u btn-block">Verify</button>
                    </div>
                </div>

            </form>

        </div>
        <!--End Reg Block-->
    </div><!--/container-->

@endsection