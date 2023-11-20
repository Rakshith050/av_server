@include("inc_recruiter.header")
@php
    use App\Models\User;

@endphp

<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_recruiter.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_recruiter.topbar")

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class=" mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                                {{-- <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a> --}}
                                {{-- <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">All Job Applications</h4> --}}
                                <h2 class="fw-400 font-lg d-block">Job <b> Applications</b> </h2>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['job_application'] as $job_application)
                                            @php
                                                $student =User::where('id',$job_application->student_id)->first();
                                            @endphp
                                            <tr>
                                            <td>{{$student->name}}</td>
                                            <td>{{date('Y-m-d', strtotime($job_application->created_at))}}</td>
                                            <td>{{date('H:i:s', strtotime($job_application->created_at))}}</td>
                                            <td><a href="/recruiter/student_profile/{{$student->id}}" class="btn bg-current text-center text-white font-xsss fw-600 p-1  rounded-lg d-inline-block border-0">View Profile</a>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>



            </div>


        </div>

    </div>

    @include("inc_recruiter.footer")

</body>

</html>
