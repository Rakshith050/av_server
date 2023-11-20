<?php session()->put('curnav', 'schools'); ?>

@include('inc_admin.header')


<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc_admin.navbar')

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc_admin.topbar')

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg justify-content-between">
                                {{-- <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a> --}}
                                {{-- <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">Add Subject</h4> --}}
                                <h2 class="fw-400 font-lg d-block">Add <b> School</b> </h2>
                                <div class="float-right">
                                    <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                        <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark"
                                                href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/schools">&nbsp;
                                            Schools</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active fw-500 text-black">&nbsp; Add School</li>
                                    </ol>
                                </div>
                            </div>
                            <div>

                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">


                                <form method="post" action="/admin/add_school_elements" enctype="multipart/form-data"
                                    autocomplete="OFF">
                                @csrf


                                    <div class="card-body row">
                                        <!-- BANK DETAILS -->

                                        <div class="col-md-4 col-sm-6">
                                            <div
                                                class="form-group ">
                                                <label class="mont-font fw-600 font-xsss">Name of the School</label>
                                                <input type="text" id="bank_name" name="school_name"
                                                    class="form-control "
                                                    placeholder="Enter Name of the School">

                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div
                                                class="form-group ">
                                                <label class="mont-font fw-600 font-xsss">Choose School Photo(required)<span>*</span></label><br>
                                                <input class="form-control " type="file"
                                                    id="maxStu" name="school_image" required>

                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div
                                                class="form-group ">
                                                <label class="mont-font fw-600 font-xsss">Contact No<span>*</span></label><br>
                                                <input class="form-control " type="text"
                                                    id="maxStu" name="school_contact_no"
                                                    placeholder="Enter Contact No" oninput="numberOnly(this.id);"
                                                    maxlength="10">

                                            </div>
                                        </div>



                                        <div class="col-md-3 col-sm-6">
                                            <div
                                                class="form-group ">
                                                <label class="mont-font fw-600 font-xsss">Location / Address<span>*</span></label><br>
                                                <input type="text" id="branch_address" name="school_address"
                                                    class=" form-control "
                                                    placeholder="Enter Location / Address">

                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div
                                                class="form-group ">

                                                <label class="mont-font fw-600 font-xsss">Pin Code<span>*</span></label><br>
                                                <input class="form-control " type="text"
                                                    name="school_pin_code" placeholder="Enter Pin Code"
                                                    oninput="numberOnly(this.id);" maxlength="6">

                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div
                                                class="form-group ">

                                                <label class="mont-font fw-600 font-xsss">City<span>*</span></label><br>
                                                <input class="form-control " type="text"
                                                    name="school_city" placeholder="Enter City">

                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                            <!-- text input -->
                                            <div
                                                class="form-group ">
                                                <label for="list2" class="">State<span>*</span></label>
                                                <br>



                                                <select name="school_state" class="form-control">
                                                    <option value="">-Select State-</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar
                                                        Islands</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli
                                                    </option>
                                                    <option value="Daman and Diu">Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div
                                                class="form-group ">
                                                <label class="mont-font fw-600 font-xsss">Year of Establishment<span>*</span></label><br>
                                                <input class="form-control " type="number"
                                                    min="1900" max="2025" step="1" value="2022"
                                                    name="year_of_establishment">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div
                                                class="form-group ">
                                                <label for="list2" class="mdl-textfield__label">Select School
                                                    Type<span>*</span></label>
                                                <br>
                                                <select name="school_type" class="form-control">
                                                    <option value="">-Select Type-</option>
                                                    <option value="1">Private</option>
                                                    <option value="2">Government</option>
                                                    <option value="3">Residential</option>
                                                    <option value="4">Boys</option>
                                                    <option value="5">Girls</option>
                                                    <option value="6">Co-ed</option>
                                                </select>
                                            </div>
                                        </div>






                                        <div class="col-md-6 col-sm-6">
                                            <div
                                                class="form-group ">
                                                <label class="mont-font fw-600 font-xsss">Student<strong> : </strong> Teacher<span>*</span></label><br>
                                                <input class="form-control " type="text"
                                                    name="student_teacher_ratio"
                                                    placeholder="Enter Student Teacher Ratio">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div
                                                class="form-group ">
                                                <label class="mont-font fw-600 font-xsss">Legal Name<span>*</span></label><br>
                                                <input class="form-control " type="text"
                                                    name="legal_name" placeholder="Enter Legal Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div
                                                class="form-group ">

                                                <label class="mont-font fw-600 font-xsss">Registered Office Address<span>*</span></label><br>
                                                <input class="form-control " type="text"
                                                    name="registered_address"
                                                    placeholder="Enter Registered Office Address">

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div
                                                class="form-group ">

                                                <label class="mont-font fw-600 font-xsss">Website Link<span>*</span></label>&nbsp;<input type="checkbox"
                                                    id="vehicle1" name="website_check" value="1" checked><br>
                                                <input class="form-control " type="text"
                                                    name="website_link" placeholder="Enter Website Link">

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div
                                                class="form-group ">
                                                <label for="list2" class="">Accredited
                                                    By<span>*</span></label>
                                                <br>
                                                <select name="accredited_by" class="form-control">
                                                    <option value="">-Select Type-</option>
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div
                                                class="form-group ">
                                                <label class="mont-font fw-600 font-xsss">Accreditation Number<span></span></label><br>
                                                <input class="form-control " type="text"
                                                    name="accreditation_no" placeholder="Enter Accreditation Number">
                                            </div>
                                        </div>





                                            <div class="col-md-6 col-md-6">
                                                <div
                                                    class="form-group ">
                                                    <label for="list2" class="">Recognized
                                                        By<span>*</span></label>
                                                    <select id="" class="form-control " name="recognized_by[]">
                                                            <option value="1">A</option>
                                                            <option value="2">B</option>
                                                            <option value="3">C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label for="list2"
                                                        class="">Category(required)<span>*</span></label>
                                                    <br>
                                                    <select name="category" class="form-control" required>
                                                        <option value="">-Select Type-</option>
                                                        <option value="1">Pre School</option>
                                                        <option value="2">Primary School</option>
                                                        <option value="3">Higher Secondary School</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-6">
                                                <div
                                                    class="form-group ">

                                                    <label class="mont-font fw-600 font-xsss">School Info<span>*</span></label>
                                                    <br>
                                                    <textarea class="form-control" id="oodles_editor1" rows="3" cols="60" name="school_info"></textarea>

                                                </div>
                                            </div>
                                    </div>


                                    <div class="card-box">
                                        <div class="accordion" id="accordionExample">
                                            <div class="card-head">
                                                <h4 class="font-xs mont-font fw-600">Admission & Fees</h4>
                                            </div>
                                        </div>
                                        <div class="card-body row">


                                            <div class="col-md-12 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Admission & Fees<span>*</span></label>
                                                    <br>
                                                    <textarea class="form-control" id="oodles_editor2" rows="1" cols="10" name="admission_fee"></textarea>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">Admission & Procedure</h4>

                                        </div>
                                        <div class="card-body row">


                                            <div class="col-md-12 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Application Mode<span>*</span></label><br>

                                                    <select name="mode_of_admission" class="form-control">
                                                        <option value="" readonly>-Select Type-</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Offline</option>
                                                        <option value="3">Both</option>
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="col-md-12 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">How to apply?<span>*</span></label>
                                                    <br>
                                                    <textarea class="form-control" id="oodles_editor3" rows="2" cols="60" name="how_to_apply"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card-box">
                                        <div class="accordion" id="accordionExample">
                                            <div class="card-head">
                                                <h4 class="font-xs mont-font fw-600">Scholastic</h4>
                                            </div>
                                        </div>
                                        <div class="card-body row">

                                            <div class="col-md-12 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Scholastic<span>*</span></label><br>

                                                    <select name="scholastic" class="form-control">
                                                        <option value="" readonly>-Select Type-</option>
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Scholastic<span>*</span></label>
                                                    <br>
                                                    <textarea class="form-control" id="oodles_editor4" rows="1" cols="12" name="scholastic_info"></textarea>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="card-box">
                                        <div class="accordion" id="accordionExample">
                                            <div class="card-head">

                                                <h4 class="font-xs mont-font fw-600">Co-Scholastic</h4>

                                            </div>
                                        </div>
                                        <div class="card-body row">


                                            <div class="col-md-12 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Co-scholstic<span>*</span></label><br>

                                                    <select name="coscholastic" class="form-control">
                                                        <option value="" readonly>-Select Type-</option>
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Co-scholstic<span>*</span></label>
                                                    <br>
                                                    <textarea class="form-control" id="oodles_editor5" rows="1" cols="13" name="coscholastic_info"></textarea>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="card-box">
                                        <div class="accordion" id="accordionExample">
                                            <div class="card-head">

                                                <h4 class="font-xs mont-font fw-600">Achievements</h4>

                                            </div>
                                        </div>
                                        <div class="card-body row">


                                            <div class="col-md-12 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Achievements<span>*</span></label>
                                                    <br>
                                                    <textarea class="form-control" id="oodles_editor6" rows="1" cols="13" name="achievement_info"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <div
                                                    class=" ">

                                                    <label class="mont-font fw-600 font-xsss">Insert Multiple Images </label>
                                                    <br>

                                                    <input class="form-control " type="file"
                                                        name="achievement_images[]" multiple>


                                                </div>
                                            </div>


                                        </div>
                                    </div>








                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">Facilites & Infrastructure</h4>

                                        </div>
                                        <div class="card-body row">
                                            <div class="col-md-12 col-sm-12">
                                                <div
                                                    class="form-group ">
                                                    <label for="" class="">Facilities<span>&nbsp;(Select
                                                            multiple which ever is applicable)*</span></label>
                                                    <br>
                                                    <select name="facility[]"
                                                        class="form-control select2 js-example-placeholder-multiple "
                                                        >
                                                        <option value="" disabled="disabled">-Select Type-
                                                        </option>
                                                        <option value="1">Library</option>
                                                        <option value="2">Medical</option>
                                                        <option value="3">Hostel</option>
                                                        <option value="4">Medical Ventilated</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Facilites<span>*</span></label><br>

                                                    <textarea class="form-control" id="oodles_editor7" rows="2" cols="60" name="facility_info"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div
                                                    class=" ">

                                                    <label class="mont-font fw-600 font-xsss">Insert Multiple Images </label>
                                                    <br>

                                                    <input class="form-control " type="file"
                                                        name="facility_images[]" multiple>


                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">Extra Curricular</h4>
                                        </div>
                                        <div class="card-body row">

                                            <div class="col-md-12 col-sm-12">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Extra Curricular<span>*</span></label><br>

                                                    <textarea class="form-control" id="oodles_editor8" rows="2" cols="60" name="extra_curricular_info"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div
                                                    class=" ">

                                                    <label class="mont-font fw-600 font-xsss">Insert Multiple Images </label>
                                                    <br>

                                                    <input class="form-control " type="file"
                                                        name="extra_curricular_images[]" multiple>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">Academics</h4>
                                        </div>
                                        <div class="card-body row">

                                            <div class="col-md-12 col-sm-12">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Academics<span>*</span></label><br>

                                                    <textarea class="form-control" id="oodles_editor9" rows="2" cols="60" name="academic_info"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div
                                                    class=" ">

                                                    <label class="mont-font fw-600 font-xsss">Insert Multiple Images </label>
                                                    <br>

                                                    <input class="form-control " type="file"
                                                        name="academic_images[]" multiple>


                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">Faculty</h4>

                                        </div>
                                        <div class="card-body row">

                                            <div class="col-md-12 col-sm-12">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Faculty<span>*</span></label>
                                                    <br>
                                                    <textarea class="form-control" id="oodles_editor10" rows="4" cols="60" name="faculty_info"></textarea>

                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div
                                                    class=" ">

                                                    <label class="mont-font fw-600 font-xsss">Insert Multiple Images </label>
                                                    <br>

                                                    <input class="form-control " type="file"
                                                        name="faculty_images[]" multiple>



                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">Reviews</h4>

                                        </div>

                                        <div class="card-body row">

                                            <div>Select following parameters for visibility.</div>
                                            <div class="row form-group multiple-form-group input-group">

                                                </br>

                                                <div class="col-md-2">
                                                    <br>
                                                    <input type="checkbox" name="review_academic" value="1">
                                                    <label class="mont-font fw-600 font-xsss">Academic</label>
                                                </div>

                                                <div class="col-md-2">
                                                    <br>
                                                    <input type="checkbox" name="review_faculty" value="1">
                                                    <label class="mont-font fw-600 font-xsss">Faculty </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <br>
                                                    <input type="checkbox" name="review_infra" value="1">
                                                    <label class="mont-font fw-600 font-xsss">Infrastructure</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <br>
                                                    <input type="checkbox" name="review_nonacademic" value="1">
                                                    <label class="mont-font fw-600 font-xsss">Non Academic Activities</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <br>
                                                    <input type="checkbox" name="review_school" value="1">
                                                    <label class="mont-font fw-600 font-xsss">School</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">Gallery</h4>

                                        </div>
                                        <div class="card-body row">

                                            <div class="col-md-12 col-sm-12">
                                                <div
                                                    class=" ">

                                                    <label class="mont-font fw-600 font-xsss">Insert Multiple Images </label>
                                                    <br>

                                                    <input class="form-control " type="file"
                                                        name="gallery[]" multiple>

                                                    <!-- <span class="input-group-btn"><button type="button" class="btn btn-default btn-add">+
                                                </button></span> -->

                                                </div>
                                            </div>


                                        </div>
                                    </div>




                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">FAQ's</h4>

                                        </div>
                                        <div class="card-body row">

                                            <div class="col-md-6 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Question</label>

                                                    <div class="form-group input-group">
                                                        <input type="text" name="question_faq[]" multiple
                                                            class="form-control" placeholder="Enter question">
                                                        <span class="input-group-btn"><button type="button"
                                                                class="btn btn-default btn-add">-
                                                            </button></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Answers</label>

                                                    <div class="form-group input-group">
                                                        <input type="text" name="answer_faq[]" multiple
                                                            class="form-control" placeholder="Enter answer">
                                                        <span class="input-group-btn"><button type="button"
                                                                class="btn btn-default btn-add">+
                                                            </button></span>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>



                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">School Documents</h4>

                                        </div>
                                        <div class="card-body row">
                                            <div class="col-md-6 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss"> Upload MOU<span>*</span></label><br />
                                                    <input class="form-control " type="file"
                                                        id="maxStu" name="mou">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss"> Upload NDA<span>*</span></label><br />
                                                    <input class="form-control " type="file"
                                                        id="maxStu" name="nda">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Upload Declaration Form<span>*</span></label><br />
                                                    <input class="form-control " type="file"
                                                        id="maxStu" name="declaration_form">
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Upload Other Documents<span>*</span></label><br />
                                                    <input class="form-control " type="file"
                                                        id="maxStu" name="other_document">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">Personal Information of Authorized Signatory</h4>

                                        </div>
                                        <div class="card-body row">

                                            <div class="col-md-4 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Name<span>*</span></label><br>
                                                    <input class="form-control " type="text"
                                                        name="auth_name" placeholder="Enter Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Designation<span>*</span></label><br>
                                                    <input class="form-control " type="text"
                                                        name="auth_designation" placeholder="Enter Designation">
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Aadhar Number<span>*</span> </label><br>
                                                    <input class="form-control " type="number"
                                                        name="auth_aadhar_no" placeholder="Enter Aadhar Number"
                                                        oninput="numberOnly(this.id);" maxlength="12">
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Email ID<span>*</span></label><br>
                                                    <input class="form-control " type="email"
                                                        id="txtPwd" name="auth_email" placeholder="Enter Email ID"
                                                        onkeyup="checkemail(this.value)" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Password<span>*</span></label><br>
                                                    <input class="form-control " type="password"
                                                        id="txtPwd" name="password" placeholder="Enter Password"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Contact Number<span>*</span></label><br>
                                                    <input class="form-control "
                                                        type="number"id="auth_contact_number"
                                                        name="auth_contact_number" placeholder="Enter Contact Number"
                                                        required oninput="numberOnly(this.id);" maxlength="10"
                                                        onkeyup="checkphone(this.value)">
                                                </div>
                                            </div>
                                            <p id="phone_email_error" class="text-left pull-left"></p>
                                            <p id="check_email_error" class="text-left pull-left"></p>

                                            <div class="col-md-4 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">First Contact Person(Name)<span>*</span></label><br>
                                                    <input class="form-control " type="text"
                                                        name="auth_contact_person"
                                                        placeholder="Enter First Contact Person Name">


                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Contact Person Designation<span>*</span></label><br>
                                                    <input class="form-control " type="text"
                                                        name="contact_person_designation"
                                                        placeholder="Enter Contact Person Designation">
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Contact Person Details<span>*</span></label><br>
                                                    <input class="form-control " type="text"
                                                        name="contact_person_details"
                                                        placeholder="Contact Person Details">
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">Authorized Signatory Documents</h4>

                                        </div>
                                        <div class="card-body row">

                                            <div class="col-md-6 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Upload Aadhar Copy of Authorized
                                                        Signatory<span>*</span></label><br>
                                                    <input class="form-control " type="file"
                                                        id="maxStu" name="signatory_aadhar">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Upload Image of Authorized Signatory
                                                        <span>*</span></label><br>
                                                    <input class="form-control " type="file"
                                                        id="maxStu" name="auth_image">
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">Bank Details of School</h4>

                                        </div>
                                        <div class="card-body row">


                                            <div class="col-md-4 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Bank Name<span>*</span></label><br>
                                                    <input class="form-control " type="text"
                                                        name="bank_name" placeholder="Enter Bank Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Branch Name<span>*</span></label><br>
                                                    <input class="form-control " type="text"
                                                        name="branch_name" placeholder="Enter Branch Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">IFSC<span>*</span></label><br>
                                                    <input class="form-control " type="text"
                                                        name="ifsc" placeholder="Enter IFSC Code">
                                                </div>
                                            </div>


                                            <div class="col-md-3 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Account Number<span>*</span></label><br>
                                                    <input class="form-control " type="number"
                                                        name="account_no" id="account_no"
                                                        placeholder="Enter Account Number">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Re-Account Number<span>*</span><span
                                                            id='message'></label><br>
                                                    <input class="form-control " type="number"
                                                        name="re_account_no" id="re_account_no"
                                                        placeholder="Enter the Account Number to Verify">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Name of Institute as per Bank Records<span>*</span><span
                                                            id='message'></label><br>
                                                    <input class="form-control " type="text"
                                                        name="school_name_as_per_bank" id=""
                                                        placeholder="Enter the Name of Institute as per Bank Records">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Upload Cancelled Cheque/ Bank statement<span>*</span><span
                                                            id='message'></label><br>
                                                    <input class="form-control " type="file"
                                                        name="cancelled_cheque" id=""
                                                        placeholder="Enter the Upload Cancelled Cheque/ Bank Statement">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-box">
                                        <div class="card-head">
                                            <h4 class="font-xs mont-font fw-600">Billing Detail</h4>

                                        </div>
                                        <div class="card-body row">


                                            <div class="col-md-3 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Package
                                                        Name<span><label class="mont-font fw-600 font-xsss">*(Renewal<span></span></label>&nbsp;<input
                                                                type="checkbox" id="vehicle1" name="package_renewal"
                                                                value="1">)</span></label><br>
                                                    <input class="form-control " type="text"
                                                        name="package_name" placeholder="Enter Package Name">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Cost<span>*</span></label><br>
                                                    <input class="form-control " type="number"
                                                        name="package_cost" placeholder="Enter Package Cost">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Start Date<span>*</span></label><br>
                                                    <input class="form-control " type="date"
                                                        name="package_start_date">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">End Date<span>*</span></label><br>
                                                    <input class="form-control " type="date"
                                                        name="package_end_date">
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-6">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Description<span>*</span></label>
                                                    <br>
                                                    <textarea class="form-control" id="oodles_editor11" rows="4" cols="100" name="package_info"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4">
                                                <div
                                                    class="form-group ">
                                                    <label for="list2" class="">Select Number of
                                                        Year<span>*</span></label>
                                                    <br>
                                                    <select name="package_validity" class="form-control">
                                                        <option value="">-Select Year-</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Add-ons<span>*</span><span id='message'></label><br>
                                                    <input class="form-control " type="text"
                                                        name="package_other_detail" id="package_other_detail"
                                                        placeholder="Additional service details">
                                                </div>
                                            </div>


                                            <div class="col-md-4 col-sm-4">
                                                <div
                                                    class="form-group ">
                                                    <label class="mont-font fw-600 font-xsss">Upload Document / Invoice <span>*</span></label><br>
                                                    <input class="form-control " type="file"
                                                        id="maxStu" name="package_invoice">
                                                </div>
                                            </div>


                                        </div>
                                    </div>


                            </div>




                            <div class="col-lg-12 ">
                                <button type="submit"  class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0" style="float: right;"
                                    id="submit">Save</button>
                            </div>

                            </form>









                        </div>
                    </div>

                </div>
            </div>



        </div>


    </div>

    </div>

    @include('inc_admin.footer')



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script>
						jQuery($ => {
							$('.action').prop('disabled', true);

							let $checkBox = $('.check').on('change', e => {
								var $select = $(e.target).closest('.form-group').find('.action');
								$select.prop('disabled', e.target.value !== 'Yes' && e.target.checked);
							});
						});
						jQuery($ => {
							$('.action1').prop('disabled', true);

							let $checkBox = $('.check').on('change', e => {
								var $select = $(e.target).closest('.form-group').find('.action1');
								$select.prop('disabled', e.target.value !== 'No' && e.target.checked);
							});
						});

						$('#d-checkbox').click(function() {
							if ($(this).prop('checked') == false) $('#color').attr("disabled", "disabled");
							else $('#color').removeAttr("disabled");
						});
					</script>
					<script>
						$('#e-checkbox').click(function() {
							if ($(this).prop('checked') == false) {
								$('#color1').attr("disabled", "disabled");
							} else {
								$('#color1').removeAttr("disabled");
							}
						});
					</script> -->
<!-- end page content -->
<script>
	// function toggle(ele) {
	//     var tgl_div = document.getElementById('tgl_div');
	//     if (tgl_div.style.display == 'block') {
	//         tgl_div.style.display = 'none';

	//         document.getElementById(ele.id).value = 'Show DIV';
	//     }
	//     else {
	//         tgl_div.style.display = 'block';
	//         document.getElementById(ele.id).value = 'Hide DIV';
	//     }
	// }
</script>

<script>
	// var ele  = document.getElementById("ele");
	// var content = document.getElementById("tgl_div");

	// toggle.addEventListener("click", function() {
	//   tgl_div.style.display = (tgl_div.dataset.toggled ^= 1) ? "block" : "none";
	// });
</script>
<script>
	// $('.myCheckbox').on('click',function(){

	// if ($('.myCheckbox').is(':checked'))
	// {
	//   $("div#tgl_div").show();
	//   $("div#tgl_div ").prop('disabled', false);

	// }
	// else {

	//    $("div#tgl_div").hide();
	//    $("div#tgl_div ").prop('disabled', true);
	// }
	// });
</script>
<!-- script to search pin code -->
<script type="text/javascript">
	function find_pincode_c(pin) {
		if (pin.length == 6) {
			$.ajax({
				url: '/student/check_pincode',
				type: 'POST',
				data: {
					pin
				},

				success: function(res) {
					var detail = res.split(',');
					document.getElementById("comm_block").value = detail[0];
					document.getElementById("comm_state").value = detail[1];
					var area_detail = detail[2].split('*');

					if (detail[3] == "0") {
						document.getElementById("from_nonpincode").innerHTML = "Non Serviceable Pincode";
					} else {
						document.getElementById("from_nonpincode").innerHTML = "";
					}


					document.getElementById("comm_village").innerHTML = "";
					for (const area_val of area_detail) {
						document.getElementById("comm_village").innerHTML += "<option value='" + area_val + "'>" + area_val + "</option>";
					}

				}

			});
		} else {
			document.getElementById("comm_block").value = "";
			document.getElementById("comm_state").value = "";
		}
	}
</script>

<script type="text/javascript">
	function find_pincode(pin) {
		if (pin.length == 6) {
			$.ajax({
				url: '/student/check_pincode',
				type: 'POST',
				data: {
					pin
				},

				success: function(res) {
					var detail = res.split(',');
					document.getElementById("perm_block").value = detail[0];
					document.getElementById("perm_state").value = detail[1];
					var area_detail = detail[2].split('*');

					if (detail[3] == "0") {
						document.getElementById("from_nonpincode").innerHTML = "Non Serviceable Pincode";
					} else {
						document.getElementById("from_nonpincode").innerHTML = "";
					}


					document.getElementById("perm_village").innerHTML = "";
					for (const area_val of area_detail) {
						document.getElementById("perm_village").innerHTML += "<option value='" + area_val + "'>" + area_val + "</option>";
					}

				}

			});
		} else {
			document.getElementById("perm_block").value = "";
			document.getElementById("perm_state").value = "";
		}
	}
</script>
<script>
	$("#form").submit(function() {
		if ($("#account_no").val() != $("#re_account_no").val()) {
			alert("Account number should be same!");
			return false;
		}
	})

	$('#re_account_no').on('keyup', function() {
		if ($('#account_no').val() == $('#re_account_no').val()) {
			$('#message').html('&#x2714').css('color', 'green');
		} else
			$('#message').html('&#x2718').css('color', 'red');
	});



	function numberOnly(id) {
		let input = document.getElementById(id);
		let value = input.value;
		if (value.length > input.maxLength) {
			input.value = value.substring(0, input.maxLength);
		}

	}

	$(function() {
		$('.admission_toggle').change(function() {
			if ($(this).is(':checked')) {
				document.getElementById("course_span").style.display = "block";
				$("div#course_span").show();
				$("div#course_span").children().prop('disabled', false);

			} else {

				$("div#course_span").hide();
				$("div#course_span").children().prop('disabled', true);
			}
		});
	});

</script>









<script>
	(function($) {
		$(function() {

			var addFormGroup = function(event) {
				event.preventDefault();

				var $formGroup = $(this).closest('.form-group');
				var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
				var $formGroupClone = $formGroup.clone();

				$(this)
					.toggleClass('btn-success btn-add btn-danger btn-remove')
					.html('–');

				$formGroupClone.find('input').val('');
				$formGroupClone.find('.concept').text('Phone');
				$formGroupClone.insertAfter($formGroup);

				var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
				if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
					$lastFormGroupLast.find('.btn-add').attr('disabled', true);
				}
			};

			var removeFormGroup = function(event) {
				event.preventDefault();

				var $formGroup = $(this).closest('.form-group');
				var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

				var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
				if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
					$lastFormGroupLast.find('.btn-add').attr('disabled', false);
				}

				$formGroup.remove();
			};

			var selectFormGroup = function(event) {
				event.preventDefault();

				var $selectGroup = $(this).closest('.input-group-select');
				var param = $(this).attr("href").replace("#", "");
				var concept = $(this).text();

				$selectGroup.find('.concept').text(concept);
				$selectGroup.find('.input-group-select-val').val(param);

			}

			var countFormGroup = function($form) {
				return $form.find('.form-group').length;
			};

			$(document).on('click', '.btn-add', addFormGroup);
			$(document).on('click', '.btn-remove', removeFormGroup);
			$(document).on('click', '.dropdown-menu a', selectFormGroup);

		});
	})(jQuery);

	$(document).ready(function() {

		var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
			removeItemButton: true,
			maxItemCount: 5,
			searchResultLimit: 5,
			renderChoiceLimit: 5
		});


	});
