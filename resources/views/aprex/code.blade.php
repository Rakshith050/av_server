
@include("inc_aprex.header")


<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}

    
    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_aprex.navbar")
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_aprex.topbar")
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-6 col-md-12">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-md-5 p-4 border-0 text-center">
                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                               
                                <h4 class="fw-700 font-xs mt-4">Practice Coding</h4>
                                <p class="fw-500 font-xssss text-grey-500 mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                <div class="clearfix"></div>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Projects</span>
                                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mr-1">1/3 project</span>
                              
                                <div class="clearfix"></div>
                               
                                <div class="card-body p-0 w250 ml-auto mr-auto"><div class="timer mt-4 mb-2"></div></div>
                                <div class="clearfix"></div>
                                
                                <br>
                               
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-md-12">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-md-5 p-4 border-0 text-center">
                                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
                               
                                {{-- <video src="/playlist/videos/java2.mp4" style="width:400px"></video> --}}
                                
                                <br>
                               
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-md-12">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-5 border-0 text-left question-div">
                                
                            <div class="col-lg-12 mt-3">
                            <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none">
                                <div class="item">
                                    <div class="card mr-1 w200 border-0 p-4 rounded-lg text-center" style="background-color: #fcf1eb;">
                                        <div class="card-body p-2 ml-1 ">
                                            <a href="/project" class="btn-round-xl bg-white"></a>
                                            <h4 class="fw-600 font-xsss mt-3 mb-0">HTML <br> CSS & JS<span class="d-block font-xsssss fw-500 text-grey-500 mt-2">Online</span></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mr-1 w200 border-0 p-4 rounded-lg text-center" style="background-color: #fff9eb;">
                                        <div class="card-body p-2 ml-1 ">
                                            <a href="/prog/java" class="btn-round-xl bg-white"></a>
                                            <h4 class="fw-600 font-xsss mt-3 mb-0">Java<br>Basics<span class="d-block font-xsssss fw-500 text-grey-500 mt-2">Online</span></h4>
                                        </div>
                                    </div>
                                </div>



                                <div class="item">
                                    <div class="card mr-1 w200 border-0 p-4 rounded-lg text-center" style="background-color: #e5f4fb;">
                                        <div class="card-body p-2 ml-1 ">
                                        <a href="/prog/python3" class="btn-round-xl bg-white"></a>
                                            <h4 class="fw-600 font-xsss mt-3 mb-0">Python<br>Basics <span class="d-block font-xsssss fw-500 text-grey-500 mt-2">Online</span></h4>
                                        </div>
                                    </div>
                                </div>


                                <div class="item">
                                    <div class="card mr-1 w200 border-0 p-4 rounded-lg text-center" style="background-color: #dcf4f8;">
                                        <div class="card-body p-2 ml-1 ">
                                        <a href="/prog/c" class="btn-round-xl bg-white"></a>
                                            <h4 class="fw-600 font-xsss mt-3 mb-0">C<br>Basics <span class="d-block font-xsssss fw-500 text-grey-500 mt-2">Online</span></h4>
                                        </div>
                                    </div>
                                </div>


                                <div class="item">
                                    <div class="card mr-1 w200 border-0 p-4 rounded-lg text-center" style="background-color: #dce2f8;">
                                        <div class="card-body p-2 ml-1 ">
                                        <a href="/prog/sql" class="btn-round-xl bg-white"></a>
                                            <h4 class="fw-600 font-xsss mt-3 mb-0">SQL<br>Basics <span class="d-block font-xsssss fw-500 text-grey-500 mt-2">Online</span></h4>
                                        </div>
                                    </div>
                                </div>


                            
                                  
                            </div>
                        </div>
                        <br>
                            </div>

                        </div>
                    </div>
                    @include("inc_aprex.sidebar")
                </div>            
            </div>
            <!-- main content -->
            <div class="app-footer border-0 shadow-lg">
                <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
                <a href="default-follower.html" class="nav-content-bttn"><i class="feather-package"></i></a>
                <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>            
                <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
                <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 shadow-xss"></a>
            </div>
    
            <div class="app-header-search">
                <form class="search-form">
                    <div class="form-group searchbox mb-0 border-0 p-1">
                        <input type="text" class="form-control border-0" placeholder="Search...">
                        <i class="input-icon">
                            <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
                        </i>
                        <a href="#" class="ml-1 mt-1 d-inline-block close searchbox-close">
                            <i class="ti-close font-xs"></i>
                        </a>
                    </div>
                </form>
            </div>
    
        </div> 
    
    
        
    
        @include("inc_aprex.footer")
    
        <script src="js/plugin.js"></script>
        <script src="js/countdown.js"></script> 
        <script src="js/scripts.js"></script>
    
        
        
    </body>
    
    </html>