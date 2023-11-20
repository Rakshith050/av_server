@include('inc.header')


{{-- <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" /> --}}

<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
{{-- <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script> --}}
<link href="https://vjs.zencdn.net/8.6.0/video-js.css" rel="stylesheet" />

@php
    use Carbon\Carbon;
@endphp

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
                        <div class="col-xl-8 col-xxl-9">
                            <div class="card border-0 mb-0 rounded-lg overflow-hidden">

                                  <video
                                  id="myPlayerID"
                                  class="video-js"
                                  controls
                                  preload="auto"
                                  width="900"
                                  height="490"
                                  {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                                  data-setup="{}"
                                >
                                  <source src="https://abc.kods.app/uploads/SHGV1684912023.mp4" type="video/mp4" />
                                  <source src="MY_VIDEO.webm" type="video/webm" />
                                  <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a
                                    web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank"
                                      >supports HTML5 video</a
                                    >
                                  </p>
                                </video>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- main content -->




    </div>




    @include('inc.footer')







    <script src="https://vjs.zencdn.net/8.6.0/video.min.js"></script>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <script>

        $(document).ready(function () {
            // Define your start and end times in seconds
        var startTime = 10; // Set your desired start time in seconds
        var endTime = 20; // Set your desired end time in seconds

        var video = videojs('myPlayerID');

        // Set the video's current time to the start time when the page loads
        video.currentTime(startTime);

        // Add an event listener to check when the video time reaches the end time
        video.on('timeupdate', function () {
          var currentTime = video.currentTime();

          // If the current time exceeds the end time, pause the video
          if (currentTime >= endTime) {
            video.pause();
          }
        });
        });

      </script>


</body>

</html>