</script>


<!-- <textarea id="oodles_editor" name="oodles_editor">Oodles</textarea> -->
<script>
	CKEDITOR.replace('oodles_editor1', {
		extraPlugins: 'mathjax',
		mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_HTML',
		height: 150

	});

	if (CKEDITOR.env.ie && CKEDITOR.env.version == 8) {
		document.getElementById('ie8-warning').className = 'tip alert';
	}

	function domChanged() {
		renderMathInElement(document.body);
	}
</script>
<script>
	CKEDITOR.replace('oodles_editor2', {
		extraPlugins: 'mathjax',
		mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_HTML',
		height: 150
	});

	if (CKEDITOR.env.ie && CKEDITOR.env.version == 8) {
		document.getElementById('ie8-warning').className = 'tip alert';
	}

	function domChanged() {
		renderMathInElement(document.body);
	}
</script>
<script>
	CKEDITOR.replace('oodles_editor3', {
		extraPlugins: 'mathjax',
		mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_HTML',
		height: 150
	});

	if (CKEDITOR.env.ie && CKEDITOR.env.version == 8) {
		document.getElementById('ie8-warning').className = 'tip alert';
	}

	function domChanged() {
		renderMathInElement(document.body);
	}
</script>
<script>
	CKEDITOR.replace('oodles_editor4', {
		extraPlugins: 'mathjax',
		mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_HTML',
		height: 150
	});

	if (CKEDITOR.env.ie && CKEDITOR.env.version == 8) {
		document.getElementById('ie8-warning').className = 'tip alert';
	}

	function domChanged() {
		renderMathInElement(document.body);
	}
