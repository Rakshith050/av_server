<?php session()->put('curnav','job'); ?>
@include("inc_admin.header")
@php
    use App\Models\Recruiter;
    use App\Models\Job_application;
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
                    {{-- <div class="mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                                
                                <h2 class="fw-400 font-lg d-block">All <b> Jobs</b> </h2>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                            

                                
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 d-flex justify-content-between">
                            <div>
                                <h2 class="fw-400 font-lg d-block">All <b> Jobs</b> </h2>
                            </div>
                            <div class="float-right">
                                {{-- <a href="/admin/add_subject" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">ADD QUESTIONS</a>
                                <a href="/admin/create_course" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">CREATE QUIZ</a> --}}
                            </div>
                        </div>
                        
                        @foreach ($data['all_jobs'] as $job)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                <a href="#" class="btn-round-xxxl rounded-lg bg-lightblue ml-auto mr-auto">
                                    <img src="/{{$job->job_image}}" alt="icon" class="p-1" style="width: 50px;height: 50px;">
                                </a>
                                <h4 class="fw-700 font-xs mt-4">{{ucwords($job->job_title)}}</h4>
                                @php
                                    $recruiter=Recruiter::where('recruiter_id',$job->created_by)->first();
                                @endphp
                                <p class="fw-500 font-xssss text-grey-500 mt-3">{{ucwords($recruiter->org_name)}}</p>
                                <div class="clearfix"></div>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1"><i class="fa-solid fa-indian-rupee-sign"></i>&emsp;{{$job->annual_ctc}}LPA</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1"></span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1"><i class="fa-solid fa-location-dot"></i>&emsp;{{$job->location}}</span>
                                <div class="clearfix"></div>
                                <div class="col-lg-12">
                                    <a href="/admin/job_applications/{{$job->id}}"  class="btn mt-4 bg-current text-center text-white font-xsss fw-600 p-2 w175 rounded-lg d-inline-block border-0">Applications</a>
                                    {{-- <button  type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-2 w175 rounded-lg d-inline-block border-0">Application</button> --}}
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