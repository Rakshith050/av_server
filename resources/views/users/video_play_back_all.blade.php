<?php session()->put('curnav','course'); ?>

@include("inc.header")


<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc.topbar")

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg justify-content-between">

                                <h2 class="fw-400 font-lg d-block"><b> Video</b> </h2>
                                <div class="float-right">
                                    <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                        <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/all_courses">&nbsp; Course</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active fw-500 text-black">&nbsp; Add Video</li>
                                    </ol>
                                </div>
                            </div>
                            <div>

                            </div>

                        </div>
                        <div class="">
                            <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                                <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                    <h4 class="font-xs text-dark fw-600 ml-4 mb-0 mt-2">All Videos</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Video name</th>
                                            <th scope="col">View</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($all_video as $index => $video)
                                        <tr>
                                            <th scope="row">{{$index +1}}</th>
                                            <td>{{$video->video_name}}</td>
                                            <td> <a href="/video_play_back/{{$video->id}}" type="button" id="" class="btn btn-default btn-add bg-current text-white font-xsss">View
                                            </a></td>
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

    </div>

    @include("inc.footer")

</body>

</html>
