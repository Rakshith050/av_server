<?php session()->put('curnav','wallet'); ?>
@include('inc.header')

<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc.navbar')
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc.topbar')

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="middle-wrap">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-lg">
                                {{-- <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a> --}}
                                <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">Wallet</h4>
                            </div>
                            {{-- =================== --}}
                            @php
                                use App\Models\Subscription;
                                use App\Models\User;
                                $subscribed = Subscription::where('student_id', session('rexkod_user_id'))->first();
                            @endphp
                            @if (!$subscribed)
                                <div class="col-lg-8 offset-lg-1 my-5 mx-auto">
                                    <div class="rounded-xxl bg-greylight h-100 p-3">
                                        <div class="col-lg-12 pl-0">
                                            <!-- <h4 class="mb-4 font-xs fw-700 mont-font mt-0">Add Card </h4> -->
                                        </div>

                                        <div class="col-lg-12 mt-5">
                                            <form>
                                                <div class="form-group mb-1">
                                                    <h2>1 year subscription</h2>
                                                </div>
                                                <div class="form-group mb-1">
                                                    <label class="text-dark-color text-grey-600 font-xssss mb-2 fw-600" for="exampleInputPassword1">Amount</label>
                                                    <div class="form-group icon-tab">
                                                        <h4><strong>₹ 9,999</strong></h4>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group mb-1">
                                                            <label class="text-dark-color text-grey-600 font-xssss mb-2 fw-600" for="exampleInputPassword1">From</label>
                                                            <div class="form-group icon-tab">
                                                                <h4>{{ date('Y-m-d H:i:s') }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group mb-1">
                                                            <label class="text-dark-color text-grey-600 font-xssss mb-2 fw-600" for="exampleInputPassword1">To</label>
                                                            <div class="form-group icon-tab">
                                                                <h4>{{ \Carbon\Carbon::now()->addYear()->format('Y-m-d H:i:s') }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <a href="/createStudentSubscription" class="rounded-lg bg-current mb-2 mt-4 p-3 w-100 fw-600 fw-700 text-center font-xssss mont-font text-uppercase ls-3 text-white d-block">Pay</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if ($subscribed)
                                <div class="col-lg-8 offset-lg-1 my-5 mx-auto">
                                    <div class="rounded-xxl bg-greylight h-100 p-3">
                                        <div class="col-lg-12 pl-0">
                                            <!-- <h4 class="mb-4 font-xs fw-700 mont-font mt-0">Add Card </h4> -->
                                        </div>

                                        <div class="col-lg-12 mt-5">
                                            <form>
                                                <div class="form-group mb-1">
                                                    <h2>1 year subscription</h2>
                                                </div>
                                                <div class="form-group mb-1">
                                                    <label class="text-dark-color text-grey-600 font-xssss mb-2 fw-600" for="exampleInputPassword1">Amount</label>
                                                    <div class="form-group icon-tab">
                                                        <h4><strong>₹ 9,999</strong></h4>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group mb-1">
                                                            <label class="text-dark-color text-grey-600 font-xssss mb-2 fw-600" for="exampleInputPassword1">From</label>
                                                            <div class="form-group icon-tab">
                                                                <h4>{{ date('Y-m-d H:i:s') }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group mb-1">
                                                            <label class="text-dark-color text-grey-600 font-xssss mb-2 fw-600" for="exampleInputPassword1">To</label>
                                                            <div class="form-group icon-tab">
                                                                <h4>{{ \Carbon\Carbon::now()->addYear()->format('Y-m-d H:i:s') }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @php
                                use App\Models\Student_referral;
                                $reffered = Student_referral::where('referred_to', session('rexkod_user_id'))->first();
                            @endphp
                            @if (!$reffered)
                            <div class="col-lg-8 offset-lg-1 my-5 mx-auto">
                                <div class="rounded-xxl bg-greylight h-100 p-3">
                                    <div class="col-lg-12 pl-0">
                                        <h4 class="mb-4 font-xs fw-700 mont-font mt-0">Refferals </h4>
                                    </div>

                                    <div class="col-lg-12 mt-5">
                                        <form action="/create_student_refferal" method="POST">
                                            @csrf
                                            <div class="form-group mb-1">
                                                <label class="text-dark-color text-grey-600 font-xssss mb-2 fw-600" for="exampleInputPassword1">Refferal ID</label>
                                                <div class="form-group icon-tab">
                                                    <input type="number" name="referred_by" class="bg-white font-xsss border-0 rounded-lg form-control pl-4 bg-color-none border-bottom text-grey-900" placeholder="Enter your refferal ID">
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-12">
                                                    <button type="submit" class="rounded-lg bg-current mb-2 mt-4 p-3 w-100 fw-600 fw-700 text-center font-xssss mont-font text-uppercase ls-3 text-white d-block">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            @else

                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl. No.</th>
                                            <th scope="col">Referred From</th>
                                            <th scope="col">Bonus</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $count =0;
                                        @endphp
                                        @foreach ($student_referrals as $student_referral)
                                            @php
                                            $count++;
                                                $student = User::where('id', $student_referral->referred_to)->first();
                                            @endphp
                                            <tr>
                                                <td>{{ $student_referral->id }}</td>
                                                <td>{{ $student->name }}</td>
                                                <td>{{ $student_referral->created_at }}</td>
                                                <td>9999</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="table-warning">
                                            <td colspan="4" class="text-end fw-500 text-dark font-xsss">Total Bonus:</td>
                                            <td class="text-end fw-500 text-dark font-xsss">{{ $count*9999 }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            @endif

                            {{-- =================== --}}
                            {{-- <div class="card-body p-lg-5 p-4 w-100 border-0 mt-5">
                                <div class="row">
                                    <div class="col-lg-5">

                                        <div class="cleafrfix"></div>
                                        <div class="card border-0 shadow-none mb-4 mt-3">
                                            <div class="card-body d-block text-left p-0">
                                                <div class="item w-100 h150 bg-white rounded-xxl overflow-hidden text-left shadow-md pl-3 pt-2 align-items-end flex-column d-flex">

                                                    <div class="card border-0 shadow-none p-0 bg-transparent-card text-left w-100 mt-auto">
                                                        <h4 class="text-grey-900 font-sm fw-700 mont-font mb-3 text-dark-color">Rs 5000<span class="d-block fw-500 text-grey-500 font-xssss mt-1 text-dark-color">Balance</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card border-0 shadow-none mb-4">
                                            <div class="card-bod6 d-block text-left 2 fw-600-0">
                                                <div class="item w-100 h150 bg-gold-gradiant rounded-xxl overflow-hidden text-left shadow-md pl-3 pt-2 align-items-end flex-column d-flex">

                                                    <div class="card bg-transparent border-0 bg-transparent-card shadow-none p-0 text-left w-100 mt-auto">
                                                        <h4 class="text-white font-sm fw-700 mont-font mb-3">Rs 5000 <span class="d-block fw-500 text-white font-xssss mt-1">Referrals</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card border-0 mb-4 shadow-none">
                                            <div class="card-body d-block text-left p-0">
                                                <div class="item w-100 h150 bg-primary rounded-xxl text-left shadow-md pl-3 pt-2 align-items-end flex-column d-flex">

                                                    <div class="card bg-transparent border-0 bg-transparent-card shadow-none p-0 text-left w-100 mt-auto">
                                                        <h4 class="text-white mb-3 font-sm fw-700 mont-font">3 Months left<span class="d-block fw-500 text-grey-300 font-xssss mt-1">Subscription</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="#" class="rounded-xxl border-dashed mb-2 p-3 w-100 fw-600 fw-700 text-center font-xssss mont-font text-uppercase ls-3 text-grey-900 d-block  text-dark">Renew Subscription</a>

                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <div class="rounded-xxl bg-greylight h-100 p-3">
                                            <div class="col-lg-12 pl-0">
                                                <!-- <h4 class="mb-4 font-xs fw-700 mont-font mt-0">Add Card </h4> -->
                                            </div>

                                            <div class="col-lg-12 mt-5">
                                                <form>
                                                    <div class="form-group mb-1">
                                                        <label class="text-dark-color text-grey-600 font-xssss mb-2 fw-600" for="exampleInputPassword1">Amount</label>
                                                        <div class="form-group icon-tab">
                                                            <input type="text" class="bg-white font-xsss border-0 rounded-lg form-control pl-4 bg-color-none border-bottom text-grey-900" placeholder="1000">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-1">
                                                        <label class="text-dark-color text-grey-600 font-xssss mb-2 fw-600" for="exampleInputPassword1">Method</label>
                                                        <div class="form-group icon-tab">
                                                            <input type="text" class="bg-white border-0 rounded-lg form-control pl-4 bg-color-none border-bottom text-grey-900" placeholder="UPI">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group mb-1">
                                                                <label class="text-dark-color text-grey-600 font-xssss mb-2 fw-600" for="exampleInputPassword1">UPI App</label>
                                                                <div class="form-group icon-tab">
                                                                    <input type="text" class="bg-white border-0 rounded-lg form-control pl-4 bg-color-none border-bottom text-grey-900" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group mb-1">
                                                                <label class="text-dark-color text-grey-600 font-xssss mb-2 fw-600" for="exampleInputPassword1">UPI ID</label>
                                                                <div class="form-group icon-tab">
                                                                    <input type="text" class="bg-white border-0 rounded-lg form-control pl-4 bg-color-none border-bottom text-grey-900" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <a href="#" class="rounded-lg bg-current mb-2 mt-4 p-3 w-100 fw-600 fw-700 text-center font-xssss mont-font text-uppercase ls-3 text-white d-block">Recharge</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}



                        </div>
                        <!-- <div class="card w-100 border-0 p-2"></div> -->
                    </div>
                </div>


                <div class="middle-sidebar-right scroll-bar">
                    <div class="middle-sidebar-right-content">

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body p-2 d-block text-center bg-no-repeat bg-image-topcenter" style="background-image: url(images/user-pattern.png);">
                                <a href="#" class="position-absolute right-0 mr-4"><i class="feather-edit text-grey-500 font-xs"></i></a>
                                <figure class="avatar ml-auto mr-auto mb-0 mt-2 w90"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right shadow-sm rounded-circle w-100"></figure>
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
                                    <li class="list-inline-item text-center mr-4">
                                        <h4 class="fw-700 font-md">500+ <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Connections</span></h4>
                                    </li>
                                    <li class="list-inline-item text-center mr-4">
                                        <h4 class="fw-700 font-md">88.7 k <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Follower</span></h4>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <h4 class="fw-700 font-md">1,334 <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Followings</span></h4>
                                    </li>
                                </ul>

                                <div class="col-12 pl-0 mt-4 text-left">
                                    <h4 class="text-grey-800 font-xsss fw-700 mb-3 d-block">My Skill <a href="#"><i class="ti-angle-right font-xsssss text-grey-700 float-right "></i></a></h4>
                                    <div class="carousel-card owl-carousel owl-theme overflow-visible nav-none">
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-3"></a></div>
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
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 shadow-xss"></a>
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


    <script>
        // var isMobile = /iPhone|iPad|iPod|Android|webOS|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

        // if (isMobile) {
        //    alert('Mobile browser detected');
        // } else {
        //     alert('Mobile browser not detected');
        // }
    </script>
    @include('inc.footer')


</body>

</html>
