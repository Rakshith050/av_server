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

                                <h2 class="fw-400 font-lg d-block">Upload <b> Video</b> </h2>
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
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">


                                <form action="/upload_video_file" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-6">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss"> Video</label><br>

                                                <input type="file" name="video_file" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 ">&nbsp;&nbsp;&nbsp;

                                            {{-- <button  type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0" style="margin-top: 2rem !important;">save</button> --}}
                                            <button onclick="Swal.fire({icon: 'info',title: 'Please Wait, Uploading',showConfirmButton: false,timer: 500000})"type="submit" name="importSubmit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0" style="margin-top: 2rem !important;">Upload</button>

                                        </div>
                                    </div>
                                    <div class="row">

                                    </div>

                                </form>

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
                                            @foreach ($all_videos_names as $index => $video_name)
                                        <tr>
                                            <th scope="row">{{$index +1}}</th>
                                            <td>{{$video_name}}</td>
                                            <td> <a href="/video_encryption_1/{{$video_name}}" type="button" id="" class="btn btn-default btn-add bg-current text-white font-xsss">View
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
