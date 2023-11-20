@include("inc_aprex.header")

@php
    use App\Models\Student;
    $student=Student::where('student_id',session('rexkod_user_id'))->first();
    
    // dd($student_academic);
    // $student=$data['result'];
@endphp
<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}

    
    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_aprex.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_aprex.topbar")

            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
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
                            <li class="active list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 ml-sm-5 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase active" href="#navtabs0" data-toggle="tab">Personal</a></li>
                            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs1" data-toggle="tab">Academic</a></li>
                            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs2" data-toggle="tab">Family</a></li>
                            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs3" data-toggle="tab">Address</a></li>
                            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs4" data-toggle="tab">Bank Details</a></li>
                            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 mr-sm-5 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs5" data-toggle="tab">About Yourself</a></li>
                            {{-- <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs1" data-toggle="tab">Saved</a></li> --}}
                            {{-- <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 mr-sm-5 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs7" data-toggle="tab">LIVE</a></li> --}}
                        </ul>
                    </div>
                    {{-- <form action="/add_profile" method="post" enctype="multipart/form-data">
                        @csrf --}}
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="navtabs0">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block">  <b>Personal Details</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            {{-- <p class="font-xssss fw-600 lh-28 text-grey-500 pl-0">I have a Business Management degree from Bangalore University and a long time Excel expert. I create professional Excel reports/dashboards for clients and conduct Excel workshops for business professionals. Currently am a freelance motion graphics artist and a Music producer. I like to be productive and creative at work. I like to continuously increase my skills and stay in tuned with the technology industry.</p>
                                            <p class="font-xssss fw-600 lh-28 text-grey-500 pl-0">I have a Business Management degree from Bangalore University and a long time Excel expert. I create professional Excel reports/dashboards for clients and conduct Excel workshops for business professionals. Currently am a freelance motion graphics artist and a Music producer. I like to be productive and creative at work. I like to continuously increase my skills and stay in tuned with the technology industry.</p>
                                            <ul class="d-flex align-items-center mt-2 mb-3 float-left">
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-pinterest"><i class="font-xs ti-pinterest text-white"></i></a></li>
                                            </ul> --}}
                                            <form action="/add_profile" method="post" enctype="multipart/form-data">
                                                @csrf
                                                {{-- <div class="row justify-content-center mb-3">
                                                    <div class="col-lg-4 text-center">
                                                        <figure class="avatar ml-auto mr-auto mb-0 mt-2 w100"><img src="{{!empty($student->student_image) ? $student->student_image : 'https://via.placeholder.com/100x100.png'}}" alt="image" class="shadow-sm rounded-lg w-100"></figure>
                                                        <h6>Upload Applicant's Passport Size Photo<span>*</span></h6>
                                                         
                                                        <input type="file" class="text-center center-block file-upload" name="student_image" required>   
                                                        <!-- <a href="#" class="p-3 alert-primary text-primary font-xsss fw-500 mt-2 rounded-lg">Upload New Photo</a> -->
                                                    </div>
                                                </div> --}}
                                                <div class="row">
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">First Name as per Aadhar</label>
                                                            <input type="text" name="f_name" class="form-control" value="{{session('rexkod_user_name')}}" placeholder="enter your first name">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">Last Name as per Aadhar</label>
                                                            <input type="text" name="l_name" class="form-control" value="{{!empty($student->l_name) ? $student->l_name : ''}}" placeholder="enter your last name">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">Email Id</label>
                                                            <input type="email" name="email" class="form-control" value="{{session('rexkod_user_email')}}" placeholder="enter your email">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">Moblie Number</label>
                                                            <input type="number" name="phone_no" id="phone_no" class="form-control" value="{{session('rexkod_user_phone')}}" placeholder="enter your mobile number">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-5 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">Whatsapp</label>
                                                            <input type="number" id='whatsapp_no' name="whatsapp_no" value="{{!empty($student->whatsapp_no) ? $student->whatsapp_no : ''}}" class="form-control" placeholder="Tick  if Whatsapp Number same as your Mobile Number">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-1 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss"></label><br>
                                                            <input type="checkbox" id="checkbox1" name="same_as_phone" class="form-control mt-1" {{!empty($student->whatsapp_no) &&$student->same_as_phone==1 ? 'checked' : ''}}>
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">DOB as Aadhar</label>
                                                            <input type="date" name="dob" class="form-control" value="{{!empty($student->dob) ? $student->dob : ''}}" placeholder="enter dob as Aadhar">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">Gender</label>
                                                            {{-- <input type="text" name="course_subject" class="form-control"> --}}
                                                            <select class="form-control mdl-textfield__input" name="gender" id="select_change" placeholder="" required>
                                                                <option value="">-Select-</option>
                                                                @if (empty($student->gender))
                                                                    <option value="Male" >Male</option>
                                                                    <option value="Female">Female</option>
                                                                    <option value="Transgender">Transgender</option>
                                                                @else
                                                                    <option value="Male" {{$student->gender =='Male' ? 'selected' : ''}}>Male</option>
                                                                    <option value="Female" {{$student->gender =='Female' ? 'selected' : ''}}>Female</option>
                                                                    <option value="Transgender" {{$student->gender =='Transgender' ? 'selected' : ''}}>Transgender</option>
                                                                @endif
                                                                
                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">Religion</label>
                                                            {{-- <input type="text" name="course_subject" class="form-control"> --}}
                                                            <select class="form-control mdl-textfield__input" name="religion" id="select_change" placeholder="" required>
                                                                <option value="">-Select-</option>
                                                                @if (empty($student->religion))
                                                                <option value="Buddhism" >Buddhism</option>
                                                                <option value="Christian">Christian</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Jain">Jain</option>
                                                                <option value="Parsi" >Parsi</option>
                                                                <option value="Sikh">Sikh</option>
                                                                <option value="Muslim">Muslim</option>
                                                                <option value="Others">Others</option>
                                                                @else
                                                                <option value="Buddhism" {{$student->religion =='Christian' ? 'selected' : ''}}>Buddhism</option>
                                                                <option value="Christian" {{$student->religion =='Christian' ? 'selected' : ''}}>Christian</option>
                                                                <option value="Hindu" {{$student->religion =='Hindu' ? 'selected' : ''}}>Hindu</option>
                                                                <option value="Jain" {{$student->religion =='Jain' ? 'selected' : ''}}>Jain</option>
                                                                <option value="Parsi" {{$student->religion =='Parsi' ? 'selected' : ''}}>Parsi</option>
                                                                <option value="Sikh" {{$student->religion =='Sikh' ? 'selected' : ''}}>Sikh</option>
                                                                <option value="Muslim" {{$student->religion =='Muslim' ? 'selected' : ''}}>Muslim</option>
                                                                <option value="Others" {{$student->religion =='Others' ? 'selected' : ''}}>Others</option>
                                                                @endif
                                                                
                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">Category</label>
                                                            {{-- <input type="text" name="course_subject" class="form-control"> --}}
                                                            <select class="form-control mdl-textfield__input" name="category" id="select_change" placeholder="Enter Category" required>
                                                                <option value="">-Select-</option>
                                                                @if (empty($student->category))
                                                                <option value="General">General</option>
                                                                <option value="NTDNT" >NTDNT</option>
                                                                <option value="OBC-C">OBC-C</option>
                                                                <option value="OBC-NC">OBC-NC</option>
                                                                <option value="SC">SC</option>
                                                                <option vlaue="ST">ST</option>
                                                                <option value="VJ/NT">VJ/NT</option>
                                                                <option value="Other Reservations">Other Reservations</option>
                                                                @else
                                                                <option value="General" {{$student->category =='General' ? 'selected' : ''}}>General</option>
                                                                <option value="NTDNT" {{$student->category =='NTDNT' ? 'selected' : ''}}>NTDNT</option>
                                                                <option value="OBC-C" {{$student->category =='OBC-C' ? 'selected' : ''}}>OBC-C</option>
                                                                <option value="OBC-NC" {{$student->category =='OBC-NC' ? 'selected' : ''}}>OBC-NC</option>
                                                                <option value="SC" {{$student->category =='SC' ? 'selected' : ''}}>SC</option>
                                                                <option vlaue="ST" {{$student->category =='ST' ? 'selected' : ''}}>ST</option>
                                                                <option value="VJ/NT" {{$student->category =='VJ/NT' ? 'selected' : ''}}>VJ/NT</option>
                                                                <option value="Other Reservations" {{$student->category =='Other Reservations' ? 'selected' : ''}}>Other Reservations</option>
                                                                @endif
                                                                
                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">Physically Challenged</label>
                                                            {{-- <input type="text" name="course_subject" class="form-control"> --}}
                                                            <select class="form-control mdl-textfield__input" name="physically" id="select_change" placeholder="" required>
                                                                @if (!empty($student->physically))
                                                                <option value="No" {{$student->physically =='No' ? 'selected' : ''}}>No</option>
                                                                <option value="Yes" {{$student->physically =='Yes' ? 'selected' : ''}}>Yes</option>
                
                                                                @else
                                                                <option value="No" >No</option>
                                                                <option value="Yes" >Yes</option>
                
                                                                @endif
                                                                
                                                            </select>
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">Aadhar Number</label>
                                                            <input type="number" name="aadhar" value="{{!empty($student->aadhar) ? $student->aadhar : ''}}" class="form-control" maxlength="12" placeholder="XXXXXXXXXXXX">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="form-group">
                                                            @if (!empty($student->address_proof))
                                                            <label class="mont-font fw-600 font-xsss">Upload Proof of Address
                                                            </label>
                                                            @else
                                                            <label class="mont-font fw-600 font-xsss">Upload Proof of Address</label>
                                                            @endif
                                                            
                                                            <input type="file" name="address_proof" class="form-control" style="line-height: 30px;">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="form-group">
                                                            @if (!empty($student->address_proof))
                                                            <label class="mont-font fw-600 font-xsss">Upload Proof of Identity
                                                            </label>
                                                            @else
                                                            <label class="mont-font fw-600 font-xsss">Upload Proof of Identity</label>
                                                            @endif
                                                            </label>
                                                            <input type="file" name="identity_proof" class="form-control" style="line-height: 30px;">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button  type="submit" name="personal_submit" value="1" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>
                                                        {{-- <a href="#" class=" bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block">Save</a> --}}
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navtabs1">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                {{-- <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block">Previous Academic Information<a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div> --}}
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block">Previous Academic Information
                                    <button type="button" id="add_section" class="btn btn-default btn-add bg-current text-white font-xsss float-right"><i class="fa-solid fa-plus"></i>
                                    </button>
                                    {{-- <button type="button" id="delete_section" class="btn btn-default btn-add bg-current text-white font-xsss float-right"><i class="fa-solid fa-trash-can"></i>
                                    </button> --}}
                                    </h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form action="/add_profile" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <table id="myTable">
                                                    <thead>
                
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $academic_count=0;
                                                        @endphp
                                                        @if (!empty($student->academic_name))
                                                        @php
                                                            $student_academic=explode(',',$student->academic_name);
                                                            $student_class=explode(',',$student->class);
                                                            $student_cgpa=explode(',',$student->cgpa);
                                                            $student_start_date=explode(',',$student->start_date);
                                                            $student_end_date=explode(',',$student->end_date);
                                                        @endphp
                                                        @foreach ($student_academic as $academic)
                                                        <tr id="section{{$academic_count}}" class="row">
                                                            <td class="col-lg-12 mb-3">
                                                                <button type="button" id="delete_section" onclick="removeSection({{$academic_count}})" class="btn btn-default btn-add bg-current text-white font-xsss float-right"><i class="fa-solid fa-trash-can"></i>
                                                                </button>
                                                            </td>
                                                            <td class="col-lg-4 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">Academic Name</label>
                                                                        <input type="text" name="academic_name[]" value="{{$student_academic[$academic_count]}}" class="form-control">
                                                                    </div>         
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-4 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">Class</label>
                                                                        <input type="text" name="class[]" value="{{$student_class[$academic_count]}}" class="form-control">
                                                                    </div>        
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-4 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">% or cgpa</label>
                                                                        <input type="text" name="cgpa[]" value="{{$student_cgpa[$academic_count]}}" class="form-control">
                                                                    </div>         
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-6 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">Start Date</label>
                                                                        <input type="date" name="start_date[]" value="{{$student_start_date[$academic_count]}}" class="form-control">
                                                                    </div>         
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-6 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">End Date</label>
                                                                        <input type="date" name="end_date[]" value="{{$student_end_date[$academic_count]}}" class="form-control">
                                                                    </div>        
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $academic_count++;
                                                        @endphp
                                                        @endforeach
                                                        <tr id="section{{$academic_count}}" class="row"></tr>
                                                        @else
                                                            <tr id="section0" class="row">
                                                            <td class="col-lg-12 mb-3">
                                                                <button type="button" id="delete_section" onclick="removeSection(0)" class="btn btn-default btn-add bg-current text-white font-xsss float-right"><i class="fa-solid fa-trash-can"></i>
                                                                </button>
                                                            </td>
                                                            <td class="col-lg-4 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">Academic Name</label>
                                                                        <input type="text" name="academic_name[]" class="form-control">
                                                                    </div>         
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-4 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">Class</label>
                                                                        <input type="text" name="class[]" class="form-control">
                                                                    </div>        
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-4 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">% or cgpa</label>
                                                                        <input type="text" name="cgpa[]" class="form-control">
                                                                    </div>         
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-6 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">Start Date</label>
                                                                        <input type="date" name="start_date[]" class="form-control">
                                                                    </div>         
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-6 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">End Date</label>
                                                                        <input type="date" name="end_date[]" class="form-control">
                                                                    </div>        
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr id="section1" class="row"></tr>
                                                        @endif
                                                        {{-- <tr id="section0" class="row">
                                                            <td class="col-lg-12 mb-3">
                                                                <button type="button" id="delete_section" onclick="removeSection(0)" class="btn btn-default btn-add bg-current text-white font-xsss float-right"><i class="fa-solid fa-trash-can"></i>
                                                                </button>
                                                            </td>
                                                            <td class="col-lg-4 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">Academic Name</label>
                                                                        <input type="text" name="academic_name[]" class="form-control">
                                                                    </div>         
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-4 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">Class</label>
                                                                        <input type="text" name="class[]" class="form-control">
                                                                    </div>        
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-4 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">% or cgpa</label>
                                                                        <input type="text" name="cgpa[]" class="form-control">
                                                                    </div>         
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-6 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">Start Date</label>
                                                                        <input type="date" name="start_date[]" class="form-control">
                                                                    </div>         
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-6 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">End Date</label>
                                                                        <input type="date" name="end_date[]" class="form-control">
                                                                    </div>        
                                                                </div>
                                                            </td>
                                                        </tr> --}}
                                                        {{-- <tr id="section1" class="row"></tr> --}}
                                                    </tbody>
                                                </table>
                                                <div class="col-lg-12">
                                                    <button  type="submit" name="academic_submit" value="1" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>
                                                </div>
                                                {{-- <div class="row">
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">Academic Name</label>
                                                            <input type="text" name="academic_name" value="{{!empty($student->academic_name) ? $student->academic_name : ''}}" class="form-control">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">Class</label>
                                                            <input type="text" name="class" value="{{!empty($student->class) ? $student->class : ''}}" class="form-control">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">% or cgpa</label>
                                                            <input type="text" name="cgpa" value="{{!empty($student->cgpa) ? $student->cgpa : ''}}" class="form-control">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">Start Date</label>
                                                            <input type="date" name="start_date" value="{{!empty($student->start_date) ? $student->start_date : ''}}" class="form-control">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-group">
                                                            <label class="mont-font fw-600 font-xsss">End Date</label>
                                                            <input type="date" name="end_date" value="{{!empty($student->end_date) ? $student->end_date : ''}}" class="form-control">
                                                        </div>        
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button  type="submit" name="academic_submit" value="1" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>
                                                    </div>
                                                </div> --}}
                                            </form>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navtabs2">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block">Family Information<a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form action="/add_profile" method="post" enctype="multipart/form-data">
                                                @csrf
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Number of Siblings</label>
                                                        <input type="text" name="siblings" value="{{!empty($student->siblings) ? $student->siblings : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Family Annual Income</label>
                                                        <input type="text" name="annual_income" value="{{!empty($student->annual_income) ? $student->annual_income : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-12">
                                                    <strong> <u>Father/Guardian Detail's</u></strong>
                        
                                                </div><br>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Name as per Aadhar</label>
                                                        <input type="text" name="father_name" value="{{!empty($student->father_name) ? $student->father_name : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Aadhar Number</label>
                                                        <input type="text" name="f_aadhar" value="{{!empty($student->f_aadhar) ? $student->f_aadhar : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Mobile Number</label>
                                                        <input type="text" name="f_phone" value="{{!empty($student->f_phone) ? $student->f_phone : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        @if (!empty($student->father_aadhar_doc))
                                                        <label class="mont-font fw-600 font-xsss">Upload Aadhar Card </label>
                                                        @else
                                                        <label class="mont-font fw-600 font-xsss">Upload Aadhar Card</label>
                                                        @endif
                                                        
                                                        <input type="file" name="father_aadhar_doc" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Email Id</label>
                                                        <input type="email" name="f_email_id" value="{{!empty($student->f_email_id) ? $student->f_email_id : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-12">
                                                    <strong> <u>Mother/Guardian Detail's</u></strong>
                        
                                                </div><br>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Name as per Aadhar</label>
                                                        <input type="text" name="mother_name" value="{{!empty($student->mother_name) ? $student->mother_name : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Aadhar Number</label>
                                                        <input type="text" name="m_aadhar" value="{{!empty($student->m_aadhar) ? $student->m_aadhar : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Mobile Number</label>
                                                        <input type="text" name="m_phone" value="{{!empty($student->m_phone) ? $student->m_phone : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        @if (!empty($student->mother_aadhar_doc))
                                                        <label class="mont-font fw-600 font-xsss">Upload Aadhar Card </label>
                                                        @else
                                                        <label class="mont-font fw-600 font-xsss">Upload Aadhar Card</label>
                                                        @endif
                                                        <input type="file" name="mother_aadhar_doc"  class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Email Id</label>
                                                        <input type="email" name="m_email_id" value="{{!empty($student->m_email_id) ? $student->m_email_id : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-12">
                                                    <button  type="submit" name="family_submit" value="1" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>
                                                    {{-- <a href="#" class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block">Save</a> --}}
                                                </div>
                                            </div>
                                            </form>
                                        </div>
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
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block">Communication Address <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form action="/add_profile" method="post" enctype="multipart/form-data">
                                                @csrf
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Communication Address</label>
                                                        <input type="text" name="comm_address" value="{{!empty($student->comm_address) ? $student->comm_address : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Pin Code</label>
                                                        <input type="text" name="comm_pin_code" value="{{!empty($student->comm_pin_code) ? $student->comm_pin_code : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Village/Area/Locality(Select Any)</label>
                                                        {{-- <input type="text" name="course_subject" class="form-control"> --}}
                                                        <select class="form-control mdl-textfield__input" name="comm_village" id="select_change" placeholder="" required>
                                                            @if (empty($student->comm_village))
                                                            <option value="">--select--</option>
                                                            <option value="abcd">abcd</option>
                                                            @else
                                                            <option value="">--select--</option>
                                                            <option value="{{$student->comm_village =='No' ? 'selected' : ''}}">abcd</option>
                                                            @endif
                                                            
                                                        </select>
                                                    </div>        
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Block/Taluk/Town</label>
                                                        <input type="text" name="comm_block" value="{{!empty($student->comm_block) ? $student->comm_block : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">State</label>
                                                        <input type="text" name="comm_state" value="{{!empty($student->comm_state) ? $student->comm_state : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="checkbox" id="checkbox2" class="medium" name="same_as_comm_address">
									                    <label>Are the Permanent Address same as Communication Address?</label>
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Permanent Address</label>
                                                        <input type="text" name="perm_address" value="{{!empty($student->perm_address) ? $student->perm_address : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Pin Code</label>
                                                        <input type="text" name="perm_pin_code" value="{{!empty($student->perm_pin_code) ? $student->perm_pin_code : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Village/Area/Locality(Select Any)</label>
                                                        {{-- <input type="text" name="course_subject" class="form-control"> --}}
                                                        <select class="form-control mdl-textfield__input" name="perm_village" id="select_change" placeholder="" required>
                                                            @if (empty($student->perm_village))
                                                            <option value="">--select--</option>
                                                            <option value="abcd">abcd</option>
                                                            @else
                                                            <option value="">--select--</option>
                                                            <option value="{{$student->perm_village =='No' ? 'selected' : ''}}">abcd</option>
                                                            @endif
                                                            
                                                        </select>
                                                    </div>        
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Block/Taluk/Town</label>
                                                        <input type="text" name="perm_block" value="{{!empty($student->perm_block) ? $student->perm_block : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">State</label>
                                                        <input type="text" name="perm_state" value="{{!empty($student->perm_state) ? $student->perm_state : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-12">
                                                    <button  type="submit" name="address_submit" value="1" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>
                                                    {{-- <a href="#" class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block">Save</a> --}}
                                                </div>
                                            </div>
                                            </form>
                                        </div>

                                        {{-- <div class="col-xl-4 col-lg-6 col-md-6">
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
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block">Bank Details of Parent/Guardian<a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form action="/add_profile" method="post" enctype="multipart/form-data">
                                                @csrf
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Bank Name</label>
                                                        <input type="text" name="bank_name" value="{{!empty($student->bank_name) ? $student->bank_name : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Bank's Branch Name</label>
                                                        <input type="text" name="bank_branch" value="{{!empty($student->bank_branch) ? $student->bank_branch : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">IFSC Code</label>
                                                        <input type="text" name="ifsc_code" value="{{!empty($student->ifsc_code) ? $student->ifsc_code : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Upload Bank Passbook/Statement/Cancelled Cheque</label>
                                                        <input type="file" name="passbook_statement" class="form-control" style="line-height: 30px">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Savings Bank Account Number</label>
                                                        <input type="text" name="account_no" value="{{!empty($student->account_no) ? $student->account_no : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Re-enter Savings Bank Account Number </label>
                                                        <input type="text" name="re_account_no" value="{{!empty($student->re_account_no) ? $student->re_account_no : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Enter name as per Passbook</label>
                                                        <input type="text" name="name_as_per_bank" value="{{!empty($student->name_as_per_bank) ? $student->name_as_per_bank : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-12">
                                                    <button  type="submit" name="bank_submit" value="1" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>
                                                    {{-- <a href="#" class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block">Save</a> --}}
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        {{-- <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
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
                                <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block">About yourself<a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form action="/add_profile" method="post" enctype="multipart/form-data">
                                                @csrf
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Say about yourself</label>
                                                        <input type="text" name="description" value="{{!empty($student->description) ? $student->description : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Hobbies (Select multiple which ever is applicable)</label>
                                                        {{-- <input type="text" name="bank_name" class="form-control"> --}}
                                                        <select class="form-control mdl-textfield__input" name="hobby" id="select_change" placeholder="" required>
                                                            @if (empty($student->hobby))
                                                            <option value="">-Select-</option>
                                                            <option value="abcd">abcd</option>
                                                            
                                                            @else
                                                            <option value="">-Select-</option>
                                                            <option value="{{$student->perm_village =='No' ? 'selected' : ''}}">abcd</option>
                                                            @endif
                                                            
                                                            
                                                        </select>
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Add Achievements</label>
                                                        <input type="text" name="achievements" value="{{!empty($student->achievements) ? $student->achievements : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Enter Mother Tongue</label>
                                                        <input type="text" name="mother_tongue" value="{{!empty($student->mother_tongue) ? $student->mother_tongue : ''}}" class="form-control">
                                                    </div>        
                                                </div>
                                                <div class="col-lg-12">
                                                    <button  type="submit" name="about_submit" value="1" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>
                                                    {{-- <a href="#" class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block">Save</a> --}}
                                                </div>
                                            </div>
                                            </form>
                                        {{-- <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
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
                                        </div> --}}
                                    </div>
                                </div>  
                            </div>
                        </div>

                         
                    </div>
                    {{-- </form> --}}
                </div>
                @include("inc_aprex.sidebar")
            </div>            
        </div>
        <!-- main content -->
        <div class="app-footer border-0 shadow-lg">
            <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default-follower.html" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>            
            <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 shadow-xss"></a>
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


    

   
    @include("inc_aprex.footer")
    <script>
        $("#checkbox1").click(function() {
            $("#whatsapp_no").attr("disabled", this.checked);
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#checkbox1").on("change", function() {
    
                if (this.checked) {
                    $("#whatsapp_no").val($("#phone_no").val());
    
                } else {
    
                    $('#whatsapp_no').val("");
                    $("#whatsapp_no").attr("placeholder", "Tick  if Whatsapp Number same as your Mobile Number");
                }
    
            });
    
        });
    </script>
    {{-- <script>
        $("#checkbox2").click(function() {
            console.log("clicked");
            $("#perm_address").attr("disabled", this.checked);
            $("#perm_village").attr("disabled", this.checked);
            $("#perm_block").attr("disabled", this.checked);
            $("#perm_state").attr("disabled", this.checked);
            $("#perm_pin_code").attr("disabled", this.checked);
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#checkbox2").on("change", function() {
    
                if (this.checked) {
                    $("#perm_address").val($("#comm_address").val());
                    $("#perm_block").val($("#comm_block").val());
                    $("#perm_state").val($("#comm_state").val());
                    $("#perm_pin_code").val($("#comm_pin_code").val());
                    $("#perm_village1").val($("#comm_village").val());
    
                } 
                else {
    
                    $('#perm_address').val("");
                    $("#perm_address").attr("placeholder", "Enter Address");
                    $('#perm_village option:selected').val("");
                    $("#perm_village").attr("placeholder", "Enter Village/Area/Locality");
                    $('#perm_block').val("");
                    $("#perm_block").attr("placeholder", "Enter Block/Taluk/Town");
                    $('#perm_state').val("");
                    $("#perm_state").attr("placeholder", "Enter State");
                    $('#perm_pin_code').val("");
                    $("#perm_pin_code").attr("placeholder", "Enter Pin Code");
                }
    
            });
    
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            // alert($academic_count);
            
            // var count= <?php echo $academic_count; ?>;
            var count={{$academic_count}};
            if (count) {
                var i=count;
            }
            else{
                var i = 1;
            }
      
        $("#add_section").click(function() {
            $('#section' + i).html("<td class='col-lg-12 mb-3'><button type='button' id='delete_section' onclick='removeSection(" + i + ")' class='btn btn-default btn-add bg-current text-white font-xsss float-right'><i class='fa-solid fa-trash-can'></i></button></td><td class='col-lg-4 mb-3'><div class='form-group'><label class='mont-font fw-600 font-xsss'>Academic Name</label><input name='academic_name[]' type='text' class='form-control'></div></td><td class='col-lg-4 mb-3'><div class='form-group'><label class='mont-font fw-600 font-xsss'>Class</label><input name='class[]' type='text' class='form-control'></div></td><td class='col-lg-4 mb-3'><div class='form-group'><label class='mont-font fw-600 font-xsss'>% or cgpa</label><input name='cgpa[]' type='text' class='form-control'></div></td><td class='col-lg-6 mb-3'><div class='form-group'><label class='mont-font fw-600 font-xsss'>Start Date</label><input name='start_date[]' type='date' class='form-control'></div></td><td class='col-lg-6 mb-3'><div class='form-group'><label class='mont-font fw-600 font-xsss'>End Date</label><input name='end_date[]' type='date' class='form-control'></div></td>");

            $('#myTable').append('<tr class="row" id="section' + (i + 1) + '"></tr>');
            i++;
           
            
            // $("#no_of_rows").val(i);
        });


        // $("#delete_section").click(function() {
        //     i--;
        //     $('#section' + i).remove();

        //     // $('#myTable').append('<tr class="row" id="section' + (i + 1) + '"></tr>');
            
           
            
        //     // $("#no_of_rows").val(i);
        // });

        
 
    });

    function removeSection(index) {
            var section = document.getElementById("section" + index);
            section.parentNode.removeChild(section);
        }
    </script>

    
</body>

</html>