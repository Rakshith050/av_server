<?php session()->put('curnav','course'); ?>
@include("inc_admin.header")

@php
    use App\Models\User;
    use App\Models\Subject;
    $subjects =$result = Subject::get();
@endphp
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
                                <h2 class="fw-400 font-lg d-block">Create <b> Course</b> </h2>
                                <div class="float-right">
                                    <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                        <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/all_courses">&nbsp; Course</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active fw-500 text-black">&nbsp; Create Course</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">


                            <form action="/admin/create_course" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Course Name</label>
                                            <input type="text" name="course_name" class="form-control" placeholder="Enter Course Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Course Subject</label>
                                            {{-- <input type="text" name="course_subject" class="form-control"> --}}
                                            <select name="course_subject" id="subject" class="form-control">
                                                <option readonly disabled selected value="">-Select-</option>
                                                @foreach ($subjects as $subject)
                                                <option value="{{$subject->id}}">{{$subject->subject_name}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Course Type</label>
                                            {{-- <input type="text" name="course_category" class="form-control"> --}}
                                            <select class="form-control" name="course_category" id="class" required>
                                                <option readonly>--Select--</option>
                                                <option value="subscription">Subscription</option>
                                                <option value="paid">Paid</option>
                                                <option value="free">Free</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Course Category</label>
                                            {{-- <input type="text" name="course_category" class="form-control"> --}}
                                            <select class="form-control" name="course_category" id="class" required>
                                                <option readonly>--Select--</option>
                                                <option value="developement">Developement</option>
                                                <option value="database">Database</option>
                                                <option value="testing">Testing</option>
                                                <option value="analytics">Analytics</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Course Subcategory</label>
                                            {{-- <input type="text" name="course_subcategory" class="form-control"> --}}
                                            <select class="form-control" name="course_subcategory" id="class" required>
                                                <option readonly>--Select--</option>
                                                <option value="beginner">Beginner</option>
                                                <option value="advanced">Advanced</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            @php
                                                $trainers=User::where('type','trainer')->get();
                                            @endphp
                                            <label class="mont-font fw-600 font-xsss">Course Tutor</label>
                                            <select class="form-control" name="course_tutor" id="class" required>
                                                <option readonly>--Select--</option>
                                                @foreach ($trainers as $trainer)
                                                    <option value="{{$trainer->id}}">{{$trainer->name}}</option>
                                                @endforeach
                                            </select>

                                            {{-- <input type="text" name="course_tutor" class="form-control"> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label class="mont-font fw-600 font-xsss">Description</label>
                                        <textarea name="description" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Course Image</label>
                                            <input type="file" name="course_image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Course Video</label>
                                            <input type="file" name="course_video" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Course Cost</label>
                                            <input readonly type="text" name="course_cost" class="form-control" placeholder="Not Applicable">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Course Tags</label>
                                            <input type="text" name="course_tags" class="form-control" placeholder="Enter Course Tags">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Course Benifits</label>
                                            <textarea type="text" name="course_benifits" class="form-control" placeholder="Enter Course Benifits"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Course Requirements</label>
                                            <textarea type="text" name="course_requirements" class="form-control" placeholder="Enter Course Requirements"></textarea>
                                        </div>
                                    </div>

                                </div>

<br>
<hr><br>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                        <h4 class="font-xs mont-font fw-600">Add Sections</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            {{-- <button id="add_section" class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block">Add Section</button> --}}
                                            {{-- <a href="" id="add_section" class="">Add</a> --}}
                                            <button style="float:right" type="button" id="add_section" class="btn btn-default btn-add bg-current text-white font-xsss">+ADD
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                {{-- <div id="all_sections">
                                    <div id="section" class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Section Name</label>
                                                <input type="text" name="section_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Description</label>
                                                <textarea name="section_desc" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Write your message..." spellcheck="false"></textarea>

                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Section Video</label>
                                                <input type="file" name="section_video" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Section File</label>
                                                <input type="file" name="section_video" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div>
                                <table id="myTable" style="width:100%">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <tr id="section0" class="row">
                                            <td class="col-lg-6 mb-3">
                                                <div>
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Section Name</label>
                                                        <input type="text" name="section_name0" class="form-control" placeholder="Enter Section Name">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-lg-6 mb-3">
                                                <div>
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Description</label>
                                                        <input type="text" name="section_desc0" class="form-control" placeholder="Enter Section Description">

                                                        {{-- <textarea name="section_desc0" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Write your message..." spellcheck="false"></textarea> --}}

                                                    </div>
                                                </div>
                                            </td>
                                            {{-- <td class="col-lg-6 mb-3">
                                                <div>
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Section Video</label>
                                                        <input type="file" name="section_video0" class="form-control">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-lg-6 mb-3">
                                                <div>
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Section File</label>
                                                        <input type="file" name="section_file0" class="form-control">
                                                    </div>
                                                </div>
                                            </td> --}}
                                            {{-- <td class="col-lg-12 mb-3">
                                                <table id="videoTable0">
                                                    <thead>
                                                        <tr>
                                                        <td class="col-lg-2 mb-3">

                                                            <button type="button" id="add_video0" class="btn btn-default btn-add bg-current text-white font-xsss float-right"><i class="fa-solid fa-plus"></i></button>

                                                        </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr id="video0" class="row">
                                                            <td class="col-lg-5 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">Video Name</label>
                                                                        <input type="text" name="video_name" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="col-lg-5 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">Video File</label>
                                                                        <input type="file" name="video_file" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </td>


                                                            <td class="col-lg-12 mb-3">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label class="mont-font fw-600 font-xsss">video Description</label>

                                                                        <textarea name="video_desc" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Write your message..." spellcheck="false"></textarea>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr id="video1" class="row"></tr>
                                                    </tbody>

                                                </table>
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
$(document).ready(function() {
        var i = 1;

        $("#add_section").click(function() {
            $('#section' + i).html("<td class='col-lg-6 mb-3'><label class='mont-font fw-600 font-xsss'>Section Name</label><input name='section_name" + i + "' type='text' class='form-control' placeholder='Enter Section Name'></td><td class='col-lg-6 mb-3'><label class='mont-font fw-600 font-xsss'>Section Description</label><input name='section_desc" + i + "' type='text' class='form-control' placeholder='Enter Section Description'></td>");

            $('#myTable').append('<tr class="row" id="section' + (i + 1) + '"></tr>');
            i++;


            $("#no_of_rows").val(i);
        });


    });


    </script>
</body>

</html>
