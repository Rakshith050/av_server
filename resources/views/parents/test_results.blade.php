
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
                        <div class="col-xxl-1 col-xl-12 col-md-12">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-5 border-0 text-left question-div">
                                <div class="card-body text-center p-3 bg-no-repeat bg-image-topcenter" id="question4" style=" background-image: url(images/user-pattern.png);">
                                    {{-- <img src="/assets/images/check.gif" width="100" alt="icon" class="d-inline-block"> --}}
                                    {{-- <img src="/assets/images/congrats.jpeg" alt="icon" class="d-inline-block"> --}}

                                    <h3 class="fw-700 mt-5 text-grey-900 font-xxl">Test Name : <span>{{$tests->title}}</span></h3>
                                    <p class="font-xss fw-600 lh-30 text-grey-500 mb-0 p-2">Score : {{$tests->score}} </p>
                                    <p class="font-xss fw-600 lh-30 text-grey-500 mb-0 p-2">Percentage : {{$tests->score_percentage}} </p>
                                    {{-- <a href="/default_live_stream//0" data-question="question4" class=" p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">Go back to course</a> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                    @include("inc_parent.sidebar")
                </div>
            </div>


        </div>




        @include("inc_parent.footer")

        <script src="js/plugin.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/scripts.js"></script>


    </body>

    </html>
