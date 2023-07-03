@extends('layouts.app')
@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add Customers</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Add Customer Details</h5>

                    </div>
                    <div class="card-body">
                        <form id="customerfoamid" method="POST" action="{{ route('updatecustomer') }}"
                            enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $customer->id }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label class="form-label" for="Membership_No">Membership_No</label> <span class='text-danger'>*</span>
                                        <input type="text" class="form-control" name="membership_no" value="{{ $customer->membership_no }}" id="Membership_No"
                                            placeholder="Enter Membership No" readonly>
                                    </div>
                                    <span style="color: red;  display: none;" id="Membership_No1">Enter Membership No
                                    </span>
                                    <div class="mb-3">
                                        <label class="form-label" for="f_h_name">Father/Husband Name</label> <span class='text-danger'>*</span>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="f_h_name" name="f_h_name" value="{{ $customer->husband_father_name }}" class="form-control"
                                                placeholder="Enter Father/Husband Name">

                                        </div>
                                        <span style="color: red;  display: none;" id="f_h_name1">Enter Membership No
                                        </span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="cnicexpire">CNIC EXPIRE DATE</label>
                                        <div class="input-group input-group-merge">
                                            <input type="date" id="cnicexpire" value="{{ $customer->cnic_expire }}" name="cnicexpire" class="form-control">


                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="landline_no">Landline No</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="landline_no" name="landline_no" value="{{$customer->landline_no}}"
                                                placeholder="Enter Landline No" class="form-control">

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="residential_address">Residential Address</label> <span class='text-danger'>*</span>
                                        <div class="input-group input-group-merge">
                                            <textarea id="residential_address"  name="residential_address"  placeholder="Enter Residential Address"
                                                class="form-control" > {{$customer->local_address}}</textarea>

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="email" value="{{$customer->email}}" name="email"
                                                placeholder="Enter Landline No" class="form-control">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Name</label> <span class='text-danger'>*</span>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="name" name="name" value="{{$customer->name}}" class="form-control"
                                                placeholder="Enter your Name">
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="cnic">CNIC</label> <span class='text-danger'>*</span>
                                        <input type="text" id="cnic" name="cnic" value="{{$customer->cnic}}" class="form-control phone-mask"
                                            placeholder="Enter Your CNIC Number" readonly>
                                    </div>
                                    <span style="color: red;  display: none;" id="cnic1">Enter Membership No
                                    </span>
                                    <div class="mb-3">
                                        <label class="form-label" for="ntn">NTN</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="ntn" name="ntn" value="{{$customer->ntn}}" class="form-control"
                                                placeholder="Enter Yoyr NTN">

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="mobile_no">Enter Your Mobile Number</label> <span class='text-danger'>*</span>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="mobile_no" name="mobile_no" value="{{$customer->mobile_no}}" class="form-control"
                                                placeholder="Enter Yoyr Mobile Number">

                                        </div>
                                        <span style="color: red;  display: none;" id="mobile_no1">Enter Membership No
                                        </span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="permanent_address">Permanent Address</label> <span class='text-danger'>*</span>
                                        <div class="input-group input-group-merge">
                                            <textarea id="permanent_address" name="permanent_address"  placeholder="Enter Permanent Address"
                                                class="form-control">{{$customer->permanent_address}}</textarea>

                                        </div>
                                        <span style="color: red;  display: none;" id="permanent_address1">Enter Membership No
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="container">
                                        <div class="avatar-upload">

                                            <div class="avatar-preview">
                                                <div id="imagePreview1"
                                                    style="background-image: url({{ asset('uploads/uploads/' . $customer->customer_img) }})"></div>
                                                <input type="file" id="imageUpload1" name="imageUpload1"
                                                    accept=".png, .jpg, .jpeg" />
                                                    <span>Customer Image</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="container">
                                        <div class="avatar-upload">


                                            <div class="avatar-preview">
                                                <div id="imagePreview2" style="background-image: url({{ asset('uploads/uploads/' . $customer->customer_cnic_front) }})"></div>

                                                <input type="file" id="imageUpload2" name="imageUpload2"
                                                    accept=".png, .jpg, .jpeg" />
                                                    <span style="color: red;  display: none;" id="imageUpload22">Enter Membership No
                                                    </span>
                                                    <span>CNIC Front Image</span> <span class='text-danger'>*</span>

                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="container">
                                        <div class="avatar-upload">

                                            <div class="avatar-preview">
                                                <div id="imagePreview3"
                                                    style="background-image: url({{ asset('uploads/uploads/' . $customer->customer_cnic_back) }})">
                                                </div>
                                                <input type="file" id="imageUpload3" value="{{ asset('uploads/uploads/' . $customer->customer_cnic_back) }}" name="imageUpload3"
                                                    accept=".png, .jpg, .jpeg" />
                                                    <span style="color: red;  display: none;" id="imageUpload33">Enter Membership No
                                                    </span>
                                                    <span>CNIC back Image</span> <span class='text-danger'>*</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input class="btn btn-primary" type="button" onclick="for_submit();" value="update">

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        function for_submit() {

var f = 0;
var membership_no = $('#Membership_No').val();
var name = $('#name').val();
var fatherhusband = $('#f_h_name').val();
var cnic = $('#cnic').val();
var mobile_no = $('#mobile_no').val();
var local_address = $('#residential_address').val();
var permanent_address = $('#permanent_address').val();

var cnic_front = $('#imageUpload2').val();
var cnic_back = $('#imageUpload3').val();







if (membership_no == '') {
    $('#Membership_No').css('border-color', 'red');
    $('#Membership_No1').css('display', 'block');
    f = 1;
}

if (name == '') {
    $('#name').css('border-color', 'red');
    $('#name1').css('display', 'block');
    f = 1;
}
if (fatherhusband == '') {
    $('#f_h_name').css('border-color', 'red');
    $('#f_h_name1').css('display', 'block');
    f = 1;
}
if (cnic == '') {
    $('#cnic').css('border-color', 'red');
    $('#cnic1').css('display', 'block');
    f = 1;
}
if (mobile_no == '') {
    $('#mobile_no').css('border-color', 'red');
    $('#mobile_no1').css('display', 'block');
    f = 1;
}
if (local_address == '') {
    $('#residential_address').css('border-color', 'red');
    $('#residential_address1').css('display', 'block');
    f = 1;
}

if (permanent_address == '') {
    $('#permanent_address').css('border-color', 'red');
    $('#permanent_address1').css('display', 'block');
    f = 1;
}



if (f == 0) {
    $('#customerfoamid').submit();
}

}

        function readURL(input, previewId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + previewId).css('background-image', 'url(' + e.target.result + ')');
                    $('#' + previewId).hide();
                    $('#' + previewId).fadeIn(650);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload1").change(function() {
            readURL(this, 'imagePreview1');
        });

        $("#imageUpload2").change(function() {
            readURL(this, 'imagePreview2');
        });

        $("#imageUpload3").change(function() {
            readURL(this, 'imagePreview3');
        });
    </script>
@endsection
