@include("inc_admin.header")

@php
    use App\Models\Subject;
    use App\Models\Quiz_master;
    $quiz = $data['quizzes'];
@endphp
<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


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
                                <h2 class="fw-400 font-lg d-block">Quiz <b> Details</b> </h2>
                            </div>
                            <div class="float-right">
                                <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li><a class="fw-500 font-xsss text-dark" href="/admin/quizzes">&nbsp; Quiz</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active fw-500 text-black">&nbsp; Quiz Details</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                <div class="">
                                    <a href="#" class="btn-round-xxxl rounded-lg  ml-auto mr-auto">
                                        <img src="/{{$quiz->image}}" alt="icon" class="p-1" style="width: 70px;height: 70px;">
                                    </a>
                                    <h4 class="fw-700 font-xs mt-4">{{$quiz->title}}</h4>
                                    <p class="fw-500 font-xsss text-dark-400 mt-3">{{$quiz->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0">
                                <div class="">
                                    @php
                                        $questions =explode(',',$quiz->questions);
                                        $count =0;
                                    @endphp
                                    @foreach ($questions as $question)
                                    @php
                                        $ind_question = Quiz_master::where('id',$question)->first();
                                        $count++;
                                        if ($ind_question->answer == 'option1') {
                                            # code...
                                            $answer = $ind_question->option1;
                                        } else if($ind_question->answer == 'option2') {
                                            # code...
                                            $answer = $ind_question->option2;
                                        }

                                    @endphp

                                        <h4 class="fw-500 font-xss mt-4" >Q{{$count}}. {{$ind_question->question}}</h4>
                                        <p class="fw-500 font-xss  mt-3 {{ $ind_question->answer == 'option1' ? 'text-success' : '' }}" >A. {{$ind_question->option1}}</p>
                                        <p class="fw-500 font-xss  mt-3 {{ $ind_question->answer == 'option2' ? 'text-success' : '' }}">B. {{$ind_question->option2}}</p>
                                        <p class="fw-500 font-xss  mt-3 {{ $ind_question->answer == 'option3' ? 'text-success' : '' }}">C. {{$ind_question->option3}}</p>
                                        <p class="fw-500 font-xss  mt-3 {{ $ind_question->answer == 'option4' ? 'text-success' : '' }}">D. {{$ind_question->option4}}</p>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content -->

    </div>





    @include("inc_admin.footer")


</body>

</html>
