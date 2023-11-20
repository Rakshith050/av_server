@include('inc.header')


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

                    <div class="mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">

                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                                <h2 class="fw-400 font-lg d-block">Ask <b> Question</b> </h2>
                            </div>

                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">


                                <form action="/create_school_forum" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-6">

                                        <div class="col-lg-12">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <label class="mont-font fw-600 font-xsss">Question</label><br>
                                                <textarea rows="4" cols="70" class="form-control" name="question" placeholder="Enter Question.." required></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <button type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">Submit</button>
                                        </div>
                                    </div>

                                </form>

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
