@include('inc.header')


<link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />

<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<style>
    .vjs-marker
{
  position:absolute;
  background:red;
  width:5px;
  height:110%;
  top:-5%;
  z-index:30;
  margin-left:-3px;
}

.vjs-marker:hover span
{
  opacity:1;
}

.vjs-marker span
{
  position:absolute;
  bottom:15px;
  opacity:0;
  margin-left:-20px;
  z-index:90;
  background:rgba(0,0,0,.8);
  padding:8px;
  font-size:13px;
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
                    <div class="row">
                        <div class="col-xl-8 col-xxl-9">
                            <div class="card border-0 mb-0 rounded-lg overflow-hidden">


                                    <video
                                    id="myPlayerID"
                                    class="video-js"
                                    controls
                                    preload="auto"
                                    width="900"
                                    height="490"
                                    data-setup="{}"
                                  >
                                    <source src="https://abc.kods.app/uploads/SHGV1684912023.mp4" type="video/mp4" />
                                    {{-- <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4" /> --}}

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
                        <div class="col-xl-4 col-xxl-3" id="course-tabs">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden">
                                <ul class="nav nav-tabs xs-p-4 d-flex align-items-center justify-content-between product-info-tab border-bottom-0"
                                    id="pills-tab" role="tablist">
                                    <li class="list-inline-item"><a
                                            class="fw-700 pb-sm-3 pt-sm-3 xs-mb-2 ml-sm-5 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase"
                                            href="#">Course</a></li>
                                    <li class="active list-inline-item"><a
                                            class="fw-700 pb-sm-3 pt-sm-3 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase active"
                                            href="#navtabs1" data-toggle="tab">Notes</a></li>
                                    {{-- <li class="list-inline-item"><a class="fw-700 pb-sm-3 pt-sm-3 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs2" data-toggle="tab">Chats</a></li> --}}
                                    <li class="list-inline-item"><a
                                            class="fw-700 pb-sm-3 pt-sm-3 xs-mb-2 mr-sm-5 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase"
                                            href="#">Chats</a></li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="navtabs1">
                                    <div
                                        class="card w-100 d-block chat-body p-0 border-0 shadow-xss rounded-lg mb-3 position-relative">
                                        <div class="messages-content scroll-bar p-3" id="messagesContent" style="height: 390px;">
                                            @foreach ($markers as $marker)
@php

$timeInSeconds = $marker->time; // Replace with your actual time in seconds

$time = Carbon::createFromTimestampUTC($timeInSeconds)->format('i:s');

@endphp


                                            <div class="message-item outgoing-message">
                                                <div class="message-user m-0">
                                                        <div id="timeWrap" class="time p-0">{{$time}}</div>
                                                </div>
                                                <div class="message-wrap" data-time="{{ $marker->time }}">{{$marker->note}}</div>
                                            </div>
                                            @endforeach

                                        </div>

                                        <div class="text-center">
                                          <a href="#" class="header-btn bg-current fw-500 text-white font-xsss p-2 lh-32 w100 text-center d-inline-block rounded-xl" data-toggle="modal" data-target="#Modallogin" onclick="setVideoTime()">Add Note</a>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
<!-- Modal -->
<div class="modal bottom fade" id="Modallogin" tabindex="-1" role="dialog" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content border-0">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close text-grey-500"></i></button>
           <div class="modal-body p-3 d-flex align-items-center bg-none">
               <div class="card shadow-none rounded-0 w-100 p-2 pt-3 border-0">
                   <div class="card-body rounded-0 text-left p-3">
                       <form id="save_markers" method="post" action="/save_markers">
                        @csrf
                        <div class="header-btn bg-dark fw-500 text-white font-xsss p-1 lh-32 w100 text-center d-inline-block rounded-xl mb-3" id="time">

                        </div>
                           <div class="form-group icon-input mb-3">
                               <i class="font-sm ti-email text-grey-500 pr-0"></i>
                               <input type="text" name="note" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600" placeholder="Enter Note..">
                               <input id="noteInput" name="timestamp" type="hidden" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600" placeholder="">
                           </div>
                           <div class="form-group mb-1"><button type="submit" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Save</button></div>
                       </form>
                       <div class="col-sm-12 p-0 text-left">


                    </div>

                   </div>
               </div>
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

video.on("loadedmetadata",function(){

  var total = video.duration();

  var p = jQuery(video.controlBar.progressControl.children_[0].el_);

  for(var i=0;i<markers.length;i++)
    {

            var left =( markers[i].time/ total * 100)+'%';


						var time = markers[i].time;

						var el = jQuery('<div class="vjs-marker" style="left:'+left+'" data-time="'+time+'"><span>'+markers[i].note+'</span></div>');
						el.click(function(){

							video.currentTime($(this).data('time'));
						});

						p.append(el);

    }


});
</script>

{{-- play the perticular section on click on the note  --}}
<script>
    // Get the video element
var video = videojs("myPlayerID");

// Add a click event listener to the message wraps
$('.message-wrap').click(function() {
  // Get the timestamp from the data attribute

  // Set the video's current time to the timestamp
video.currentTime($(this).data('time'));

  // Play the video
//   video.play();
});

</script>


{{-- get the time stamp into the modal --}}
<script>
    function setVideoTime() {
        // Get the video element
        var video = videojs("myPlayerID");

        // Get the current time of the video
        const currentTime = video.currentTime();

        // Set the current time as the value of the input field in the modal
        const noteInput = document.getElementById('noteInput');
        noteInput.value = currentTime;

        var minutes = Math.floor(currentTime / 60);
minutes = minutes < 10 ? "0" + minutes : minutes;
var seconds = Math.floor(currentTime % 60);
$('#time').text(minutes + ":" + seconds);
    }

</script>

<script>

// form submission with ajax get the data dynamically

$('#save_markers').submit(function(e) {
  e.preventDefault(); // Prevent the form from submitting normally
  $('#Modallogin').css('display', 'none');
  // Serialize the form data
  var formData = $(this).serialize();

  // Send the request using jQuery's Ajax function
  $.ajax({
    url: '/save_markers',
    type: 'POST',
    data: formData,
    success: function(responseData) {
      // Handle the response data
    //   console.log(responseData);
    $('input[name="note"]').val('');

      // Create a new message item element
      var newMessageItem = $('<div class="message-item outgoing-message"></div>');

      // Create a new message wrap element
      var newMessageWrap = $('<div class="message-wrap" data-time=""></div>');

    //   to show the time above the note
      var newTimeWrapOuter = $('<div class="message-user m-0"></div>');
      var newTimeWrapInner = $('<div id="timeWrap" class="time p-0"></div>');

      var timeInSeconds = responseData.time; // Replace with your actual time in seconds
var minutes = Math.floor(timeInSeconds / 60);
minutes = minutes < 10 ? "0" + minutes : minutes;
var seconds = Math.floor(timeInSeconds % 60);
newTimeWrapInner.text(minutes + ":" + seconds);
newTimeWrapOuter.append(newTimeWrapInner);

newMessageItem.append(newTimeWrapOuter);

// add the time to data-time attribute
newMessageWrap.attr("data-time", timeInSeconds);
      // Set the text content of the message wrap to the response data
      newMessageWrap.text(responseData.note);

      // Append the message wrap to the message item
      newMessageItem.append(newMessageWrap);

      // Append the new message item to the messages content container
      $('.messages-content').append(newMessageItem);

      // Optional: Scroll to the bottom of the messages content
      var messagesContent = document.querySelector('.messages-content');
      messagesContent.scrollTop = messagesContent.scrollHeight;


// add the marker in video after saving the note =======
var total = video.duration();

var p = jQuery(video.controlBar.progressControl.children_[0].el_);

          var left =(responseData.time/ total * 100)+'%';


                      var time = responseData.time;

                      var el = jQuery('<div class="vjs-marker" style="left:'+left+'" data-time="'+time+'"><span>'+responseData.note+'</span></div>');
                      el.click(function(){

                          video.currentTime($(this).data('time'));
                      });

                      p.append(el);
// ===============

    },
    error: function(xhr, status, error) {
      // Handle any error that occurred during the request
      console.error('Request failed. Error: ' + error);
    }
  });
});


</script>
<script>

    // Scroll to the bottom of the messages content
    function scrollToBottom() {
        var messagesContent = document.getElementById('messagesContent');
        messagesContent.scrollTop = messagesContent.scrollHeight;
    }

    // Call the scrollToBottom function when the page finishes loading
    window.addEventListener('load', function() {
        scrollToBottom();
    });
</script>
</body>

</html>