</script>
<script>
	CKEDITOR.replace('oodles_editor5', {
		extraPlugins: 'mathjax',
		mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_HTML',
		height: 150
	});

	if (CKEDITOR.env.ie && CKEDITOR.env.version == 8) {
		document.getElementById('ie8-warning').className = 'tip alert';
	}

	function domChanged() {
		renderMathInElement(document.body);
	}
</script>
<script>
	CKEDITOR.replace('oodles_editor6', {
		extraPlugins: 'mathjax',
		mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_HTML',
		height: 150
	});

	if (CKEDITOR.env.ie && CKEDITOR.env.version == 8) {
		document.getElementById('ie8-warning').className = 'tip alert';
	}

	function domChanged() {
		renderMathInElement(document.body);
	}
</script>
<script>
	CKEDITOR.replace('oodles_editor7', {
		extraPlugins: 'mathjax',
		mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_HTML',
		height: 150
	});

	if (CKEDITOR.env.ie && CKEDITOR.env.version == 8) {
		document.getElementById('ie8-warning').className = 'tip alert';
	}

	function domChanged() {
		renderMathInElement(document.body);
	}
</script>
<script>
	CKEDITOR.replace('oodles_editor8', {
		extraPlugins: 'mathjax',
		mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_HTML',
		height: 150
	});

	if (CKEDITOR.env.ie && CKEDITOR.env.version == 8) {
		document.getElementById('ie8-warning').className = 'tip alert';
	}

	function domChanged() {
		renderMathInElement(document.body);
	}
