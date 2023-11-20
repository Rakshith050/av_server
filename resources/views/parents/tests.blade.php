
@include("inc_parent.header")


<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


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
                                <h2 class="fw-400 font-lg d-block">All <b> Results</b> </h2>
                            </div>
                            <div class="float-right">
                                <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li><a class="fw-500 font-xsss text-dark" href="/admin/tests">&nbsp; Test</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active fw-500 text-black">&nbsp; Test Results</li>
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
                                            <th scope="col" class="text-dark">Test Name</th>
                                            {{-- <th scope="col" class="text-dark">Assesment Name</th> --}}
                                            <th scope="col" class="text-dark">Score</th>
                                            <th scope="col" class="text-dark">Percentage</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tests as $test)

                                        <tr>
                                            <td scope="row">{{$test->course_name}}</td>
                                            <td scope="row">{{$test->title}}</td>
                                            <td scope="row">{{$test->score}}</td>
                                            <td scope="row">{{$test->score_percentage}}</td>
                                            {{-- <td><a href="/admin/student_profile/{{$user->id}}" class="btn bg-current text-center text-white font-xsss fw-600 p-2  rounded-lg d-inline-block border-0">View Profile</a>
                                            </td> --}}
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


        </div>




        @include("inc_parent.footer")

        <script src="js/plugin.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/scripts.js"></script>



    </body>

    </html>
