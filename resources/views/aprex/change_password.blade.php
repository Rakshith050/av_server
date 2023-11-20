<?php session()->put('curnav','change_password'); ?>

@include("inc_aprex.header")


<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_aprex.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_aprex.topbar")

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="middle-wrap">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">

                            <div class="card-body p-lg-5 p-4 w-100 border-0">
                                <h2 class="fw-400 font-lg d-block">Change <b> Credentials</b> </h2>

                                <form action="/aprex/change_password" method="POST">
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
                @include("inc_aprex.sidebar")
            </div>
        </div>
        @include("inc_aprex.footer_app")

    </div>


    @include("inc_aprex.footer")


</body>

</html>
