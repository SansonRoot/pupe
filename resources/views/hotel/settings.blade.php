@extends('layouts.hotel_base')

@section('title','Hotel Settings')

@section('content')

    <div class="">

        <div class="x_panel">

            <div class="x_title">

            </div>

            <div class="x_content">

                <div class="col-md-9">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hotel Name <span
                                        class="required">*</span>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" readonly="readonly" required="required"
                                       value="{{Auth::guard('hotel')->user()->name}}"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                            <div class="col-md-3">
                                <a id="edit_name" onclick="editField(1)" class="btn btn-small">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <a id="save_name" onclick="saveField(1)" class="btn btn-small">
                                    <i class="fa fa-save"></i> Save
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Contact <span
                                        class="required">*</span>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="phone" readonly="readonly" required="required"
                                       value="{{Auth::guard('hotel')->user()->phone}}"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                            <div class="col-md-3">
                                <a onclick="editField(2)" class="btn btn-small">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <a id="save_phone" onclick="saveField(2)" class="btn btn-small">
                                    <i class="fa fa-save"></i> Save
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span
                                        class="required">*</span>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="email" readonly="readonly" required="required"
                                       value="{{Auth::guard('hotel')->user()->email}}"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                            <div class="col-md-3">
                                <a id="edit_name" onclick="editField(3)" class="btn btn-small">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <a id="save_email" onclick="saveField(3)" class="btn btn-small">
                                    <i class="fa fa-save"></i> Save
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Region <span
                                        class="required">*</span>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="region" readonly="readonly" required="required"
                                       value="{{Auth::guard('hotel')->user()->region}}"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                            <div class="col-md-3">
                                <a id="edit_name" onclick="editField(4)" class="btn btn-small">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <a id="save_region" onclick="saveField(4)" class="btn btn-small">
                                    <i class="fa fa-save"></i> Save
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cities <span
                                        class="required">*</span>
                            </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">



                                <input id="tags_1" type="text" readonly="readonly" id="cities" class="tags form-control" value="{{Auth::guard('hotel')->user()->cities}}" />
                                <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>

                            </div>
                            <div class="col-md-3">
                                <a id="edit_name" onclick="editField(5)" class="btn btn-small">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <a id="save_cities" onclick="saveField(5)" class="btn btn-small">
                                    <i class="fa fa-save"></i> Save
                                </a>
                            </div>
                        </div>



                    </form>
                </div>

            </div>

        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#save_name').hide();
            $('#save_phone').hide();
            $('#save_email').hide();
            $('#save_region').hide();
            $('#save_cities').hide();

        });

        function saveField(id) {
            if (id == 1) {
                $('#name').prop('readonly', true);

                ajaxCall('name', $('#name').val());

            } else if (id == 2) {
                $('#phone').prop('readonly', true);

                ajaxCall('phone', $('#phone').val());

            } else if (id == 3) {
                $('#email').prop('readonly', true);

                ajaxCall('email', $('#email').val());
            } else if (id == 4) {
                $('#region').prop('readonly', true);

                ajaxCall('region', $('#region').val());
            } else if (id == 5) {
                $('#cities').prop('readonly', true);

                ajaxCall('cities', $('#cities').val());
            }
        }

        function editField(id) {
            if (id == 1) {
                $('#name').prop('readonly', false);
                $('#save_name').show();
            } else if (id == 2) {
                $('#phone').prop('readonly', false);
                $('#save_phone').show();
            } else if (id == 3) {
                $('#email').prop('readonly', false);
                $('#save_email').show();
            } else if (id == 4) {
                $('#region').prop('readonly', false);
                $('#save_region').show();
            } else if (id == 5) {
                $('#cities').prop('readonly', false);
                $('#save_cities').show();
            }
        }

        function ajaxCall(field, value) {
            $.ajax({
                url: "/hotel/edit/" + field + "/" + value,
                type: "get",
                success: function (data) {
                    if(data['status'] == 1){
                        new PNotify({
                            title: "Success",
                            text: field + " Field Updated successfully",
                            type: 'success'
                        })
                    }else{
                        new PNotify({
                            title: "Failed",
                            text: "Error updating "+field + " Field",
                            type: 'error'
                        })
                    }
                }
            })
        }

    </script>

    <script>
        function onAddTag(tag) {
            alert("Added a tag: " + tag);
        }

        function onRemoveTag(tag) {
            alert("Removed a tag: " + tag);
        }

        function onChangeTag(input, tag) {
            alert("Changed a tag: " + tag);
        }

        $(function() {
            $('#tags_1').tagsInput({
                width: 'auto'
            });
        });
    </script>
@endsection