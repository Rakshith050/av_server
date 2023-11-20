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
                    <div class="middle-wrap mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-lg">
                                <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                                <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">Add Subject</h4>
                                
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                            

                                <form action="/recruiter/add_subject" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-6">
                                        <div class="col-lg-4">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <label class="mont-font fw-600 font-xsss">Select Subject</label><br>
                                            
                                                {{-- <select name="topic" id="topic" class="form-control">
                                                    <option value="">-Select-</option>
                                                </select> --}}
                                                <input type="text" name="subject" class="form-control" required>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="mont-font fw-600 font-xsss"></label>
                                            <button  type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>
        
                                            {{-- <a href="#" class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block">Save</a> --}}
                                        </div>
                                    </div>
                                    
                                </form>

                            </div>
                        </div>
                        <div class="middle-wrap">
                            <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                                <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                    <h4 class="font-xs text-dark fw-600 ml-4 mb-0 mt-2">All Subjects</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Subject name</th>
                                            <th scope="col">Edit</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data['subjects'] as $subject) 
                                        <tr>
                                            <th scope="row">{{$subject->id}}</th>
                                            <td>{{$subject->subject_name}}</td>
                                            <td> <a href="/edit_subject/{{$subject->id}}" type="button" id="" class="btn btn-default btn-add bg-current text-white font-xsss">EDIT
                                            </a></td>
                                        </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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