@include('inc_admin.header')



<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc_admin.navbar')

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc_admin.topbar')


            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg justify-content-between">

                                <h2 class="fw-400 font-lg d-block">Add <b> Videos</b> </h2>
                                <div class="float-right">
                                    <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                        <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/all_courses">&nbsp; Course</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active fw-500 text-black">&nbsp; Add Videos</li>
                                    </ol>
                                </div>

                            </div>
                            {{-- ----- --}}
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                <form method="POST" action="/admin/add_videos" enctype="multipart/form-data"
                                    autocomplete="OFF">
                                    @csrf
                                    <div class="row">
                                        <div class=" col-sm-12">
                                            <div class="card-box">
                                                {{-- <div class="card-head">
                                                    <header>Add Question </header>
                                                    <a href="javascript:void(0)" class="tip">
				                                        <p class="icon-info "></p>
                                                        <span>Guidlines to enter the Add question given by Admin will be shown here.</span>
                                                    </a>


                                                </div> --}}
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div
                                                            class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <div class="row">
                                                                {{-- <div class="col-lg-3">
                                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                                        <label class="mdl-textfield__label">Select Class</label><br>
                                                                        <select class="form-control" name="class" id="class" required>
                                                                            <option readonly>--Select--</option>
                                                                            <option >5</option>
                                                                            <option >6</option>
                                                                            <option >7</option>

                                                                        </select>
                                                                    </div>
                                                                </div> --}}
                                                                <div class="col-lg-6">
                                                                    <div
                                                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                                        <label class="mont-font fw-600 font-xsss">Select
                                                                            Course</label><br>

                                                                        <select name="course" id="course"
                                                                            class="form-control">
                                                                            <option readonly disabled selected
                                                                                value="">-Select-</option>
                                                                            @foreach ($data['courses'] as $course)
                                                                                <option value="{{ $course->id }}">
                                                                                    {{ $course->course_name }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div
                                                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                                        <label class="mont-font fw-600 font-xsss">Select
                                                                            Section</label><br>

                                                                        <select name="section" id="section-dropdown"
                                                                            class="form-control">
                                                                            {{-- <option readonly disabled selected value="">-Select-</option> --}}
                                                                            {{-- @foreach ($data['sections'] as $section)
                                                                            <option value="">{{$section->section_name}} </option>
                                                                            @endforeach --}}
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-sm-12">    <br><hr><br>
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-3">
                                                                <div class="form-group">
                                                                    <h4 class="font-xs mont-font fw-600">Videos</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 mb-3">
                                                                <div class="form-group">
                                                                    <button type="button" id="add_section" style="float:right"
                                                                        class="btn btn-default btn-add bg-current text-white font-xsss">+ADD
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-sm-12">
                                                        <table id="myTable">
                                                            <thead>

                                                            </thead>
                                                            <tbody>
                                                                <tr id="section0" class="row">
                                                                    <td class="col-lg-6 mb-3">
                                                                        <div>
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="mont-font fw-600 font-xsss">Video
                                                                                    Name</label>
                                                                                <input type="text"
                                                                                    name="video_name[]"
                                                                                    class="form-control" placeholder="Enter Video Name">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="col-lg-6 mb-3">
                                                                        <div>
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="mont-font fw-600 font-xsss">Video
                                                                                    File</label>
                                                                                <input type="file"
                                                                                    name="video_file[]"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td class="col-lg-12 mb-3">
                                                                        <div>
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="mont-font fw-600 font-xsss">video
                                                                                    Description</label>

                                                                                <textarea name="video_desc[]" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5"
                                                                                    placeholder="Write your message..." spellcheck="false"></textarea>

                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr id="section1" class="row"></tr>
                                                            </tbody>
                                                            <input id="no_of_rows" type="hidden" value="1"
                                                                name="no_of_rows">
                                                        </table>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit"
                                            class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>

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

    </div>

    @include('inc_admin.footer')

    {{-- <script>
function showCode() {
  document.getElementById("code").style.display = "block";
}
</script> --}}




    <script>
        $('#course').change(function() {
            var subjectId = $(this).val();
            if (subjectId) {
                // alert(subjectId);
                $.ajax({
                    url: '/admin/get_sections2',
                    type: 'get',
                    dataType: 'json',
                    data: {
                        subject_id: subjectId
                    },
                    success: function(data) {
                        console.log(data);
                        // console.log(data.length);
                        // var sections = JSON.parse(data);
                        var sections = data;
                        // console.log(sections.length);
                        var options = '<option readonly disabled selected value="">--Select--</option>';
                        for (var i = 0; i < sections.length; i++) {
                            console.log(data);
                            options += '<option value="' + sections[i].id + '">' + sections[i]
                                .section_name + '</option>';
                        }
                        $('#section-dropdown').html(options);
                    }
                });
            } else {
                $('#section-dropdown').html('<option value="">Select Section</option>');
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            var i = 1;

            $("#add_section").click(function() {
                $('#section' + i).html(
                    "<td class='col-lg-6 mb-3'><div><div class='form-group'><label class='mont-font fw-600 font-xsss'>Video Name</label><input name='video_name[]' type='text' class='form-control' placeholder='Enter Video Name'></div></div></td><td class='col-lg-6 mb-3'><div><div class='form-group'><label class='mont-font fw-600 font-xsss'>Video File</label><input type='file' name='video_file[]' class='form-control'></div></div></td><td class='col-lg-12 mb-3'><div><div class='form-group'><label class='mont-font fw-600 font-xsss'>video Description</label><textarea name='video_desc[]' class='form-control mb-0 p-3 h100 bg-greylight lh-16' rows='5' placeholder='Write your message...' spellcheck='false'></textarea></div></div></td>"
                    );

                $('#myTable').append('<tr class="row" id="section' + (i + 1) + '"></tr>');
                i++;


                $("#no_of_rows").val(i);
            });


        });
    </script>

</body>

</html>
