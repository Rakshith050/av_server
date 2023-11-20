<nav class="navigation scroll-bar" style="z-index:999">
            <div class="container pl-0 pr-0">
                <div class="nav-content">
                     <div class="nav-top">
                      <a href="index"><img src="/aprex/assets/images/logo.png" width="60" alt=""> </a>
                        <a href="#" class="close-nav d-inline-block d-lg-none"><i class="ti-close bg-grey mb-4 btn-round-sm font-xssss fw-700 text-dark ml-auto mr-2 "></i></a>
                    </div>
                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span>New </span>Feeds</div>
                    @php
                        use App\Models\Message;
                        $message= Message::where('sender_id',session('rexkod_user_id'))->latest()->first();
                    @endphp
                    <ul class="mb-3">
                        <li class="logo d-none d-xl-block d-lg-block"></li>
                        <li><a href="/aprex/index" class="<?php if(session('curnav') == "home"){echo "active";} ?> nav-content-bttn open-font" data-tab="chats"><i class="feather-tv mr-3"></i><span>Home</span></a></li>
                        <li><a href="/aprex/all_courses" class="<?php if(session('curnav') == "course"){echo "active";} ?> nav-content-bttn open-font" data-tab="friends"><i class="feather-book-open mr-3"></i><span>All Courses</span></a></li>

                        <li><a href="/aprex/jobs" class="<?php if(session('curnav') == "job"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-briefcase mr-3"></i><span>Jobs</span></a></li>

                        <!-- <li class="flex-lg-brackets"><a href="/aprex/default_user_profile" data-tab="archived" class="nav-content-bttn open-font"><i class="feather-video mr-3"></i><span>Saved Course</span></a></li>              -->
                        <li><a href="/aprex/qna" class="<?php if(session('curnav') == "qna"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-help-circle mr-3"></i><span>Qna</span></a></li>

                        <li><a href="/aprex/forums" class="<?php if(session('curnav') == "forum"){echo "active";} ?> nav-content-bttn open-font" data-tab="favorites"><i class="feather-git-pull-request mr-3"></i><span>Forum</span></a></li>

                        <li><a href="/aprex/payment" class="<?php if(session('curnav') == "wallet"){echo "active";} ?> nav-content-bttn open-font" data-tab="friends"><i class="feather-shopping-bag mr-3"></i><span>Wallet</span></a></li>

                        <li><a href="/aprex/change_password" class="<?php if(session('curnav') == "change_password"){echo "active";} ?> nav-content-bttn open-font" data-tab="friends"><i class="feather-settings mr-3"></i><span>Settings</span></a></li>
                        <li><a href="/aprex/logout" class="nav-content-bttn open-font" data-tab="friends"><i class="feather-log-out mr-3"></i><span>Logout</span></a></li>

                    </ul>

                    <!-- <div class="nav-caption fw-600 font-xssss text-grey-500"><span>Following </span>Author</div>
                    <ul class="mb-3">
                        <li><a href="#" class="nav-content-bttn open-font pl-2 pb-2 pt-1 h-auto" data-tab="chats"><img src="https://via.placeholder.com/50x50.png" alt="user" class="rounded-circle w40 mr-2"><span>John Lambert </span> <span class="circle-icon bg-success mt-3"></span></a></li>
                        <li><a href="#" class="nav-content-bttn open-font pl-2 pb-2 pt-1 h-auto" data-tab="chats"><img src="https://via.placeholder.com/50x50.png" alt="user" class="rounded-circle w40 mr-2"><span>Vincent Parks </span> <span class="circle-icon bg-warning mt-3"></span></a></li>
                        <li><a href="#" class="nav-content-bttn open-font pl-2 pb-2 pt-1 h-auto" data-tab="chats"><img src="https://via.placeholder.com/50x50.png" alt="user" class="rounded-circle w40 mr-2"><span>Richard Bowers </span> <span class="circle-icon bg-success mt-3"></span></a></li>
                        <li><a href="#" class="nav-content-bttn open-font pl-2 pb-2 pt-1 h-auto" data-tab="chats"><img src="https://via.placeholder.com/50x50.png" alt="user" class="rounded-circle w40 mr-2"><span>John Lambert </span> <span class="circle-icon bg-success mt-3"></span></a></li>
                    </ul> -->

                </div>
            </div>

        </nav>
