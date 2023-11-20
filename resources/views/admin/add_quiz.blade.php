@include("inc_admin.header")


<body class="color-theme-orange mont-font">

    @php
        use App\Models\Quiz;
        use App\Models\Quiz_master;
         $last_quiz=Quiz::latest()->first();
        $subject=$last_quiz->subject;
        $questions= explode(',',$last_quiz->questions);

        // dd($questions);

        $quiz_masters = Quiz_master::where('subject', $subject)->get();
        // dd($quiz_masters);
    @endphp
    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_admin.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_admin.topbar")
            {{-- <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg"> --}}
            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg row">
                {{-- <div class="middle-sidebar-left"> --}}
                <div class="middle-sidebar-left col-lg-6">
                    <div class="middle-wrap">
                    {{-- <div class=""> --}}
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                           
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                                    <?php $count=0; ?>
                                @foreach ($quiz_masters as $quiz_master)
                                    @if((in_array($quiz_master->id,$questions))==false)
                                        <?php $count++; ?>
                                    @endif
                                @endforeach
                                    <h2 class="fw-400 font-lg d-block">Select <b> Questions({{$count}})</b> </h2>
                            </div>

                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($quiz_masters as $quiz_master)
                                    @if((in_array($quiz_master->id,$questions))==false)
                                        <p class="text-dark">{{$i}}&nbsp;)&nbsp; {{$quiz_master->question}}</p>
                                        <a type="button" href="/admin/add_question_to_quiz/{{$quiz_master->id}}" id="" class="btn btn-default btn-add bg-current text-white font-xsss" style="float:right;">
                                            <i class="fa-solid fa-plus"></i></a>
                                        <p>a.{{$quiz_master->option1}}</p>
                                        <p>b.{{$quiz_master->option2}}</p>
                                        <p>c.{{$quiz_master->option3}}</p>
                                        <p>d.{{$quiz_master->option4}}</p>
                                        @php
                                            $i++;
                                        @endphp
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="middle-sidebar-left col-lg-6">
                    <div class="middle-wrap">
                    {{-- <div class=""> --}}
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                                {{-- <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a> --}}
                                <?php $count=0; ?>
                                @foreach ($questions as $question)
                                    @php
                                        $quiz_master = Quiz_master::where('subject', $subject)->where('id', $question)->first();
                                    @endphp
                                        @if ($quiz_master != null)
                                            <?php $count++; ?>
                                        @endif
                                @endforeach
                                {{-- <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">Selected Question({{$count}})</h4> --}}
                                <h2 class="fw-400 font-lg d-block">Selected <b> Questions({{$count}})</b> </h2>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($questions as $question)

                                    @php
                                        $quiz_master = Quiz_master::where('subject', $subject)->where('id', $question)->first();

                                    @endphp
                                        @if ($quiz_master != null)
                                        <p class="text-dark">{{$i}}&nbsp;)&nbsp; {{$quiz_master->question}}</p>
                                        <a type="button" href="/admin/delete_question_from_quiz/{{$quiz_master->id}}" id="" class="btn btn-default btn-add bg-current text-white font-xsss" style="float:right;">
                                            <i class="fa-solid fa-trash-can"></i></a>
                                        <p>a.{{$quiz_master->option1}}</p>
                                        <p>b.{{$quiz_master->option2}}</p>
                                        <p>c.{{$quiz_master->option3}}</p>
                                        <p>d.{{$quiz_master->option4}}</p>
                                        @php
                                        $i++;
                                        @endphp
                                        @endif

                                @endforeach
                            </div>
                        </div>
                        <a href="/admin/tests" class="p-2 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current" style="float: right;">Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("inc_admin.footer")

</body>

</html>
