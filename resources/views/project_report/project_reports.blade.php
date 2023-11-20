<?php session()->put('curnav','project_reports'); ?>

@include("inc_admin.header")

@php

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
                                <h2 class="fw-400 font-lg d-block">All <b> Project Reports</b> </h2>
                            </div>
                            <div class="float-right">
                                <a href="/admin/create_project_reports" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">Create Project Reports</a>
                            </div>
                        </div>
                        @foreach ($data['project_reports'] as $project_report)

                        @php

                        @endphp

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                                <a href="#" class="btn-round-xxxl rounded-lg bg-lightblue ml-auto mr-auto">
                                    <img src="/{{$project_report->image}}" alt="icon" class="p-1" style="width: 50px;height: 50px;">
                                </a>
                                <h4 class="fw-700 font-xs mt-4">{{$project_report->title}}</h4>
                                <a href="/admin/preview_project_report/{{$project_report->id}}" target="_blank" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">VIEW</a>
                                <a href="/admin/project_report_modules/{{$project_report->id}}" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w100 text-center font-xsssss ls-3 bg-current">EDIT</a>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- main content -->
        <div class="app-footer border-0 shadow-lg">
            <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default-follower.html" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>
            <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 shadow-xss"></a>
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
