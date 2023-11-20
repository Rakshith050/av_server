<nav class="navigation scroll-bar menu-active" style="z-index:999">
            <div class="container pl-0 pr-0">
                <div class="nav-content">
                     <div class="nav-top">
                      <a href="index"><img src="/assets/images/logo.png" width="60" alt=""> </a>
                        <a href="#" class="close-nav d-inline-block d-lg-none"><i class="ti-close bg-grey mb-4 btn-round-sm font-xssss fw-700 text-dark ml-auto mr-2 "></i></a>
                    </div>
                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span>New </span>Feeds</div>
                    <ul class="mb-3">
                    @if(session('rexkod_trainer_type') === 'trainer')

                        <li class="logo d-none d-xl-block d-lg-block"></li>
                        <li><a href="/trainer/index" class="<?php if(session('curnav') == "job"){echo "active";} ?> nav-content-bttn open-font" data-tab="chats"><i class="feather-tv mr-3"></i><span>Course Feed</span></a></li>
                        <li><a href="/trainer/message/0" class="<?php if(session('curnav') == "chat"){echo "active";} ?> nav-content-bttn open-font" data-tab="friends"><i class="feather-message-square mr-3"></i><span>Followers</span></a></li>

                        <li><a href="/trainer/qna" class="<?php if(session('curnav') == "qna"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-help-circle mr-3"></i><span>Qna</span></a></li>

                    @elseif(session('rexkod_trainer_type') == 'teacher')
                    <li class="logo d-none d-xl-block d-lg-block"></li>
                        <li><a href="/teacher/index" class="<?php if(session('curnav') == "job"){echo "active";} ?> nav-content-bttn open-font" data-tab="chats"><i class="feather-tv mr-3"></i><span>Course Feed</span></a></li>
                        <li><a href="/teacher/school_message/0" class="<?php if(session('curnav') == "school_chat"){echo "active";} ?> nav-content-bttn open-font" data-tab="friends"><i class="feather-message-square mr-3"></i><span>Followers</span></a></li>

                        <li><a href="/teacher/school_qna" class="<?php if(session('curnav') == "school_qna"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-help-circle mr-3"></i><span>Qna</span></a></li>


                    @endif

                    </ul>


                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Account</div>
                    <ul class="mb-3">
                    <!-- <li><a href="/trainer/default_settings" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-settings mr-3 text-grey-500"></i><span>Settings</span></a></li> -->
                    <li><a href="/trainer/change_password" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-settings mr-3 text-grey-500"></i><span>Settings</span></a></li>
                        <li><a href="/trainer/logout" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-log-out mr-3 text-grey-500"></i><span>Logout</span></a></li>

                    </ul>
                </div>
            </div>
        </nav>
