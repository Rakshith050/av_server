@include("inc_aprex.header")
<style>
    @media (max-width: 992px){
    .main-content.menu-active {
    padding-left: 0;
}

}
</style>

<body class="color-theme-orange mont-font">




    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_aprex.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_aprex.topbar")

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    {{-- <div class="middle-wrap mb-3"> --}}
                    {{-- <div class="mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                                <h2 class="fw-400 font-lg d-block">All <b> Quizzes</b> </h2>
                            </div>

                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 d-flex justify-content-between">
                            <div>
                                <h2 class="fw-400 font-lg d-block">All <b> Quizzes</b> </h2>
                            </div>

                        </div>
                        @foreach ($data['all_quiz'] as $quiz)
                        <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                            <div class="item">
                                <div class="card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                    <div class="card-image w-100 mb-3">
                                        <a href="" class="position-relative d-block"><img src="{{$quiz->image}}" alt="image" class="w-100" style="height: 200px"></a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">Desinger</span>
                                        {{-- <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 40</span> --}}
                                        <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="default_course_details" class="text-dark text-grey-900">{{$quiz->title}}</a></h4>
                                        {{-- <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2"> 24 Lesson </h6> --}}
                                        {{-- <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                            <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                            <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                            <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                            <li><a href="#"><img src="https://via.placeholder.com/30x30.png" alt="user" class="w30 d-inline-block"></a></li>
                                            <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                            <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                        </ul> --}}
                                        <a href="/take_quiz/{{$quiz->id}}"  class="btn bg-current text-center text-white font-xsss fw-600 p-2 w175 rounded-lg d-inline-block border-0">start quiz</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @include("inc_aprex.sidebar")
            </div>
        </div>
    </div>

    @include("inc_aprex.footer")

</body>

</html>
