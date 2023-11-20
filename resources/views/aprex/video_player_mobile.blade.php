@include('inc_aprex.header')
@php
use App\Models\Assesment;
        use App\Models\Video;
        use App\Models\Section;
        use App\Models\Lab;
        use App\Models\Subject;
    use Carbon\Carbon;
@endphp
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
                    <div class="tab-pane fade show" id="navtabs0">
                        <div class="video-playlist shadow-xss"
                            style="background-color: #fff;border-radius:10px">
                            @php
                            $video_count = Video::where('course_id', $data['course']->id)->get();
                            @endphp
                            <p class="text-dark fw-700 font-xss">{{count($video_count)}}&nbsp; Videos . &nbsp; 50m 48s</p>
                            <div class="videos scroll-bar" style="height: 310px;">

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
                if(assesment.section_name == section.id && assesment.video == section_videos[i].id){
                    flag = 1;
                }
            });

            let lab_id = null;
            labs.forEach(lab => {
                // console.log(lab.id);
                // console.log(section_videos[i].lab_link);
                if(lab.id == section_videos[i].lab_link){
                    lab_flag = 1;
                    lab_id = lab.code;
                    // console.log(lab_flag);
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
                            <div style="border: 1px solid #b8afaf;padding: 0 8px;"><a class="font-xssss" ${flag==1 ? `href="/aprex/take_assesment/${course_id}/${section.id}/${section_videos[i].id}"` : `href="#"`}>Assesments</a></div>
                            <div style="border: 1px solid #b8afaf;padding: 0 8px;"><a class="font-xssss" href="/aprex/ebook/${section_videos[i].id}" target="">Digital Book</a></div>
                            
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
    videos[0].classList.add('active');
    videos[0].querySelector('img').src = '/assets/images/pause.svg';

    videos.forEach(selected_video => {
        // console.log(selected_video.dataset.url);
        selected_video.onclick = () => {

            // console.log(section_videos);
            // for (all_videos of videos) {
            //     all_videos.classList.remove('active');
            //     all_videos.querySelector('img').src = '/assets/images/play.svg';

            // }

            // selected_video.classList.add('active');
            // selected_video.querySelector('img').src = '/assets/images/pause.svg';

            // let match_video = section_videos.find(video => video.id == selected_video.dataset.id);
            // // console.log(match_video);
            // main_video.src = '/' + match_video.video_file;
            // main_video_title.innerHTML = match_video.video_name;
            let videoId = selected_video.dataset.id;

            // Navigate to the new page with the video URL
            window.location.href = '/aprex/default_live_stream/{{$data['course']->id}}/0/'+ videoId;
        }
    });
</script>
</body>

</html>


