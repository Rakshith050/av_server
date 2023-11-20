@include("inc_recruiter.header")


<body class="color-theme-orange mont-font">

    <div class="preloader"></div>

    
    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_recruiter.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_recruiter.topbar")

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class=" mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                                {{-- <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a> --}}
                                {{-- <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">Create Job</h4> --}}
                                <h2 class="fw-400 font-lg d-block">Create <b> Job</b> </h2>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                            

                                <form action="/recruiter/create_job" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-6">
                                        <div class="col-lg-6">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <label class="mont-font fw-600 font-xsss">Job Title</label><br>
                                                <input type="text" name="job_title" class="form-control" placeholder="Enter title" required>   
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <label class="mont-font fw-600 font-xsss">Job Image</label><br>
                                                <input type="file" name="job_image" class="form-control" required>   
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <label class="mont-font fw-600 font-xsss">Annual CTC</label><br>
                                                <input type="number" placeholder="1.00" step="0.01" min="0" max="100" name="annual_ctc" class="form-control" required>   
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <label class="mont-font fw-600 font-xsss">Location</label><br>
                                                <input type="text" name="location" class="form-control" placeholder="Enter Location" required>   
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            {{-- <input type="hidden" name="qna_id" value=""> --}}
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <label class="mont-font fw-600 font-xsss">Decription</label><br>
                                                <textarea rows="4" cols="70" class="form-control" name="description" placeholder="Enter Description.." style="" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            {{-- <input type="hidden" name="qna_id" value=""> --}}
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <label class="mont-font fw-600 font-xsss">Criteria</label><br>
                                                <textarea rows="4" cols="70" class="form-control" name="criteria" placeholder="Enter criteria.." style="" required></textarea>
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

    @include("inc_recruiter.footer")

</body>

</html>