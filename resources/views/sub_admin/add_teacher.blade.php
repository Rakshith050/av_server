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
                                        <li class="active fw-500 text-black">&nbsp; Add Teacher</li>
                                    </ol>
                                </div>
                            </div>
                            <div>

                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">


                                <form action="/sub_admin/add_teacher" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-6">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Teacher Name</label><br>
                                                <input type="text" name="name" class="form-control" placeholder="Enter Teacher name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Teacher Email</label><br>
                                                <input type="email" name="email" class="form-control" placeholder="Enter Teacher Email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Teacher Phone</label><br>
                                                <input type="number" name="number" class="form-control" placeholder="Enter Teacher Phone" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Password</label><br>
                                                <input type="password" name="password" class="form-control" placeholder="Enter Teacher password" required>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <button type="button" id="addFields" class="btn bg-current text-center text-white font-xsss fw-600 p-1 w80 rounded-lg d-inline-block border-0" style="float:right;">Add</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dynamic">
                                        <div class="class-subject-fields row">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="mont-font fw-600 font-xsss">Class</label><br>
                                                    <select name="class[]" id="class" class="form-control">
                                                        <option value="">-Select-</option>
                                                        @foreach ($classes as $item)
                                                            <option value="{{$item->id}}">{{$item->class}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="mont-font fw-600 font-xsss">Subject</label><br>
                                                    <select name="subject[]" id="subject" class="form-control">
                                                        <option value="">-Select-</option>
                                                        {{-- @foreach ($subjects as $item)
                                                            <option value="{{$item->id}}">{{$item->subject_name}}</option>
                                                        @endforeach --}}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 my-auto">
                                                <button type="button" class="remove-field btn bg-danger text-center text-white font-xsss fw-600 p-1 w80 rounded-lg d-inline-block border-0">Delete</button>
                                            </div>
                                        </div>
                                    </div>





                                        <div class="col-lg-12 ">&nbsp;&nbsp;&nbsp;
                                            <button  type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0" style="margin-top: 2rem !important; float:right;">save</button>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var addButton = $('#addFields');
            var wrapper = $('.dynamic'); // This is the parent div where you want to append new fields.

            // Add fields
            addButton.click(function() {
                // Clone the last class and subject fields group and append it to the form.
                var clonedFields = $('.class-subject-fields:first').clone(true);
                clonedFields.find('select').prop('selectedIndex', 0); // Reset dropdown selection.
                wrapper.append(clonedFields);
            });

            // Remove fields
            wrapper.on('click', '.remove-field', function() {
                $(this).closest('.class-subject-fields').remove();
            });
        });
    </script>


{{-- <script>
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
</script> --}}

<script type="text/javascript">
    $(document).ready(function() {
        var classSelect = $('#class');
        var subjectSelect = $('#subject');

        classSelect.change(function() {
            var classId = classSelect.val();

            // Send an AJAX request to get subjects based on the selected class.
            $.get('/admin/getSubjects/' + classId, function(data) {
                // Clear the existing subjects and add the new subjects.
                subjectSelect.empty();
                subjectSelect.append('<option value="">-Select-</option>');

                $.each(data, function(index, subject) {
                    subjectSelect.append('<option value="' + subject.id + '">' + subject.subject_name + '</option>');
                });
            });
        });
    });
</script>



</body>

</html>
