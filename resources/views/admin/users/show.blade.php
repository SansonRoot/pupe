@extends('layouts.base')

@section('title','Users')

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Users [ {{$users->count()}} ]
                    <small>
                        List of all registered Users
                    </small>
                </h3>
                @if(isset($status))
                    <input type="hidden" value="{{$status}}" id="status">
                @endif
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <form action="{{url('/admin/search/users')}}" method="POST" role="search">

                        {{csrf_field()}}

                        <div class="input-group">
                            <input type="text" class="form-control" name="q" value="{{old('q')}}" required placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default" >Go!</button>
                                </span>

                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Users </h2>
                        {{--@if(Auth::user()->privilege == 2)
                            <a href="{{url('/admin/new/hotel')}}" class="btn btn-primary pull-right" >Add New Hotel</a>
                        @endif--}}
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <table class="table table-striped responsive-utilities jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th>
                                    <input type="checkbox" id="check-all" class="flat">
                                </th>
                                <th class="column-title">#</th>
                                <th class="column-title">Name</th>
                                <th class="column-title">Phone</th>
                                <th class="column-title">City</th>
                                <th class="column-title">Email</th>
                            </tr>
                            </thead>

                            <tbody>



                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            if($('#status').val() == 'success'){
                new PNotify({
                    title: 'Regular Success',
                    text: 'That thing that you were trying to do worked!',
                    type: 'success'
                })
            }
        })
    </script>
@endsection