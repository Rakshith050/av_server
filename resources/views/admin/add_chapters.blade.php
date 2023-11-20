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
                    <div class="">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg justify-content-between">
                                <h2 class="fw-400 font-lg d-block">Create <b> Chapters</b> </h2>
                                <div class="float-right">
                                    <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                        <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/all_courses">&nbsp; Course</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active fw-500 text-black">&nbsp; Create Chapters</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">


                            <form action="/admin/add_chapters" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Select Class</label>
                                            {{-- <input type="text" name="course_category" class="form-control"> --}}
                                            <select class="form-control" name="class" id="class" required>
                                                <option readonly disabled selected value="">-Select-</option>
                                                @foreach ($classes as $class)
                                                <option value="{{$class->id}}">{{$class->class}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Select Subject</label>
                                            <select name="subject" id="subject" class="form-control">
                                                <option readonly disabled selected value="">-Select-</option>
                                                {{-- @foreach ($subjects as $subject)
                                                <option value="{{$subject->id}}">{{$subject->subject_name}} </option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>

                                </div>

<br>
<hr><br>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                        <h4 class="font-xs mont-font fw-600">Add Chapters</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">

                                            <button style="float:right" type="button" id="add_section" class="btn btn-default btn-add bg-current text-white font-xsss">+ADD
                                            </button>

                                        </div>
                                    </div>
                                </div>

                                <div>
                                <table id="myTable" style="width:100%">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <tr id="section0" class="row">
                                            <td class="col-lg-6 mb-3">
                                                <div>
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Chapter Name</label>
                                                        <input type="text" name="chapter_name0" class="form-control" placeholder="Enter Chapter Name">
                                                    </div>
                                                </div>
                                            </td>
                                            {{-- <td class="col-lg-6 mb-3">
                                                <div>
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Description</label>
                                                        <input type="text" name="section_desc0" class="form-control" placeholder="Enter Section Description">

                                                    </div>
                                                </div>
                                            </td> --}}


                                        </tr>
                                        <tr id="section1" class="row"></tr>
                                    </tbody>
                                </table>
                                <input id="no_of_rows" type="hidden" value="1" name="no_of_rows" >
                            </div>
                                <div class="col-lg-12">
                                    <button style="float:right" type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>

                                    {{-- <a href="#" class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block">Save</a> --}}
                                </div>
                            </form>
                            </div>
                        </div>
                        <!-- <div class="card w-100 border-0 p-2"></div> -->
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
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/60x60.png" alt="user" class="w30 shadow-xss"></a>
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


    <script>
        $('#class').change(function() {
            var classId = $(this).val();
            if (classId) {
                // alert(classId);
                $.ajax({
                    url: '/admin/get_subjects',
                    type: 'get',
                    dataType: 'json',
                    data: {
                        class_id: classId
                    },
                    success: function(data) {
                        console.log(data);
                        // console.log(data.length);
                        // var sections = JSON.parse(data);
                        var subject = data;
                        // console.log(subject.length);
                        var options = '<option readonly disabled selected value="">--Select--</option>';
                        for (var i = 0; i < subject.length; i++) {
                            // console.log(data);
                            options += '<option value="' + subject[i].id + '">' + subject[i]
                                .subject_name + '</option>';
                        }
                        $('#subject').html(options);
                    }
                });
            } else {
                $('#subject').html('<option value="">Select Chapter</option>');
            }
        });
    </script>

    <script>
$(document).ready(function() {
        var i = 1;

        $("#add_section").click(function() {
            $('#section' + i).html("<td class='col-lg-6 mb-3'><label class='mont-font fw-600 font-xsss'>Chapter Name</label><input name='chapter_name" + i + "' type='text' class='form-control' placeholder='Enter Chapter Name'></td>");

            $('#myTable').append('<tr class="row" id="section' + (i + 1) + '"></tr>');
            i++;


            $("#no_of_rows").val(i);
        });


    });

    </script>
</body>

</html>
