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
                                <h2 class="fw-400 font-lg d-block">Change <b> Credentials</b> </h2>

                                <form action="/admin/change_password" method="POST">
                                    @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$data['user']->name}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Email</label>
                                            <input type="text" name="email" class="form-control" placeholder="Enter Email" value="{{$data['user']->email}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button  type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">Submit</button>
                                    </div>

                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>
                @include("inc_admin.sidebar")
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
