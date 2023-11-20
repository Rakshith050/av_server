@include("inc_admin.header")
@php
        use App\Models\School_test_master;

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
            {{-- <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg"> --}}
            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg row">
                {{-- <div class="middle-sidebar-left"> --}}
                <div class="middle-sidebar-left col-lg-6">
                    <div class="middle-wrap">
                    {{-- <div class=""> --}}
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">

                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                                    <?php $count=0; ?>
                                @foreach ($test_masters as $test_master)
                                    @if((in_array($test_master->id,$questions))==false)
                                        <?php $count++; ?>
                                    @endif
                                @endforeach
                                    <h2 class="fw-400 font-lg d-block">Select <b> Questions({{$count}})</b> </h2>
                            </div>

                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($test_masters as $test_master)
                                    @if((in_array($test_master->id,$questions))==false)
                                        <p class="text-dark">{{$i}}&nbsp;)&nbsp; {{$test_master->question}}</p>
                                        <a type="button" href="/admin/add_questions_to_test/{{$test_id}}/{{$test_master->id}}" id="" class="btn btn-default btn-add bg-current text-white font-xsss" style="float:right;">
                                            <i class="fa-solid fa-plus"></i></a>
                                        <p>a.{{$test_master->option1}}</p>
                                        <p>b.{{$test_master->option2}}</p>
                                        <p>c.{{$test_master->option3}}</p>
                                        <p>d.{{$test_master->option4}}</p>
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

                                <?php $count=0; ?>
                                @foreach ($questions as $question)
                                    @php
                                        $test_master = School_test_master::where('subject_id', $subject)->where('id', $question)->first();
                                    @endphp
                                        @if ($test_master != null)
                                            <?php $count++; ?>
                                        @endif
                                @endforeach
                                <h2 class="fw-400 font-lg d-block">Selected <b> Questions({{$count}})</b> </h2>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($questions as $question)
                                    @php
                                        $test_master = School_test_master::where('subject_id', $subject)->where('id', $question)->first();

                                    @endphp
                                        @if ($test_master != null)
                                        <p class="text-dark">{{$i}}&nbsp;)&nbsp; {{$test_master->question}}</p>
                                        <a type="button" href="/admin/delete_question_from_test/{{$test_id}}/{{$test_master->id}}" id="" class="btn btn-default btn-add bg-current text-white font-xsss" style="float:right;">
                                            <i class="fa-solid fa-trash-can"></i></a>
                                        <p>a.{{$test_master->option1}}</p>
                                        <p>b.{{$test_master->option2}}</p>
                                        <p>c.{{$test_master->option3}}</p>
                                        <p>d.{{$test_master->option4}}</p>
                                        @php
                                        $i++;
                                        @endphp
                                        @endif

                                @endforeach
                            </div>
                        </div>
                        <a href="/admin/school_tests" class="p-2 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current" style="float: right;">Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("inc_admin.footer")

</body>

</html>
