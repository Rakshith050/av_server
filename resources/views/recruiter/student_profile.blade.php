@include("inc_recruiter.header")

@php
    use App\Models\Quiz;
    use App\Models\Internship;
    use App\Models\Job_detail;
    use App\Models\Recruiter;
    use App\Models\Course;
@endphp

<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_recruiter.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_recruiter.topbar")

            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-3">

                    </div>
                    {{-- <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-3" style="background-image: url(https://via.placeholder.com/200x100.png);">
                        <div class="card-body p-lg-5 p-4 bg-black-08">
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-lg-12 pl-xl-5 pt-xl-5">
                                    <figure class="avatar ml-0 mb-4 position-relative w100 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                </div>
                                <div class="col-xl-4 col-lg-6 pl-xl-5 pb-xl-5 pb-3">

                                    <h4 class="fw-700 font-md text-white mt-3 mb-1">Hendrix Stamp <i class="ti-check font-xssss btn-round-xs bg-success text-white ml-1"></i></h4>
                                    <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-0">support@gmail.com</span>
                                    <span class="dot ml-2 mr-2 d-inline-block btn-round-xss bg-grey"></span>
                                    <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Desinger</span>
                                    <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">PHP</span>
                                    <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">HTML5</span>
                                    <ul class="memberlist mt-3 mb-2 ml-0">
                                        <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 text-center font-xssss ls-3">+2</a></li>

                                    </ul>
                                </div>
                                <div class="col-xl-4 col-lg-6 d-block">
                                    <h2 class="display5-size text-white fw-700 lh-1 mr-3">98 <i class="feather-arrow-up-right text-success font-xl"></i></h2>
                                    <h4 class="text-white font-sm fw-600 mt-0 lh-3">Your learning level points! </h4>

                                </div>
                                <div class="col-xl-3 mt-4">
                                    <div id="chart-users-blue3" class="mt-2"></div>
                                </div>
                            </div>



                        </div>
                    </div> --}}
                    <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                        <ul class="nav nav-tabs xs-p-4 d-flex align-items-center justify-content-between product-info-tab border-bottom-0" id="pills-tab" role="tablist">
                            <li class="active list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 ml-sm-5 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase active" href="#navtabs0" data-toggle="tab">About</a></li>
                            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs1" data-toggle="tab">Courses</a></li>
                            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs8" data-toggle="tab">Certifications</a></li>
                            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs2" data-toggle="tab">Jobs</a></li>
                            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs5" data-toggle="tab">Internships</a></li>
                            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs4" data-toggle="tab">Quizzes</a></li>
                            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs3" data-toggle="tab">QnA</a></li>
                            {{-- <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs7" data-toggle="tab">Analytics</a></li> --}}
                            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 mr-sm-5 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs6" data-toggle="tab">Analytics</a></li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="navtabs0">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block">Student <b>Details</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        @if (empty($data['student_details']))
                                        <h4 class="fw-700 font-xsss mt-4">Profile details not added.</h4>
                                        @else
                                        <div class="col-lg-12 pt-2">
                                            <div class="item">
                                                <div class="card p-0 shadow-xs border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                    <div class="card-body pt-0">
                                                        <h3 class="fw-700 font-xss mt-3 lh-28 mt-0">Personal Details</h3>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">First Name as per Aadhar</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->f_name}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Last Name as per Aadhar</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->l_name}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Email Id</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->email}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Moblie Number</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->phone_no}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Whatsapp</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->whatsapp_no}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">DOB as Aadhar</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->dob}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Gender</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->gender}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Religion</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->religion}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Category</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->category}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Physically Challenged</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->physically}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Aadhar Number</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->aadhar}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Proof of Address</h4>

                                                                {{-- <span class="font-xss fw-500 ">{{$data['student_details']->email}}</span> --}}
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Proof of Identity</h4>

                                                                {{-- <span class="font-xss fw-500 ">{{$data['student_details']->email}}</span> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-2">
                                            <div class="item">
                                                <div class="card p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                    <div class="card-body pt-0">
                                                        <h3 class="fw-700 font-xss mt-3 lh-28 mt-0">Academic Details</h3>
                                                        @php
                                                            $student_academic=explode(',',$data['student_details']->academic_name);
                                                            $student_class=explode(',',$data['student_details']->class);
                                                            $student_cgpa=explode(',',$data['student_details']->cgpa);
                                                            $student_start_date=explode(',',$data['student_details']->start_date);
                                                            $student_end_date=explode(',',$data['student_details']->end_date);
                                                            $count=0
                                                        @endphp
                                                        @foreach ($student_academic as $academic)
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Academic Name</h4>
                                                                <span class="font-xss fw-500 ">{{$student_academic[$count]}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Class</h4>
                                                                <span class="font-xss fw-500 ">{{$student_class[$count]}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">% or cgpa</h4>
                                                                <span class="font-xss fw-500 ">{{$student_cgpa[$count]}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Start Date</h4>
                                                                <span class="font-xss fw-500 ">{{$student_start_date[$count]}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">End Date</h4>
                                                                <span class="font-xss fw-500 ">{{$student_end_date[$count]}}</span>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-2">
                                            <div class="item">
                                                <div class="card p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                    <div class="card-body pt-0">
                                                        <h3 class="fw-700 font-xss mt-3 lh-28 mt-0">Family Details</h3>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Number of Siblings</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->siblings}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Family Annual Income</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->annual_income}}</span>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <h3 class="fw-600 font-xss mt-3 lh-28 mt-0">Father/Guardian Detail's</h3>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Name as per Aadhar</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->father_name}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Aadhar Number</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->f_aadhar}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Mobile Number</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->f_phone}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Aadhar Card</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->father_aadhar_doc}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Email Id</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->f_email_id}}</span>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <h3 class="fw-600 font-xss mt-3 lh-28 mt-0">Mother/Guardian Detail's</h3>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Name as per Aadhar</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->mother_name}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Aadhar Number</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->m_aadhar}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Mobile Number</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->m_phone}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Aadhar Card</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->mother_aadhar_doc}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Email Id</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->m_email_id}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-2">
                                            <div class="item">
                                                <div class="card p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                    <div class="card-body pt-0">
                                                        <h3 class="fw-700 font-xss mt-3 lh-28 mt-0">Communication Address</h3>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h3 class="fw-600 font-xss mt-3 lh-28 mt-0">Current Address</h3>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Communication Address</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->comm_address}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Pin code</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->comm_pin_code}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Village/Area/Locality</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->comm_village}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Block/Taluk/Town</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->comm_block}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">State</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->comm_state}}</span>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <h3 class="fw-600 font-xss mt-3 lh-28 mt-0">Permanent Address</h3>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Communication Address</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->perm_address}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Pin code</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->perm_pin_code}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Village/Area/Locality</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->perm_village}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Block/Taluk/Town</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->perm_block}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">State</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->perm_state}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-2">
                                            <div class="item">
                                                <div class="card p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                    <div class="card-body pt-0">
                                                        <h3 class="fw-700 font-xss mt-3 lh-28 mt-0">Bank Details</h3>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Bank Name</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->bank_name}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Bank's Branch Name</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->bank_branch}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">IFSC Code</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->ifsc_code}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Bank Passbook/Statement/Cancelled Cheque</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->passbook_statement}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Savings Bank Account Number </h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->account_no}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Enter name as per Passbook </h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->name_as_per_bank}}</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-2">
                                            <div class="item">
                                                <div class="card p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                    <div class="card-body pt-0">
                                                        <h3 class="fw-700 font-xss mt-3 lh-28 mt-0">About YourSelf</h3>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">About YourSelf</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->description}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Hobbies </h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->hobby}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Achievements</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->achievements}}</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="fw-500 font-xss mt-0">Enter Mother Tongue</h4>
                                                                <span class="font-xss fw-500 ">{{$data['student_details']->mother_tongue}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        {{-- <div class="col-xl-12">
                                            <p class="font-xssss fw-600 lh-28 text-grey-500 pl-0">I have a Business Management degree from Bangalore University and a long time Excel expert. I create professional Excel reports/dashboards for clients and conduct Excel workshops for business professionals. Currently am a freelance motion graphics artist and a Music producer. I like to be productive and creative at work. I like to continuously increase my skills and stay in tuned with the technology industry.</p>
                                            <p class="font-xssss fw-600 lh-28 text-grey-500 pl-0">I have a Business Management degree from Bangalore University and a long time Excel expert. I create professional Excel reports/dashboards for clients and conduct Excel workshops for business professionals. Currently am a freelance motion graphics artist and a Music producer. I like to be productive and creative at work. I like to continuously increase my skills and stay in tuned with the technology industry.</p>
                                            <ul class="d-flex align-items-center mt-2 mb-3 float-left">
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-pinterest"><i class="font-xs ti-pinterest text-white"></i></a></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navtabs1">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block"><b>Courses</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        @foreach($data['courses'] as $courses)
                                        @php
                                            $course_detail= Course::where('id',$courses->course_id)->first();
                                        @endphp
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card w-100 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1">
                                                <div class="card-image w-100 mb-3">
                                                    <a href="/admin/default_course_details/{{$course_detail->id}}" class="video-bttn position-relative d-block"><img src="/{{$course_detail->course_image}}" alt="image" class="w-100"></a>
                                                </div>
                                                <div class="card-body pt-0">


                                                    <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="/admin/default_course_details/{{$course_detail->id}}" class="text-dark text-grey-900">{{$course_detail->course_name}}</a></h4>

                                                    <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                                        {{-- <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                        <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                        <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                        <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                        <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                                        <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navtabs2">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block"><b>Jobs</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        @if (count($data['all_jobs'])==0)
                                                <h4 class="fw-700 font-xsss mt-4">Not applied yet.</h4>
                                        @else
                                        @foreach ($data['all_jobs'] as $job)
                                        @php
                                            $job_detail = Job_detail::where('id',$job->job_id)->first();
                                        @endphp
                                        <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                            <div class="item">
                                                <div class="card p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                    <div class="card-image w-100 mb-3">
                                                        <img src="{{$job_detail->job_image}}" alt="image" class="w-100" style="height: 200px">
                                                    </div>
                                                    <div class="card-body pt-0">

                                                        <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">{{ucwords($job_detail->job_title)}}</span>
                                                        {{-- <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 40</span> --}}
                                                        @php
                                                            $recruiter=Recruiter::where('recruiter_id',$job_detail->created_by)->first();
                                                        @endphp
                                                        <h4 class="fw-700 font-xss mt-3 lh-28 mt-0">{{ucwords($recruiter->org_name)}}</h4>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <p class="font-xsss">CTC: <br><b>{{$job_detail->annual_ctc}}LPA</b></p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p class="font-xsss">Location: <br><b>{{$job_detail->location}}</b></p>
                                                            </div>
                                                        </div>
                                                        {{-- <a href=""  class="btn bg-current text-center text-white font-xsss fw-600 p-2 w175 rounded-lg d-inline-block border-0">Apply</a> --}}
                                                        <div class="row">
                                                            <button style="width:100%" type="" class="btn bg-current text-center text-white font-xsss fw-600 p-2 rounded-lg d-inline-block border-0" disabled>Applied</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        {{-- <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg ml-auto mr-auto">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="w-100">
                                                </a>
                                                <h4 class="fw-700 font-xsss mt-4">Bronze User</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome Microsoft Access databases</p>
                                                <div class="clearfix"></div>
                                                <div class="progress mt-3 h10">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                                </div>
                                                <a href="#" class="mt-3 d-inline-block text-grey-900 fw-700 rounded-lg text-center font-xssss ls-3">UNLOCK</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg ml-auto mr-auto">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="w-100">
                                                </a>
                                                <h4 class="fw-700 font-xsss mt-4">Platinum  User</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome Microsoft Access databases</p>
                                                <div class="clearfix"></div>
                                                <div class="progress mt-3 h10">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                                </div>
                                                <a href="#" class="mt-3 d-inline-block text-grey-500 fw-600 rounded-lg text-center font-xssss ls-3">95 / 100</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg ml-auto mr-auto">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="w-100">
                                                </a>
                                                <h4 class="fw-700 font-xsss mt-4">Ultra Powered</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome Microsoft Access databases</p>
                                                <div class="clearfix"></div>
                                                <div class="progress mt-3 h10">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                                </div>
                                                <a href="#" class="mt-3 d-inline-block text-grey-500 fw-600 rounded-lg text-center font-xssss ls-3">80 / 100</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg ml-auto mr-auto">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="w-100">
                                                </a>
                                                <h4 class="fw-700 font-xsss mt-4">Bronze User</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome Microsoft Access databases</p>
                                                <div class="clearfix"></div>
                                                <div class="progress mt-3 h10">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                </div>
                                                <a href="#" class="mt-3 d-inline-block text-grey-500 fw-600 rounded-lg text-center font-xssss ls-3">75 / 100</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg ml-auto mr-auto">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="w-100">
                                                </a>
                                                <h4 class="fw-700 font-xsss mt-4">Gold User</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome Microsoft Access databases</p>
                                                <div class="clearfix"></div>
                                                <div class="progress mt-3 h10">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                                </div>
                                                <a href="#" class="mt-3 d-inline-block text-grey-500 fw-600 rounded-lg text-center font-xssss ls-3">65 / 100</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg ml-auto mr-auto">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="w-100">
                                                </a>
                                                <h4 class="fw-700 font-xsss mt-4">Silver User</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome Microsoft Access databases</p>
                                                <div class="clearfix"></div>
                                                <div class="progress mt-3 h10">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                </div>
                                                <a href="#" class="mt-3 d-inline-block text-grey-900 fw-700 rounded-lg text-center font-xssss ls-3">UNLOCK</a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="navtabs3">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block"><b>All QnAs</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div id="accordion" class="accordion mb-0">
                                                @if (count($data['all_qna'])==0)
                                                <h4 class="fw-700 font-xsss mt-4">Not asked yet.</h4>
                                                @endif
                                                @foreach ($data['all_qna'] as $qna)
                                                <div class="card shadow-xss mb-0">
                                                    <div class="card-header bg-greylight theme-dark-bg" id="heading{{$qna->id}}">
                                                        <h5 class="mb-0"><button class="btn font-xsss fw-600 btn-link " data-toggle="collapse" data-target="#collapse{{$qna->id}}" aria-expanded="false" aria-controls="collapse{{$qna->id}}">{{$qna->question}}</button></h5>
                                                    </div>
                                                    <div id="collapse{{$qna->id}}" class="collapse p-3" aria-labelledby="heading{{$qna->id}}" data-parent="#accordion">
                                                        <div class="card-body d-flex p-2">
                                                            {{-- <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">1</span> --}}
                                                            @if(!empty($qna->answer))
                                                            <span class="font-xssss fw-500 text-dark-500 ml-2">{{$qna->answer}}</span>
                                                            @else
                                                            <span class="font-xssss fw-500 text-dark-500 ml-2">Not answered yet!</span>
                                                            @endif

                                                            {{-- <span class="ml-auto font-xssss fw-500 text-grey-500">12:34</span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        {{-- <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg bg-lightblue ml-auto mr-auto">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-1">
                                                </a>
                                                <h4 class="fw-700 font-xs mt-4">Mobile Product Design</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome.</p>
                                                <div class="clearfix"></div>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">Full Time</span>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">Desiner</span>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">30 Min</span>
                                                <div class="clearfix"></div>
                                                <ul class="memberlist mt-4 mb-2">
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3">+2</a></li>
                                                    <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                                </ul>

                                                <a href="#" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">APPLY NOW</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg alert-danger ml-auto mr-auto">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-2">
                                                </a>
                                                <h4 class="fw-700 font-xs mt-4">HTML Developer</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome.</p>
                                                <div class="clearfix"></div>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">Full Time</span>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">Desiner</span>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">30 Min</span>
                                                <div class="clearfix"></div>
                                                <ul class="memberlist mt-4 mb-2">
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3">+2</a></li>
                                                    <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                                </ul>

                                                <a href="#" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">APPLY NOW</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg alert-secondary ml-auto mr-auto">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-1 w-100">
                                                </a>
                                                <h4 class="fw-700 font-xs mt-4">Advanced CSS and Sass</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome.</p>
                                                <div class="clearfix"></div>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">Full Time</span>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">Desiner</span>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">30 Min</span>
                                                <div class="clearfix"></div>
                                                <ul class="memberlist mt-4 mb-2">
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3">+2</a></li>
                                                    <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                                </ul>

                                                <a href="#" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">APPLY NOW</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg bg-lightblue ml-auto mr-auto">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-1 w-100">
                                                </a>
                                                <h4 class="fw-700 font-xs mt-4">Modern React with Redux</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome.</p>
                                                <div class="clearfix"></div>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">Full Time</span>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">Desiner</span>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">30 Min</span>
                                                <div class="clearfix"></div>
                                                <ul class="memberlist mt-4 mb-2">
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3">+2</a></li>
                                                    <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                                </ul>

                                                <a href="#" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">APPLY NOW</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg bg-lightblue ml-auto mr-auto">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-1 w-100">
                                                </a>
                                                <h4 class="fw-700 font-xs mt-4">Node JS</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome.</p>
                                                <div class="clearfix"></div>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">Full Time</span>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">Desiner</span>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">30 Min</span>
                                                <div class="clearfix"></div>
                                                <ul class="memberlist mt-4 mb-2">
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3">+2</a></li>
                                                    <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                                </ul>

                                                <a href="#" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">APPLY NOW</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg bg-lightblue ml-auto mr-auto">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-1 w-100">
                                                </a>
                                                <h4 class="fw-700 font-xs mt-4">Mobile Product Design</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome.</p>
                                                <div class="clearfix"></div>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">Full Time</span>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">Desiner</span>
                                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">30 Min</span>
                                                <div class="clearfix"></div>
                                                <ul class="memberlist mt-4 mb-2">
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                    <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3">+2</a></li>
                                                    <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                                </ul>

                                                <a href="#" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">APPLY NOW</a>
                                            </div>
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="navtabs4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block"><b>Quizzes</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        @if (count($data['quiz_result'])==0)
                                        <h4 class="fw-700 font-xsss mt-4">Not taken yet.</h4>
                                        @endif
                                        @foreach ($data['quiz_result'] as $result)
                                                @php
                                                    $quiz = Quiz::where('id',$result->quiz_id)->first();
                                                @endphp

                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">

                                                <a href="#" class="btn-round-xxxl rounded-lg ml-auto mr-auto">
                                                    <img src="/{{$quiz->image}}" alt="icon" class="w-100">
                                                </a>
                                                <h4 class="fw-700 font-xsss mt-4">{{$quiz->title}}</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Date taken:{{date('Y-m-d', strtotime($result->created_at))}}</p>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3">Score:{{$result->score}}</p>

                                                <div class="clearfix"></div>

                                                {{-- <a href="#" class="mt-3 d-inline-block text-grey-900 fw-700 rounded-lg text-center font-xssss ls-3">UNLOCK</a> --}}
                                            </div>
                                        </div>

                                        @endforeach
                                        {{-- <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">John Steere </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <div class="clearfix"></div>
                                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Mohannad Zitoun </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <div class="clearfix"></div>
                                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Stephen Grider </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <div class="clearfix"></div>
                                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Hendrix Stamp </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <div class="clearfix"></div>
                                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Kimberley Kelly </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <div class="clearfix"></div>
                                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Aliqa Macale </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <div class="clearfix"></div>
                                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">John Steere </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <div class="clearfix"></div>
                                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="navtabs5">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block"><b> Internships</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        @if (count($data['all_internships'])==0)
                                        <h4 class="fw-700 font-xsss mt-4">Not applied yet.</h4>
                                        @endif
                                        @foreach ($data['all_internships'] as $internship)
                                        @php
                                            $internship_detail = Internship::where('id',$internship->internship_id)->first();
                                        @endphp
                                        <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                            <div class="item">
                                                <div class="card p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                    <div class="card-image w-100 mb-3">
                                                        <img src="/{{$internship_detail->internship_image}}" alt="image" class="w-100" style="height: 200px">
                                                    </div>
                                                    <div class="card-body pt-0">

                                                        <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">{{ucwords($internship_detail->internship_title)}}</span>
                                                        {{-- <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 40</span> --}}
                                                        {{-- @php
                                                            $recruiter=Recruiter::where('recruiter_id',$internship->created_by)->first();
                                                        @endphp --}}
                                                        {{-- <h4 class="fw-700 font-xss mt-3 lh-28 mt-0">{{ucwords($recruiter->org_name)}}</h4> --}}
                                                        {{-- <div class="row">
                                                            <div class="col-lg-6">
                                                                <p class="font-xsss">Stipend: <br>{{$internship_detail->stipend}}</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p class="font-xsss">Location: <br>{{$internship_detail->location}}</p>
                                                            </div>
                                                        </div> --}}
                                                        {{-- <a href=""  class="btn bg-current text-center text-white font-xsss fw-600 p-2 w175 rounded-lg d-inline-block border-0">Apply</a> --}}
                                                        <div class="row">
                                                            <button style="width:100%" type="" class="btn bg-current text-center text-white font-xsss fw-600 p-2  rounded-lg d-inline-block border-0 mt-4 mr-1" disabled>Applied</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="navtabs6">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block"> <b>Analytics</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        {{-- <div class="clearfx"></div> --}}
                                        {{-- <div class="col-lg-12">
                                            <div class="card w-100 p-3 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                                <div id="chart-usersMultiplee"></div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-xl-4 col-lg-12 ">
                                            <div class="card w-100 p-3 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                                <div id="chart-earnings-by-item"></div>
                                                <div class="row mt-2">
                                                    <div class="col-6 mb-1 text-center">
                                                            <h2 class="font-xl text-grey-900 fw-700 ls-lg">4403</h2>
                                                            <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase"><span class="mr-2 bg-facebook btn-round-xss d-inline-block mt-0 rounded-circle"></span> this week</h4>
                                                    </div>
                                                    <div class="col-6 mb-1 text-center">
                                                            <h2 class="font-xl text-grey-900 fw-700 ls-lg">5432</h2>
                                                            <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase"><span class="mr-2 bg-instagram btn-round-xss d-inline-block mt-0 rounded-circle"></span> this month</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        {{-- <div class="col-xl-4 col-lg-12 ">
                                            <div class="card w-100 p-3 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-12 p-0 mt-0">
                                                            <div id="chart-round-center"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="col-xl-4 col-lg-12 ">
                                            <div class="card w-100 p-3 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                                <div id="chart-multipleitem"></div>
                                                <div class="row">
                                                    <div class="col-4 text-center">
                                                        <h2 class="font-lg text-grey-900 fw-700 ls-lg">44%</h2>
                                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase">C</h4>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <h2 class="font-lg text-grey-900 fw-700 ls-lg">55%</h2>
                                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase">Python</h4>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <h2 class="font-lg text-grey-900 fw-700 ls-lg">67%</h2>
                                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase">Java</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="navtabs7">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block">Live<b> Channel</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Aliqa Macale </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <span class="live-tag mt-2 bg-dark p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">OFFLINE</span>
                                                    <div class="clearfix"></div>
                                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">John Steere </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <span class="live-tag mt-2 bg-danger p-2 z-index-1  rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                                    <div class="clearfix"></div>
                                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Mohannad Zitoun </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <span class="live-tag mt-2 bg-dark p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">OFFLINE</span>
                                                    <div class="clearfix"></div>
                                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Stephen Grider </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <span class="live-tag mt-2 bg-danger p-2 z-index-1  rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                                    <div class="clearfix"></div>
                                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/blog-2.jpg);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Hendrix Stamp </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <span class="live-tag mt-2 bg-danger p-2 z-index-1  rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                                    <div class="clearfix"></div>
                                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Kimberley Kelly </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <span class="live-tag mt-2 bg-danger p-2 z-index-1  rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                                    <div class="clearfix"></div>
                                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Aliqa Macale </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <span class="live-tag mt-2 bg-dark p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">OFFLINE</span>
                                                    <div class="clearfix"></div>
                                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 font-xsss mt-3 mb-1">John Steere </h4>
                                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                                    <span class="live-tag mt-2 bg-danger p-2 z-index-1  rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                                    <div class="clearfix"></div>
                                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navtabs8">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block"><b> Certifications</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                                <a href="#" class="btn-round-xxxl rounded-lg ml-auto mr-auto">
                                                    <img src="/assets/images/cirtificate.png" alt="icon" class="w-100">
                                                </a>
                                                <h4 class="fw-700 font-xsss mt-4">Certified</h4>
                                                <p class="fw-500 font-xssss text-grey-500 mt-3"> successfully completed the course.</p>
                                                <div class="clearfix"></div>
                                                <div class="progress mt-3 h10">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                @include("inc_recruiter.sidebar")
            </div>
        </div>
       

        <div class="app-header-search">
            <form class="search-form">
                <div class="form-group searchbox mb-0 border-0 p-1">
                    <input type="text" class="form-control border-0" placeholder="Search...">
                    <i class="input-icon">
                        <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
                    </i>
                    <a href="#" class="ml-1 mt-1 d-inline-block close searchbox-close">
                        <i class="ti-close font-xs"></i>
                    </a>
                </div>
            </form>
        </div>

    </div>





    @include("inc_recruiter.footer")

</body>

</html>
