@extends('layouts.base')

@section('title','Hotels')

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Hotels [ {{$hotels->count()}} ]
                    <small>
                        List of all registered Hotels
                    </small>
                </h3>
                @if(isset($status))
                    <input type="hidden" value="{{$status}}" id="status">
                @endif
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <form action="{{url('/admin/search/hotels')}}" method="POST" role="search">

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
                        <h2>Hotels </h2>
                        @if(Auth::user()->privilege == 2)
                            <a href="{{url('/admin/hotels/new')}}" class="btn btn-primary pull-right" >Add New Hotel</a>
                        @endif
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
                                <th class="column-title">Image</th>
                                <th class="column-title">Hotel Name</th>
                                <th class="column-title">Phone</th>
                                <th class="column-title">City</th>
                                <th class="column-title">Email</th>
                                <th class="column-title">Status</th>
                                <th class="column-title">Active</th>
                                <th class="column-title no-link last"><span class="nobr">Details</span></th>
                            </tr>
                            </thead>

                            <tbody>

                            @if(isset($hotels) && $hotels->count()>0)
                                <?php $counter = 1 ?>

                                @foreach($hotels as $hotel)
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat green" name="table_records">
                                        </td>
                                        <td class=" ">{{$counter++}}</td>
                                        <td class=" ">
                                            <img height="100" width="100" src="{{asset('img/uploads/'.$hotel->image)}}" class="img-responsive">
                                        </td>
                                        <td class=" ">{{$hotel->name}} </td>
                                        <td class=" ">{{$hotel->phone}}</td>
                                        <td class=" ">{{$hotel->city}}</td>
                                        <td class=" ">{{$hotel->email}}</td>
                                        <td class=" ">
                                           @if($hotel->verified == 1)

                                               <button disabled class="btn btn-success">Verified</button>

                                           @else

                                                <button disabled class="btn btn-danger">Not Verified</button>

                                            @endif
                                        </td>
                                        <td class=" ">
                                            <label class="switch">
                                                <input type="checkbox" id="active" onclick="activateAcct({{$hotel->id}})" {{$hotel->active == 1 ? "checked" : ''}}>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td class=" last"><a class="btn btn-success"
                                                             href="#">View
                                                Details</a>
                                        </td>
                                    </tr>
                                @endforeach

                            @endif

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
        });

        function activateAcct(id){

            var state = 0;

            if($('#active').prop('checked')){
                state = 1;
            }else{
              state = 0;
            }

            $.ajax({
                url: "/admin/hotels/"+id+"/"+state,
                type: "get",
                success: function(data){


                    if(data['status'] == 1){

                        var title = '';

                        if(state == 1){
                            title = data['name'] + " has been activated";
                            new PNotify({
                                title: 'Success',
                                text: title,
                                type: 'success'
                            })
                        }else{
                            title = data['name'] + " has been deactivated";
                            new PNotify({
                                title: 'Success',
                                text: title,
                                type: 'info'
                            })
                        }


                    }else if(data['status']  == 2){
                        new PNotify({
                            title: 'Error Occurred',
                            text: 'Failed to update '+data['name'],
                            type: 'error'
                        })
                    }
                }
            });

        }


    </script>
@endsection