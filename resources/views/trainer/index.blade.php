<?php session()->put('curnav','home'); ?>
@include("inc_trainer.header")

<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}

    
    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_trainer.navbar")
        
        <!-- navigation -->
        <!-- main content -->
        
        <div class="main-content menu-active">
            @include("inc_trainer.topbar")

            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card w-100 bg-lightblue p-lg-5 p-4 border-0 rounded-lg d-block float-left">
                              
                                <h2 class="display1-size display2-md-size d-inline-block float-left mb-0 text-grey-900 fw-700"><span class="font-xssss fw-600 text-grey-500 d-block mb-2 ml-1">Welcome back</span> Hi, Trainer.</h2>
                               
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 ">
                            <div class="card w-100 p-1 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-7">
                                            <h4 class="fw-700 text-success font-xssss mt-0 mb-0 "></h4>
                                            <h2 class="text-grey-900 fw-700 display1-size mt-2 mb-2 ls-3 lh-1">320 </h2>
                                            <h4 class="fw-700 text-grey-500 font-xsssss ls-3 text-uppercase mb-0 mt-0"> Students</h4>                             
                                        </div>
                                        <div class="col-5 text-left">
                                            <div id="chart-users-blue"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 ">
                            <div class="card w-100 p-1 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-7">
                                            <h4 class="fw-700 text-success font-xssss mt-0 mb-0 "></h4>
                                            <h2 class="text-grey-900 fw-700 display1-size mt-2 mb-2 ls-3 lh-1">25 </h2>
                                            <h4 class="fw-700 text-grey-500 font-xsssss ls-3 text-uppercase mb-0 mt-0"> QnAs</h4>                             
                                        </div>
                                        <div class="col-5 text-left">
                                            <div id="chart-users-blue1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 ">
                            <div class="card w-100 p-1 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-7">
                                            <h4 class="fw-700 text-success font-xssss mt-0 mb-0 "></h4>
                                            <h2 class="text-grey-900 fw-700 display1-size mt-2 mb-2 ls-3 lh-1">455 </h2>
                                            <h4 class="fw-700 text-grey-500 font-xsssss ls-3 text-uppercase mb-0 mt-0"> Chats</h4>                             
                                        </div>
                                        <div class="col-5 text-left">
                                            <div id="chart-users-blue2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfx"></div>
                       
                        <div class="col-xl-6 col-lg-12 ">
                            <div class="card w-100 p-3 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                <div id="chart-earnings-by-item"></div>
                                <div class="row mt-2">
                                    <div class="col-6 mb-1 text-center">
                                        <h2 class="font-xl text-grey-900 fw-700 ls-lg">103</h2>
                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase"><span class="mr-2 bg-facebook btn-round-xss d-inline-block mt-0 rounded-circle"></span> this week</h4>
                                    </div>
                                    <div class="col-6 mb-1 text-center">
                                        <h2 class="font-xl text-grey-900 fw-700 ls-lg">232</h2>
                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase"><span class="mr-2 bg-instagram btn-round-xss d-inline-block mt-0 rounded-circle"></span> this month</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                     

                        <div class="col-xl-6 col-lg-12 ">
                            <div class="card w-100 p-3 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                <div id="chart-multipleitem"></div>
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <h2 class="font-lg text-grey-900 fw-700 ls-lg">44%</h2>
                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase">C</h4>
                                    </div>
                                    <div class="col-4 text-center">
                                        <h2 class="font-lg text-grey-900 fw-700 ls-lg">55%</h2>
                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase">Java</h4>
                                    </div>
                                    <div class="col-4 text-center">
                                        <h2 class="font-lg text-grey-900 fw-700 ls-lg">67%</h2>
                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase">Python</h4>
                                    </div>
                                </div>
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