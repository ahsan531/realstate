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
                        <form id="customerfoamid" method="POST" action="{{ route('addcustomer.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label class="form-label" for="Membership_No">Membership_No</label> <span class='text-danger'>*</span>
                                        <input type="text" class="form-control"  value="{{$member_shio_no}}" readonly name="membership_no" id="Membership_No"
                                            placeholder="Enter Membership No">
                                        <span style="color: red;  display: none;" id="Membership_No1">Enter Membership No
                                        </span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="f_h_name">Father/Husband Name</label> <span class='text-danger'>*</span>
                                        <div class="input-group input-group-merge">
                                               <input type="text" id="f_h_name" name="f_h_name" class="form-control" placeholder="Enter Father/Husband Name" >
                                        </div>
                                        <span style="color: red;  display: none;" id="f_h_name1">Enter Father/Husband Name
                                        </span>


                                            
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="cnicexpire">CNIC EXPIRE DATE</label>
                                        <div class="input-group input-group-merge">
                                            <input type="date" id="cnicexpire" name="cnicexpire" class="form-control">


                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="landline_no">Landline No</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="landline_no" name="landline_no"
                                                placeholder="Enter Landline No" class="form-control">

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="residential_address">Residential Address</label> <span class='text-danger'>*</span>
                                        <div class="input-group input-group-merge">
                                            <textarea id="residential_address" name="residential_address" placeholder="Enter Residential Address"
                                                class="form-control"></textarea>
                                              

                                        </div>
                                        <span style="color: red;  display: none;" id="residential_address1">Enter Residential Address
                                        </span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="email" name="email"
                                                placeholder="Enter Landline No" class="form-control">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Name</label> <span class='text-danger'>*</span>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="Enter your Name">
                                               
        
                                        </div>
                                        <span style="color: red;  display: none;" id="name1">Enter Your Name
                                        </span>

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="cnic">CNIC</label> <span class='text-danger'>*</span>
                                        <input type="text" id="cnic" name="cnic"  data-inputmask="'mask': '99999-9999999-9'" class="form-control phone-mask"
                                            placeholder="Enter Your CNIC Number">
                                            <span style="color: red;  display: none;" id="cnic1">Enter CNIC No
                                            </span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="ntn">NTN</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="ntn" name="ntn" class="form-control"
                                                placeholder="Enter Yoyr NTN">

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="mobile_no">Enter Your Mobile Number</label> <span class='text-danger'>*</span>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="mobile_no" name="mobile_no" class="form-control"
                                                placeholder="Enter Yoyr Mobile Number">

                                        </div>
                                        <span style="color: red;  display: none;" id="mobile_no1">Enter Your Mobile Number
                                        </span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="permanent_address">Permanent Address</label> <span class='text-danger'>*</span>
                                        <div class="input-group input-group-merge">
                                            <textarea id="permanent_address" name="permanent_address" placeholder="Enter Permanent Address"
                                                class="form-control"></textarea>

                                        </div>
                                        <span style="color: red;  display: none;" id="permanent_address1">Enter your Permanent Address
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
                                                    style="background-image: url(https://img.freepik.com/free-icon/user_318-159711.jpg);"></div>
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
                                                <div id="imagePreview2"
                                                    style="background-image: url(https://img.particlenews.com/image.php?type=thumbnail_580x000&url=1MwWCc_0mHWrn5E00);">
                                                </div>
                                                <input type="file" id="imageUpload2" name="imageUpload2"
                                                    accept=".png, .jpg, .jpeg" />
                                                    <span style="color: red;  display: none;" id="imageUpload22">Enter CNIC Front Image
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
                                                    style="background-image: url(data:image/jpeg;base64,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);">
                                                </div>
                                                <input type="file" id="imageUpload3" name="imageUpload3"
                                                    accept=".png, .jpg, .jpeg" />
                                                    <span style="color: red;  display: none;" id="imageUpload33">Enter CNIC Back Image
                                                    </span>
                                                <span>CNIC back Image</span> <span class='text-danger'>*</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input class="btn btn-primary" type="button" id="savvvve"  onclick="for_submit(); " value="SAve">

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        
       

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

        function for_submit() {
            

            function generateCustomerID() {
            var customerID = localStorage.getItem('customerID');

            if (!customerID) {
                customerID = '00001';
            } else {
                customerID = (parseInt(customerID) + 1).toString().padStart(5, '0');
            }

            localStorage.setItem('customerID', customerID);
            return customerID;
        }

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

            if (cnic_front == '') {
                $('#imageUpload2').css('border-color', 'red');
                $('#imageUpload22').css('display', 'block');
                f = 1;
            }
            if (cnic_back == '') {
                $('#imageUpload3').css('border-color', 'red');
                $('#imageUpload33').css('display', 'block');
                f = 1;
            }

            if (f == 0) {
                $('#savvvve').prop('disabled', true);
                $('#customerfoamid').submit();
               


               
            }
           
        }
       
     
     


    </script>
    
@endsection
