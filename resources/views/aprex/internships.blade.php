@include("inc_aprex.header")
@php
    use App\Models\Recruiter;
    use App\Models\Internship_application;
@endphp

<body class="color-theme-orange mont-font">




    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_aprex.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_aprex.topbar")

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    {{-- <div class="middle-wrap mb-3"> --}}
                    {{-- <div class="mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-lg">
                                <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                                <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">All Internships</h4>
                            </div>

                        </div>
                    </div> --}}
                    <div class="row">
                        @foreach ($data['all_internships'] as $internship)
                        <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                            <div class="item">
                                <div class="card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                    <div class="card-image w-100 mb-3">
                                        <img src="/{{$internship->internship_image}}" alt="image" class="w-100" style="height: 200px">
                                    </div>
                                    <div class="card-body pt-0">

                                        <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">{{ucwords($internship->internship_title)}}</span>
                                        {{-- <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 40</span> --}}
                                        {{-- @php
                                            $recruiter=Recruiter::where('recruiter_id',$internship->created_by)->first();
                                        @endphp --}}
                                        {{-- <h4 class="fw-700 font-xss mt-3 lh-28 mt-0">{{ucwords($recruiter->org_name)}}</h4> --}}
                                        {{-- <div class="row">
                                            <div class="col-lg-6">
                                                <p class="font-xsss">Stipend: <br>{{$internship->stipend}}</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="font-xsss">Location: <br>{{$internship->location}}</p>
                                            </div>
                                        </div> --}}
                                        {{-- <a href=""  class="btn bg-current text-center text-white font-xsss fw-600 p-2 w175 rounded-lg d-inline-block border-0">Apply</a> --}}
                                        <div class="row">
                                            <form method="post" action="/apply_internship">
                                                @csrf
                                                <input type="hidden" name="internship_id" value="{{$internship->id}}">
                                                @php
                                                    $application=Internship_application::where('internship_id',$internship->id)->where('student_id',session('rexkod_user_id'))->first();
                                                @endphp
                                                <div class="col-lg-12 mt-3">
                                                    @if ($application)
                                                    <a href="/start_internship/{{$internship->id}}" class="btn bg-current text-center text-white font-xsss fw-600 p-2 w175 rounded-lg d-inline-block border-0" disabled>View</a>
                                                    @else
                                                    <button  type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-2 w175 rounded-lg d-inline-block border-0">Apply</button>
                                                    @endif

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @include("inc_aprex.sidebar")
            </div>
        </div>
    </div>

    @include("inc_aprex.footer")

</body>

</html>
