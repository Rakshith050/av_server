
@include("inc.header")
@php
    use App\Models\Quiz;
@endphp

<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc.navbar")
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc.topbar")
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-md-12">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-5 border-0 text-left question-div">
                                <table class="table">
                                    <h3 class="fw-700">All Results</h3>
                                    <thead>
                                        <tr>
                                            <td scope="col" class="text-dark fw-500">Quiz Name</td>
                                            <td scope="col" class="text-dark fw-500">Score</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['result'] as $res)
                                        @php
                                            $quiz=Quiz::where('id',$res->quiz_id)->first();
                                        @endphp
                                        <tr>
                                            <td scope="row">{{$quiz->title}}</td>
                                            <td scope="row">{{$res->score}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="/recruiter_quizes" data-question="question4" class=" p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">VIEW ALL QUIZZES</a>
                            </div>
                        </div>
                    </div>
                    @include("inc.sidebar")
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




        @include("inc.footer")

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
