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
                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 d-flex justify-content-between">
                            <div>
                                <h2 class="fw-400 font-lg d-block"><b> {{$data['internship_task']->name}}</b> </h2>
                            </div>

                            
                            <div class="float-right">
                                <a href="/update_internship_task_status/{{$data['internship_process_id']}}" class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">COMPLETED</a>
                            </div>


                           
                        </div>
                        <div class="col-lg-12 mt-3"  >
                            <iframe
                            frameBorder="0"
                            height="450px"  
                            src="https://onecompiler.com/embed/java/{{$data['code']}}" 
                            width="100%"
                            ></iframe>
                        </div>
                    </div>

                </div>
                @include("inc.sidebar")
            </div>
        </div>
    </div>

    @include("inc.footer")

</body>

</html>
