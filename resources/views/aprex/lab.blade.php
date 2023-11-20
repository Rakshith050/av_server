@include("inc_aprex.header")


<body class="color-theme-orange mont-font">




    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_aprex.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_aprex.topbar")

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 d-flex justify-content-between">
                            <div>
                                <h2 class="fw-400 font-lg d-block"><b> Lab</b> </h2>
                            </div>

                        </div>
                    </div>

                </div>
                @include("inc_aprex.sidebar")
            </div>
        </div>
        <div class="app-footer border-0 shadow-lg">
            <a href="/aprex/default_live_stream/{{$data['course']->id}}/0" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="/aprex/video_player_mobile/{{$data['course']->id}}" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="/aprex/chat/{{$data['course']->id}}" class="nav-content-bttn" data-tab="chats"><i
                    class="feather-layout"></i></a>
            <a href="/aprex/notes/{{$data['course']->id}}" class="nav-content-bttn"><i class="feather-layers"></i></a>
            {{-- <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/50x50.png"
                    alt="user" class="w30 shadow-xss"></a> --}}
        </div>
    </div>

    @include("inc_aprex.footer")

</body>

</html>
