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
                            <h3 class="font-xs text-dark fw-600 ml-4 mb-0 mt-2">Test Qusetions</h3>

                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                <form action="/admin/school_test_master" method="get" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
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

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss"></label><br>
                                                <button style="float:right"  type="submit" class="mt-1 btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">show</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($data['question']==null)
                        <div class="">
                            <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                                <div class="card-body p-lg-5 p-4 w-100 border-0">
                                    {{-- <div class="row">
                                        <div class="col-lg-12">

                                        </div>
                                    </div> --}}
                                    <h4 class="font-xs text-dark fw-600 ml-4 mb-0 mt-2">All Questions</h4>
                                    <table class="table table-responsive">
                                        <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Questions</th>
                                            <th scope="col">Option1</th>
                                            <th scope="col">Option2</th>
                                            <th scope="col">Option3</th>
                                            <th scope="col">Option4</th>
                                            <th scope="col">Answer</th>
                                            <th scope="col">Delete</th>
                                            <th scope="col">Edit</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="">
                            <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                                <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                    <h4 class="font-xs text-dark fw-600 ml-4 mb-0 mt-2">All Questions</h4>
                                    <table class="table table-responsive">
                                        <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Questions</th>
                                            <th scope="col">Option1</th>
                                            <th scope="col">Option2</th>
                                            <th scope="col">Option3</th>
                                            <th scope="col">Option4</th>
                                            <th scope="col">Answer</th>
                                            {{-- <th scope="col">Delete</th>
                                            <th scope="col">Edit</th> --}}

                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data['question'] as $question)
                                        <tr>
                                            <th scope="row">{{$question->id}}</th>
                                            <td>{{$question->question}}</td>
                                            <td>{{$question->option1}}</td>
                                            <td>{{$question->option2}}</td>
                                            <td>{{$question->option3}}</td>
                                            <td>{{$question->option4}}</td>
                                            <td>{{$question->answer}}</td>
                                        </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
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
</body>

</html>
