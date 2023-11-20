<?php session()->put('curnav','school_qna'); ?>
@include("inc_trainer.header")
@php

    use App\Models\Course;
@endphp

<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_trainer.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_trainer.topbar")

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class=" mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                                {{-- <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a> --}}
                                {{-- <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">All Question</h4> --}}
                                <h2 class="fw-400 font-lg d-block">All <b> Question</b> </h2>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Course name</th>
                                        <th scope="col">Questions</th>
                                        <th scope="col">Reply</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['qna'] as $qna)
                                           <tr>
                                            <td>{{$qna->id}}</td>
                                            <td>{{$qna->subject->subject_name}}</td>
                                            <td>{{$qna->question}}</td>
                                            <td><a href="/teacher/school_qna_answer/{{$qna->id}}" class="btn bg-current text-center text-white font-xsss fw-600 p-1  rounded-lg d-inline-block border-0">Reply</a>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>



            </div>


        </div>

    </div>

    @include("inc_trainer.footer")

</body>

</html>
