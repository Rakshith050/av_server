@include("inc.header")
@php
    $project_tasks = $data['project_task'];
    $project_id = $data['project_id'];
    use App\Models\School_project_process;
    $mini_project = $data['project'];
@endphp

<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

          <!-- navigation -->
          @include("inc.navbar")
          <!-- navigation -->
          <!-- main content -->
          <div class="main-content menu-active">
              @include("inc.topbar")

            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 mt-4 d-flex justify-content-between">
                            <h2 class="fw-400 font-lg d-block"><b>{{$data['project']->project_name}}</b></h2>
                            <div class="float-right">
                                <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li><a class="fw-500 font-xsss text-dark" href="/default_live_stream/{{$mini_project->subject_id}}/0">&nbsp; Mini Projects</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active fw-500 text-black">&nbsp; Task</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 col-md-6 mb-2 mt-2">
                            <div class="card p-0 bg-white rounded-lg shadow-xs border-0">
                                <div class="card-body p-3 border-top-lg border-size-lg border-primary p-0">
                                    <h4><span class="font-xsss fw-700 text-grey-900 mt-2 d-inline-block">To Do </span><a href="#" class="float-right btn-round-sm bg-greylight" data-toggle="modal" data-target="#Modaltodo"><i class="feather-plus font-xss text-grey-900"></i></a></h4>
                                </div>
                                @foreach ($project_tasks as $project_task)
                                @php
                                    $project_process = School_project_process::where('student_id',session('rexkod_user_id'))
                                                            ->where('project_id',$project_id)
                                                            ->where('task_id',$project_task->id)->first();
                                @endphp
                                @if (!$project_process)
                                <div class="card-body p-3 bg-lightblue mt-0 mb-3 ml-3 mr-3 rounded-lg">
                                    <h4 class="font-xsss fw-700 text-grey-900 mb-2 mt-1 d-block">{{$project_task->name}}</h4>
                                    <p class="font-xssss lh-24 fw-500 text-grey-500 mt-3 d-block mb-3">{{$project_task->description}}</p>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">{{$project_task->duration}}</span>
                                    <a href="/start_school_project/{{$project_task->id}}/{{$project_task->lab_code}}"><span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Start</span></a>

                                </div>
                                @endif

                                @endforeach



                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-4 col-md-6 mb-2 mt-2">
                            <div class="card p-0 bg-white rounded-lg shadow-xs border-0">
                                <div class="card-body p-3 border-top-lg border-size-lg border-warning p-0">
                                    <h4><span class="font-xsss fw-700 text-grey-900 mt-2 d-inline-block">In progress </span><a href="#" class="float-right btn-round-sm bg-greylight" data-toggle="modal" data-target="#Modaltodo"><i class="feather-plus font-xss text-grey-900"></i></a></h4>
                                </div>
                                @foreach ($project_tasks as $project_task)
                                @php
                                    $project_process = School_project_process::where('student_id',session('rexkod_user_id'))
                                                            ->where('project_id',$project_id)
                                                            ->where('task_id',$project_task->id)->first();
                                @endphp
                                @if($project_process && $project_process->status == 1)
                                <div class="card-body p-3 bg-lightbrown mt-0 mb-3 ml-3 mr-3 rounded-lg">
                                    <h4 class="font-xsss fw-700 text-grey-900 mb-2 mt-1 d-block">{{$project_task->name}}</h4>
                                    <p class="font-xssss lh-24 fw-500 text-grey-500 mt-3 d-block mb-3">{{$project_task->description}}</p>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">{{$project_task->duration}}</span>
                                    <a href="/continue_school_project_task/{{$project_task->id}}/{{$project_task->lab_code}}">
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Continue</span></a>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-4 col-md-6 mb-2 mt-2">
                            <div class="card p-0 bg-white rounded-lg shadow-xs border-0">
                                <div class="card-body p-3 border-top-lg border-size-lg border-success p-0">
                                    <h4><span class="font-xsss fw-700 text-grey-900 mt-2 d-inline-block">Done </span><a href="#" class="float-right btn-round-sm bg-greylight" data-toggle="modal" data-target="#Modaltodo"><i class="feather-plus font-xss text-grey-900"></i></a></h4>
                                </div>
                                @foreach ($project_tasks as $project_task)
                                @php
                                    $project_process = School_project_process::where('student_id',session('rexkod_user_id'))
                                                            ->where('project_id',$project_id)
                                                            ->where('task_id',$project_task->id)->first();
                                @endphp
                                @if($project_process && $project_process->status == 2)

                                <div class="card-body p-3 bg-lightgreen m-3 rounded-lg">
                                    <h4 class="font-xsss fw-700 text-grey-900 mb-2 mt-1 d-block">{{$project_task->name}}</h4>
                                    <p class="font-xssss lh-24 fw-500 text-grey-500 mt-3 d-block mb-3">{{$project_task->description}}</p>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">{{$project_task->duration}}</span>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Completed</span>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="middle-sidebar-right scroll-bar">
                    <div class="middle-sidebar-right-content">

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body p-2 d-block text-center">
                                <div id="datetimepicker"></div>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.8/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.14.30/js/bootstrap-datetimepicker.min.js"></script>



    @include("inc.footer")

    <script>
        $(function () {
            $('#datetimepicker').datetimepicker({
                showTodayButton: true,
                showClose: true, //close the picker
                showClear: true, //clear selection
                format: 'YYYY-MMM-DD HH:mm', //YYYY-MMM-DD LT
                // calendarWeeks: true,
                inline: true,
                sideBySide: true,
                 icons: {
                    up: "ti-arrow-circle-up ti-icon",
                    down: "ti-arrow-circle-down ti-icon",
                    time: 'ti-alarm-clock',
                    date: 'ti-calendar',
                    previous: 'ti-arrow-circle-left ti-icon',
                    next: 'ti-arrow-circle-right ti-icon',
                    today: 'ti-calendar ti-icon',
                    clear: 'ti-trash ti-icon text-danger',
                    close: 'ti-close ti-icon text-success'
                }
            });
        });
    </script>



</body>

</html>