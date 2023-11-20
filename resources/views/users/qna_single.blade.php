@include('inc.header')
<style>
    .result {
        margin-top: 10px;
        /* Adjust the margin as needed */
    }
</style>
@php
    $qna = $data['qna'];
@endphp
<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


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
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-2 border-0 text-left question-div">
                                    <div class="card-body p-0" id="question">
                                        <div class="d-flex flex-column" style="padding:30px">
                                            <h4 class="font-xssss text-uppercase text-current fw-700 ls-3">QUESTION</h4>
                                            <h3 class="font-sm text-grey-800 fw-700 lh-32 mt-4 mb-4">{{$qna->question}} <hr>
                                                @if (!empty($qna->answer))
                                                <pre class="text-wrap" style="background-color:#eee;padding:30px">{{$qna->answer}}</pre>
                                                @else
                                                <pre style="background-color:#eee;padding:10px">Not Answered yet!!</pre>
                                                @endif
                                            </h3>


                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>


                @include('inc.sidebar')
            </div>


        </div>

    </div>

    @include('inc.footer')

</body>

</html>