</script>
<script>
	CKEDITOR.replace('oodles_editor9', {
		extraPlugins: 'mathjax',
		mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_HTML',
		height: 150
	});

	if (CKEDITOR.env.ie && CKEDITOR.env.version == 8) {
		document.getElementById('ie8-warning').className = 'tip alert';
	}

	function domChanged() {
		renderMathInElement(document.body);
	}
</script>
<script>
	CKEDITOR.replace('oodles_editor10', {
		extraPlugins: 'mathjax',
		mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_HTML',
		height: 150
	});

	if (CKEDITOR.env.ie && CKEDITOR.env.version == 8) {
		document.getElementById('ie8-warning').className = 'tip alert';
	}

	function domChanged() {
		renderMathInElement(document.body);
	}
</script>
<script>
	CKEDITOR.replace('oodles_editor11', {
		extraPlugins: 'mathjax',
		mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_HTML',
		height: 150
	});

	if (CKEDITOR.env.ie && CKEDITOR.env.version == 8) {
		document.getElementById('ie8-warning').className = 'tip alert';
	}

	function domChanged() {
		renderMathInElement(document.body);
	}
</script>



<script>
// 	$(document).ready(function() {
// 		$('.select2').select2({
// 			closeOnSelect: false,
// 			allowClear: false
// 		});
// 	});

