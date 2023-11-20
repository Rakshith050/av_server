<?php session()->put('curnav','teachers'); ?>

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
                                <h2 class="fw-400 font-lg d-block">All <b> Teachers</b> </h2>
                            </div>
                            <div class="float-right">
                                <a href="/sub_admin/add_teacher" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">Add Teacher</a>
                            </div>
                        </div>

                        <div class="card-body p-lg-5 p-4 w-100 border-0 ">

                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl. No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col" class="text-dark">Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $index => $teacher)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $teacher->user->name }}</td>
                                            <td><a href="#"
                                                    class="btn bg-current text-center text-white font-xsss fw-600 p-2  rounded-lg d-inline-block border-0">View
                                                    </a>
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
