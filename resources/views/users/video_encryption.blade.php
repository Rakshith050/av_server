@include('inc.header')
<!-- Include the Video.js CSS -->
<link href="https://vjs.zencdn.net/7.15.4/video-js.min.css" rel="stylesheet">
<!-- Include the videojs-contrib-hls CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.15.0/videojs-contrib-hls.min.css" rel="stylesheet">
<style>
    .vjs_video_3-dimensions.vjs-fluid {
    padding-top: 0%;
}
</style>
<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc.navbar')
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc.topbar')
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-10 col-xxl-10">
                            <div class="card border-0 mb-0 rounded-lg overflow-hidden">

                                <div id="vid-cont" class="video-container">
                                    <video controls preload="auto" data-setup='{ "fluid": true }' class="video-js" style="width: 900px; height: 490px;">
                                       {{-- <source src="https://bitdash-a.akamaihd.net/content/sintel/hls/playlist.m3u8" type="application/x-mpegURL">  --}}
                                        {{-- <source src="videos/mov.m3u8" type="application/x-mpegURL"> --}}
                                        <source src="/storage/videos/java.m3u8" type="application/x-mpegURL">
                                        {{-- <source src="{{ route('video.playlist',['playlist' => $unique_video_name .'.m3u8'])}}" type="application/x-mpegURL"> --}}

                                    </video>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- main content -->




        </div>
    </div>





        @include('inc.footer')

    <!-- Include the Video.js library -->
    <script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>
    <!-- Include the videojs-contrib-hls plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.15.0/videojs-contrib-hls.min.js"></script>


</body>

</html>
