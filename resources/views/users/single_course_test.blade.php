@include('inc.header')
<style>
    .video-playlist .title {
        padding-left: 1rem;
        color: #fff;
    }

    .video-playlist p {
        padding: 1rem;
        color: var(--secondary);
    }

    .video-playlist .videos {
        height: 70%;
        overflow-y: auto;
    }

    .video-playlist .videos::-webkit-scrollbar {
        width: .4rem;
        border-radius: .4rem;
        background-color: #0005;
    }

    .video-playlist .videos::-webkit-scrollbar-thumb {
        border-radius: .4rem;
        background-color: #fff;
    }

    .video-playlist .videos .video {
        position: relative;
        width: 100%;
        height: 5rem;

        display: flex;
        /* justify-content: center; */
        align-items: center;

        padding: 0 1rem;
        margin-top: .1rem;
        cursor: pointer;

        border-radius: .5rem;
    }

    .video-playlist .videos .video:hover {
        background-color: #0003;
    }

    .video-playlist .videos .video.active {
        background-color: #0003;
        color: var(--secondary);
    }

    .main-video video {
        width: 100%;
        border-radius: .5rem;
    }

    .video img {
        position: absolute;
        left: 1rem;
        top: 30%;
        transform: translateY(-50%);

        width: 1.5rem;
        height: 1.5rem;

        filter: invert(100%);
    }

    .video-playlist .videos .video.active img {
        filter: invert(100%) sepia(100%) saturate(2000%) hue-rotate(360deg);
    }

    .video p {
        margin-left: 2.5rem;
    }

    .video h3 {
        width: 23rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;

        font: 100 1rem sans-serif;
        padding: 0 .5rem;
    }
    
    @media (max-width: 992px){
    .main-content.menu-active {
    padding-left: 0;
}


}
</style>

@php
    use Carbon\Carbon;

