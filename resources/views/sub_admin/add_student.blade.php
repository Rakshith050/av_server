<?php session()->put('curnav','add_student'); ?>

@include("inc_admin.header")


<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_admin.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_admin.topbar")

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg justify-content-between">
                                {{-- <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a> --}}
                                {{-- <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">Add Student</h4> --}}
                                <h2 class="fw-400 font-lg d-block">Add <b> Student</b> </h2>
                                <div class="float-right">
                                    <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                        <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/all_courses">&nbsp; Course</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active fw-500 text-black">&nbsp; Add Student</li>
                                    </ol>
                                </div>
                            </div>
                            <div>

                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">


                                <form action="/sub_admin/add_student" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-6">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Student Name</label><br>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">School Name</label><br>

                                                <select name="school" id="" class="form-control">
                                                    <option value="">-Select-</option>
                                                    @foreach ($school as $item)
                                                    <option value="{{$item->id}}">{{$item->school_name}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Class</label><br>
                                                <select name="class" id="" class="form-control">
                                                    <option value="">-Select-</option>
                                                    @foreach ($classes as $item)
                                                    <option value="{{$item->id}}">{{$item->class}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Section</label><br>
                                                <select name="section" id="" class="form-control">
                                                    <option value="">-Select-</option>
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    {{-- @foreach ($school as $item)
                                                    <option value="">{{$item->school_name}}</option>
                                                    @endforeach --}}
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 ">&nbsp;&nbsp;&nbsp;
                                            <button  type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0" style="margin-top: 2rem !important; float:right;">save</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>



            </div>


        </div>

    </div>

    @include("inc_admin.footer")

</body>

</html>
