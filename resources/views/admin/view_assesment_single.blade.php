
@include("inc_admin.header")
@php
    use App\Models\Quiz;
    use App\Models\User;
    use App\Models\Course;
    use App\Models\Video;
    use App\Models\Assesment;
        use App\Models\Section;
        use App\Models\Lab;
        use App\Models\Subject;
@endphp

<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


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
                                {{-- <h2 class="fw-400 font-lg d-block">All <b> Results</b> </h2> --}}
                            </div>
                            <div class="float-right">
                                <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li><a class="fw-500 font-xsss text-dark" href="/admin/assesments">&nbsp; Assesments</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active fw-500 text-black">&nbsp; Details</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-md-12">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-5 border-0 text-left question-div">
                                <table class="table">
                                    {{-- <h3>All Results</h3> --}}

                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-dark">Course Name</th>
                                            <th scope="col" class="text-dark">Section Name</th>
                                            <th scope="col" class="text-dark">Video Name</th>
                                            <th scope="col" class="text-dark">Question</th>
                                            <th scope="col" class="text-dark">Code</th>
                                            <th scope="col" class="text-dark">Option 1</th>
                                            <th scope="col" class="text-dark">Option 2</th>
                                            <th scope="col" class="text-dark">Option 3</th>
                                            <th scope="col" class="text-dark">Option 4</th>
                                            <th scope="col" class="text-dark">Answer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['assessments'] as $assessment)
                                        @php
        $course=Course::where('id',$assessment->course_id)->first();
        $section = Section::where('id',$assessment->section_name)->first();
        $section_videos = Video::where('id', $assessment->video)->first();

                                        @endphp
                                        <tr>
                                            <td scope="row">{{$course->course_name }}</td>
                                            <td scope="row">{{$section->section_name }}</td>
                                            <td scope="row">{{$section_videos->video_name }}</td>
                                            <td scope="row">{{$assessment->question}}</td>
                                            <td scope="row">{{$assessment->question_code}}</td>
                                            <td scope="row">{{$assessment->option1}}</td>
                                            <td scope="row">{{$assessment->option2}}</td>
                                            <td scope="row">{{$assessment->option3}}</td>
                                            <td scope="row">{{$assessment->option4}}</td>
                                            <td scope="row">{{$assessment->answer}}</td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- <a href="/all_quiz" data-question="question4" class=" p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">VIEW ALL QUIZZES</a> --}}
                            </div>
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

        <script src="js/plugin.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/scripts.js"></script>

        <script>
            $(function () {

               $('.timer').countdown('2021/6/31', function(event) {
                  var $this = $(this).html(event.strftime(''
                    // + '<span>%w</span> weeks '
                    + '<div class="time-count"><span class="text-time">%d</span> <span class="text-day">Day</span></div> '
                    + '<div class="time-count"><span class="text-time">%H</span> <span class="text-day">Hours</span> </div> '
                    + '<div class="time-count"><span class="text-time">%M</span> <span class="text-day">Min</span> </div> '
                    + '<div class="time-count"><span class="text-time">%S</span> <span class="text-day">Sec</span> </div> '));
                });
            });
        </script>

    </body>

    </html>
