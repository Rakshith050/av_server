@include('inc.header')
@php
    use App\Models\User;
@endphp
<style>
    /* .question {
        margin-bottom: 40px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
    }

    .question h3 {
        margin-bottom: 10px;
    }

    .answers-container {
        margin-top: 40px;
    }

    .answer {
        margin-bottom: 20px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
    }

    .answer h4 {
        margin-bottom: 10px;
    } */
</style>

<body class="color-theme-orange mont-font">

    <div class="preloader"></div>

    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc.navbar')

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc.topbar')

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">

                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-5 border-0 text-left question-div">
                                <div class="row">
                                    <div class="col-lg-12 pt-2 mb-3 d-flex justify-content-between">
                                        <div>
                                            <h2 class="fw-400 font-lg d-block text-current"><b> Question</b> </h2>
                                        </div>
                                        <div class="float-right">
                                            <a href="/add_school_forum" class="btn btn-info float-right mt-2 mr-2 bg-current font-xssss fw-600"
                                                style="border: 0;"><i class="fa-solid fa-plus fa-xl"></i> ASK QUESTION</a>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card-body p-0" id="question">
                                        <div class="d-flex flex-column">
                                            <h3 class="font-sm text-grey-800 fw-700 lh-32 mt-4 mb-4">{{ $forum_question->question }}
                                                <a href="/answer_school_forum/{{ $forum_question->id }}"
                                                    class="btn btn-outline-info float-right font-xssss fw-600 "><i
                                                        class="fa-solid fa-plus fa-xl"></i> Answer</a>
                                                {{-- @if (!empty($qna->answer))
                                                <pre class="text-wrap" style="background-color:#eee;padding:30px">{{$qna->answer}}</pre>
                                                @else
                                                <pre style="background-color:#eee;padding:30px">Not Answered yet!!</pre>
                                                @endif --}} <hr>
                                                @foreach ($forum_answers as $forum_answer)
                                            @php

                                                $student = User::where('id', $forum_answer->student_id)->first();
                                            @endphp
                                            <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h4 class="font-xsss"><i class="fa fa-user" style="font-size:10px; background:orange;color:#fff;padding:5px;border-radius: 50%;"></i> {{ $student->name }}</h4>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="btn-toolbar" style="float:right">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-inverse disabled"><i class="fa fa-thumbs-up"></i></a>
                                                                 <a href="#" class="btn btn-inverse disabled"><i class="fa fa-thumbs-down"></i></a>
                                                            </div>

                                                          </div>
                                                    </div>
                                                    </div>
                                                </div>



                                                <pre class="text-wrap" style="background-color:#eee;padding:10px">{{$forum_answer->answer}}</pre>


                                        @endforeach
                                            </h3>


                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- @include('inc.sidebar') --}}
            </div>


        </div>

    </div>

    @include('inc.footer')

</body>

</html>
