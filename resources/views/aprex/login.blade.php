@include("inc_aprex.header")


<body class="color-theme-blue">

    {{-- <div class="preloader"></div> --}}

    <div class="main-wrap">


        <div class="row">
            <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat" style="background-image: url(https://img.freepik.com/free-photo/handsome-young-indian-student-man-holding-notebooks-while-standing-street_231208-2771.jpg?w=740&t=st=1680715615~exp=1680716215~hmac=45298129d97bba1e98a1ea8c5192b03a14d4ee345a47bffe6f190f0763be3cb2);"></div>
            <div class="col-xl-7 vh-lg-100 align-items-center d-flex bg-white rounded-lg overflow-hidden">
                <div class="card shadow-none border-0 ml-auto mr-auto login-card">
                    <div class="card-body rounded-0 text-left">
                        <img src="/assets/images/logo.png" width="100" alt=""><br>
                        <h2 class="fw-700 display1-size display2-md-size mb-3">Login into <br>your account</h2>
                        <form action="/aprex/login" method="post">
                            @csrf
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-email text-grey-500 pr-0"></i>
                                <input type="text" name="email" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your Email Address" required>
                                {{-- @if(session('failed'))
                                <div>{{ session('failed') }}</div>
                                @endif --}}
                            </div>
                            <div class="form-group icon-input mb-1">
                                <input type="Password" name="password" class="style2-input pl-5 form-control text-grey-900 font-xss ls-3" placeholder="Password" required>
                                <i class="font-sm ti-lock text-grey-500 pr-0"></i>
                            </div>
                            <div class="form-check text-left mb-3">
                                <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1" >
                                <label class="form-check-label font-xsss text-grey-500" for="exampleCheck1">Remember me</label>
                                <a href="/forgot" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot your Password?</a>
                            </div>
                            <div class="col-sm-12 p-0 text-left">
                            <div class="form-group mb-1">
                                <!-- <a href="#" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Login</a> -->
                                <button type="submit" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Login</button>
                            </div>
                            {{-- <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Dont have an account?</h6> --}}
                            <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Dont have an account? <a href="/aprex/register" class="fw-700 ml-1"> Register </a></h6>
                            {{-- <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32"><a href="/recruiter/register" class="fw-700 ml-1">Register as recruiter</a></h6> --}}
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>







    @include("inc_aprex.footer")

</body>

</html>