// 	$('select').select2({
//   templateSelection: function (data) {
//     if (data.id === '') {
//       return 'Custom styled placeholder text';
//     }

//     return data.text;
//   }
// });


// $(".js-example-placeholder-multiple").select2({
//     placeholder: "Select Multiple"
// });
</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
    <!--select2-->

<script>
	function checkemail(email) {

// var valid = 0;
// if (email.length == 10) {


	$.ajax({
				url  : '/student/check_email_live',
				type : 'POST',
				data : {email},
				success : function(res)
				{
					if(res == "1"){
						// valid = 1;
						document.getElementById("check_email_error").innerHTML = "";


					}else{
						document.getElementById("check_email_error").innerHTML = "<span style='color:red;'>Email Already Available</span>";
					}
				}

			});


//   }
}
	function checkphone(phn) {

// var valid = 0;
// if (email.length == 10) {
	if (phn.length == 10) {
// alert (phone);
		$.ajax({
							url  : '/student/check_phone_live',
							type : 'POST',
							data : {phn},
							success : function(res)
							{

								if(res == "1"){
									// valid = 1;
						document.getElementById("phone_email_error").innerHTML = "";


					}else{
						document.getElementById("phone_email_error").innerHTML = "<span style='color:red;'>Phone Already Available</span>";
					}
				}

			});


//   }
} else{
			document.getElementById("phone_email_error").innerHTML ="";
			document.getElementById("countdown").innerHTML=" ";

}
		  }
</script>

</body>

</html>
