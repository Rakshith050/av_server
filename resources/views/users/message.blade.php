<?php session()->put('curnav','chat'); ?>
@include('inc.header')

@php
    use Carbon\Carbon;

@endphp
<style>
.result p{
    padding-left: 30px;
    font-weight: 500;
}
</style>

<body class="color-theme-orange mont-font">




    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc.navbar')

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc.topbar')


            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left bg-white dark-bg-transparent mr-3 pr-0">
                    <div class="row">
                        <div class="col-lg-6 col-xl-4 col-md-6 chat-left scroll-bar border-right-light pl-4 pr-4">
                            <form action="#" class="mt-0 pl-3 pt-3">
                                <div class="search-form">
                                    <i class="ti-search font-xs"></i>
                                    <input type="text" class="form-control text-grey-500 mb-0 bg-greylight border-0"
                                        placeholder="Search here.">
                                </div>
                            </form>
                            <div class="section full mt-2 mb-2 pl-3">
                                <ul class="list-group list-group-flush">
                                    @foreach ($data['trainers'] as $tainer)
                                        <li class="bg-transparent list-group-item no-icon pl-0">
                                            <figure class="avatar float-left mb-0 mr-3"><img
                                                    src="https://via.placeholder.com/60x60.png" alt="image"
                                                    class="w45"></figure>
                                            <h3 class="fw-700 mb-0 mt-1"><a
                                                    class="font-xsss text-grey-900 text-dark d-block"
                                                    href="/message/{{ $tainer->id }}">{{ $tainer->name }}</a></h3>
                                            <span class="d-block">Waiting time: 20Mins</span> <span
                                                class="badge badge-primary text-white badge-pill">..</span>
                                        </li>
                                    @endforeach

                                    {{-- <li class="bg-transparent list-group-item no-icon pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="chat.html">Hurin Seary</a></h3> <span class="d-block">What's up, how are you?</span> <span class="badge mt-0 text-grey-500 badge-pill">4:09 pm</span><div class="snippet float-right" data-title=".dot-typing"><div class="stage"><div class="dot-typing"></div></div></div></li>
                                    <li class="bg-transparent list-group-item no-icon pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="chat.html">Victor Exrixon</a></h3> <span class="d-block">What's up, how are you?</span> <span class="badge badge-primary text-white badge-pill">2</span></li>
                                    <li class="bg-transparent list-group-item no-icon pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="chat.html">Surfiya Zakir</a></h3> <span class="d-block">What's up, how are you?</span> <span class="badge badge-danger text-white badge-pill">6</span></li>
                                    <li class="bg-transparent list-group-item no-icon pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="chat.html">Goria Coast</a></h3> <span class="d-block">What's up, how are you?</span> <span class="badge badge-primary text-white badge-pill">8</span></li>

                                    <li class="bg-transparent list-group-item pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="chat.html">Hurin Seary</a></h3> <span class="d-block">What's up, how are you?</span></li>
                                    <li class="bg-transparent list-group-item pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="chat.html">Victor Exrixon</a></h3> <span class="d-block">What's up, how are you?</span></li>
                                    <li class="bg-transparent list-group-item pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="chat.html">Surfiya Zakir</a></h3> <span class="d-block">What's up, how are you?</span></li>
                                    <li class="bg-transparent list-group-item pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="chat.html">Goria Coast</a></h3> <span class="d-block">What's up, how are you?</span></li>

                                    <li class="bg-transparent list-group-item pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="chat.html">Hurin Seary</a></h3> <span class="d-block">What's up, how are you?</span></li>
                                    <li class="bg-transparent list-group-item pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="chat.html">Surfiya Zakir</a></h3> <span class="d-block">What's up, how are you?</span></li>
                                    <li class="bg-transparent list-group-item pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="chat.html">Goria Coast</a></h3> <span class="d-block">What's up, how are you?</span></li>

                                    <li class="bg-transparent list-group-item pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="chat.html">Hurin Seary</a></h3> <span class="d-block">What's up, how are you?</span></li> --}}

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-8 col-md-6 pl-0 d-none d-lg-block d-md-block">
                            <div class="chat-wrapper pt-0 w-100 position-relative scroll-bar" id="messagesContent"
                                style="margin-bottom: 90px; height: calc(100vh - 240px);">
                                <div class="chat-body p-3">
                                    <div class="messages-content pb-5">
                                        {{-- @if ($data['trainer_id'] == 0)

                                        @else --}}
                                        @php
                                            $merged_messages = $data['sent_messages']->merge($data['received_messages'])->sortBy('created_at');
                                            // dd($merged_messages);
                                        @endphp
                                        {{-- @if (!empty($merged_messages)) --}}


                                        @foreach ($merged_messages as $message)
                                            @if ($message->sender_id == session('rexkod_user_id'))
                                                <div class="message-item outgoing-message">
                                                    <div class="message-user">
                                                        <figure class="avatar">
                                                            <img src="https://via.placeholder.com/60x60.png"
                                                                alt="image">
                                                        </figure>
                                                        <div>
                                                            <h5>{{ session('rexkod_user_name') }}</h5>
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
                                                            <img src="https://via.placeholder.com/60x60.png"
                                                                alt="image">
                                                        </figure>
                                                        <div>
                                                            <h5>Trainer</h5>
                                                            <div class="time">@php echo Carbon::parse($message->created_at)->diffForHumans() @endphp</div>
                                                        </div>
                                                    </div>
                                                    <div class="message-wrap">{{ $message->message }} </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        {{-- @endif --}}




                                        {{-- <div class="message-item">
                                            <div class="message-user">
                                                <figure class="avatar">
                                                    <img src="https://via.placeholder.com/60x60.png" alt="image">
                                                </figure>
                                                <div>
                                                    <h5>Byrom Guittet</h5>
                                                    <div class="time">01:35 PM</div>
                                                </div>
                                            </div>
                                            <div class="message-wrap">I've found some cool photos for our travel app.</div>
                                        </div>

                                        <div class="message-item outgoing-message">
                                            <div class="message-user">
                                                <figure class="avatar">
                                                    <img src="https://via.placeholder.com/60x60.png" alt="image">
                                                </figure>
                                                <div>
                                                    <h5>Byrom Guittet</h5>
                                                    <div class="time">01:35 PM<i class="ti-double-check text-info"></i></div>
                                                </div>
                                            </div>
                                            <div class="message-wrap">Hey mate! How are things going ?</div>
                                        </div>

                                        <div class="message-item">
                                            <div class="message-user">
                                                <figure class="avatar">
                                                    <img src="https://via.placeholder.com/60x60.png" alt="image">
                                                </figure>
                                                <div>
                                                    <h5>Byrom Guittet</h5>
                                                    <div class="time">01:35 PM</div>
                                                </div>
                                            </div>
                                            <figure>
                                                <img src="https://via.placeholder.com/400x250.png" class="w-50 img-fluid rounded-lg" alt="image">
                                            </figure>


                                        </div>

                                        <div class="message-item outgoing-message">
                                            <div class="message-user">
                                                <figure class="avatar">
                                                    <img src="https://via.placeholder.com/60x60.png" alt="image">
                                                </figure>
                                                <div>
                                                    <h5>Byrom Guittet</h5>
                                                    <div class="time">01:35 PM<i class="ti-double-check text-info"></i></div>
                                                </div>
                                            </div>
                                            <div class="message-wrap" style="margin-bottom: 90px;">Hey mate! How are things going ?</div>

                                        </div> --}}
                                        <div class="clearfix"></div>


                                    </div>
                                </div>
                            </div>
                            <div class="row w-100" style="position: absolute;z-index: 10;bottom: 57px;">
                                <div class="col-lg-12">
                                    <div class="result scroll-bar card border-0 bg-white shadow-xs p-0">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            @if ($data['trainer_id'] != 0)
                                <div class="chat-bottom dark-bg p-3 shadow-xss" style="width: 98%;">
                                    <form method="post" action="/send_message2" class="chat-form">
                                        @csrf
                                        <input type="hidden" name="receiver_id" value="{{ $data['trainer_id'] }}">
                                        <button class="bg-grey float-left"><i
                                                class="ti-microphone text-white"></i></button>
                                        <div class="form-group search-box"><input autofocus name="message" type="text"
                                                placeholder="Start typing.."></div>
                                        <button type="submit" class="bg-current"><i
                                                class="ti-arrow-right text-white"></i></button>
                                    </form>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
                @include('inc.sidebar')
            </div>
        </div>
        <!-- main content -->
        {{-- <div class="app-footer border-0 shadow-lg">
            <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default-follower.html" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>
            <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/60x60.png" alt="user" class="w30 shadow-xss"></a>
        </div>

        <div class="app-header-search">
            <form class="search-form">
                <div class="form-group searchbox mb-0 border-0 p-1">
                    <input type="text" class="form-control border-0" placeholder="Search...">
                    <i class="input-icon">
                        <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
                    </i>
                    <a href="#" class="ml-1 mt-1 d-inline-block close searchbox-close">
                        <i class="ti-close font-xs"></i>
                    </a>
                </div>
            </form>
        </div> --}}

    </div>







    @include('inc.footer')
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
