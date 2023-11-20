
@include("inc.header")


<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc.navbar")
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">

            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">


<link rel='stylesheet' href='https://cdn.plyr.io/3.5.6/plyr.css'>

<video
       controls
            crossorigin
            playsinline
            data-poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" class="js-player">

            <source
              src="assets/java.mp4"
              type="video/mp4"
              size="576"
            />
            <source
              src="assets/java.mp4"
              type="video/mp4"
              size="720"
            />
            <source
            src="assets/java.mp4"
              type="video/mp4"
              size="1080"
            />



</video>
<!-- partial -->
  

                    </div>

                        </div>
                    </div>

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




        @include("inc.footer")

        <script src="js/plugin.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/scripts.js"></script>



    </body>

    </html>
