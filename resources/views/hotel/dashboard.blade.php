@extends('layouts.hotel_base')

@section('title','Hotel Dashboard')

@section('content')
    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                </div>
                <div class="count">179</div>

                <h3>Weekly Bookings</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-comments-o"></i>
                </div>
                <div class="count">120</div>

                <h3>Total Bookings Monthly</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                </div>
                <div class="count">200</div>

                <h3>Todays Views</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o"></i>
                </div>
                <div class="count">500</div>

                <h3>Total Views</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
            </div>
        </div>
    </div>
@endsection