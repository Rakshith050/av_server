<?php session()->put('curnav','course'); ?>
@include("inc_aprex.header")
@php
    use App\Models\Subject;
    use App\Models\Quiz;

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
                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 d-flex justify-content-between">
                            <div>
                                <h2 class="fw-400 font-lg d-block">All <b> Courses</b> </h2>
                            </div>

                        </div>
                        @foreach ($data['enrolled_course'] as $enrolled_course)

                        @php

                            $subject = Subject::where('id',$enrolled_course->course_subject)->first();
                            $test = Quiz::where('created_by','admin')
                                    ->where('subject',$subject->id)
                                    ->latest()->first();
                        @endphp
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                <a href="#" class="btn-round-xxxl rounded-lg bg-lightblue ml-auto mr-auto">
                                    <img src="/{{$enrolled_course->course_image}}" alt="icon" class="p-1" style="width: 50px;height: 50px;">
                                </a>
                                <h4 class="fw-700 font-xs mt-4">{{$enrolled_course->course_name}}</h4>
                                <p class="fw-500 font-xssss text-grey-500 mt-3">{{$enrolled_course->description}}</p>
                                <div class="clearfix"></div>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">Full Time</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">{{$subject->subject_name}}</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">{{$enrolled_course->course_category}}</span>
                                <div class="clearfix"></div>
                                {{-- <ul class="memberlist mt-4 mb-2">
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3">+2</a></li>
                                    <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                </ul> --}}

                                <a href="/aprex/default_live_stream/{{$enrolled_course->course_id}}/0" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">LEARN</a>
                                {{-- <a href="#" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">TAKE TEST</a> --}}
                                @if(!empty($test->id))
                                <a href="/aprex/take_test/{{$enrolled_course->course_id}}/{{$test->id}}" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">TAKE TEST</a>
                                @else
                                <a href="#" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">TAKE TEST</a>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                <a href="#" class="btn-round-xxxl rounded-lg alert-danger ml-auto mr-auto">
                                    <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-2">
                                </a>
                                <h4 class="fw-700 font-xs mt-4">HTML Developer</h4>
                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome Microsoft Access databases and VBA coding not covered in any of my other courses!</p>
                                <div class="clearfix"></div>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">Full Time</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">Desiner</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">30 Min</span>
                                <div class="clearfix"></div>
                                <ul class="memberlist mt-4 mb-2">
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
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
                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome Microsoft Access databases and VBA coding not covered in any of my other courses!</p>
                                <div class="clearfix"></div>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">Full Time</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">Desiner</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">30 Min</span>
                                <div class="clearfix"></div>
                                <ul class="memberlist mt-4 mb-2">
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
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
                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome Microsoft Access databases and VBA coding not covered in any of my other courses!</p>
                                <div class="clearfix"></div>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">Full Time</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">Desiner</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">30 Min</span>
                                <div class="clearfix"></div>
                                <ul class="memberlist mt-4 mb-2">
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
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
                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome Microsoft Access databases and VBA coding not covered in any of my other courses!</p>
                                <div class="clearfix"></div>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">Full Time</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">Desiner</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">30 Min</span>
                                <div class="clearfix"></div>
                                <ul class="memberlist mt-4 mb-2">
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
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
                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome Microsoft Access databases and VBA coding not covered in any of my other courses!</p>
                                <div class="clearfix"></div>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">Full Time</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">Desiner</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">30 Min</span>
                                <div class="clearfix"></div>
                                <ul class="memberlist mt-4 mb-2">
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3">+2</a></li>
                                    <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                </ul>

                                <a href="#" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">APPLY NOW</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                @include("inc_aprex.sidebar")
            </div>
        </div>

    @include("inc_aprex.footer_app")
        <!-- main content -->
        {{-- <div class="app-footer border-0 shadow-lg">
            <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default-follower.html" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>
            <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 shadow-xss"></a>
        </div> --}}

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


</body>

</html>
