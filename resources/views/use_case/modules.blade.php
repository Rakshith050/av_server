
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
                                <h2 class="fw-400 font-lg d-block">All <b>Use Case Modules</b> </h2>
                            </div>
                            <div class="float-right">
                                <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li><a class="fw-500 font-xsss text-dark" href="/admin/use_cases">&nbsp; Use Cases</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    <li class="active fw-500 text-black">&nbsp; Modules</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-lg-12 pt-0 mb-3 ">
                        <div id="accordion" class="accordion mb-0">
                            @foreach ($data['use_case_modules'] as $modules)
                                <div class="card shadow-xss mb-0">
                                    <div class="card-header bg-greylight theme-dark-bg"
                                        id="heading{{ $modules->id }}">
                                        <h5 class="mb-0">
                                            <button class="btn font-xsss fw-600 btn-link "
                                                data-toggle="collapse"
                                                data-target="#collapse{{ $modules->id }}"
                                                aria-expanded="false"
                                                aria-controls="collapse{{ $modules->id }}">{{ $modules->module_title }}</button>
                                                <a href="/admin/add_use_case_elements/{{ $modules->id }}" class="p-2 text-white fw-700 rounded-lg text-center font-xsssss bg-current float-right mr-3"><i class="far fa-edit"></i></a>
                                        </h5>
                                    </div>
                                    <div id="collapse{{ $modules->id }}" class="collapse p-3"
                                        aria-labelledby="heading{{ $modules->id }}"
                                        data-parent="#accordion">
                                        <div class="card-body  p-2">
                                            {{-- @php
                                                $sections = Ebook_section::where('module_id',$modules->id)->get();
                                            @endphp
                                            @foreach ($sections as $section)
                                            <div class="d-flex justify-content-between">
                                                <h5 class="font-xss fw-500 text-dark-500 ml-2">{{$section->section_title}}</h5>
                                                <a href="/admin/add_elements/{{ $section->id }}" class="p-2 text-white fw-700 rounded-lg text-center font-xsssss bg-current float-right mr-3"><i class="far fa-edit"></i></a>
                                            </div>

                                            <hr>

                                            @endforeach --}}


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        </div>

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
