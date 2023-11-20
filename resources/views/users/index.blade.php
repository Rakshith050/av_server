<?php session()->put('curnav','home'); ?>
@include("inc.header")
<style>
    .result {
        max-height: 200px;
        position: absolute;
        z-index: 20;
        top: -10px;
    }
    .result p{
        padding-left: 30px;
        font-weight: 500;
    }
</style>
@php
    use App\Models\Subject;
@endphp
<body class="color-theme-orange mont-font">




    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc.navbar")

        <!-- navigation -->
        <!-- main content -->

        <div class="main-content menu-active">
            @include("inc.topbar")
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="card rounded-xxl p-lg--5 border-0 bg-no-repeat bg-image-contain" style="background-position: right 50px top 10px; background-color: #e4f7fe; background-image: url(/assets/images/home.png);">
                                <div class="card-body p-4">
                                    <h2 class="display3-size fw-400 display2-md-size sm-mt-7 xs-pt-10">Technology <b class="d-lg-block">Courses</b></h2>
                                    <h4 class="text-grey-500 font-xssss fw-500 ml-1">Best of the courses at one place</h4>
                                    <div class="form-group mt-lg-5 p-3 border-light border p-2 bg-white rounded-lg">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="form-group icon-input mb-0 search-box">
                                                    <i class="ti-search font-xs text-grey-400"></i>
                                                    <input type="text" class="style1-input bg-transparent border-0 pl-5 font-xsss mb-0 text-grey-500 fw-500" placeholder="Search online courses..">
                                                </div>
                                            </div>

                                            {{-- <div class="col-lg-4">
                                                <div class="form-group icon-input mb-0">
                                                    <i class="ti-package font-xs text-grey-400"></i>
                                                    <select class="style1-select bg-transparent border-0 pl-5"> <option value="">All Categories</option><option value="151781441596 ">Development</option><option value="139119624252 ">- Database</option><option value="139118313532 ">- Data Structure</option><option value="139360141372 ">Interviews</option><option value="152401903676 ">Programming</option></select>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-3">
                                                <a href="#" style="pull-right" id="search-button" class="w-100 d-block btn bg-current text-white font-xssss fw-600 ls-3 style1-input p-0 border-0 text-uppercase ">Search</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="result scroll-bar card w-100 border-0 bg-white shadow-xs p-0"
                                                ></div>
                                        </div>
                                    </div>
                                    <h4 class="text-grey-500 font-xssss fw-500 ml-1 lh-24"> <b class="text-grey-800 text-dark">Popular Search :</b> Java, Python, JS, HTML, CSS </h4>
                                </div>
                            </div>
                        </div>
                      

                        <div class="col-lg-12 pt-5 mb-3">
                            <h2 class="fw-400 font-lg d-block">Explore <b> Courses</b> <a href="#" class="float-right" ><i class="feather-edit text-grey-500 font-xs"></i></a></h2>
                        </div>

                        <div class="col-lg-12 pt-2">
                            <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none">
                                {{-- {{forEach($data[courses] as course)}} --}}
                                @foreach($data['courses'] as $courses)
                                @php

                                $subject = Subject::where('id',$courses->course_subject)->first();
                                @endphp
                                <div class="item">
                                    <div class="card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                        <div class="card-image w-100 mb-3">
                                            <a href="/default_course_details/{{$courses->id}}" class="video-bttn position-relative d-block"><img src="/{{$courses->course_image}}" alt="image" class="w-100" style="height: 200px;"></a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1">{{$subject->subject_name}}</span>
                                            <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right">
                                                <span class="font-xsssss"></span></span>
                                            <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="/default_course_details/{{$courses->id}}" class="text-dark text-grey-900">{{$courses->course_name}} </a></h4>
                                            <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2">{{$courses->section_count}} Lesson </h6>
                                            <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                                {{-- <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li> --}}
                                                {{-- <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                                <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                                {{-- <div class="item">
                                    <div class="card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                        <div class="card-image w-100 mb-3">
                                            <a href="default_course_details" class="video-bttn position-relative d-block"><img src="https://via.placeholder.com/400x300.png" alt="image" class="w-100"></a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">Desinger</span>
                                            <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 40</span>
                                            <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="default_course_details" class="text-dark text-grey-900">Complete Python Bootcamp From Zero to Hero in Python </a></h4>
                                            <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2"> 24 Lesson </h6>
                                            <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                                <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                        <div class="card-image w-100 mb-3">
                                            <a href="default_course_details" class="video-bttn position-relative d-block"><img src="https://via.placeholder.com/400x300.png" alt="image" class="w-100"></a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Bootstrap</span>
                                            <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 60</span>
                                            <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="default_course_details" class="text-dark text-grey-900">Java Programming Masterclass for Developers</a></h4>
                                            <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2"> 14 Lesson </h6>
                                            <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                                <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                        <div class="card-image w-100 mb-3">
                                            <a href="default_course_details" class="video-bttn position-relative d-block"><img src="https://via.placeholder.com/400x300.png" alt="image" class="w-100"></a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">Develop</span>
                                            <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 370</span>
                                            <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="default_course_details" class="text-dark text-grey-900">The Data Science Course Complete Data Science </a></h4>
                                            <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2"> 23 Lesson </h6>
                                            <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                                <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                        <div class="card-image w-100 mb-3">
                                            <a href="default_course_details" class="video-bttn position-relative d-block"><img src="https://via.placeholder.com/400x300.png" alt="image" class="w-100"></a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">Develop</span>
                                            <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 370</span>
                                            <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="default_course_details" class="text-dark text-grey-900">The Data Science Course Complete Data Science </a></h4>
                                            <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2"> 23 Lesson </h6>
                                            <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                                <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                                <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                        </div>


                  

                        <div class="col-lg-12 pt-0 mb-3">    <br><br>
                            <h2 class="fw-400 font-lg d-block">Upcoming <b> Webinars</b> <a href="#" class="float-right" ><i class="feather-edit text-grey-500 font-xs"></i></a></h2>
                        </div>

                        <div class="col-lg-12 pt-2">
                            <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none">
                                {{-- @foreach ($data['courses'] as $courses)

                                <div class="item">
                                    <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                        <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                        <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1"><a href="#" class="text-dark text-grey-900">{{$courses->course_name}} </a></h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                            <a href="#" class="text-dark text-grey-900">
                                            <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">Enroll</span></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach --}}

                                <div class="item">
                                    <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                        <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                        <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1"><a href="#" class="text-dark text-grey-900">Full Stack Development </a></h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">Starts in 2Hr</p>
                                            <a href="#" class="text-dark text-grey-900">
                                            <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">Enroll</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                        <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                        <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1"><a href="#" class="text-dark text-grey-900">Placements Guidance </a></h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">On Monday 28th May</p>
                                            <a href="#" class="text-dark text-grey-900">
                                            <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">Enroll</span></a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="item">
                                    <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                        <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: urlhttps://via.placeholder.com/200x100.png);"></div>
                                        <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">
                                            <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/50x50.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1">Aliqa Macale </h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                            <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                        <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                        <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">
                                            <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/50x50.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1">John Steere </h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                            <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                        <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                        <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">
                                            <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/50x50.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1">Mohannad Zitoun </h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                            <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                        <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                        <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">
                                            <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/50x50.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1">Aliqa Macale </h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                            <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                        <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                        <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">
                                            <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/50x50.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1">Hendrix Stamp </h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                            <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                        <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                        <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">
                                            <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="https://via.placeholder.com/50x50.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1">Mohannad Zitoun </h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                            <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>



                    </div>
                </div>

                @include("inc.sidebar")
            </div>
        </div>


    </div>


    @include("inc.footer")

    <script>
        $(document).ready(function() {
            var searchBox = $('.search-box');
            var resultDropdown = $(".result");
            $('.search-box input[type="text"]').on("keyup input", function() {
                /* Get input value on change */
                var inputVal = $(this).val();
                // var resultDropdown = $(this).siblings(".result");
                var resultDropdown = $(".result");
                if (inputVal.length) {
                    $.get("/search_courses", {
                        term: inputVal
                    }).done(function(data) {
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else {
                    resultDropdown.empty();
                }
            });
            // Handle click events on the document
            $(document).on("click", function(event) {
                // Close the search results dropdown if the clicked element is not within the search box
                if (!searchBox.is(event.target) && searchBox.has(event.target).length === 0) {
                resultDropdown.empty();
                }
            });


            // Set search input value on click of result item
            $(document).on("click", ".result p", function() {
                // $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(".search-box").find('input[type="text"]').val($(this).text());
                $(".result").empty();
                var resultId = $(this).data("id");
                // console.log("Clicked result ID:", resultId);
                var searchButtonUrl = "/default_course_details/" + resultId;
    $("#search-button").attr("href", searchButtonUrl);
            });
        });
    </script>





</body>

</html>
