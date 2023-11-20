<style>
    .list-group-item{
        border: none
    }
</style>
<nav class="navigation scroll-bar" style="z-index:999">
            <div class="container pl-0 pr-0">
                <div class="nav-content">
                     <div class="nav-top">
                      <a href="/admin/index"><img src="/assets/images/logo.png" width="60" alt=""> </a>
                        <a href="#" class="close-nav d-inline-block d-lg-none"><i class="ti-close bg-grey mb-4 btn-round-sm font-xssss fw-700 text-dark ml-auto mr-2 "></i></a>
                    </div>
                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span> </span>Menu</div>
                    <ul class="mb-3">

                        <li class="logo d-none d-xl-block d-lg-block"></li>
                        <li ><a href="/admin/index" class="<?php if(session('curnav') == "home"){echo "active";} ?> nav-content-bttn open-font" data-tab="chats"><i class="feather-tv mr-3"></i><span>Home</span></a></li>

                        @php
                            use App\Models\User;

                            $user = User::where('id', session('rexkod_user_id'))->first();
                            $child = User::where('parent_id', $user->id)->get();
                        @endphp
                        @if ($child)
                        @foreach ($child as $index => $item)
                        <li><a href="#" class="nav-content-bttn open-font" data-tab="friends"><i class="feather-user mr-3"></i><span>{{$item->name}} </span></a>
                            <ul class="list-group">
                                <li><a href="/parents/student_enrolled_courses/{{$item->id}}" class="<?php if(session('curnav') == "student_enrolled_courses"){echo "active";} ?> nav-content-bttn open-font" data-tab="friends"><i class="feather-book-open mr-3"></i><span>Courses</span></a></li>
                                <li><a href="/parents/assessments/{{$item->id}}" class="<?php if(session('curnav') == ""){echo "active";} ?> nav-content-bttn open-font" data-tab="friends"><i class="feather-check-circle mr-3"></i><span>Assessments</span></a></li>
                                <li><a href="/parents/tests/{{$item->id}}" class="<?php if(session('curnav') == ""){echo "active";} ?> nav-content-bttn open-font" data-tab="friends"><i class="feather-check-square mr-3"></i><span>Tests</span></a></li>
                            </ul>
                        </li>
                        @endforeach

                        @endif



                    </ul>


                    <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Account</div>
                    <ul class="mb-3">
                        <li class="logo d-none d-xl-block d-lg-block"></li>
                        <!-- <li><a href="/admin/default_settings" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-settings mr-3 text-grey-500"></i><span>Settings</span></a></li> -->
                        <li><a href="/parents/change_password" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-settings mr-3 text-grey-500"></i><span>Settings</span></a></li>
                        <li><a href="/logout" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-log-out mr-3 text-grey-500"></i><span>Logout</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
