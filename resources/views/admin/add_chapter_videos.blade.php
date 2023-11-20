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
                                <form method="POST" action="/admin/add_chapter_videos" enctype="multipart/form-data"
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
                                                            class="form-group ">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="">
                                                                        <label class="mont-font fw-600 font-xsss">Select Class</label><br>
                                                                        <select class="form-control" name="class" id="class" required>
                                                                            <option readonly disabled selected value="">-Select-</option>
                                                                            @foreach ($classes as $class)
                                                                            <option value="{{$class->id}}">{{$class->class}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div
                                                                        class="">
                                                                        <label class="mont-font fw-600 font-xsss">Select
                                                                            Subject</label><br>

                                                                        <select name="subject" id="subject"
                                                                            class="form-control">
                                                                            <option readonly disabled selected
                                                                                value="">-Select-</option>
                                                                                {{-- @foreach ($subjects as $subject)
                                                                                <option value="{{$subject->id}}">{{$subject->subject_name}} </option>
                                                                                @endforeach --}}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div
                                                                        class="">
                                                                        <label class="mont-font fw-600 font-xsss">Select
                                                                            Chapter</label><br>

                                                                            <select name="chapter" id="chapter" class="form-control">
                                                                                <option readonly disabled selected value="">-Select-</option>

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
        $('#subject').change(function() {
            var subjectId = $(this).val();
            if (subjectId) {
                // alert(subjectId);
                $.ajax({
                    url: '/admin/get_chapters',
                    type: 'get',
                    dataType: 'json',
                    data: {
                        subject_id: subjectId
                    },
                    success: function(data) {
                        console.log(data);
                        // console.log(data.length);
                        // var sections = JSON.parse(data);
                        var chapter = data;
                        // console.log(chapter.length);
                        var options = '<option readonly disabled selected value="">--Select--</option>';
                        for (var i = 0; i < chapter.length; i++) {
                            // console.log(data);
                            options += '<option value="' + chapter[i].id + '">' + chapter[i]
                                .chapter_name + '</option>';
                        }
                        $('#chapter').html(options);
                    }
                });
            } else {
                $('#chapter').html('<option value="">Select Chapter</option>');
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            var i = 1;

            $("#add_section").click(function() {
                $('#section' + i).html(
                    "<td class='col-lg-6 mb-3'><div><div class='form-group'><label class='mont-font fw-600 font-xsss'>Video Name</label><input name='video_name[]' type='text' class='form-control' placeholder='Enter Video Name'></div></div></td><td class='col-lg-6 mb-3'><div><div class='form-group'><label class='mont-font fw-600 font-xsss'>Video File</label><input type='file' name='video_file[]' class='form-control'></div></div></td>"
                    );

                $('#myTable').append('<tr class="row" id="section' + (i + 1) + '"></tr>');
                i++;


                $("#no_of_rows").val(i);
            });


        });
    </script>

</body>

</html>
