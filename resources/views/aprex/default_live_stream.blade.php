@include('inc_aprex.header')
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
#course-tabs{
    display:none;
}
.save-div{
    display: flex !important;
}
#dropdownMenu2{
    margin-left: 5px;
}

}
</style>

@php
    use Carbon\Carbon;
    use App\Models\Assesment;
        use App\Models\Video;
        use App\Models\Section;
        use App\Models\Lab;
        use App\Models\Subject;
@endphp
@php

    use App\Models\Quiz;
    use App\Models\Quiz_result;
    $test = Quiz::where('created_by', 'admin')
        ->where('subject', $data['course']->course_subject)
        ->where('course_id', $data['course']->id)
        ->latest()
        ->first();
@endphp

<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc_aprex.navbar')
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc_aprex.topbar')
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-xl-8 col-xxl-9">
                            <div class="card border-0 mb-0 rounded-lg overflow-hidden">
                                <div class="player shadow-none">
                                    @php
                                        if(isset($data['video_id'])){
                                            $video_details = Video::where('id', $data['video_id'])->first();
                                        }else {
                                            $section = Section::where('course_id',$data['course']->id)->first();
                                            $video_details = Video::where('course_id', $data['course']->id)->where('section_id',$section->id)->first();

                                        }
                                    @endphp
                                    <video id='video' src='/{{ $video_details->video_file}}' playsinline></video>
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


                        </div>
                        <div class="col-xl-4 col-xxl-3" id="course-tabs">
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
                                    <div class="col-8">
                                        <h2 class="fw-700 font-md d-block lh-4 mb-2 title">
                                            {{ $video_details->video_name }}</h2>
                                    </div>
                                    <div class="col-4 save-div">
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

                                <span class="font-xssss fw-700 text-grey-900 d-inline-block ml-0 text-dark">{{$data['trainer']->name}}</span>
                                <span class="dot ml-2 mr-2 d-inline-block btn-round-xss bg-grey"></span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">{{$data['course']->course_category}}</span>
                              
                               
                                <span class="dot ml-2 mr-2 d-inline-block btn-round-xss bg-grey"></span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">{{$data['course']->course_subcategory}}</span>

                            </div>
                         

                        </div>
                        <div class="col-xl-12 col-xxl-12 col-lg-12">
                            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4">
                                @if (!empty($test->id))

                                    @php
                                        $courseTestResult = Quiz_result::where('quiz_id', $test->id)
                                            ->where('user_id', session('rexkod_user_id'))
                                            ->latest()
                                            ->first();
                                    @endphp
                                    @if ($courseTestResult && $courseTestResult->score_percentage >= 50)
                                        <a href="/aprex/view_certificate/{{$data['course']->id}}/{{$courseTestResult->score_percentage}}">
                                            <h2 class="fw-700 font-sm mt-1 pl-1">View certificate. <i class="ti-arrow-right font-sm text-dark float-right"></i></h2>
                                        </a>
                                    @else
                                        <a href="/aprex/take_test/{{ $data['course']->id }}/{{ $test->id }}">
                                            <h2 class="fw-700 font-sm mt-1 pl-1">Test to get certified. <i class="ti-arrow-right font-sm text-dark float-right"></i></h2>
                                        </a>
                                    @endif
                                @else
                                    <a href="#">
                                        <h2 class="fw-700 font-sm mt-1 pl-1">Test coming soon!. <i class="ti-arrow-right font-sm text-dark float-right"></i></h2>
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
                                                    Available on Web</p>
                                               
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
                                <p class="font-xssss fw-500 lh-28 text-grey-600 mb-0 pl-2">
                                    {{$data['course']->description}}
                                </p>
                            </div>

                            
                        </div>
                    </div>
                </div>

                @include('inc_aprex.sidebar')
            </div>
        </div>
        <!-- main content -->
        @include('inc_aprex.footer_course')

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




    @include('inc_aprex.footer')


    @php

        $result = $data['course']->sections;

        $subject = Subject::where('id',$data['course']->course_subject)->first();
        $assesments = Assesment::where('course_id', $data['course']->id)->get();
        $section_videos = Video::where('course_id', $data['course']->id)->get();
        $labs = Lab::where('course_id', $data['course']->id)->get();

        $sections = Section::where('course_id', $data['course']->id)->get();
        // $section_videos = Video::where('course_id', $data['course']->id)->where('section_id', $data['course']->id)->get();
        $jsonArray = json_decode($result, true);
        $jsonString = json_encode($jsonArray);

        $sections = json_encode($sections);
        // echo $sections;


    @endphp

    <script>
        const main_video = document.querySelector('#video');
        const main_video_title = document.querySelector('.title');
        const video_playlist = document.querySelector('.video-playlist .videos');

        let sections = <?php echo $sections; ?>;
        let active_video_id = <?php echo $video_details->id ?>;
        // console.log(sections);
        let section_videos = <?php echo $section_videos; ?>;
        let assesments = <?php echo $assesments; ?>;
        let course_id = <?php echo $data['course']->id ?>;
        let subject = <?php echo $subject ?>;
        let labs = <?php echo $labs; ?>;
        let count = 0;
        let video_data = [];
        sections.forEach((section, j) => {
        let video_names_html = '<ul class="list-unstyled">';
        for (let i = 0; i < section_videos.length; i++) {
            let flag = 0;
            let lab_flag =0;
            if(section_videos[i].section_id == section.id){
                // console.log(section_videos[i]);
                assesments.forEach(assesment => {
                    if(assesment.section_name == section.id && assesment.video == section_videos[i].section_id){
                        flag = 1;
                    }
                });

                let lab_id = null;
                labs.forEach(lab => {
                    if(lab.id == section_videos[i].lab_link){
                        lab_flag = 1;
                        lab_id = lab.code;
                    }
                });
                video_names_html +=
                    `<li class="video " data-id="${section_videos[i].id}">
                        <div class="d-flex flex-column">
                            <div>
                                <img src="/assets/images/play.svg" alt="">
                                <div style="margin-left: 2rem;"><span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">${i+1}</span><span class="font-xssss fw-500 text-dark-500 ml-2">${section_videos[i].video_name}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between" style="width: 100%;margin-left: 2rem;">
                                <div style="border: 1px solid #b8afaf;padding: 0 8px;"><a class="font-xssss" ${flag==1 ? `href="/take_assesment/${course_id}/${section.id}/${section_videos[i].id}"` : `href="#"`}>Assesments</a></div>
                                <div style="border: 1px solid #b8afaf;padding: 0 8px;"><a class="font-xssss" href="/ebook/${section_videos[i].id}" target="_blank">EBook</a></div>
                                <div style="border: 1px solid #b8afaf;padding: 0 8px;"><a class="font-xssss" ${lab_flag==1 ? `href="/lab/${subject.subject_name}/${lab_id}"` : `href="#"`} target="_blank">Lab</a></div>
                            </div>
                        </div>
                    </li>`;
            }
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
        // console.log(videos.dataset);
        // videos[0].classList.add('active');
        // videos[0].querySelector('img').src = '/assets/images/pause.svg';

        videos.forEach(selected_video => {
            if(selected_video.dataset.id == active_video_id){
                selected_video.classList.add('active');
                selected_video.querySelector('img').src = '/assets/images/pause.svg';
            }
            // console.log(selected_video.dataset.id);
            selected_video.onclick = () => {

                // console.log(section_videos);
                for (all_videos of videos) {
                    all_videos.classList.remove('active');
                    all_videos.querySelector('img').src = '/assets/images/play.svg';

                }

                selected_video.classList.add('active');
                selected_video.querySelector('img').src = '/assets/images/pause.svg';

                let match_video = section_videos.find(video => video.id == selected_video.dataset.id);
                // console.log(match_video);
                main_video.src = '/' + match_video.video_file;
                main_video_title.innerHTML = match_video.video_name;
            }
        });
    </script>


</body>

</html>

<script src="/assets/js/video-player.js"></script>