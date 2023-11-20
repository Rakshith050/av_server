<?php session()->put('curnav','job'); ?>
@include('inc.header')
@php
    use App\Models\Recruiter;
    use App\Models\Job_application;
    use App\Models\Quiz;
    use App\Models\Quiz_result;

@endphp

<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc.navbar')

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc.topbar')

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                        <h2 class="fw-400 font-lg d-block">All<b> Jobs</b> </h2>
                    </div>
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
                        @foreach ($data['all_jobs'] as $job)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                    <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                    <a href="#" class="btn-round-xxxl rounded-lg bg-lightblue ml-auto mr-auto">
                                        <img src="/{{ $job->job_image }}" alt="icon" class="p-1" style="width: 50px;height: 50px;">
                                    </a>
                                    <h4 class="fw-700 font-xs mt-4">{{ ucwords($job->job_title) }}</h4>
                                    @php
                                        $recruiter = Recruiter::where('recruiter_id', $job->created_by)->first();
                                    @endphp
                          
                                    <div class="clearfix"></div>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mb-1 mr-1">{{ ucwords($recruiter->org_name) }}</span>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1"><i class="fa-solid fa-indian-rupee-sign"></i>&emsp;{{ $job->annual_ctc }}LPA</span>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1"><i class="fa-solid fa-location-dot"></i>&emsp;{{ $job->location }}</span>
                                    <div class="clearfix"></div>


                                    <form method="post" action="/apply_job">
                                        @csrf
                                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                                        @php
                                            $application = Job_application::where('job_id', $job->id)
                                                ->where('student_id', session('rexkod_user_id'))
                                                ->first();
                                            $jobQuiz = Quiz::where('job_id', $job->id)->first();
                                            $jobQuizResult = null;

                                            if ($jobQuiz) {
                                                $jobQuizResult = Quiz_result::where('quiz_id', $jobQuiz->id)
                                                    ->where('user_id', session('rexkod_user_id'))
                                                    ->latest()
                                                    ->first();
                                            }
                                        @endphp
                                        <div class="col-lg-12">
                                            @if ($application)
                                                <button type="" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current border-0" disabled>APPLIED</button>
                                            @elseif ($jobQuiz && $jobQuizResult && $jobQuizResult->score_percentage >= 50)
                                                <button type="submit" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current border-0">APPLY</button>
                                            @elseif ($jobQuiz && $jobQuizResult && $jobQuizResult->score_percentage <= 50)
                                                <button type="" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current border-0" disabled>NOT QUALIFIED</button>
                                            @elseif ($jobQuiz)
                                                <a href="/take_quiz/{{ $jobQuiz->id }}" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current border-0">TAKE QUIZ</a>
                                            @elseif (!$jobQuiz)
                                            <button type="submit" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current border-0">APPLY</button>
                                            @endif
                                        </div>
                                    </form>


                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @include('inc.sidebar')
            </div>
        </div>
    </div>

    @include('inc.footer')

</body>

</html>
