@include("inc_admin.header")
<link rel='stylesheet' href='https://cdn.plyr.io/3.5.6/plyr.css'>
<?php use App\Models\Video; ?>

<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_admin.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_admin.topbar")

            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-xl-8 col-xxl-9">
                            <div class="card border-0 mb-0 rounded-lg overflow-hidden">
                                <div class="player shadow-none">
                                    @php
                                        $section_data=$data['sections'];

                                    @endphp
                                    


                                   


<video controls crossorigin playsinline data-poster="/{{$data['courses']->course_image}}" class="js-player"> 
<source src="/{{$data['courses']->course_video}}" type="video/mp4" size="480" />
<source src="/{{$data['courses']->course_video}}" type="video/mp4" size="720" />
<source src="/{{$data['courses']->course_video}}" type="video/mp4" size="1080" /> 
</video>

    <script src='https://cdn.plyr.io/3.5.6/plyr.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

    const controls = [
        'play-large', // The large play button in the center
        'restart', // Restart playback
        'rewind', // Rewind by the seek time (default 10 seconds)
        'play', // Play/pause playback
        'fast-forward', // Fast forward by the seek time (default 10 seconds)
        'progress', // The progress bar and scrubber for playback and buffering
        'current-time', // The current time of playback
        'duration', // The full duration of the media
        'mute', // Toggle mute
        'volume', // Volume control
        'captions', // Toggle captions
        'settings', // Settings menu
        'pip', // Picture-in-picture (currently Safari only)

        'fullscreen' // Toggle fullscreen
    ];

    const player = Plyr.setup('.js-player', { controls });

    });
    </script>
                                      
                                </div>
                            </div>
                            <div class="card d-block border-0 rounded-lg overflow-hidden dark-bg-transparent bg-transparent mt-4 pb-3">
                                <div class="row">
                                    <div class="col-10"><h2 class="fw-700 font-md d-block lh-4 mb-2">{{$data['courses']->course_name}} </h2></div>
                                    <div class="col-2">
                                        <a href="#" class="btn-round-md ml-3 d-inline-block float-right rounded-lg bg-danger"><i class="feather-bookmark font-sm text-white"></i></a>
                                        <a href="#" class="btn-round-md ml-0 d-inline-block float-right rounded-lg bg-greylight" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="feather-share-2 font-sm text-grey-700"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right p-3 border-0 shadow-xss" aria-labelledby="dropdownMenu2">
                                            <ul class="d-flex align-items-center mt-0 float-left">
                                                <li class="mr-2"><h4 class="fw-600 font-xss text-grey-900  mt-2 mr-3">Share: </h4></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-pinterest"><i class="font-xs ti-pinterest text-white"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <span class="font-xssss fw-700 text-grey-900 d-inline-block ml-0 text-dark">{{$data['trainer']->name}}</span>
                                <span class="dot ml-2 mr-2 d-inline-block btn-round-xss bg-grey"></span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">{{$data['courses']->course_category}}</span>
                              
                               
                                <span class="dot ml-2 mr-2 d-inline-block btn-round-xss bg-grey"></span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">{{$data['courses']->course_subcategory}}</span>
                            </div>

                            <div class="card d-block border-0 rounded-lg overflow-hidden mt-2">
                                <div id="accordion" class="accordion mb-0">
                                    @php
                                        $count=1;
                                        // $section_name=explode(',',$data['courses']->section_name);
                                    @endphp
                                    @foreach ($data['sections'] as $section)
                                    <div class="card shadow-xss mb-0">
                                        <div class="card-header bg-greylight theme-dark-bg" id="heading{{$count}}">
                                            <h5 class="mb-0"><button class="btn font-xsss fw-600 btn-link " data-toggle="collapse" data-target="#collapse{{$count}}" aria-expanded="false" aria-controls="collapse{{$count}}">{{$section->section_name}}  </button></h5>
                                        </div>
                                       
                                        <div id="collapse{{$count}}" class="collapse p-3 {{$count ==1 ? 'show' : ''}}" aria-labelledby="heading{{$count}}" data-parent="#accordion">
                                           
                                            <?php
                                            $videos = Video::where("section_id", $section->id)->get();
                                            $count = 1;
                                            foreach($videos as $video){ 
                                            ?>
                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">{{$count}}</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">{{$video->video_name}}</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">10:34</span>
                                            </div>
                                            <?php $count++; } ?>
                                        </div>
                                    </div>
                                    @php
                                        $count++;
                                    @endphp
                                    @endforeach

                                </div>
                            </div>

                            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4 alert-success">
                                <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 text-success mb-4">What you'll learn from this lesson</h2>
                                <h4 class="font-xssss fw-600 text-grey-600 mb-3 pl-30 position-relative lh-24"><i class="ti-check font-xssss btn-round-xs bg-success text-white position-absolute left-0 top-5"></i>{{$data['courses']->course_benifits}} </h4>
                          
                                <h4 class="font-xssss fw-600 text-grey-600 mb-3 pl-30 position-relative lh-24"><i class="ti-check font-xssss btn-round-xs bg-success text-white position-absolute left-0 top-5"></i>After completing this course you'll be confident to create any subtle to complex animation that will turn any project a professional work and surely you'll become an awesome developer and designer</h4>
                                <h4 class="font-xssss fw-600 text-grey-600 mb-3 pl-30 position-relative lh-24"><i class="ti-check font-xssss btn-round-xs bg-success text-white position-absolute left-0 top-5"></i>This course will guide you from end to end concepts of this technology</h4>
                                

                            </div>

                            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4">
                                <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 mb-3">Description</h2>
                                <p class="font-xssss fw-500 lh-28 text-grey-600 mb-0 pl-2">{{$data['courses']->description}}  </p>
                            </div>

                            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4 mb-5">
                                <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 mb-3">Requirements</h2>
                                <p class="font-xssss fw-500 lh-28 text-grey-600 mb-0 pl-2">{{$data['courses']->course_requirements}} </p>
                                
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-3">
                          

                          


                            <div class="card w-100 border-0 mt-0 mb-4 p-4 shadow-xss position-relative rounded-lg bg-white">
                                <div class="row">
                                    <div class="col-5 pr-0">
                                        <h2 class="display3-size lh-1 m-0 text-grey-900 fw-700">4.9</h2>
                                    </div>
                                    <div class="col-7 pl-0 text-right">
                                        <div class="star d-block w-100 text-right">
                                            <img src="/assets/images/star.png" alt="star" class="w10">
                                            <img src="/assets/images/star.png" alt="star" class="w10">
                                            <img src="/assets/images/star.png" alt="star" class="w10">
                                            <img src="/assets/images/star.png" alt="star" class="w10">
                                            <img src="/assets/images/star-disable.png" alt="star" class="w10">
                                        </div>
                                        <h4 class="font-xsssss text-grey-600 fw-600 mt-1">Based on 433 rating</h4>
                                    </div>
                                </div>
                                <div class="bg-greylight theme-dark-bg rounded-sm p-2 mt-3 mb-4">
                                    <div class="row mt-3">
                                        <div class="col-3 pr-1 mt-0"><img src="/assets/images/star.png" alt="star" class="w10 float-left"><h4 class="font-xsss fw-600 text-grey-600 ml-1 float-left d-inline">5</h4></div>
                                        <div class="col-7 pl-0 pr-2">
                                            <div id="bar_1" data-value="45" class="bar-container">
                                                <div class="bar-percentage" style="width: 70%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-2 pl-0"><h4 class="font-xssss fw-600 text-grey-800">70%</h4></div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-3 pr-1 mt-0"><img src="/assets/images/star.png" alt="star" class="w10 float-left"><h4 class="font-xsss fw-600 text-grey-600 ml-1 float-left d-inline">4</h4></div>
                                        <div class="col-7 pl-0 pr-2">
                                            <div id="bar_2" data-value="45" class="bar-container">
                                                <div class="bar-percentage" style="width: 50%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-2 pl-0"><h4 class="font-xssss fw-600 text-grey-800">20%</h4></div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-3 pr-1 mt-0"><img src="/assets/images/star.png" alt="star" class="w10 float-left"><h4 class="font-xsss fw-600 text-grey-600 ml-1 float-left d-inline">3</h4></div>
                                        <div class="col-7 pl-0 pr-2">
                                            <div id="bar_3" data-value="45" class="bar-container">
                                                <div class="bar-percentage" style="width: 40%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-2 pl-0"><h4 class="font-xssss fw-600 text-grey-800">7%</h4></div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-3 pr-1 mt-0"><img src="/assets/images/star.png" alt="star" class="w10 float-left"><h4 class="font-xsss fw-600 text-grey-600 ml-1 float-left d-inline">2</h4></div>
                                        <div class="col-7 pl-0 pr-2">
                                            <div id="bar_4" data-value="45" class="bar-container">
                                                <div class="bar-percentage" style="width: 30%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-2 pl-0"><h4 class="font-xssss fw-600 text-grey-800">3%</h4></div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-3 pr-1 mt-0"><img src="/assets/images/star.png" alt="star" class="w10 float-left"><h4 class="font-xsss fw-600 text-grey-600 ml-1 float-left d-inline">0</h4></div>
                                        <div class="col-7 pl-0 pr-2">
                                            <div id="bar_5" data-value="45" class="bar-container">
                                                <div class="bar-percentage" style="width: 20%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-2 pl-0"><h4 class="font-xssss fw-600 text-grey-800">0%</h4></div>
                                    </div>
                                </div>

                              

                              
                                <div class="row"><a href="#" class="d-block p-2 lh-32 w-100 text-center ml-3 mr-3 bg-greylight fw-600 font-xssss text-grey-900">No Reviews</a></div>
                            </div>

                            <div class="card shadow-xss rounded-lg border-0 p-4 mb-4">
                                <h4 class="font-xs fw-700 text-grey-900 d-block mb-3">Subscription Benefits<a href="#" class="float-right"><i class="ti-arrow-circle-right text-grey-500 font-xss"></i></a></h4>
                                <div class="card-body d-flex p-0">
                                    <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">1</span>
                                    <span class="font-xssss fw-500 text-grey-500 ml-2">Fully guided course</span>
                         
                                </div>
                                <div class="card-body d-flex p-0 mt-3">
                                    <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">2</span>
                                    <span class="font-xssss fw-500 text-grey-500 ml-2">Assesments</span>
                                   
                                </div>

                                <div class="card-body d-flex p-0 mt-3">
                                    <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">3</span>
                                    <span class="font-xssss fw-500 text-grey-500 ml-2"> Lab Practice</span>
                                   
                                </div>

                                <div class="card-body d-flex p-0 mt-3">
                                    <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">4</span>
                                    <span class="font-xssss fw-500 text-grey-500 ml-2">Digital Book</span>
                                  
                                </div>

                                <div class="card-body d-flex p-0 mt-3">
                                    <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">5</span>
                                    <span class="font-xssss fw-500 text-grey-500 ml-2">Certification</span>
                                   
                                </div>

                                <div class="card-body d-flex p-0 mt-3">
                                    <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">6</span>
                                    <span class="font-xssss fw-500 text-grey-500 ml-2">Internships</span>
                                   
                                </div>

                                <div class="card-body d-flex p-0 mt-3">
                                    <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">7</span>
                                    <span class="font-xssss fw-500 text-grey-500 ml-2">Mini Projects</span>
                                   
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            
                <button class="btn btn-circle text-white btn-neutral sidebar-right">
                    <i class="ti-angle-left"></i>
                </button>
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

    </div>



    @include("inc_admin.footer")

    <script src="/assets/js/plugin.js"></script>
    <script src="/assets/js/scripts.js"></script>

</body>

</html>
