
@include("inc_admin.header")
@php
    use App\Models\Quiz;
    use App\Models\User;
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
                                            <th scope="col" class="text-dark">Student Name</th>
                                            <th scope="col" class="text-dark">Test Name</th>
                                            <th scope="col" class="text-dark">Score</th>
                                            <th scope="col" class="text-dark">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['result'] as $res)
                                        {{-- @php
                                            $quiz=Quiz::where('id',$res->quiz_id)->first();
                                            $user=User::where('id',$res->user_id)->first();
                                        @endphp --}}
                                        <tr>
                                            <td scope="row">{{$res->user->name}}</td>
                                            <td scope="row">{{$res->test->title}}</td>
                                            <td scope="row">{{$res->score}}</td>
                                            <td><a href="/admin/student_profile/{{$res->user->id}}" class="btn bg-current text-center text-white font-xsss fw-600 p-2  rounded-lg d-inline-block border-0">View Profile</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

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
