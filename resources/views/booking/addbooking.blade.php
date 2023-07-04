@extends('layouts.app')
@section('container')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Plot Info</strong></li>
                            <li id="personal"><strong>Customer Type</strong></li>
                            <li id="payment"><strong> Customers And NomiNee Details</strong></li>
                            <li id="confirm"><strong>Add Nomi</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="booking_data">Booking Data</label>
                                        <input type="date" name="booking_data">
                                        <label for="plot_charges">Plot Charges</label>
                                        <input type="text" name="plot_charges">
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="defaultSelect" class="form-label">Default select</label>
                                            <select id="defaultSelect" class="form-select">
                                                <option>Default select</option>
                                                <option value="1">two</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Extra Charges Type</label>
                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                                checked="" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnradio1">Percentage</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnradio2">Rupees</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="defaultInput" class="form-label">Extra charges</label>
                                            <input id="defaultInput" class="form-control" type="text" placeholder="0:0">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="defaultInput" class="form-label">Charges Amount</label>
                                            <input id="defaultInput" class="form-control" type="text" placeholder="0:0">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="defaultInput" class="form-label">Total charges</label>
                                            <input id="defaultInput" class="form-control" type="text" placeholder="0:0">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Discount Charges Type</label>
                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                                checked="" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnradio1">Percentage</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnradio2">Rupees</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="defaultInput" class="form-label">Discount charges</label>
                                            <input id="defaultInput" class="form-control" type="text"
                                                placeholder="0:0">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="defaultInput" class="form-label">Discount Amount</label>
                                            <input id="defaultInput" class="form-control" type="text"
                                                placeholder="0:0">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="defaultInput" class="form-label">Total Price Plot</label>
                                            <input id="defaultInput" class="form-control" type="text"
                                                placeholder="0:0">
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">

                                    <h2 class="fs-title">Customer Type:</h2>
                                    <label for="">Select Customer Type</label>
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                            checked="" autocomplete="off">
                                        <label class="btn btn-outline-primary" for="btnradio1">Single Customer</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary" for="btnradio2">Multi-Customer</label>

                                    </div>




                                </div>





                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Customer And Nominee Details</h2>
                                        <label for="">Single Customers can have multiple Nominee</label>

                                    </div>
                                    <br>
                                    <div>
                                        <button type="button" class="btn btn-primary">
                                            <span class="tf-icons bx bx-pie-chart-alt"></span>Add Customer
                                        </button>
                                    </div>
                                   


                                </div>
                                <br>
                                <div class="row">
                                    <h2 class="fs-title">First Customer</h2>
                                    <div class="demo-inline-spacing">
                                        <button type="button" class="btn btn-outline-primary">
                                          <span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp; Primary
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary">
                                          <span class="tf-icons bx bx-bell"></span>&nbsp; Secondary
                                        </button>
                                      </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">

                                    </div>
                                    <div class="col-6">
                                        
                                    </div>
                                </div>


                            </div> <input type="button" name="next" class="next action-button" value="Submit" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function() {
                return false;
            })

        });
    </script>
@endsection
