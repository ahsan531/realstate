// jQuery.ajax({
//   type: "POST",
//   url: APP_URL + "/addbooking",
//   headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//   },
//   data: {
//       "id": nominee
//   },
//   success: function(response) {


//       console.log(response);





//   },
//   error: function(response) {}
// });




function add_nominee(){
    
    var output = "";
    output += '<div class="row">';
    output += '<h2 class="fs-title">First Customer_Nominee</h2>';
    output += '<div class="demo-inline-spacing">';
    output += '<button type="button" class="btn btn-outline-primary">Existing Nominee</button>';
    output += '<button type="button" class="btn btn-outline-secondary">New Nominee</button>';
    output += '</div>';
    output += '</div>';
    output += '<div class="row">';
    
    output += '<div class="col-md-6">';
    output += '<div class="mb-3">';
    output += '<label class="form-label" for="Membership_No">Membership_No</label><span class="text-danger">*</span>';
    output += '<input type="text" class="form-control" name="membership_no" id="Membership_No"placeholder="Enter Membership No">';
    output += '<span style="color: red;  display: none;" id="Membership_No1">Enter Membership No</span>';
    output += '</div>';
    output += '<div class="mb-3">';
    output += '<label class="form-label" for="f_h_name">Father/Husband Name</label> <span class="text-danger">*</span>';
    output += '<div class="input-group input-group-merge">';
    output += '<input type="text" id="f_h_name" name="f_h_name" class="form-control" placeholder="Enter Father/Husband Name" >';
    output += '</div>';
    output += '<span style="color: red;  display: none;" id="f_h_name1">Enter Father/Husband Name</span>';
    output += '</div>';
    output += '<div class="mb-3">';
    output += '<label class="form-label" for="cnicexpire">CNIC EXPIRE DATE</label>';
    output += '<div class="input-group input-group-merge">';
    output += '<input type="date" id="cnicexpire" name="cnicexpire" class="form-control">';
    output += '</div>';
    output += '</div>';


    output += '<div class="mb-3">';
    output += '<label class="form-label" for="landline_no">Landline No</label>';
    output += '<div class="input-group input-group-merge">'
    output += '<input type="text" id="landline_no" name="landline_no"  placeholder="Enter Landline No" class="form-control">';
    output += '</div>';
    output += '</div>';

    output += '<div class="mb-3">';
    output += '<label class="form-label" for="residential_address">Residential Address</label> <span class="text-danger">*</span>';
    output += '<div class="input-group input-group-merge">';
    output += '<textarea id="residential_address" name="residential_address" placeholder="Enter Residential Address" class="form-control"></textarea>';
    output += '</div>';
    output += '<span style="color: red;  display: none;" id="residential_address1">Enter Residential Address</span>';
    output += '</div>';
    output += '<div class="mb-3">';
    output += '<label class="form-label" for="email">Email</label>';
    output += '<div class="input-group input-group-merge">';
    output += '<input type="text" id="email" name="email" placeholder="Enter email " class="form-control">';
    output += '</div>';
    output += '</div>';
    output += '</div>';
    output += '<div class="col-md-6">';
    output += '<div class="mb-3">';
    output += '<label class="form-label" for="name">Name</label> <span class="text-danger">*</span>';
    output += '<div class="input-group input-group-merge">';
    output += ' <input type="text" id="name" name="name" class="form-control" placeholder="Enter your Name">';
    output += '</div>';
    output += '<span style="color: red;  display: none;" id="name1">Enter Your Name</span>';
    output += '</div>';
    output += '<div class="mb-3">';
    output += '<label class="form-label" for="cnic">CNIC</label> <span class="text-danger">*</span>';
    output += '<input type="text" id="cnic" name="cnic"  data-inputmask=""mask": "99999-9999999-9"" class="form-control phone-mask" placeholder="Enter Your CNIC Number">';
    output += '<span style="color: red;  display: none;" id="cnic1">Enter CNIC No</span>';
    output += '</div>';
    output += '<div class="mb-3">';
    output += '<label class="form-label" for="ntn">NTN</label>';
    output += '<div class="input-group input-group-merge">';
    output += ' <input type="text" id="ntn" name="ntn" class="form-control" placeholder="Enter Yoyr NTN">';
    
    output += '</div>';
    output += '</div>';
    output += '<div class="mb-3">';
    output += '<label class="form-label" for="mobile_no">Enter Your Mobile Number</label> <span class="text-danger">*</span>';
    output += '<div class="input-group input-group-merge">';
    output += '<input type="text" id="mobile_no" name="mobile_no" class="form-control" placeholder="Enter Yoyr Mobile Number">';
    output += '</div>';
    output += '<span style="color: red;  display: none;" id="mobile_no1">Enter Your Mobile Number</span>';
    output += '</div>';
    output += '<div class="mb-3">';
    output += '<label class="form-label" for="permanent_address">Permanent Address</label> <span class="text-danger">*</span>';
    output += '<div class="input-group input-group-merge">';
    output += '<textarea id="permanent_address" name="permanent_address" placeholder="Enter Permanent Address" class="form-control"></textarea>';
    output += '<span style="color: red;  display: none;" id="permanent_address1">Enter your Permanent Address</span>';
    output += '</div>';
    output += '</div>';
    output += '</div>';
    

    $("#nomee_show").append(output);

}