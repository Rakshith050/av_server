<div class="middle-sidebar-right scroll-bar">
    <div class="middle-sidebar-right-content">

        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
            <div class="card-body p-2 d-block text-center bg-no-repeat bg-image-topcenter" style="background-image: url(assets/images/user-pattern.png);">
                <a href="#" class="position-absolute right-0 mr-4"><i class="feather-edit text-grey-500 font-xs"></i></a>
                <figure class="avatar ml-auto mr-auto mb-0 mt-2 w90"><img src="https://cdn-icons-png.flaticon.com/256/6915/6915987.png" alt="image" class="float-right shadow-sm rounded-circle w-100"></figure>
                <div class="clearfix"></div>
                <h2 class="text-black font-xss lh-3 fw-700 mt-3 mb-1">{{Session::get('rexkod_user_name') }}</h2>
                <h4 class="text-grey-500 font-xssss mt-0"><span class="d-inline-block bg-success btn-round-xss m-0"></span> Active</h4>
                <div class="clearfix"></div>

                <ul class="list-inline border-0 mt-4">
                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">3 <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Courses</span></h4></li>
                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">80% <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Assesment Scores </span></h4></li>
                    <li class="list-inline-item text-center"><h4 class="fw-700 font-md">90% <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Test Scores</span></h4></li>
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

        <div class="card theme-light-bg overflow-hidden rounded-xxl border-0 mb-3">
            <div class="card-body d-flex justify-content-between align-items-end pl-4 pr-4 pt-4 pb-3">
                <h4 class="fw-700 font-xsss">My Courses</h4>
                <a href="#" class="position-absolute right-0 mr-4"><i class="ti-more-alt text-grey-500 font-xs"></i></a>
            </div>
            @php
                                        use App\Models\Enrolled_course;
                                        use App\Models\Course;

                                        $enrolled_courses = Enrolled_course::where('student_id',session('rexkod_user_id'))->get();
                            @endphp
                            @foreach ($enrolled_courses as $courses)
                            @php
                            $course_detail= Course::where('id',$courses->course_id)->first();

                            @endphp
                             <?php if(isset($course_detail)){ ?>
                            <div class="card-body pl-4 pr-4 pt-0 pb-3 border-0 w-100 d-block">
                                <div class="row">
                                    <div class="col-3 p-0">
                                        <a href="#" class="btn-round-lg rounded-lg bg-lightblue ml-3">
                                            <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-1 w-100">
                                        </a>
                                    </div>
                                    <div class="col-9 pr-3">
                                        <h4 class="font-xssss d-block fw-700 mt-2">{{$course_detail->course_name}}<span class="float-right mt-1 font-xsssss text-grey-500">87%</span></h4>
                                        <div class="progress mt-2 h5 w-100">
                                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="87" style="width: 87%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            @endforeach
            {{-- <div class="card-body pl-4 pr-4 pt-0 pb-3 border-0 w-100 d-block">
                <div class="row">
                    <div class="col-3 p-0">
                        <a href="#" class="btn-round-lg rounded-lg bg-lightblue ml-3">
                            <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-1 w-100">
                        </a>
                    </div>
                    <div class="col-9 pr-3">
                        <h4 class="font-xssss d-block fw-700 mt-2">Advanced Python Sass <span class="float-right mt-1 font-xsssss text-grey-500">87%</span></h4>
                        <div class="progress mt-2 h5 w-100">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="87" style="width: 87%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body pl-4 pr-4 pt-0 pb-3 border-0 w-100 d-block">
                <div class="row">
                    <div class="col-3 p-0">
                        <a href="#" class="btn-round-lg rounded-lg bg-lightblue ml-3">
                            <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-1 w-100">
                        </a>
                    </div>
                    <div class="col-9 pr-3">
                        <h4 class="font-xssss d-block fw-700 mt-2">Bootstrap SASS CSS <span class="float-right mt-1 font-xsssss text-grey-500">65%</span></h4>
                        <div class="progress mt-2 h5 w-100">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="65" style="width: 65%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body pl-4 pr-4 pt-0 pb-3 border-0 w-100 d-block">
                <div class="row">
                    <div class="col-3 p-0">
                        <a href="#" class="btn-round-lg rounded-lg bg-lightblue ml-3">
                            <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-1 w-100">
                        </a>
                    </div>
                    <div class="col-9 pr-3">
                        <h4 class="font-xssss d-block fw-700 mt-2">Basic JAVA <span class="float-right mt-1 font-xsssss text-grey-500">75%</span></h4>
                        <div class="progress mt-2 h5 w-100">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body pl-4 pr-4 pt-0 pb-3 border-0 w-100 d-block">
                <div class="row">
                    <div class="col-3 p-0">
                        <a href="#" class="btn-round-lg rounded-lg bg-lightblue ml-3">
                            <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-1 w-100">
                        </a>
                    </div>
                    <div class="col-9 pr-3">
                        <h4 class="font-xssss d-block fw-700 mt-2">Advance React <span class="float-right mt-1 font-xsssss text-grey-500">96%</span></h4>
                        <div class="progress mt-2 h5 w-100">
                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="96" style="width: 96%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body pl-4 pr-4 pt-0 pb-4 border-0 w-100 d-block">
                <div class="row">
                    <div class="col-3 p-0">
                        <a href="#" class="btn-round-lg rounded-lg bg-lightblue ml-3">
                            <img src="https://via.placeholder.com/50x50.png" alt="icon" class="p-1 w-100">
                        </a>
                    </div>
                    <div class="col-9 pr-3">
                        <h4 class="font-xssss d-block fw-700 mt-2">Mongodb Database <span class="float-right mt-1 font-xsssss text-grey-500">73%</span></h4>
                        <div class="progress mt-2 h5 w-100">
                          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="73" style="width: 73%"></div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="card theme-light-bg overflow-hidden rounded-xxl border-0 mb-3">
            <div class="card-body d-flex justify-content-between align-items-end pl-4 pr-4 pt-4 pb-3">
                <h4 class="fw-700 font-xsss">Profile Scrore</h4>
                <a href="#" class="position-absolute right-0 mr-4"><i class="ti-more-alt text-grey-500 font-xs"></i></a>
            </div>
            <div id="chart-multipleitem"></div>
            <div class="card-body d-block pt-0 pb-0 pl-md-5 pr-md-5">
                <div class="row">
                    <div class="col-4 text-center mb-3">
                        <h4 class="text-warning font-xssss fw-700">HTML <span class="d-block mt-1 font-xsssss fw-500 text-grey-500">67%</span></h4>
                    </div>
                    <div class="col-4 text-center mb-3">
                        <h4 class="text-danger font-xssss fw-700">JAVA <span class="d-block mt-1 font-xsssss fw-500 text-grey-500">55%</span></h4>
                    </div>
                    <div class="col-4 text-center mb-3">
                        <h4 class="text-primary font-xssss fw-700">HTML <span class="d-block mt-1 font-xsssss fw-500 text-grey-500">44%</span></h4>
                    </div>
                </div>
            </div>

        </div>



    </div>
</div>
<button class="btn btn-circle text-white btn-neutral sidebar-right">
    <i class="ti-angle-left"></i>
</button>
