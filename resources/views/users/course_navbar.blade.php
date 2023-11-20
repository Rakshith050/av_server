<nav class="navigation scroll-bar menu-active" style="z-index:999">
    <div class="container pl-0 pr-0">
        <div class="nav-content">
             <div class="nav-top">
              <a href="index"><img src="/assets/images/logo.png" width="60" alt=""> </a>
                <a href="#" class="close-nav d-inline-block d-lg-none"><i class="ti-close bg-grey mb-4 btn-round-sm font-xssss fw-700 text-dark ml-auto mr-2 "></i></a>
            </div>
            <div class="nav-caption fw-600 font-xssss text-grey-500"><span>New </span>Feeds</div>

            <div class="col-xl-4 col-xxl-3 course-video-tab" id="course-video-tab">
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



        </div>
    </div>

</nav>
