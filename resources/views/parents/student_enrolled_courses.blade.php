<?php session()->put('curnav','student_enrolled_courses'); ?>
@include("inc_parent.header")
@php
    use App\Models\Subject;
    use App\Models\Quiz;

@endphp

<body class="color-theme-orange mont-font">




    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_parent.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content">
            @include("inc_parent.topbar")


            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 d-flex justify-content-between">
                            <div>
                                <h2 class="fw-400 font-lg d-block">Enrolled <b> Courses</b> </h2>
                            </div>

                        </div>
                        @foreach ($enrolled_courses as $enrolled_course)

                        @php

                            $subject = Subject::where('id',$enrolled_course->course_subject)->first();
                            // $test = Quiz::where('created_by','admin')
                            //         ->where('subject',$subject->id)
                            //         ->latest()->first();
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
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">30 Min</span>
                                <div class="clearfix"></div>


                                {{-- <a href="/default_live_stream/{{$enrolled_course->course_id}}/0" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">LEARN</a> --}}
                                <a href="/parent/test_results/{{$enrolled_course->id}}/{{$student_id}}" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">TEST Result</a>
                                {{-- @if(!empty($test->id))
                                <a href="/take_test/{{$enrolled_course->course_id}}/{{$test->id}}" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">TAKE TEST</a>
                                @else
                                <a href="#" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">TAKE TEST</a>
                                @endif --}}
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                @include("inc_parent.sidebar")
            </div>
        </div>


    </div>





    @include("inc_parent.footer")


</body>

</html>