@endphp
@php
    // $section_data= [];
    // $count=0;
    // $section_name=explode(',',$data['course']->section_name);
    // $section_video=explode(',',$data['course']->section_video);
    // // $course=$data['course']->course_video;
    // foreach ($section_name as $name) {
    //     # code...
    //     array_push($section_data, "'id'=>'$count','title' =>$name,'name'=>$section_video[$count]");
    //     $count++;
    // }
    // $json = json_encode($section_data);
    // dd($json);

    $sections = json_decode($data['course']->sections);
    // $section_video = $sections->section_video;

    use App\Models\Quiz;
    $test = Quiz::where('created_by', 'admin')
        ->where('subject', $data['course']->course_subject)
        ->latest()
        ->first();
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
                                <div class="player shadow-none">
                                    <video id='video' src='/{{ $data['course']->course_video }}' playsinline></video>
                                    {{-- <video id='video' src='/{{$section_video[1]}}' playsinline></video> --}}
                                    <div class='play-btn-big'></div>
                                    <div class='controls'>
                                        <div class="time"><span class="time-current"></span><span
                                                class="time-total"></span></div>
                                        <div class='progress'>
                                            <div class='progress-filled'></div>
                                        </div>
                                        <div class='controls-main'>
                                            <div class='controls-left'>
                                                <div class='volume'>
                                                    <div class='volume-btn loud mt-1'>
                                                        <i class="feather-volume-1 font-xl text-white"></i>
                                                    </div>
                                                    <div class='volume-slider'>
                                                        <div class='volume-filled'></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='play-btn paused'></div>
                                            <div class="controls-right">
                                                <div class='speed'>
                                                    <ul class='speed-list'>
                                                        <li class='speed-item' data-speed='0.5'>0.5x</li>
                                                        <li class='speed-item' data-speed='0.75'>0.75x</li>
                                                        <li class='speed-item active' data-speed='1'>1x</li>
                                                        <li class='speed-item' data-speed='1.5'>1.5x</li>
                                                        <li class='speed-item' data-speed='2'>2x</li>
                                                    </ul>
                                                </div>
                                                <div class='fullscreen'>
                                                    <svg width="30" height="22" viewBox="0 0 30 22"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z"
                                                            transform="translate(2 2)" fill="white" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card border-0 mb-0 rounded-lg overflow-hidden live-stream bg-image-center bg-image-cover" style="background-image: url(https://via.placeholder.com/1200x900.png);">
                                <div class="card-body d-flex justify-content-start p-2 position-absolute top-0 w-100 bg-gradiant-top">
                                    <figure class="avatar mb-0 mt-0 overflow-hidden"><img src="https://via.placeholder.com/50x50.png" alt="image" class="z-index-1 shadow-sm rounded-circle w40"></figure><h5 class="text-white mt-1 fw-700 ml-2 z-index-1 ">Cabe Deo <span class="d-block font-xsssss mt-1 fw-400 text-grey-300 z-index-1 ">2 hour</span></h5>
                                    <span class="live-tag position-absolute right-15 mt-2 bg-danger p-2 z-index-1  rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                </div>
                                <div class="card-body text-center p-2 position-absolute w-100 bottom-0 bg-gradiant-bottom">
                                    <a href="#" class="btn-round-xl d-md-inline-block d-none bg-blur m-3 mr-0 z-index-1"><i class="feather-grid text-white font-md"></i></a>
                                    <a href="#" class="btn-round-xl d-md-inline-block d-none bg-blur m-3 z-index-1"><i class="feather-mic-off text-white font-md"></i></a>
                                    <a href="#" class="btn-round-xxl bg-danger z-index-1"><i class="feather-phone-off text-white font-md"></i></a>
                                    <a href="#" class="btn-round-xl d-md-inline-block d-none bg-blur m-3 z-index-1"><i class="ti-video-camera text-white font-md"></i></a>
                                    <a href="#" class="btn-round-xl d-md-inline-block d-none bg-blur m-3 ml-0 z-index-1"><i class="ti-settings text-white font-md"></i></a>
                                    <span class="p-2 bg-blur z-index-1 text-white fw-700 font-xssss rounded-lg right-15 position-absolute mb-4 bottom-0">44:00</span>
                                </div>
                            </div> --}}

                        </div>
                        <div class="col-xl-4 col-xxl-3">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden">
                                <ul class="nav nav-tabs xs-p-4 d-flex align-items-center justify-content-between product-info-tab border-bottom-0"
                                    id="pills-tab" role="tablist">
                                    <li class="active list-inline-item"><a
                                            class="fw-700 pb-sm-3 pt-sm-3 xs-mb-2 ml-sm-5 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase {{ $data['id'] == 0 ? 'active' : '' }}"
                                            href="#navtabs0" data-toggle="tab">Course</a></li>
                                    <li class="list-inline-item"><a
                                            class="fw-700 pb-sm-3 pt-sm-3 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase {{ $data['id'] == 1 ? 'active' : '' }}"
                                            href="#navtabs1" data-toggle="tab">Notes</a></li>
                                    {{-- <li class="list-inline-item"><a class="fw-700 pb-sm-3 pt-sm-3 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs2" data-toggle="tab">Chats</a></li> --}}
                                    <li class="list-inline-item"><a
                                            class="fw-700 pb-sm-3 pt-sm-3 xs-mb-2 mr-sm-5 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase {{ $data['id'] == 2 ? 'active' : '' }}"
                                            href="#navtabs2" data-toggle="tab">Chats</a></li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show {{ $data['id'] == 0 ? 'active' : '' }}" id="navtabs0">
                                    <div class="video-playlist shadow-xss"
                                        style="background-color: #fff;border-radius:10px">

                                        <p class="text-dark">27 lessions &nbsp; . &nbsp; 50m 48s</p>
                                        <div class="videos scroll-bar" style="height: 310px;">

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show {{ $data['id'] == 1 ? 'active' : '' }}" id="navtabs1">
                                    <div
                                        class="card w-100 d-block chat-body p-0 border-0 shadow-xss rounded-lg mb-3 position-relative">
                                        <div class="messages-content scroll-bar p-3" style="height: 390px;">
                                            @foreach ($data['notes'] as $note)
                                                <div class="message-item outgoing-message">
                                                    <div class="message-wrap">{{ $note->note }}</div>
                                                    <div class="message-user">
                                                        <div>
                                                            <div class="time">@php echo Carbon::parse($note->created_at)->diffForHumans() @endphp<i
                                                                    class="ti-double-check text-info"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <form method="post" action="/save_notes"
                                            class="chat-form position-absolute bottom-0 w-100 left-0 bg-white z-index-1 p-3 shadow-xs theme-dark-bg ">
                                            @csrf
                                            <input type="hidden" name="course_id" value="{{ $data['course']->id }}">

                                            {{-- <button class="bg-grey float-left"><i class="ti-microphone text-white"></i></button> --}}
                                            <div class="form-group"><input type="text" name="note"
                                                    placeholder="Start typing.."></div>
                                            <button class="bg-current"><i
                                                    class="ti-arrow-right text-white"></i></button>
                                        </form>
                                    </div>

                                </div>

                                <div class="tab-pane fade show {{ $data['id'] == 2 ? 'active' : '' }}" id="navtabs2">
                                    <div
                                        class="card w-100 d-block chat-body p-0 border-0 shadow-xss rounded-lg mb-3 position-relative">
                                        <div class="messages-content scroll-bar p-3" style="height: 390px;">

                                            @php
                                                $merged_messages = $data['sent_messages']->merge($data['received_messages'])->sortBy('created_at');
                                                // dd($merged_messages);
                                            @endphp
                                            @foreach ($merged_messages as $message)
                                                @if ($message->sender_id == session('rexkod_user_id'))
                                                    <div class="message-item outgoing-message">
                                                        <div class="message-user">
                                                            <figure class="avatar">
                                                                <img src="https://via.placeholder.com/50x50.png"
                                                                    alt="image">
                                                            </figure>
                                                            <div>
                                                                <h5>You</h5>
                                                                <div class="time">@php echo Carbon::parse($message->created_at)->diffForHumans() @endphp<i
                                                                        class="ti-double-check text-info"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="message-wrap">{{ $message->message }}</div>
                                                    </div>
                                                @else
                                                    <div class="message-item">
                                                        <div class="message-user">
                                                            <figure class="avatar">
                                                                <img src="https://via.placeholder.com/50x50.png"
                                                                    alt="image">
                                                            </figure>
                                                            <div>
                                                                <h5 class="font-xssss mt-2">
                                                                    {{ $data['trainer']->name }}</h5>
                                                                <div class="time">@php echo Carbon::parse($message->created_at)->diffForHumans() @endphp</div>
                                                            </div>
                                                        </div>
                                                        <div class="message-wrap shadow-none">
                                                            {{ $message->message }}😃</div>
                                                    </div>
                                                @endif
                                            @endforeach


                                            {{-- <div class="message-item">
                                                <div class="message-user">
                                                    <figure class="avatar">
                                                        <img src="https://via.placeholder.com/50x50.png" alt="image">
                                                    </figure>
                                                    <div>
                                                        <h5 class="font-xssss mt-2">Byrom Guittet</h5>
                                                        <div class="time">01:35 PM</div>
                                                    </div>
                                                </div>
                                                <div class="message-wrap shadow-none">I've found some cool photos for our travel app.</div>
                                            </div>

                                            <div class="message-item outgoing-message">
                                                <div class="message-user">
                                                    <figure class="avatar">
                                                        <img src="https://via.placeholder.com/50x50.png" alt="image">
                                                    </figure>
                                                    <div>
                                                        <h5>You</h5>
                                                        <div class="time">01:35 PM<i class="ti-double-check text-info"></i></div>
                                                    </div>
                                                </div>
                                                <div class="message-wrap">Hey mate! How are things going ?</div>
                                            </div>

                                            <div class="message-item">
                                                <div class="message-user">
                                                    <figure class="avatar">
                                                        <img src="https://via.placeholder.com/50x50.png" alt="image">
                                                    </figure>
                                                    <div>
                                                        <h5 class="font-xssss mt-2">Byrom Guittet</h5>
                                                        <div class="time">01:35 PM</div>
                                                    </div>
                                                </div>
                                                <div class="message-wrap shadow-none">I'm fine, how are you 😃</div>
                                            </div>

                                            <div class="message-item">
                                                <div class="message-user">
                                                    <figure class="avatar">
                                                        <img src="https://via.placeholder.com/50x50.png" alt="image">
                                                    </figure>
                                                    <div>
                                                        <h5 class="font-xssss mt-2">Byrom Guittet</h5>
                                                        <div class="time">01:35 PM<i class="ti-double-check text-info"></i></div>
                                                    </div>
                                                </div>
                                                <div class="message-wrap shadow-none">I want those files for you. I want you to send 1 PDF and 1 image file.</div>
                                            </div>

                                            <div class="message-item">
                                                <div class="message-user">
                                                    <figure class="avatar">
                                                        <img src="https://via.placeholder.com/50x50.png" alt="image">
                                                    </figure>
                                                    <div>
                                                        <h5 class="font-xssss mt-2">Byrom Guittet</h5>
                                                        <div class="time">01:35 PM</div>
                                                    </div>
                                                </div>
                                                <div class="message-wrap shadow-none">I've found some cool photos for our travel app.</div>
                                            </div> --}}

                                        </div>
                                        <form method="post" action="/send_message"
                                            class="chat-form position-absolute bottom-0 w-100 left-0 bg-white z-index-1 p-3 shadow-xs theme-dark-bg ">
                                            @csrf
                                            <input type="hidden" name="receiver_id"
                                                value="{{ $data['trainer']->id }}">
                                            <input type="hidden" name="course_id"
                                                value="{{ $data['course']->id }}">

                                            {{-- <button class="bg-grey float-left"><i class="ti-microphone text-white"></i></button> --}}
                                            <div class="form-group"><input type="text" name="message"
                                                    placeholder="Start typing.."></div>
                                            <button class="bg-current"><i
                                                    class="ti-arrow-right text-white"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-12 col-xxl-12">
                            <div
                                class="card d-block border-0 rounded-lg overflow-hidden dark-bg-transparent bg-transparent mt-4 pb-4">
                                <div class="row">
                                    <div class="col-10">
                                        <h2 class="fw-700 font-md d-block lh-4 mb-2 title">
                                            {{ $data['course']->course_name }}</h2>
                                    </div>
                                    <div class="col-2">
                                        <a href="#"
                                            class="btn-round-md ml-3 mb-2 d-inline-block float-right rounded-lg bg-danger"><i
                                                class="feather-bookmark font-sm text-white"></i></a>
                                        <a href="#"
                                            class="btn-round-md ml-0 d-inline-block float-right rounded-lg bg-greylight"
                                            id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="feather-share-2 font-sm text-grey-700"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right p-3 border-0 shadow-xss"
                                            aria-labelledby="dropdownMenu2">
                                            <ul class="d-flex align-items-center mt-0 float-left">
                                                <li class="mr-2">
                                                    <h4 class="fw-600 font-xss text-grey-900  mt-2 mr-3">Share: </h4>
                                                </li>
                                                <li class="mr-2"><a href="#"
                                                        class="btn-round-md bg-facebook"><i
                                                            class="font-xs ti-facebook text-white"></i></a></li>
                                                <li class="mr-2"><a href="#"
                                                        class="btn-round-md bg-twiiter"><i
                                                            class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                <li class="mr-2"><a href="#"
                                                        class="btn-round-md bg-linkedin"><i
                                                            class="font-xs ti-linkedin text-white"></i></a></li>
                                                <li class="mr-2"><a href="#"
                                                        class="btn-round-md bg-instagram"><i
                                                            class="font-xs ti-instagram text-white"></i></a></li>
                                                <li class="mr-2"><a href="#"
                                                        class="btn-round-md bg-pinterest"><i
                                                            class="font-xs ti-pinterest text-white"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <span class="font-xssss fw-700 text-grey-900 d-inline-block ml-0 text-dark"><b>Cassica
                                        Vanni</b></span>
                                <span class="dot ml-2 mr-2 d-inline-block btn-round-xss bg-grey"></span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Developer</span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Design</span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Developer</span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">HTML5</span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Jquery</span>
                                <span class="dot ml-2 mr-2 d-inline-block btn-round-xss bg-grey"></span>
                                <span class="font-xssss fw-700 text-primary d-inline-block ml-0 "><b>Follow
                                        Author</b></span>
                            </div>
                            <div class="card d-block border-0 bg-transparent dark-bg-transparent">
                                <ul class="memberlist mt-0 mb-2 ml-0">
                                    <li class="w20"><a href="#"><img
                                                src="https://via.placeholder.com/20x20.png" alt="user"
                                                class="w40 d-inline-block"></a></li>
                                    <li class="w20"><a href="#"><img
                                                src="https://via.placeholder.com/20x20.png" alt="user"
                                                class="w40 d-inline-block"></a></li>
                                    <li class="w20"><a href="#"><img
                                                src="https://via.placeholder.com/20x20.png" alt="user"
                                                class="w40 d-inline-block"></a></li>
                                    <li class="w20"><a href="#"><img
                                                src="https://via.placeholder.com/20x20.png" alt="user"
                                                class="w40 d-inline-block"></a></li>
                                    <li class="w20"><a href="#"><img
                                                src="https://via.placeholder.com/20x20.png" alt="user"
                                                class="w40 d-inline-block"></a></li>
                                    <li class="w20"><a href="#"><img
                                                src="https://via.placeholder.com/20x20.png" alt="user"
                                                class="w40 d-inline-block"></a></li>

                                    <li class="pl-4 w-auto"><a href="#"
                                            class="fw-500 text-grey-500 font-xssss">Member already downloaded</a></li>

                                </ul>
                            </div>

                        </div>
                        <div class="col-xl-12 col-xxl-12 col-lg-12">
                            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4">
                                @if (!empty($test->id))
                                    <a href="/take_test/{{ $data['course']->id }}/{{ $test->id }}">
                                        <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 mb-3">Take test to get certified. <i
                                                class="ti-arrow-right font-sm text-dark float-right"></i></h2>
                                    </a>
                                @else
                                    <a href="#">
                                        <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 mb-3">Test coming soon!. <i
                                                class="ti-arrow-right font-sm text-dark float-right"></i></h2>
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-12 pt-0 mb-3 mt-4">
                            <h2 class="fw-400 font-lg d-block">Mini <b>Projetcs</b> <a href="#"
                                    class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2>
                        </div>

                        <div class="col-lg-12 pt-2">
                            <div
                                class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none">
                                @foreach ($data['mini_projects'] as $mini_project)
                                    {{-- <div class="col-lg-3 col-md-6 col-12 col-sm-6"> --}}
                                    <div class="item">
                                        <div
                                            class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                            {{-- <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url({{$mini_project->project_image}});"></div> --}}
                                            <div class="card-image w-100 ">
                                                <img src="/{{ $mini_project->project_image }}" alt="image"
                                                    class="w-100" style="height: 100px">
                                            </div>
                                            <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">

                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xsss mt-3 mb-1"><a href="#"
                                                        class="text-dark text-grey-900">
                                                    </a>{{ ucwords($mini_project->project_name) }}</h4>
                                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">
                                                    {{ $mini_project->description }}</p>
                                                <a href="/start_project/{{ $mini_project->id }}"
                                                    class="text-dark text-grey-900">
                                                    <span
                                                        class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">Start</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- </div> --}}
                                @endforeach
                                {{-- <div class="item">
                                    <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                        <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                        <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">

                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1"><a href="#" class="text-dark text-grey-900"> </a>Name</h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">dt--</p>
                                            <a href="#" class="text-dark text-grey-900">
                                            <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">Start</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                        <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                        <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">

                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1"><a href="#" class="text-dark text-grey-900"> </a>Name</h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">dt--</p>
                                            <a href="#" class="text-dark text-grey-900">
                                            <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">Start</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card w200 d-block border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                        <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(https://via.placeholder.com/200x100.png);"></div>
                                        <div class="card-body d-block w-100 pl-4 pr-4 pb-4 text-center">

                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1"><a href="#" class="text-dark text-grey-900"> </a>Name</h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">dt--</p>
                                            <a href="#" class="text-dark text-grey-900">
                                            <span class="live-tag mt-2 mb-3 bg-danger p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">Start</span></a>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                        <div class="col-xl-12 col-xxl-12 col-lg-12">


                            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4">
                                <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 mb-3">Description</h2>
                                <p class="font-xssss fw-500 lh-28 text-grey-600 mb-0 pl-2">A good algorithm usually
                                    comes together with a set of good data structures that allow the algorithm to
                                    manipulate the data efficiently. In this online course, we consider the common data
                                    structures that are used in various computational problems. You will learn how these
                                    data structures are implemented in different programming languages and will practice
                                    implementing them in our programming assignments.

                                    This will help you to understand what is going on inside a particular built-in
                                    implementation of a data structure and what to expect from it. You will also learn
                                    typical use cases for these data structures. </p>
                                <p class="font-xssss fw-500 lh-28 text-grey-600 mb-0 pl-2">This uniquely designed
                                    online course covering advanced topics of Data Structures & Algorithms by ABC is a
                                    complete package for all the budding programmers who aspire to gain expertise in
                                    Data Structures and Algorithms or are appearing for their internship/placement
                                    interviews.</p>
                            </div>

                            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4 mb-5">
                                <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 mb-3">Instructor</h2>
                                <div class="row">
                                    <div class="col-sm-4">

                                        <div>
                                            <img id="ma" src="/assets/images/manjunath.jpeg"
                                                alt="Author Images" width="300">

                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="author-content">
                                            <h3 class="title">Manjunath Aradhya</h3>
                                            <span class="subtitle">Senior Instructor</span>
                                            <p class="font-xssss fw-500 lh-28 text-grey-600 mb-0 pl-2">A passionate
                                                Tech-Guru, a revered author of numerous hot-selling Computer Science
                                                books, a renowned Educationist, and a celebrated Technocrat. A former
                                                Business-Associate at Wipro Technologies and organically connected to
                                                the academia all through my 24+ years of Journey in Tech-skilling, I
                                                have been impact-fully instrumental in personally transforming 60000+
                                                On-campus & Off-campus Tech-graduates to successful IT-Professionals.
                                            </p>
                                            <p class="font-xssss fw-500 lh-28 text-grey-600 mb-0 pl-2">After creating
                                                more than a dozen courses on Microsoft Access databases and programming
                                                in VBA, many students have contacted me with discussions on specific
                                                problems and scenarios. From these discussions,</p>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                                <li><a href="#"><i class="icon-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('inc.sidebar')
            </div>
        </div>
        <!-- main content -->
        <div class="app-footer border-0 shadow-lg">
            <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default-follower.html" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i
                    class="feather-layout"></i></a>
            <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/50x50.png"
                    alt="user" class="w30 shadow-xss"></a>
        </div>

        <div class="app-header-search">
            <form class="search-form">
                <div class="form-group searchbox mb-0 border-0 p-1">
                    <input type="text" class="form-control border-0" placeholder="Search...">
                    <i class="input-icon">
                        <ion-icon name="search-outline" role="img" class="md hydrated"
                            aria-label="search outline"></ion-icon>
                    </i>
                    <a href="#" class="ml-1 mt-1 d-inline-block close searchbox-close">
                        <i class="ti-close font-xs"></i>
                    </a>

                </div>
            </form>
        </div>

    </div>




    @include('inc.footer')


    @php
        use App\Models\Assesment;
        use App\Models\Video;
        $result = $data['course']->sections;

        $assesments = Assesment::where('course_id', $data['course']->id)->get();
        $section_videos = Video::where('course_id', $data['course']->id)->get();

        $jsonArray = json_decode($result, true);

        // Add a new key-value pair to all objects
        // $count =0;
        // foreach ($jsonArray as &$jsonObject) {
        // $jsonObject['id'] = $count;
        // $count++;
        // }

        // Convert the array back to a JSON string
        $jsonString = json_encode($jsonArray);

        // echo $jsonString;

    @endphp
    <script>
        const main_video = document.querySelector('#video');
        const main_video_title = document.querySelector('.title');
        const video_playlist = document.querySelector('.video-playlist .videos');

        // console.log(main_video);
        let section_videos = <?php echo $section_videos; ?>;
        // console.log(section_videos);
        let assesments = <?php echo $assesments; ?>;
        let data = <?php echo $jsonString; ?>;
        let course_id = <?php echo $data['course']->id ?>;
        // console.log(2);
        // console.log(data);
        let count = 0;
        let video_data = [];
        data.forEach((section, j) => {
            // let flag = 0;
            // assesments.forEach(assesment => {
            //     if (section.id == assesment.section_name) {
            //         flag = 1;
            //     }
            // });
            let video_flag = 0;
            let video_files;
            let video_names;
            if (section.id == section_videos[count].section_id) {
                // console.log(section_videos[count].video_file);
                video_flag = 1;
                video_files = section_videos[count].video_file.split(",").map(s => s.trim());
                video_names = section_videos[count].video_name.split(",").map(s => s.trim());
                digital_link = section_videos[count].digital_link.split(",").map(s => s.trim());
                lab_link = section_videos[count].lab_link.split(",").map(s => s.trim());
                // console.log(video_files);
            }
            let video_names_html = '<ul class="list-unstyled">';
            for (let i = 0; i < video_names.length; i++) {
                let flag = 0;
                assesments.forEach(assesment => {
                    if (course_id == assesment.course_id && section.id == assesment.section_name && assesment.video == i) {
                        flag = 1;
                    }
                });
                video_names_html +=
                    `<li class="video " data-id="${section.id.toString()+i}">
                        <div class="d-flex flex-column">
                            <div>
                                <img src="/assets/images/play.svg" alt="">
                                <div style="margin-left: 2rem;"><span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">${i+1}</span><span class="font-xssss fw-500 text-dark-500 ml-2">${video_names[i]}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between" style="width: 100%;margin-left: 2rem;">
                                <div style="border: 1px solid #b8afaf;padding: 0 8px;"><a class="font-xssss" ${flag==1 ? `href="/take_assesment/${course_id}/${section.id}/${i}"` : `href=""`}>Assesments</a></div>
                                <div style="border: 1px solid #b8afaf;padding: 0 8px;"><a class="font-xssss" href="${digital_link[i]}" target="_blank">Digital Book</a></div>
                                <div style="border: 1px solid #b8afaf;padding: 0 8px;"><a class="font-xssss" href="/code" target="_blank">Lab</a></div>
                            </div>
                        </div>
                    </li>`;
                let video_data_obj = {
                    id: section.id.toString() + i,
                    video_name: video_names[i],
                    video_link: video_files[i]
                };
                video_data.push(video_data_obj);
            }
            video_names_html += '</ul>';

            let video_element = `
                                <div id="accordion" class="accordion mb-0">

                                    <div class="card shadow-xss mb-0">
                                        <div class="card-header bg-greylight theme-dark-bg" id="heading${count}">
                                            <h5 class="mb-0"><button class="btn font-xsss fw-600 btn-link " data-toggle="collapse" data-target="#collapse${count}" aria-expanded="false" aria-controls="collapse${count}">${count+1+'.'}${section.section_name}</button></h5>
                                        </div>

                                        <div id="collapse${count}" class="collapse" aria-labelledby="heading${count}" data-parent="#accordion">
                                            <div class="card-body p-2">

                                                ${video_names_html}
                                            </div>

                                        </div>
                                    </div>
                                </div>`;



            video_playlist.innerHTML += video_element;
            count++;
        })

        let videos = document.querySelectorAll('.video');
        videos[0].classList.add('active');
        videos[0].querySelector('img').src = '/assets/images/pause.svg';

        videos.forEach(selected_video => {
            selected_video.onclick = () => {

                for (all_videos of videos) {
                    all_videos.classList.remove('active');
                    all_videos.querySelector('img').src = '/assets/images/play.svg';

                }

                selected_video.classList.add('active');
                selected_video.querySelector('img').src = '/assets/images/pause.svg';

                let match_video = video_data.find(video => video.id == selected_video.dataset.id);
                // console.log(match_video);
                main_video.src = '/' + match_video.video_link;
                main_video_title.innerHTML = match_video.video_name;
            }
        });
    </script>


</body>

</html>

