@include("inc_admin.header")

<style>
	/* Tooltip container */
.tip{
/* position: absolute; */
display: inline-block;
cursor: help; /*change the cursor symbol to a question mark on mouse over*/
color: inherit; /*inherit text color*/
text-decoration: none; /*remove underline*/

}

/*Tooltip text*/
.tip span {
visibility: hidden;
width:80%;
text-align: center;
padding: 1em 0em 1em 0em;
border: 1px solid;
border-radius: 0.5em;
font: 400 12px Arial;
color: #ffffff;
background-color: #E8D300;
display: inline-block;

/*Position the tooltip text*/
position: relative; /*positioned relative to the tooltip container*/
top: 105%;
z-index:100;
}

.tip:hover span {
visibility: visible;
}
	</style>

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

                                <h2 class="fw-400 font-lg d-block">Add <b> Question</b> </h2>
                                <div class="float-right">
                                    <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                        <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/tests">&nbsp; Test</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active fw-500 text-black">&nbsp; Add Questions</li>
                                    </ol>
                                </div>

                            </div>
                            {{-- ----- --}}
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                <form method="POST" action="/admin/add_school_questions" enctype="multipart/form-data" autocomplete="OFF">
                                    @csrf
                                    <div class="row">
                                        <div class=" col-sm-12">
                                            <div class="card-box">

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group ">
                                                            <div class="row">
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
                                                                                {{-- @foreach ($subjects as $subject)
                                                                                <option value="{{$subject->id}}">{{$subject->subject_name}} </option>
                                                                                @endforeach --}}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group ">
                                                            <div class="d-flex">
                                                                <label style="display:block;" for="question" class="mont-font fw-600 font-xsss">Enter Question <span>*</span>
                                                                    <div class="image-upload" style="display:inline-block;">
                                                                        <label for="file-input">
                                                                            &ensp;&ensp;<i class="fa fa-image"></i>
                                                                            &ensp;&ensp; <span aria-hidden="true" class="icon-info "></span>
                                                                            &nbsp;
                                                                            </span>
                                                                        </label>
                                                                        <input id="file-input" type="file" name="question_image" style="display: none;" />

                                                                    </div>

                                                                </label>
                                                                    <div class="image-upload" style="display:inline-block;">
                                                                        <label for="code">
                                                                            {{-- <a class="btn" onclick="showCode()">Code</a> --}}
                                                                            <a onclick="toggleCode()" class="btn bg-current text-center text-white font-xsss fw-600 p-1 rounded-lg d-inline-block border-0">Code</a>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                            <textarea rows="4" cols="30" name="question" id="question" class="form-control" placeholder="Enter Question" style="" required></textarea>
                                                            <textarea id="code" rows="4" cols="30" name="code" id="code" class="form-control" placeholder="Enter Code" style="display: none;"></textarea>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group ">
                                                            <label style="display:block; max-width: 100%;" class="mont-font fw-600 font-xsss">1st Option<span>*</span>
                                                                <input type="radio" class="radio" name="answer" value="1" required>
                                                                <div class="image-upload" style="display:inline-block;">
                                                                    <label for="file-input1">
                                                                        &ensp;&ensp;<i class="fa fa-image"></i>&ensp;&ensp; <span aria-hidden="true" class="icon-info "></span>
                                                                        &nbsp;
                                                                        </span>
                                                                    </label>

                                                                    <input id="file-input1" type="file" name="option1_img" style="display: none;" />
                                                                </div>
                                                            </label>
                                                            <textarea id="oodles_editor1" rows="4" cols="30" class="form-control" name="option1" placeholder="Enter First Option" style=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group ">
                                                            <label style="display:block; max-width: 100%;" class="mont-font fw-600 font-xsss">2nd Option<span>*</span>
                                                                <input type="radio" class="radio" name="answer" value="2" required>
                                                                <div class="image-upload" style="display:inline-block;">
                                                                    <label for="file-input2">
                                                                        &ensp;&ensp;<i class="fa fa-image"></i>&ensp;&ensp; <span aria-hidden="true" class="icon-info "></span>
                                                                        &nbsp;
                                                                        </span>
                                                                    </label>

                                                                    <input id="file-input2" type="file" name="option2_img" style="display: none;" />
                                                                </div>
                                                            </label>
                                                            <textarea id="oodles_editor2" rows="4" cols="30" class="form-control" name="option2" placeholder="Enter Second Option" style=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group ">
                                                            <label style="display:block;max-width: 100%;" class="mont-font fw-600 font-xsss">3rd Option<span>*</span>
                                                                <input type="radio" class="radio" name="answer" value="3" required>
                                                                <div class="image-upload" style="display:inline-block;">
                                                                    <label for="file-input3">
                                                                        &ensp;&ensp;<i class="fa fa-image"></i>&ensp;&ensp; <span aria-hidden="true" class="icon-info "></span>
                                                                        &nbsp;
                                                                        </span>
                                                                    </label>
                                                                    <input id="file-input3" type="file" name="option3_img" style="display: none;" />
                                                                </div>
                                                            </label>
                                                            <textarea id="oodles_editor3" rows="4" cols="30" class="form-control" name="option3" placeholder="Enter Third Option" style=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group ">
                                                            <label style="display:block;max-width: 100%;" class="mont-font fw-600 font-xsss">4th Option<span>*</span>
                                                                <input type="radio" class="radio" name="answer" value="4" required>
                                                                <div class="image-upload" style="display:inline-block;">
                                                                    <label for="file-input4">
                                                                        &ensp;&ensp;<i class="fa fa-image"></i>&ensp;&ensp; <span aria-hidden="true" class="icon-info "></span>
                                                                        &nbsp;
                                                                        </span>
                                                                    </label>
                                                                    <input id="file-input4" type="file" name="option4_img" style="display: none;" />
                                                                </div>
                                                            </label>
                                                            <textarea id="oodles_editor4" rows="4" cols="30" class="form-control" name="option4" placeholder="Enter Fourth Option" style=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button  type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>

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
<script>
function toggleCode() {
  var div = document.getElementById("code");
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
</script>


</body>

</html>
