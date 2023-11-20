@include("inc_admin.header")


<body class="color-theme-orange mont-font">

    <div class="preloader"></div>

    
    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_admin.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_admin.topbar")
            
            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="middle-wrap">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            
                            <div class="card-body p-lg-5 p-4 w-100 border-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb-4 font-lg fw-700 mont-font mb-5">Sitemap</h4>
                                        <div class="nav-caption fw-600 font-xssss text-grey-500 mb-2">Quiz</div>
                                        <ul class="list-inline mb-4">
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="/admin/add_subject" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-primary-gradiant text-white feather-home font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Add subject</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="/admin/add_question" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-gold-gradiant text-white feather-map-pin font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Add questions </h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            {{-- <li class="list-inline-item d-block mr-0"><a href="/admin/add_quiz" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-red-gradiant text-white feather-twitter font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">add quiz</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li> --}}
                                            <li class="list-inline-item d-block mr-0"><a href="/admin/create_quiz" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-red-gradiant text-white feather-twitter font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">create quiz</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <li class="list-inline-item d-block mr-0"><a href="/admin/quiz_master" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-red-gradiant text-white feather-twitter font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">quiz master</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            {{-- <li class="list-inline-item d-block mr-0"><a href="/admin/all_results" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-red-gradiant text-white feather-twitter font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">All Results</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li> --}}
                                        </ul>

                                        <div class="nav-caption fw-600 font-xssss text-grey-500 mb-2">Course</div>
                                        <ul class="list-inline mb-4">
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="/admin/create_course" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-mini-gradiant text-white feather-credit-card font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Create course</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="/admin/create_assesments" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-mini-gradiant text-white feather-credit-card font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Create Assesments</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="/admin/add_videos" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-mini-gradiant text-white feather-credit-card font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Add Videos</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="/admin/all_users" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-mini-gradiant text-white feather-credit-card font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">All users</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                        </ul>

                                        <div class="nav-caption fw-600 font-xssss text-grey-500 mb-2">Internship</div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="/admin/create_internship" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-gold-gradiant text-white feather-bell font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Create internship</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="/admin/all_internships" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-primary-gradiant text-white feather-help-circle font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">All aplications</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="/admin/logout" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-primary-gradiant text-white feather-help-circle font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">Logout</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                        
                    </div>
                </div>
                {{-- @include("inc_trainer.sidebar") --}}
            </div>            
        </div>
        <!-- main content -->
        <div class="app-footer border-0 shadow-lg">
            <a href="default" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default_follower" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default_live_stream" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>            
            <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
            <a href="default_settings" class="nav-content-bttn"><img src="https://via.placeholder.com/60x60.png" alt="user" class="w30 shadow-xss"></a>
        </div>

        <div class="app-header-search">
            <form class="search-form">
                <div class="form-group searchbox mb-0 border-0 p-1">
                    <input type="text" class="form-control border-0" placeholder="Search...">
                    <i class="input-icon">
                        <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
                    </i>
                    <a href="#" class="ml-1 mt-1 d-inline-block close searchbox-close">
                        <i class="ti-close font-xs"></i>
                    </a>
                </div>
            </form>
        </div>

    </div> 


    

   

    @include("inc_admin.footer")

    
</body>

</html>