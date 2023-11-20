<?php session()->put('curnav','course'); ?>

@include("inc_admin.header")

@php
    use App\Models\Subject;
@endphp
<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_admin.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_admin.topbar")


            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 d-flex justify-content-between">
                            <div>
                                <h2 class="fw-400 font-lg d-block">All <b> Courses</b> </h2>
                            </div>
                            <div class="float-right">
                                {{-- <a href="/admin/add_question" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">ADD QUESTIONS</a> --}}
                                <a href="/admin/add_subject" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">ADD SUBJECT</a>
                                <a href="/admin/create_course" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">ADD COURSE</a>
                                <a href="/admin/add_videos" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">ADD VIDEOS</a>
                            </div>
                        </div>
                        @foreach ($data['courses'] as $course)

                        @php

                            $subject = Subject::where('id',$course->course_subject)->first();
                        @endphp

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                <a href="#" class="btn-round-xxxl rounded-lg bg-lightblue ml-auto mr-auto">
                                    <img src="/{{$course->course_image}}" alt="icon" class="p-1" style="width: 50px;height: 50px;">
                                </a>
                                <h4 class="fw-700 font-xs mt-4">{{$course->course_name}}</h4>
                                <p class="fw-500 font-xssss text-grey-500 mt-3">{{$course->description}}</p>
                                <div class="clearfix"></div>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">{{$course->course_category}}</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">{{$subject->subject_name}}</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">{{$course->course_subcategory}}</span>
                                <div class="clearfix"></div>

                                <a href="/admin/default_course_details/{{$course->id}}" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">VIEW</a>
                                <a href="/admin/enrolled_students/{{$course->id}}" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">STUDENTS</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
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





    @include("inc_admin.footer")


</body>

</html>
