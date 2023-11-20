<?php session()->put('curnav','course'); ?>

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
                                {{-- <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">Add Subject</h4> --}}
                                <h2 class="fw-400 font-lg d-block">Add <b> Subject</b> </h2>
                                <div class="float-right">
                                    <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                        <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/all_courses">&nbsp; Course</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active fw-500 text-black">&nbsp; Add Subject</li>
                                    </ol>
                                </div>
                            </div>
                            <div>

                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                <form action="/admin/add_school_subject" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-6">
                                        <div class="col-lg-4 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Select Class</label>
                                                <select class="form-control" name="class" id="class" required>
                                                    <option readonly disabled selected value="">-Select-</option>
                                                    @foreach ($data['classes'] as $class)
                                                    <option value="{{$class->id}}">{{$class->class}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss"> Subject Name</label><br>
                                                <input type="text" name="subject" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss"> Subject Image</label><br>
                                                <input type="file" name="subject_image" class="form-control" required accept="image/*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">&nbsp;&nbsp;&nbsp;
                                            <button  type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0" style="margin-top: 2rem !important;">save</button>

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
                                    <h4 class="font-xs text-dark fw-600 ml-4 mb-0 mt-2">All Subjects</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Subject name</th>
                                            {{-- <th scope="col">Edit</th> --}}

                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data['subjects'] as $subject)
                                        <tr>
                                            <th scope="row">{{$subject->id}}</th>
                                            <td>{{$subject->subject_name}}</td>
                                            {{-- <td> <a href="#" type="button" id="" class="btn btn-default btn-add bg-current text-white font-xsss">EDIT --}}
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

    @include("inc_admin.footer")

</body>

</html>
