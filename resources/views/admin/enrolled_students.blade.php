
@include("inc_admin.header")
@php
    use App\Models\Quiz;
    use App\Models\User;
    use App\Models\Course;
    use Carbon\Carbon;

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
                                <h2 class="fw-400 font-lg d-block">Enrolled <b> Students</b> </h2>
                            </div>
                            <div class="float-right">
                                <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li><a class="fw-500 font-xsss text-dark" href="/admin/all_courses">&nbsp; Course</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active fw-500 text-black">&nbsp; Enrolled Students</li>
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

                                            <th scope="col" class="text-dark">Student Name</th>
                                            <th scope="col" class="text-dark">Course Name</th>
                                            <th scope="col" class="text-dark">Enrolled Date</th>
                                            <th scope="col" class="text-dark">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['enrolled_students'] as $enrolled)
                                        @php
                                            $course=Course::where('id',$enrolled->course_id)->first();
                                            $user=User::where('id',$enrolled->student_id)->first();
                                        @endphp
                                        <tr>
                                            <td scope="row">{{$user->name}}</td>
                                            <td scope="row">{{$course->course_name}}</td>
                                            <td scope="row">{{$enrolled->created_at->format('d-m-Y')}}</td>
                                            <td><a href="/admin/student_profile/{{$enrolled->student_id}}" class="btn bg-current text-center text-white font-xsss fw-600 p-2  rounded-lg d-inline-block border-0">View Profile</a>
                                            </td>

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
