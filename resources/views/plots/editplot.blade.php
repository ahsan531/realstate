@extends('layouts.app')
@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Edit Plots</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit Plots Details</h5>

                    </div>
                    <div class="card-body">
                        <form id="foamsubmit" method="POST" action="{{ route('update') }}">
                            <input type="hidden" name="id" value="{{ $plotdata->id }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">
                                            <label class="form-label" for="basic-default-company">Block</label>
                                        </label>
                                        <select class="form-control select2bs4" name="block" id="block"
                                            style="width: 100%;" onchange="boxvalue();">
                                            <option selected="selected" value="">Choose</option>
                                            <option value="A" {{ $plotdata->block == 'A' ? 'selected' : '' }}>A
                                            </option>
                                            <option value="B" {{ $plotdata->block == 'B' ? 'selected' : '' }}>B
                                            </option>
                                            <option value="C" {{ $plotdata->block == 'C' ? 'selected' : '' }}>C
                                            </option>
                                            <option value="D" {{ $plotdata->block == 'D' ? 'selected' : '' }}>D
                                            </option>
                                        </select>
                                        <span style="color: red;  display: none;" id="block1">Enter Block
                                            Details</span>

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">Size In Sq Yard</label>
                                        <input type="text" class="form-control" name="size_in_yard"
                                            value="{{ $plotdata->size_in_yard }} " id="basic-default-company"
                                            placeholder="Size In Sq Feet">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="Dimensions">Dimensions</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="Dimensions" name="dimensions"
                                                value="{{ $plotdata->dimension }}" class="form-control"
                                                placeholder="Dimensions">

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="Sector">Sector</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="Sector" name="sector"
                                                value="{{ $plotdata->sector }}" class="form-control" placeholder="Sector">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="Plot_No">Plot No</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="Plot_No" name="plot_no"
                                                value="{{ $plotdata->plot_no }}" class="form-control" placeholder="Plot_No" onkeydown="checkval();">

                                        </div>
                                        <span style="color: red;  display: none;" id="plot1">Enter Plot No</span>

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="size">Size In Marla/Kanal</label>
                                        <input type="text" id="basic-default-phone" name="size_marla"
                                            value="{{ $plotdata->size_in_marla_kanal }}" class="form-control phone-mask"
                                            placeholder="Enter Your Required Size">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="Facing">Facing</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="Facing" name="facing"
                                                value="{{ $plotdata->facing }}" class="form-control" placeholder="Facing">

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="type">Type</label>
                                        <select class="form-control select2bs4" id="type" name="type" style="width: 100%;"
                                            required>
                                            <option selected="selected">Choose</option>
                                            <option value="Residential"
                                                {{ $plotdata->type == 'Residential' ? 'selected' : '' }}>Residential
                                            </option>
                                            <option value="Commercial"
                                                {{ $plotdata->type == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                                            <option value="Vip Farm House"
                                                {{ $plotdata->type == 'Vip Farm House' ? 'selected' : '' }}>Vip Farm House
                                            </option>
                                            <option value="Villas" {{ $plotdata->type == 'Villas' ? 'selected' : '' }}>
                                                Villas</option>
                                        </select>
                                        <span style="color: red;  display: none;" id="type1">Select Type </span>
                                    </div>
                                </div>
                            </div>



                            <button type="submit" id="sdkjsdjdsj" onclick="for_submit();" class="btn btn-primary">update</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        function checkval() {
            $("#Plot_No").on("keydown", function(e) {
                var inputValue = $(this).val();

                if (e.key === "Backspace" && inputValue.length <= 2) {
                    e.preventDefault();
                }
            });
        }


        function boxvalue() {
            var selectValue = $('#block').val();
            var newvalue = selectValue + '-';
            $('#Plot_No').val(newvalue);
        }



        function for_submit() {

            var f = 0;
            var block = $('#block').val();
            var plot_no = $('#Plot_No').val();
            var type = $('#type').val();


            $('#Plot_No').on('change', function() {
                var plotNo = $(this).val();

                $.ajax({
                    url: "{{ route('checkplotvalue') }}",
                    method: "POST",
                    data: {
                        plot_no: plotNo,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.exists) {
                            $('#plot1').text('Plot No already exists').show();

                        } else {

                            $('#plot1').hide();
                        }
                    },
                    error: function() {



                    }
                });
            });




            if (block == '') {
                $('#block').css('border-color', 'red');
                $('#block1').css('display', 'block');
                f = 1;
            }

            if (plot_no == '') {
                $('#Plot_No').css('border-color', 'red');
                $('#plot1').css('display', 'block');
                f = 1;
            }
            if (type == '') {
                $('#type').css('border-color', 'red');
                $('#type1').css('display', 'block');
                f = 1;
            }


            if (f == 0) {
                $('#foamsubmit').submit();
            }

        }


        $('#Plot_No').on('change', function() {
            var plotNo = $(this).val();


            $.ajax({
                url: "{{ route('checkplotvalue') }}",
                method: "POST",
                data: {
                    plot_no: plotNo,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.exists) {
                        $('#plot1').text('Plot No already exists').show();
                        $("#sdkjsdjdsj").prop("disabled", true);



                    } else {

                        $('#plot1').hide();

                        $("#sdkjsdjdsj").prop("disabled", false);

                    }
                }

            });
        });
    </script>
@endsection
