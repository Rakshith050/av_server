<?php session()->put('curnav','project'); ?>
@include("inc_admin.header")
@php
    use App\Models\Recruiter;
    use App\Models\internship_application;
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

            <div class="middle-sidebar-bottom theme-dark-bg">
                <div class="middle-sidebar-left">
                    {{-- <div class="middle-wrap mb-3"> --}}
                    <div class="mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            {{-- <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                                <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                                <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">All Internships</h4>
                            </div> --}}

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 d-flex justify-content-between">
                            <div>
                                <h2 class="fw-400 font-lg d-block">All <b> Mini Projects</b> </h2>
                            </div>
                            <div class="float-right">
                                <a href="/admin/create_mini_projects" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">CREATE PROJECT</a>
                                <a href="/admin/create_project_task" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">CREATE TASK</a>

                            </div>
                        </div>
                        @foreach ($data['mini_projects'] as $mini_project)
                        <div class="col-lg-2 col-md-6 col-12 col-sm-6" style="margin-right:20px">
                            <div class="item">
                                <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                    {{-- <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url({{$mini_project->project_image}});"></div> --}}
                                    <div class="card-image w-100">
                                        <img src="/{{$mini_project->project_image}}" alt="image" class="w-100" style="height: 100px">
                                    </div>
                                    <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">

                                        <div class="clearfix"></div>
                                        <h4 class="fw-700 font-xsss mt-3 mb-1"><a href="#" class="text-dark text-grey-900"> </a>{{ucwords($mini_project->project_name)}}</h4>
                                        <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">{{$mini_project->description}}</p>
                                        <a href="#" class="text-dark text-grey-900">
                                        {{-- <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">Start</span></a> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("inc_admin.footer")

</body>

</html>
