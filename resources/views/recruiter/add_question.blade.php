@include("inc_recruiter.header")

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
        @include("inc_recruiter.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_recruiter.topbar")


            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                                {{-- <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a> --}}
                                {{-- <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">Add Question</h4> --}}
                                <h2 class="fw-400 font-lg d-block">Add <b> Question</b> </h2>
                            </div>
                            {{-- ----- --}}
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                <form method="POST" action="/recruiter/add_question" enctype="multipart/form-data" autocomplete="OFF">
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
                                                        <div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
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
                                                                <div class="col-lg-3">
                                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                                        <label class="mdl-textfield__label">Select Subject</label><br>
                                                                    
                                                                        <select name="subject" id="subject" class="form-control">
                                                                            <option readonly disabled selected value="">-Select-</option>
                                                                            @foreach ($data['subjects'] as $subject) 
                                                                            <option value="{{$subject->id}}">{{$subject->subject_name}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="col-lg-3">
                                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                                        <label class="mdl-textfield__label">Select Chapter</label><br>
                                                                
                                                                        <select name="topic" id="topic" class="form-control">
                                                                        <option value="">-Select-</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                                        <label class="mdl-textfield__label">Select Topic</label><br>
                                                                
                                                                        <select name="topic" id="topic" class="form-control">
                                                                        <option value="">-Select-</option>
                                                                        </select>
                                                                    </div>
                                                                </div> --}}
                                                            </div>
                        
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <label style="display:block;">Enter Question <span>*</span>
                                                                <div class="image-upload" style="display:inline-block;">
                                                                    <label for="file-input">
                                                                        &ensp;&ensp;<i class="fa fa-image"></i>
                                                                        &ensp;&ensp; <span aria-hidden="true" class="icon-info "></span>
                                                                        &nbsp;
                                                                        </span>
                                                                    </label>
                                                                    
                        
                                                                   
                                                                </div>
                                                            </label>
                        
                                                            <textarea rows="4" cols="30" name="question" class="form-control" placeholder="Enter Question" style="" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <label style="display:block; max-width: 100%;">1st Option<span>*</span>
                                                                <input type="radio" class="radio" name="answer" value="option1" required>
                                                                <div class="image-upload" style="display:inline-block;">
                                                                    <label for="file-input1">
                                                                        &ensp;&ensp;<i class="fa fa-image"></i>&ensp;&ensp; <span aria-hidden="true" class="icon-info "></span>
                                                                        &nbsp;
                                                                        </span>
                                                                    </label>
                        
                                                                   
                                                                </div>
                                                            </label>
                                                            <textarea id="oodles_editor1" rows="4" cols="30" class="form-control" name="option1" placeholder="Enter First Option" style=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <label style="display:block;">2nd Option<span>*</span>
                                                                <input type="radio" class="radio" name="answer" value="option2" required>
                                                                <div class="image-upload" style="display:inline-block;">
                                                                    <label for="file-input2">
                                                                        &ensp;&ensp;<i class="fa fa-image"></i>&ensp;&ensp; <span aria-hidden="true" class="icon-info "></span>
                                                                        &nbsp;
                                                                        </span>
                                                                    </label>
                        
                                                                    
                                                                </div>
                                                            </label>
                                                            <textarea id="oodles_editor2" rows="4" cols="30" class="form-control" name="option2" placeholder="Enter Second Option" style=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <label style="display:block;max-width: 100%;">3rd Option<span>*</span>
                                                                <input type="radio" class="radio" name="answer" value="option3" required>
                                                                <div class="image-upload" style="display:inline-block;">
                                                                    <label for="file-input3">
                                                                        &ensp;&ensp;<i class="fa fa-image"></i>&ensp;&ensp; <span aria-hidden="true" class="icon-info "></span>
                                                                        &nbsp;
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </label>
                                                            <textarea id="oodles_editor3" rows="4" cols="30" class="form-control" name="option3" placeholder="Enter Third Option" style=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <label style="display:block;max-width: 100%;">4th Option<span>*</span>
                                                                <input type="radio" class="radio" name="answer" value="option4" required>
                                                                <div class="image-upload" style="display:inline-block;">
                                                                    <label for="file-input4">
                                                                        &ensp;&ensp;<i class="fa fa-image"></i>&ensp;&ensp; <span aria-hidden="true" class="icon-info "></span>
                                                                        &nbsp;
                                                                        </span>
                                                                    </label>
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
                
                
                <button class="btn btn-circle text-white btn-neutral sidebar-right">
                    <i class="ti-angle-left"></i>  
                </button>
            </div>


        </div>

    </div>

    @include("inc_recruiter.footer")

</body>

</html>