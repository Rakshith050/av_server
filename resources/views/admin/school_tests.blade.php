<?php session()->put('curnav', 'school_test'); ?>
@include('inc_admin.header')
<?php use App\Models\Subject; ?>


<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc_admin.navbar')

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc_admin.topbar')

            <div class="middle-sidebar-bottom ">

                <div class="middle-sidebar-left">

                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 d-flex justify-content-between">
                            <div>
                                <h2 class="fw-400 font-lg d-block">All <b> Tests</b> </h2>
                            </div>
                            <div class="float-right">
                                <a href="/admin/add_school_questions"
                                    class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">ADD
                                    QUESTIONS</a>
                                <a href="/admin/school_test_master"
                                    class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">ALL
                                    QUESTIONS</a>
                                <a href="/admin/create_school_test"
                                    class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">CREATE
                                    TEST</a>
                            </div>
                        </div>
                        @foreach ($data['all_test'] as $test)
                            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                <div class="item">
                                    <div class="card p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                        <div class="card-image w-100 mb-3">
                                            <a href="" class="position-relative d-block"><img
                                                    src="/{{ $test->image }}" alt="image" class="w-100"
                                                    style="height: 200px"></a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <span
                                                class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">{{ $test->subject->subject_name }}</span>

                                            <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="default_course_details"
                                                    class="text-dark text-grey-900">{{ $test->title }}</a></h4>

                                            <div class="text-center">
                                                <a href="/admin/school_test_details/{{ $test->id }}"
                                                    class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">DETAILS</a>
                                                <a href="/admin/school_test_results/{{ $test->id }}"
                                                    class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">RESULTS</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('inc_admin.footer')

</body>

</html>
