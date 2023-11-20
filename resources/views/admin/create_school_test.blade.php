@include("inc_admin.header")


<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


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
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg d-flex justify-content-between">

                                <h2 class="fw-400 font-lg d-block">Create <b> Test</b> </h2>
                                <div class="float-right">
                                    <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                        <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/tests">&nbsp; Test</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active fw-500 text-black">&nbsp; Create Test</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">


                                <form action="/admin/create_school_test" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-4">
                                        <div class="col-lg-3">
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
                                        <div class="col-lg-3">
                                            <div
                                                class="">
                                                <label class="mont-font fw-600 font-xsss">Select
                                                    Subject</label><br>

                                                <select name="subject" id="subject"
                                                    class="form-control">
                                                    <option readonly disabled selected
                                                        value="">-Select-</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="">
                                                <label class="mont-font fw-600 font-xsss">Title</label><br>
                                                <input type="text" name="title" class="form-control" placeholder="Enter title">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="">
                                                <label class="mont-font fw-600 font-xsss">Choose photo</label><br>
                                                <input type="file" name="quiz_photo" class="form-control" style="line-height: 30px">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="">
                                                <label class="mont-font fw-600 font-xsss">Description</label><br>
                                                <textarea rows="4" cols="70" class="form-control" name="description" placeholder="Enter description" style="" required></textarea>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <button  type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>

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

    <script>
        $('#class').change(function() {
            var classId = $(this).val();
            if (classId) {
                $.ajax({
                    url: '/admin/get_subjects',
                    type: 'get',
                    dataType: 'json',
                    data: {
                        class_id: classId
                    },
                    success: function(data) {
                        console.log(data);
                        var subject = data;
                        var options = '<option readonly disabled selected value="">--Select--</option>';
                        for (var i = 0; i < subject.length; i++) {
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
</body>

</html>
