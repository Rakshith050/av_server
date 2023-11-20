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
                                  <source src="{{ asset($video->video_file) }}" type="video/mp4" />
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
        var video = videojs('myPlayerID');
        var ended = false;
        // Function to update the status when the video ends
  function updateVideoStatus() {
    var videoId = {{ $video->id }};
    var currentTime = video.currentTime();
    var csrfToken = '{{ csrf_token() }}';
//     var status;
// if(ended){
//     status = 1;
// }else{
//     status = 0;
// }
// console.log(ended);
    $.ajax({
      url: '/update_video_status',
      type: 'POST',
      data: {
        videoId: videoId,
        status: ended,
        timestamp: currentTime,
      },
      headers: {
        'X-CSRF-TOKEN': csrfToken
      },
      success: function (responseData) {
        // Handle the response as needed
        console.log('Video status updated:', responseData);
      },
      error: function (error) {
        console.error('Error updating video status:', error);
      }
    });
  }

  // Add an event listener for the "ended" event
  video.on('ended', function () {
    // Call the function to update the video status
    ended = true;
    updateVideoStatus();

  });

  video.on('timeupdate', function () {
    if (ended) {
      // Video has ended, so set the status to 0 if the user clicks on the timeline
      var currentTime = video.currentTime();
      if (currentTime > 0) {
        ended = false;
        updateVideoStatus();
      }
    }
  });

         window.addEventListener('beforeunload', function() {
        var currentTime = video.currentTime();
            var videoId = {{ $video->id }};

            var csrfToken = '{{ csrf_token() }}';

        $.ajax({
            url: '/save_video_timestamp',
            type: 'POST',
            data: {
                videoId: videoId,
                timestamp: currentTime,
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
            },
            success: function(responseData) {
                // Handle the response as needed
                console.log(responseData);
            },
            error: function(error) {
                console.error(error);
            }
        });

         })

    </script>
<script>
    var video = videojs('myPlayerID');

    $(document).ready(function () {
        var videoId = {{ $video->id }};
        var timestamp = {{ $timestamp }};
        // console.log(timestamp);
        if (timestamp) {
            // Set the video's current time to the stored timestamp
            console.log(timestamp);
            video.currentTime(timestamp);
        }
    });

</script>

{{-- <script>
    var video = videojs('myPlayerID');

    $(document).ready(function () {
        const videoId = {{ $video->id }};

        $.ajax({
            url: '/retrieve_video_timestamp/'+ videoId,
            type: 'GET',
            success: function (response) {
                console.log(response);

                if (response.timestamp) {
                    // Set the video's current time to the stored timestamp
                    video.currentTime(response.video_time_stamp);
                }
            },
            error: function (error) {
                console.error(error);
            }
        });
    });
</script> --}}



</body>

</html>
