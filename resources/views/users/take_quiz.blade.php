
@include("inc.header")
<style>
    @media (max-width: 992px){
    .main-content.menu-active {
    padding-left: 0;
}

}
</style>
@php
        use App\Models\Quiz_master;
        $question_id= explode(',',$data['all_quiz']->questions);
        $total_count=0;
        foreach ($question_id as $id) {
            // $quiz_masters = Quiz_master::where('id', $id)->first();
            $total_count++;
        }




        // dd($questions);

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
                        {{-- <div class="col-xxl-4 col-xl-5 col-md-12">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-md-5 p-4 border-0 text-center">
                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                <img src="https://via.placeholder.com/200x200.png" alt="icon" class="p-1 img-fluid">
                                <h4 class="fw-700 font-xs mt-4">Bootstrap Framwork</h4>
                                <p class="fw-500 font-xssss text-grey-500 mt-3">Learn new secrets to creating awesome Microsoft Access databases and VBA coding not covered in any of my other courses!</p>
                                <div class="clearfix"></div>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Full Time</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mr-1">Desiner</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">30 Min</span>
                                <div class="clearfix"></div>
                                <ul class="memberlist mt-4 mb-2">
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li><a href="#"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 d-inline-block"></a></li>
                                    <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3">+2</a></li>
                                    <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                </ul>
                                <div class="card-body p-0 w250 ml-auto mr-auto"><div class="timer mt-4 mb-2"></div></div>
                                <div class="clearfix"></div>


                                <a href="#" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">APPLIED</a>
                            </div>
                        </div> --}}
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-5 border-0 text-left question-div">
                                <form method="POST" action="/quiz_submit/{{$data['all_quiz']->id}}">
                                    @csrf

                                    @php
                                        $count=0;
                                    @endphp
                                    @foreach ($question_id as $id)
                                        @php
                                        $quiz_masters = Quiz_master::where('id', $id)->first();
                                        $count++;
                                        @endphp
                                    <div class="card-body p-0" id="question{{$count}}" @if ($count!=1)style="display: none;"

                                    @endif>
                                        <div class="d-flex flex-column">
                                            <h4 class="font-xssss text-uppercase text-current fw-700 ls-3">QUEStion {{$count}}</h4>
                                            <h3 class="font-sm text-grey-800 fw-700 lh-32 mt-4 mb-4">{{$quiz_masters->question}}
                                                @if (!empty($quiz_masters->question_code))
                                                <pre style="background-color:#eee;padding:30px">{{$quiz_masters->question_code}}</pre>
                                                @endif
                                            </h3>
                                            <input type="radio" name="que_{{$count}}_selected" id="option1{{$count}}" value="option1" style="display: none">

                                                <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2" onclick="document.getElementById('option1{{$count}}').checked = true;"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">A</span>{{$quiz_masters->option1}}</p>

                                            <input type="radio" name="que_{{$count}}_selected" id="option2{{$count}}" value="option2" style="display: none">
                                            <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2" onclick="document.getElementById('option2{{$count}}').checked = true;"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">B</span>{{$quiz_masters->option2}}</p>

                                            <input type="radio" name="que_{{$count}}_selected" id="option3{{$count}}" value="option3" style="display: none">
                                            <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2" onclick="document.getElementById('option3{{$count}}').checked = true;"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">C</span>{{$quiz_masters->option3}}</p>

                                            <input type="radio" name="que_{{$count}}_selected" id="option4{{$count}}" value="option4" style="display: none">
                                            <p class="bg-lightblue theme-dark-bg  p-2 mt-3 question-ans style2 rounded-lg font-xssss fw-600 lh-28 text-grey-700 mb-0 p-2" onclick="document.getElementById('option4{{$count}}').checked = true;"><span class="pt-2 pb-2 pl-3 pr-3 mr-4 d-inline-block rounded-lg bg-current text-white font-xssss fw-600 ">D</span>{{$quiz_masters->option4}}</p>

                                            @if ($count==$total_count)
                                            {{-- <a href="home-9.html" data-question="question{{$count+1}}" class="next-bttn p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">VIEW SCORE</a> --}}
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
