
@include("inc.header")
@php

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

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-5 border-0 text-left question-div">
                                <form method="POST" action="/assesment_submit_school/{{$data['subject_id']}}/{{$data['chapter_id']}}/{{$data['video_id']}}">
                                    @csrf

                                    @php
                                        $count=0;
                                    @endphp
                                    @foreach ($data['assesment'] as $assesment)
                                        @php

                                        $count++;
                                        @endphp
                                    <div class="card-body p-0" id="question{{$count}}" @if ($count!=1)style="display: none;"

                                    @endif>
                                        <div class="d-flex flex-column">
                                            <h4 class="font-xssss text-uppercase text-current fw-700 ls-3">QUEStion {{$count}}</h4>
                                            <h3 class="font-sm text-grey-800 fw-700 lh-32 mt-4 mb-4">{{$assesment->question}}
                                                @if (!empty($assesment->question_code))
                                                <pre style="background-color:#eee;padding:30px">{{$assesment->question_code}}</pre>
                                                @endif
                                            </h3>
                                            <input type="hidden" name="questions[]" value="{{$assesment->id}}">
                                            <input type="radio" name="que_{{$count}}_selected" id="option1{{$count}}" value="1" style="display: none">

                                                <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2" onclick="document.getElementById('option1{{$count}}').checked = true;"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">A</span>{{$assesment->option1}}</p>

                                            <input type="radio" name="que_{{$count}}_selected" id="option2{{$count}}" value="2" style="display: none">
                                            <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2" onclick="document.getElementById('option2{{$count}}').checked = true;"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">B</span>{{$assesment->option2}}</p>

                                            <input type="radio" name="que_{{$count}}_selected" id="option3{{$count}}" value="3" style="display: none">
                                            <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2" onclick="document.getElementById('option3{{$count}}').checked = true;"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">C</span>{{$assesment->option3}}</p>

                                            <input type="radio" name="que_{{$count}}_selected" id="option4{{$count}}" value="4" style="display: none">
                                            <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2" onclick="document.getElementById('option4{{$count}}').checked = true;"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">D</span>{{$assesment->option4}}</p>

                                            @if ($count==count($data['assesment']))

                                            <button type="submit" class="p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">SUBMIT</button>
                                            @else
                                            <a href="#" data-question="question{{$count+1}}" class="next-bttn p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">NEXT</a>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach

                                    {{-- <div class="card-body p-0" id="question2" style="display: none;">
                                        <h4 class="font-xssss text-uppercase text-current fw-700 ls-3">QUEStion 2</h4>
                                        <h3 class="font-sm text-grey-800 fw-700 lh-32 mt-4 mb-4">What is the name of the first page you encounter after logging into your web page and second page you encounter after logging into your web page and second page you encounter after logging?</h3>
                                        <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">A</span>Excel workshops for business professionals.</p>
                                        <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">B</span>Create professional Excel reports/dashboards </p>
                                        <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">C</span>Bangalore University and a long time.</p>
                                        <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">D</span>None of them.</p>
                                        <a href="#" data-question="question3" class="next-bttn p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">NEXT</a>
                                    </div>

                                    <div class="card-body p-0" id="question3" style="display: none;">
                                        <h4 class="font-xssss text-uppercase text-current fw-700 ls-3">QUEStion 3</h4>
                                        <h3 class="font-sm text-grey-800 fw-700 lh-32 mt-4 mb-0">What is the name of the first page you encounter after logging into your web page?</h3>
                                        <p class="bg-lightblue theme-dark-bg  float-left w__48 d-inline-block mt-3 question-ans style3 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-block w-100 rounded-lg bg-lightblue theme-dark-bg  text-current font-xssss fw-700 ">TRUE</span></p>
                                        <p class="bg-lightblue theme-dark-bg  float-right w__48 d-inline-block mt-3 question-ans style3 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-block w-100 rounded-lg bg-lightblue theme-dark-bg  text-current font-xssss fw-700 ">FLASE</span></p>
                                        <div class="clearfix"></div>
                                        <a href="#" data-question="question4" class="next-bttn p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">NEXT</a>
                                    </div>
                                    <div class="card-body text-center p-3 bg-no-repeat bg-image-topcenter" id="question4" style="display: none; background-image: url(images/user-pattern.png);">
                                        <img src="https://via.placeholder.com/50x150.png" alt="icon" class="d-inline-block">
                                        <h2 class="fw-700 mt-5 text-grey-900 font-xxl">Congratulation</h2>
                                        <p class="font-xssss fw-600 lh-30 text-grey-500 mb-0 p-2">I have a Business Management degree from Bangalore University and a long time Excel expert. I create professional Excel reports/dashboards for clients and conduct Excel workshops for business professionals.</p>
                                        <a href="home-9.html" data-question="question4" class="next-bttn p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">VIEW SCORE</a>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="middle-sidebar-right scroll-bar">
                    <div class="middle-sidebar-right-content">

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body p-2 d-block text-center bg-no-repeat bg-image-topcenter" style="background-image: url(images/user-pattern.png);">
                                <a href="#" class="position-absolute right-0 mr-4"><i class="feather-edit text-grey-500 font-xs"></i></a>
                                <figure class="avatar ml-auto mr-auto mb-0 mt-2 w90"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right shadow-sm rounded-circle w-100"></figure>
                                <div class="clearfix"></div>
                                <h2 class="text-black font-xss lh-3 fw-700 mt-3 mb-1">Hendrix Stamp</h2>
                                <h4 class="text-grey-500 font-xssss mt-0"><span class="d-inline-block bg-success btn-round-xss m-0"></span> Available</h4>
                                <div class="clearfix"></div>
                                <div class="col-12 text-center mt-4 mb-2">
                                    <a href="#" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-comment-alt font-sm"></i></a>
                                    <a href="#" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-lock font-sm"></i></a>
                                    <a href="#" class="p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                                <ul class="list-inline border-0 mt-4">
                                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">500+ <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Connections</span></h4></li>
                                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">88.7 k <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Follower</span></h4></li>
                                    <li class="list-inline-item text-center"><h4 class="fw-700 font-md">1,334 <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Followings</span></h4></li>
                                </ul>

                                <div class="col-12 pl-0 mt-4 text-left">
                                    <h4 class="text-grey-800 font-xsss fw-700 mb-3 d-block">My Skill <a href="#"><i class="ti-angle-right font-xsssss text-grey-700 float-right "></i></a></h4>
                                    <div class="carousel-card owl-carousel owl-theme overflow-visible nav-none">
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-3"></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card theme-light-bg overflow-hidden rounded-xxl border-0 mb-3">
                            <div class="card-body d-flex justify-content-between align-items-end p-4">
                                <div>
                                    <h4 class="font-xsss text-grey-900 mb-2 d-flex align-items-center justify-content-between mt-2 fw-700">
                                        Dark Mode
                                    </h4>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                                    <label class="custom-control-label bg-success" for="darkmodeswitch"></label>
                                </div>

                            </div>
                        </div>

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body d-block text-left">
                                <h1 class="text-grey-800 font-xl fw-900 mb-4 lh-3">Sign up for our newsletter</h1>
                                <form action="#" class="mt-3">
                                    <div class="form-group icon-input">
                                        <i class="ti-email text-grey-500 font-sm"></i>
                                        <input type="text" class="form-control mb-2 bg-greylight border-0 style1-input pl-5" placeholder="Enail address">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox">By checking this box, you confirm that you have read and are agreeing to our terms of use regarding.</label>
                                    </div>
                                </form>
                                <ul class="d-flex align-items-center justify-content-between mt-3">
                                    <li><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-pinterest"><i class="font-xs ti-pinterest text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-circle text-white btn-neutral sidebar-right">
                    <i class="ti-angle-left"></i>
                </button>
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
