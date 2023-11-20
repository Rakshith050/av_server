@include("inc_aprex.header")

@php
    use Carbon\Carbon;

@endphp

<body class="color-theme-orange mont-font">



    
    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_aprex.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_aprex.topbar")

            
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
                                    @foreach ($data['trainers'] as $tainer)
                                        <li class="bg-transparent list-group-item no-icon pl-0"><figure class="avatar float-left mb-0 mr-3"><img src="https://via.placeholder.com/60x60.png" alt="image" class="w45"></figure><h3 class="fw-700 mb-0 mt-1"><a class="font-xsss text-grey-900 text-dark d-block" href="/message/{{$tainer->id}}">{{$tainer->name}}</a></h3> <span class="d-block">What's up, how are you?</span> <span class="badge badge-primary text-white badge-pill">2</span></li>
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
                                <div class="chat-body p-3">
                                    <div class="messages-content pb-5" >
                                        {{-- @if ($data['trainer_id']==0)
                                        
                                        @else --}}
                                        @php
                                        $merged_messages = $data['sent_messages']->merge($data['received_messages'])->sortBy('created_at');
                                        // dd($merged_messages);
                                    @endphp
                                    {{-- @if (!empty($merged_messages)) --}}
                                        
                                    
                                    @foreach ($merged_messages as $message)
                                    @if ($message->sender_id==session('rexkod_user_id'))
                                    <div class="message-item outgoing-message">
                                        <div class="message-user">
                                            <figure class="avatar">
                                                <img src="https://via.placeholder.com/60x60.png" alt="image">
                                            </figure>
                                            <div>
                                                <h5>{{session('rexkod_user_name')}}</h5>
                                                <div class="time">@php echo Carbon::parse($message->created_at)->diffForHumans() @endphp<i class="ti-double-check text-info"></i></div>
                                            </div>
                                        </div>
                                        <div class="message-wrap">{{$message->message}}</div>
                                    </div>
                                    
                                    @else
                                    <div class="message-item">
                                        <div class="message-user">
                                            <figure class="avatar">
                                                <img src="https://via.placeholder.com/60x60.png" alt="image">
                                            </figure>
                                            <div>
                                                <h5>Trainer</h5>
                                                <div class="time">@php echo Carbon::parse($message->created_at)->diffForHumans() @endphp</div>
                                            </div>
                                        </div>
                                        <div class="message-wrap">{{$message->message}} 😃</div>
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
                            @if ($data['trainer_id']!=0)
                                        
                            <div class="chat-bottom dark-bg p-3 shadow-xss" style="width: 98%;">
                                <form method="post" action="/send_message2" class="chat-form">
                                    @csrf
                                    <input type="hidden" name="receiver_id" value="{{ $data['trainer_id'] }}">
                                    <button class="bg-grey float-left"><i class="ti-microphone text-white"></i></button>
                                    <div class="form-group"><input name="message" type="text" placeholder="Start typing.."></div>          
                                    <button type="submit" class="bg-current"><i class="ti-arrow-right text-white"></i></button>
                                </form>
                            </div> 

                            @endif
                        </div>

                     </div>
                </div>
                <div class="middle-sidebar-right scroll-bar">
                    <div class="middle-sidebar-right-content">

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body p-2 d-block text-center bg-no-repeat bg-image-topcenter" style="background-image: url(images/user-pattern.png);">
                                <a href="#" class="position-absolute right-0 mr-4"><i class="feather-edit text-grey-500 font-xs"></i></a>
                                <figure class="avatar ml-auto mr-auto mb-0 mt-2 w90"><img src="https://via.placeholder.com/60x60.png" alt="image" class="float-right shadow-sm rounded-circle w-100"></figure>
                                <div class="clearfix"></div>
                                <h2 class="text-black font-xss lh-3 fw-700 mt-3 mb-1">Hendrix Stamp</h2>
                                <h4 class="text-grey-500 font-xssss mt-0"><span class="d-inline-block bg-success btn-round-xss m-0"></span> Available</h4>
                                <div class="clearfix"></div>
                                <div class="col-12 text-center mt-4 mb-2">
                                    <a href="#" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-comment-alt font-sm"></i></a>
                                    <a href="#" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-lock font-sm"></i></a>
                                    <a href="#" class="p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                                <ul class="list-inline border-0 mt-4">
                                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">500+ <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Connections</span></h4></li>
                                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">88.7 k <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Follower</span></h4></li>
                                    <li class="list-inline-item text-center"><h4 class="fw-700 font-md">1,334 <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Followings</span></h4></li>
                                </ul>

                                <div class="col-12 pl-0 mt-4 text-left">
                                    <h4 class="text-grey-800 font-xsss fw-700 mb-3 d-block">My Skill <a href="#"><i class="ti-angle-right font-xsssss text-grey-700 float-right "></i></a></h4>
                                    <div class="carousel-card owl-carousel owl-theme overflow-visible nav-none">
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/60x60.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/60x60.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/60x60.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/60x60.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/60x60.png" alt="icon" class="p-3"></a></div>
                                    </div>
                                </div>  

                            </div>
                        </div>

                        <div class="card theme-light-bg overflow-hidden rounded-xxl border-0 mb-3">
                            <div class="card-body d-flex justify-content-between align-items-end p-4">
                                <div>
                                    <h4 class="font-xsss text-grey-900 mb-2 d-flex align-items-center justify-content-between mt-2 fw-700">
                                        Dark Mode
                                    </h4>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                                    <label class="custom-control-label bg-success" for="darkmodeswitch"></label>
                                </div>

                            </div>
                        </div>

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body d-block text-left">
                                <h1 class="text-grey-800 font-xl fw-900 mb-4 lh-3">Sign up for our newsletter</h1>
                                <form action="#" class="mt-3">
                                    <div class="form-group icon-input">
                                        <i class="ti-email text-grey-500 font-sm"></i>
                                        <input type="text" class="form-control mb-2 bg-greylight border-0 style1-input pl-5" placeholder="Enail address">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox">By checking this box, you confirm that you have read and are agreeing to our terms of use regarding.</label>
                                    </div>
                                </form>
                                <ul class="d-flex align-items-center justify-content-between mt-3">
                                    <li><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-pinterest"><i class="font-xs ti-pinterest text-white"></i></a></li>
                                </ul>
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

 

    

   

    @include("inc_aprex.footer")

    
</body>

</html>