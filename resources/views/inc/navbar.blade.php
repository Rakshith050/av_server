<nav class="navigation scroll-bar menu-active" style="z-index:999">
            <div class="container pl-0 pr-0">
                <div class="nav-content">
                     <div class="nav-top">
                      <a href="index"><img src="/assets/images/logo.png" width="60" alt=""> </a>
                        <a href="#" class="close-nav d-inline-block d-lg-none"></a>
                    </div>
                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span>New </span>Feeds</div>
                    @php
                        use App\Models\Message;
                        $message= Message::where('sender_id',session('rexkod_user_id'))->latest()->first();
                    @endphp
                    <ul class="mb-3">
                        @if (session('rexkod_user_type') == 'student')
                            <li class="logo d-none d-xl-block d-lg-block"></li>
                            <li><a href="/index" class="<?php if(session('curnav') == "home"){echo "active";} ?> nav-content-bttn open-font" data-tab="chats"><i class="feather-tv mr-3"></i><span>Home</span></a></li>

                            <li><a href="/all_courses" class="<?php if(session('curnav') == "course"){echo "active";} ?> nav-content-bttn open-font" data-tab="friends"><i class="feather-book-open mr-3"></i><span>All Courses</span></a></li>

                            <li><a href="/internships" class="<?php if(session('curnav') == "internship"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-share-2 mr-3"></i><span>Internships</span></a></li>

                            <li><a href="/jobs" class="<?php if(session('curnav') == "job"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-briefcase mr-3"></i><span>Jobs</span></a></li>

                            <li><a href="/qna" class="<?php if(session('curnav') == "qna"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-help-circle mr-3"></i><span>Qna</span></a></li>

                            <li><a href="/message/{{$message ? $message->receiver_id : 0}}" class="<?php if(session('curnav') == "chat"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-message-circle mr-3"></i><span>chat</span></a></li>

                            <li><a href="/payment/<?php echo session('rexkod_user_id'); ?>" class="<?php if(session('curnav') == "wallet"){echo "active";} ?> nav-content-bttn open-font" data-tab="friends"><i class="feather-shopping-bag mr-3"></i><span>Wallet</span></a></li>

                            <li><a href="/forums" class="<?php if(session('curnav') == "forum"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-git-pull-request mr-3"></i><span>Forums</span></a></li>

                            <li><a href="/add_profile" class="<?php if(session('curnav') == "profile"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-user mr-3"></i><span>Profile</span></a></li>

                            <li><a href="/video_features" class="<?php if(session('curnav') == "video_features"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-play-circle mr-3"></i><span>Video Features</span></a></li>
                        @elseif(session('rexkod_user_type') == 'school_student')
                            <li class="logo d-none d-xl-block d-lg-block"></li>
                            <li><a href="/index" class="<?php if(session('curnav') == "home"){echo "active";} ?> nav-content-bttn open-font" data-tab="chats"><i class="feather-tv mr-3"></i><span>Home</span></a></li>

                            <li><a href="/all_subjects" class="<?php if(session('curnav') == "subject"){echo "active";} ?> nav-content-bttn open-font" data-tab="friends"><i class="feather-book-open mr-3"></i><span>All Subjects</span></a></li>

                            <li><a href="/school_qna" class="<?php if(session('curnav') == "school_qna"){echo "active";} ?> nav-content-bttn open-font" data-tab="friends"><i class="feather-book-open mr-3"></i><span>All Qna</span></a></li>

                            <li><a href="/school_forums" class="<?php if(session('curnav') == "school_forums"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-git-pull-request mr-3"></i><span>Forums</span></a></li>

                        @endif

                    </ul>

                    {{-- <div class="nav-caption fw-600 font-xssss text-grey-500"><span>Following </span>Author</div>
                    <ul class="mb-3">
                        <li><a href="#" class="nav-content-bttn open-font pl-2 pb-2 pt-1 h-auto" data-tab="chats"><img src="https://via.placeholder.com/50x50.png" alt="user" class="rounded-circle w40 mr-2"><span>John Lambert </span> <span class="circle-icon bg-success mt-3"></span></a></li>
                        <li><a href="#" class="nav-content-bttn open-font pl-2 pb-2 pt-1 h-auto" data-tab="chats"><img src="https://via.placeholder.com/50x50.png" alt="user" class="rounded-circle w40 mr-2"><span>Vincent Parks </span> <span class="circle-icon bg-warning mt-3"></span></a></li>
                        <li><a href="#" class="nav-content-bttn open-font pl-2 pb-2 pt-1 h-auto" data-tab="chats"><img src="https://via.placeholder.com/50x50.png" alt="user" class="rounded-circle w40 mr-2"><span>Richard Bowers </span> <span class="circle-icon bg-success mt-3"></span></a></li>
                        <li><a href="#" class="nav-content-bttn open-font pl-2 pb-2 pt-1 h-auto" data-tab="chats"><img src="https://via.placeholder.com/50x50.png" alt="user" class="rounded-circle w40 mr-2"><span>John Lambert </span> <span class="circle-icon bg-success mt-3"></span></a></li>
                    </ul>  --}}
                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Account</div>
                    <ul class="mb-3">
                        <li class="logo d-none d-xl-block d-lg-block"></li>
                        {{-- <li><a href="/default_settings" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-settings mr-3 text-grey-500"></i><span>Settings</span></a></li> --}}
                        <li><a href="/change_password" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-settings mr-3 text-grey-500"></i><span>Change Password</span></a></li>
                        <li><a href="/logout" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-log-out mr-3 text-grey-500"></i><span>Logout</span></a></li>

                    </ul>
                </div>
            </div>

        </nav>
