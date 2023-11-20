<?php session()->put('curnav','school_chat'); ?>
@include("inc_trainer.header")

@php
    use Carbon\Carbon;
    use App\Models\User;
@endphp

<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_trainer.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_trainer.topbar")


            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left bg-white dark-bg-transparent mr-3 pr-0">
                     <div class="row">
                        <div class="col-lg-6 col-xl-4 col-md-6 chat-left scroll-bar border-right-light pl-4 pr-4">
                            <form action="#" class="mt-0 pl-3 pt-3">
                                <div class="search-form">
                                    <i class="ti-search font-xs"></i>
                                    <input type="text" class="form-control text-grey-500 mb-0 bg-greylight border-0" placeholder="Search here.">
                                </div>
                            </form>
                            <div class="section full mt-2 mb-2 pl-3">
                                <ul class="list-group list-group-flush">
                                    @foreach ($data['students'] as $students)
                                    <?php if(isset($students)) { ?>
                                        @php
                                            $student_name=User::where('id',$students->sender_id)->first();
                                        @endphp
                                        <li class="bg-transparent list-group-item no-icon pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="/teacher/school_message/{{$students->sender_id}}">{{$student_name->name}}</a></h3> <span class="d-block">What's up, how are you?</span> <span class="badge badge-primary text-white badge-pill">2</span></li>
                                        <?php } ?>
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
                            <div class="chat-wrapper pt-0 w-100 position-relative scroll-bar" style="margin-bottom: 90px; height: calc(100vh - 240px);">
                                <div class="chat-body p-3 ">
                                    <div class="messages-content pb-5">
                                        {{-- @if ($data['trainer_id']==0)

                                        @else --}}
                                        @php
                                        $merged_messages = $data['sent_messages']->merge($data['received_messages'])->sortBy('created_at');
                                        // dd($merged_messages);
                                    @endphp
                                    @if (!empty($merged_messages))


                                    @foreach ($merged_messages as $message)
                                    @if ($message->sender_id==$data['student_id'])
                                    <div class="message-item">
                                        <div class="message-user">
                                            <figure class="avatar">
                                                <img src="https://via.placeholder.com/60x60.png" alt="image">
                                            </figure>
                                            <div>
                                                @php
                                                    $student_name=User::where('id',$message->sender_id)->first();
                                                @endphp
                                                <h5>{{$student_name->name}}</h5>
                                                <div class="time">@php echo Carbon::parse($message->created_at)->diffForHumans() @endphp</div>
                                            </div>
                                        </div>
                                        <div class="message-wrap">{{$message->message}} 😃</div>
                                    </div>
                                    @else
                                    <div class="message-item outgoing-message">
                                        <div class="message-user">
                                            <figure class="avatar">
                                                <img src="https://via.placeholder.com/60x60.png" alt="image">
                                            </figure>
                                            <div>
                                                <h5>{{session('rexkod_trainer_name')}}</h5>
                                                <div class="time">@php echo Carbon::parse($message->created_at)->diffForHumans() @endphp<i class="ti-double-check text-info"></i></div>
                                            </div>
                                        </div>
                                        <div class="message-wrap">{{$message->message}}</div>
                                    </div>
                                    @endif



                                    @endforeach
                                    @endif




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
                            @if ($data['student_id']!=0)
                            <div class="chat-bottom dark-bg p-3 shadow-xss" style="width: 98%;">
                                <form method="post" action="/teacher/school_send_message" class="chat-form">
                                    @csrf
                                    <input type="hidden" name="receiver_id" value="{{$data['student_id']}}">
                                    <button class="bg-grey float-left"><i class="ti-microphone text-white"></i></button>
                                    <div class="form-group"><input name="message" type="text" placeholder="Start typing.."></div>
                                    <button type="submit" class="bg-current"><i class="ti-arrow-right text-white"></i></button>
                                </form>
                            </div>
                            @endif
                        </div>

                     </div>
                </div>

            </div>
        </div>
        <!-- main content -->
        <div class="app-footer border-0 shadow-lg">
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
        </div>

    </div>







    @include("inc_trainer.footer")


</body>

</html>
