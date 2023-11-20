@include("inc.header")


<body class="color-theme-orange mont-font">

    <div class="preloader"></div>

    
    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc.topbar")

            
            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="middle-wrap">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-lg">
                                <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                                <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">Account Details</h4>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt-2 w100"><img src="https://via.placeholder.com/100x100.png" alt="image" class="shadow-sm rounded-lg w-100"></figure>
                                    <h2 class="fw-700 font-sm text-grey-900 mt-3">Surfiya Zakir</h2>
                                    <h4 class="text-grey-500 fw-500 mb-3 font-xsss mb-4">Brooklyn</h4>    
                                    <!-- <a href="#" class="p-3 alert-primary text-primary font-xsss fw-500 mt-2 rounded-lg">Upload New Photo</a> -->
                                </div>
                            </div>

                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">First Name</label>
                                            <input type="text" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Email</label>
                                            <input type="text" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Phone</label>
                                            <input type="text" class="form-control">
                                        </div>        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Country</label>
                                            <input type="text" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Address</label>
                                            <input type="text" class="form-control">
                                        </div>        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Twon / City</label>
                                            <input type="text" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Postcode</label>
                                            <input type="text" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <div class="card mt-3 border-0">
                                            <div class="card-body d-flex justify-content-between align-items-end p-0">
                                                <div class="form-group mb-0 w-100">
                                                    <input type="file" name="file" id="file" class="input-file">
                                                    <label for="file" class="rounded-lg text-center bg-white btn-tertiary js-labelFile p-4 w-100 border-dashed">
                                                    <i class="ti-cloud-down large-icon mr-3 d-block"></i>
                                                    <span class="js-fileName">Drag and drop or click to replace</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label class="mont-font fw-600 font-xsss">Description</label>
                                        <textarea class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Write your message..." spellcheck="false"></textarea>
                                    </div>

                                    <div class="col-lg-12">
                                        <a href="#" class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block">Save</a>
                                    </div>
                                </div>

                            </form>
                            </div>
                        </div>
                        <!-- <div class="card w-100 border-0 p-2"></div> -->
                    </div>
                </div>
                
                @include("inc.sidebar")
            </div>            
        </div>
        <!-- main content -->
        <div class="app-footer border-0 shadow-lg">
            <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default-follower.html" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>            
            <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/60x60.png" alt="user" class="w30 shadow-xss"></a>
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


    

   
    @include("inc.footer")

    
</body>

</html>