@extends('layouts.base')

@section('title','New Hotel Registration')

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    New Hotel Addition
                </h3>
                @if(isset($status))
                    <input type="hidden" value="{{$status}}" id="status">
                @endif
            </div>

        </div>

        <div class="clearfix"></div>
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>New Hotel Addition </h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">


                        <form id="demo-form2" action="{{route('admin.hotels.new')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
{{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Hotel Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Hotel Contact Number <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="phone" name="phone" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Hotel Email Address <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            if($('#status').val() == 'failed'){
                new PNotify({
                    title: "Failed",
                    text: "Hotel Could not be added",
                    type: 'error'
                })
            }else if($('#status').val() == 'success'){
                new PNotify({
                    title: "New Hotel Added",
                    text: "{{isset($hotel) ? $hotel->name : ''}} Successfully Added",
                    type: 'success'
                })
            }
        })
    </script>
@endsection