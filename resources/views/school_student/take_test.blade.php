
@include("inc.header")

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

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-5 border-0 text-left question-div">
                                <form method="POST" action="/school_test_submit/{{$data['all_quiz']->id}}">
                                    @csrf

                                    @php
                                        $count=0;
                                    @endphp
                                    <input type="hidden" name="subject_id" value="{{$data['subject_id']}}">
                                    @foreach ($quiz_masters as $test)
                                    @php
                                        $count++;
                                        @endphp
                                    <div class="card-body p-0" id="question{{$count}}" @if ($count!=1)style="display: none;"

                                    @endif>
                                        <div class="d-flex flex-column">
                                            <h4 class="font-xssss text-uppercase text-current fw-700 ls-3">QUEStion {{$count}}</h4>
                                            <h3 class="font-sm text-grey-800 fw-700 lh-32 mt-4 mb-4">{{$test->question}}
                                                @if (!empty($test->question_code))
                                                <pre style="background-color:#eee;padding:30px">{{$test->question_code}}</pre>
                                                @endif
                                            </h3>
                                            <input type="radio" name="que_{{$count}}_selected" id="option1{{$count}}" value="1" style="display: none">

                                                <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2" onclick="document.getElementById('option1{{$count}}').checked = true;"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">A</span>{{$test->option1}}</p>

                                            <input type="radio" name="que_{{$count}}_selected" id="option2{{$count}}" value="2" style="display: none">
                                            <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2" onclick="document.getElementById('option2{{$count}}').checked = true;"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">B</span>{{$test->option2}}</p>

                                            <input type="radio" name="que_{{$count}}_selected" id="option3{{$count}}" value="3" style="display: none">
                                            <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2" onclick="document.getElementById('option3{{$count}}').checked = true;"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">C</span>{{$test->option3}}</p>

                                            <input type="radio" name="que_{{$count}}_selected" id="option4{{$count}}" value="4" style="display: none">
                                            <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2" onclick="document.getElementById('option4{{$count}}').checked = true;"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">D</span>{{$test->option4}}</p>

                                            @if ($count==$total_count)

                                            <button type="submit" class="p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">SUBMIT</button>
                                            @else
                                            <a href="#" data-question="question{{$count+1}}" class="next-bttn p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">NEXT</a>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach


                                </form>
                            </div>
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

    {{-- <script src="js/plugin.js"></script> --}}
    <script src="/assetsjs/countdown.js"></script>
    {{-- <script src="js/scripts.js"></script> --}}


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
