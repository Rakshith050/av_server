@include('inc.header')


<link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />

<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<style>
    .vjs-marker {
        position: absolute;
        background: red;
        width: 5px;
        height: 110%;
        top: -5%;
        z-index: 30;
        margin-left: -3px;
    }

    .vjs-marker:hover span {
        opacity: 1;
    }

    .vjs-marker span {
        position: absolute;
        bottom: 15px;
        opacity: 0;
        margin-left: -20px;
        z-index: 90;
        background: rgba(0, 0, 0, .8);
        padding: 8px;
        font-size: 10px;
    }

    .modal-backdrop {
        z-index: 0;
    }
</style>
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


                                <video id="myPlayerID" class="video-js" controls preload="auto" width="900"
                                    height="490" data-setup="{}">
                                    <source
                                        src="https://abc.kods.app/uploads/SHGV1684912023.mp4"
                                        type="video/mp4" />

                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a
                                        web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                            HTML5 video</a>
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







    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <script>
        var video = videojs("myPlayerID");
        var markers = @php
            echo $markers;
        @endphp;



        // var markers = [
        //   {time:50,label:'Hello'},
        //   {time:150,label:'Hello asd a asd asdsad'},
        //   {time:200,label:'Hello'},
        //   {time:220,label:'Hello'}
        // ];

        video.on("loadedmetadata", function() {

            // console.log(123);
            var total = video.duration();

            var p = jQuery(video.controlBar.progressControl.children_[0].el_);

            for (var i = 0; i < markers.length; i++) {

                var left = (markers[i].time / total * 100) + '%';


                var time = markers[i].time;

                var el = jQuery('<div class="vjs-marker" style="left:' + left + '" data-time="' + time +
                    '"><span>' + markers[i].note + '</span></div>');
                el.click(function() {

                    video.currentTime($(this).data('time'));
                });

                p.append(el);

            }



        });
    </script>

    {{-- play the perticular section on click on the note  --}}
    <script>
        $(document).ready(function() {
    // Get the video element
    var video = videojs("myPlayerID");

    // Set the desired timestamp in seconds
    var startTime = @php
    echo $marker_last->time ;
    @endphp; // Replace with your desired time in seconds

    console.log(startTime);
    // Set the video's current time to the desired timestamp
    video.currentTime(startTime);

    // Play the video
    // video.play();
});

    </script>



</body>

</html>
