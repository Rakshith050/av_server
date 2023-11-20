<nav class="navigation scroll-bar menu-active" style="z-index:999">
    <div class="container pl-0 pr-0">
        <div class="nav-content">
            <div class="nav-top">
                <a href="/admin/index"><img src="/assets/images/logo.png" width="60" alt=""> </a>
                <a href="#" class="close-nav d-inline-block d-lg-none"><i
                        class="ti-close bg-grey mb-4 btn-round-sm font-xssss fw-700 text-dark ml-auto mr-2 "></i></a>
            </div>
            <div class="nav-caption fw-600 font-xssss text-grey-500"><span> </span>Menu</div>

            @if (session('rexkod_admin_type') === 'admin')
                <ul class="mb-3">

                    <li class="logo d-none d-xl-block d-lg-block"></li>
                    <li><a href="/admin/index" class="<?php if (session('curnav') == 'home') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="chats"><i class="feather-tv mr-3"></i><span>Home</span></a></li>
                    <li><a href="/admin/all_courses" class="<?php if (session('curnav') == 'course') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="friends"><i class="feather-book-open mr-3"></i><span>All Courses</span></a></li>

                    <li><a href="/admin/tests" class="<?php if (session('curnav') == 'test') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="favorites"><i class="feather-check-square mr-3"></i><span>Tests</span></a></li>

                    <li class="flex-lg-brackets"><a href="/admin/assesments" data-tab="archived"
                            class="<?php if (session('curnav') == 'assesment') {
                                echo 'active';
                            } ?> nav-content-bttn open-font"><i
                                class="feather-check-circle mr-3"></i><span>Assesments</span></a></li>

                    <li><a href="/admin/all_jobs" class="<?php if (session('curnav') == 'job') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="favorites"><i class="feather-briefcase mr-3"></i><span>Jobs</span></a></li>

                    <li><a href="/admin/all_internships" class="<?php if (session('curnav') == 'internship') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="favorites"><i class="feather-share-2 mr-3"></i><span>Internships</span></a></li>

                    <li><a href="/admin/mini_projects" class="<?php if (session('curnav') == 'project') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="friends"><i class="feather-box mr-3"></i><span>Mini Projects</span></a></li>

                    <li><a href="/admin/labs" class="<?php if (session('curnav') == 'lab') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="friends"><i class="feather-copy mr-3"></i><span>Labs</span></a></li>

                    <li><a href="/admin/subscriptions" class="<?php if (session('curnav') == 'subscription') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="favorites"><i class="feather-user mr-3"></i><span>Subscriptions</span></a></li>

                    <li><a href="/admin/trainers" class="<?php if (session('curnav') == 'trainer') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="favorites"><i class="feather-users mr-3"></i><span>Trainer</span></a></li>

                    <li><a href="/admin/all_ebooks" class="<?php if (session('curnav') == 'ebook') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="favorites"><i class="feather-book-open mr-3"></i><span>Ebooks</span></a></li>

                    <li><a href="/admin/project_reports" class="<?php if (session('curnav') == 'project_reports') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="favorites"><i class="feather-file mr-3"></i><span>Project Reports</span></a></li>

                    <li><a href="/admin/use_cases" class="<?php if (session('curnav') == 'use_cases') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="favorites"><i class="feather-codepen mr-3"></i><span>Use Cases</span></a></li>
                </ul>


                <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> School</div>
                <ul>

                    <li><a href="/admin/schools" class="<?php if (session('curnav') == 'schools') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="favorites"><i class="feather-home mr-3"></i><span>Schools</span></a></li>

                    <li><a href="/admin/school_courses" class="<?php if (session('curnav') == 'subjects') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="favorites"><i class="feather-home mr-3"></i><span>Subjects</span></a></li>

                    <li class="flex-lg-brackets"><a href="/admin/school_assesments" data-tab="archived"
                            class="<?php if (session('curnav') == 'school_assesment') {
                                echo 'active';
                            } ?> nav-content-bttn open-font"><i
                                class="feather-check-circle mr-3"></i><span>Assesments</span></a></li>

                    <li class="flex-lg-brackets"><a href="/admin/school_tests" data-tab="archived"
                            class="<?php if (session('curnav') == 'school_test') {
                                echo 'active';
                            } ?> nav-content-bttn open-font"><i
                                class="feather-check-circle mr-3"></i><span>Tests</span></a></li>

                    <li class="flex-lg-brackets"><a href="/admin/school_mini_projects" data-tab="archived"
                            class="<?php if (session('curnav') == 'school_mini_projects') {
                                echo 'active';
                            } ?> nav-content-bttn open-font"><i
                                class="feather-check-circle mr-3"></i><span>Mini Projects</span></a></li>
                </ul>
            @elseif(session('rexkod_admin_type') === 'sub_admin')
                <ul>

                    <li><a href="/sub_admin/all_students" class="<?php if (session('curnav') == 'students') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="favorites"><i class="feather-user mr-3"></i><span>All Students</span></a></li>

                    <li><a href="/sub_admin/all_teachers" class="<?php if (session('curnav') == 'teachers') {
                        echo 'active';
                    } ?> nav-content-bttn open-font"
                            data-tab="favorites"><i class="feather-users mr-3"></i><span>All Teachers</span></a></li>

                </ul>
            @endif





            <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Account</div>
            <ul class="mb-3">
                <li class="logo d-none d-xl-block d-lg-block"></li>
                <!-- <li><a href="/admin/default_settings" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-settings mr-3 text-grey-500"></i><span>Settings</span></a></li> -->
                <li><a href="/admin/change_password" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i
                            class="font-sm feather-settings mr-3 text-grey-500"></i><span>Settings</span></a></li>
                <li><a href="/admin/logout" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i
                            class="font-sm feather-log-out mr-3 text-grey-500"></i><span>Logout</span></a></li>
            </ul>
        </div>
    </div>
</nav>
