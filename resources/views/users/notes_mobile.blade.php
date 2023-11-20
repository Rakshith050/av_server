@include('inc.header')
@php

    use Carbon\Carbon;
@endphp
<style>
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
        @include('inc.navbar')
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc.topbar')
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">

                        <div class="" id="navtabs1">
                            <div class="card w-100 d-block chat-body p-0 border-0 shadow-xss rounded-lg mb-3 position-relative">
                                <div class="messages-content scroll-bar" style="max-height: 90vh">
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
                                <form method="post" action="/aprex/save_notes"
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

                </div>
                @include('inc.sidebar')
            </div>
        </div>
        <!-- main content -->
        <div class="app-footer border-0 shadow-lg">
            <a href="/default_live_stream/{{$data['course']->id}}/0" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="/aprex/video_player_mobile/{{$data['course']->id}}" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="/aprex/chat/{{$data['course']->id}}" class="nav-content-bttn" data-tab="chats"><i
                    class="feather-layout"></i></a>
            <a href="/aprex/notes/{{$data['course']->id}}" class="nav-content-bttn"><i class="feather-layers"></i></a>
            {{-- <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/50x50.png"
                    alt="user" class="w30 shadow-xss"></a> --}}
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

</body>

</html>
