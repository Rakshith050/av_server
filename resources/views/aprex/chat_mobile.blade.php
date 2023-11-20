@include('inc_aprex.header')
@php

    use Carbon\Carbon;
@endphp
<style>
/* .middle-sidebar-right {
    margin-left: 0px;
    overflow-y: scroll;
} */
.result p  {
    margin-top: 0;
    margin-bottom: 0rem;
    margin-left: 1rem;
    font-size: .8rem;
    font-weight: 500;
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
            <div class="middle-sidebar-bottom" style="padding: 76px 0px 0px;">
                <div class="middle-sidebar-left">

                    <div class="tab-pane fade show" id="navtabs2">
                        <div
                            class="card w-100 d-block chat-body p-0 border-0 shadow-xss rounded-lg mb-3 position-relative">
                            <div class="messages-content scroll-bar p-3" style="max-height: 90vh" id="messagesContent">

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
                            <div class="row w-100" style="position: absolute;z-index: 10;bottom: 57px;">
                                <div class="col-lg-12">
                                    <div class="result scroll-bar card border-0 bg-white shadow-xs p-0"
                                        ><p></p></div>
                                </div>
                            </div>
                            <form method="post" action="/aprex/send_message"
                                class="chat-form position-absolute bottom-0 w-100 left-0 bg-white z-index-1 p-3 shadow-xs theme-dark-bg ">
                                @csrf
                                <input type="hidden" name="receiver_id"
                                    value="{{ $data['trainer']->id }}">
                                <input type="hidden" name="course_id"
                                    value="{{ $data['course']->id }}">

                                {{-- <button class="bg-grey float-left"><i class="ti-microphone text-white"></i></button> --}}
                                <div class="form-group search-box"><input type="text" name="message"
                                        placeholder="Start typing.."></div>
                                <button class="bg-current"><i
                                        class="ti-arrow-right text-white"></i></button>
                            </form>
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


    <script>
        $(document).ready(function() {
            var searchBox = $('.search-box');
            var resultDropdown = $(".result");
            $('.search-box input[type="text"]').on("keyup input", function() {
                /* Get input value on change */
                var inputVal = $(this).val();
                // var resultDropdown = $(this).siblings(".result");
                var resultDropdown = $(".result");
                if (inputVal.length) {
                    $.get("/search_questions", {
                        term: inputVal
                    }).done(function(data) {
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else {
                    resultDropdown.empty();
                }
            });
            // Handle click events on the document
            $(document).on("click", function(event) {
                // Close the search results dropdown if the clicked element is not within the search box
                if (!searchBox.is(event.target) && searchBox.has(event.target).length === 0) {
                resultDropdown.empty();
                }
            });


            // Set search input value on click of result item
            $(document).on("click", ".result p", function() {
                // $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(".search-box").find('input[type="text"]').val($(this).text());
                $(".result").empty();

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


