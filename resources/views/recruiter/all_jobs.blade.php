<?php session()->put('curnav','job'); ?>
@include("inc_recruiter.header")
@php
    use App\Models\Recruiter;
    use App\Models\Job_application;
@endphp

<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_recruiter.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_recruiter.topbar")

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    {{-- <div class="middle-wrap mb-3"> --}}
                    {{-- <div class="mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-lg">
                                <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                                <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">All Jobs</h4>
                            </div>

                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 d-flex justify-content-between">
                            <div>
                                <h2 class="fw-400 font-lg d-block">All <b> Jobs</b> </h2>
                            </div>
                            <div class="float-right">
                                {{-- <a href="/admin/add_subject" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">ADD QUESTIONS</a> --}}
                                <a href="/recruiter/create_job" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">CREATE JOBS</a>
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
                               <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-info mb-1 mr-1">{{ucwords($recruiter->org_name)}}</span>
                         
                                <div class="clearfix"></div>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-info mb-1 mr-1"><i class="fa-solid fa-indian-rupee-sign"></i>&emsp;{{$job->annual_ctc}}LPA</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1"></span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1"><i class="fa-solid fa-location-dot"></i>&emsp;{{$job->location}}</span>
                                <div class="clearfix"></div>
                                <div class="col-lg-12">
                                    <a href="/recruiter/job_applications/{{$job->id}}"  class="btn mt-4 bg-current text-center text-white font-xsss fw-600 p-2 w175 rounded-lg d-inline-block border-0">Applications</a>
                                    {{-- <button  type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-2 w175 rounded-lg d-inline-block border-0">Application</button> --}}
                                </div>
                            </div>
                        </div>

                        @endforeach
                        {{-- @foreach ($data['all_jobs'] as $job)
                        <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                            <div class="item">
                                <div class="card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                    <div class="card-image w-100 mb-3">
                                        <img src="{{$job->job_image}}" alt="image" class="w-100" style="height: 200px">
                                    </div>
                                    <div class="card-body pt-0">

                                        <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">{{ucwords($job->job_title)}}</span>

                                        @php
                                            $recruiter=Recruiter::where('recruiter_id',$job->created_by)->first();
                                        @endphp
                                        <h4 class="fw-700 font-xss mt-3 lh-28 mt-0">{{ucwords($recruiter->org_name)}}</h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="font-xsss">CTC: <br>{{$job->annual_ctc}}LPA</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="font-xsss">Location: <br>{{$job->location}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <a href="/recruiter/job_applications/{{$job->id}}"  class="btn bg-current text-center text-white font-xsss fw-600 p-2 w175 rounded-lg d-inline-block border-0">Applications</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("inc_recruiter.footer")

</body>

</html>
