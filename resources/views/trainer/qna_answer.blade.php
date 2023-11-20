@include("inc_trainer.header")


<body class="color-theme-orange mont-font">

    <div class="preloader"></div>

    
    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_trainer.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_trainer.topbar")

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class=" mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                                {{-- <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a> --}}
                                {{-- <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">Give answer</h4> --}}
                                <h2 class="fw-400 font-lg d-block">Give <b> answer</b> </h2>
                                
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                            

                                <form action="/trainer/qna_answer" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-6">
                                        {{-- <div class="col-lg-4">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <label class="mont-font fw-600 font-xsss">Select Course</label><br>
                                                <select name="course" id="course" class="form-control">
                                                    <option readonly disabled selected value="">-Select-</option>
                                                    @foreach ($data['courses'] as $course) 
                                                    <option value="{{$course->id}}">{{$course->course_name}} </option>
                                                    @endforeach
                                                </select>
                                                
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-12">
                                            <h4>{{$data['qna']->question}}</h4>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="hidden" name="qna_id" value="{{$data['qna']->id}}">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <label class="mont-font fw-600 font-xsss">Answer</label><br>
                                                <textarea rows="4" cols="70" class="form-control" name="answer" placeholder="Enter answer.." style="" required></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <button  type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">Submit</button>
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

    @include("inc_trainer.footer")

</body>

</html>