jQuery.ajax({
  type: "POST",
  url: APP_URL + "",
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('')
  },
  data: {
      "id": nominee
  },
  success: function(response) {


      console.log(response);



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


      output += '<div class="mb-3">';
      output += '<label class="form-label" for="landline_no">Landline No</label>';
      output += '<div class="input-group input-group-merge">'
      output += '<input type="text" id="landline_no" name="landline_no"  placeholder="Enter Landline No" class="form-control">">';
      output += '</div>';
      output += '</div>';

      output += '<div class="mb-3">';
      output += '<button onclick="remove_row(' + i +
          ')" type="button" class="btn  btn-danger">-</button>';
      output += '<br>';
      output += '</div>';
      output += '</div>';

      output += '</div>';

      $("#country_location").append(output);


  },
  error: function(response) {}
});