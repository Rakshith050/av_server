@include("inc.header")


<body class="color-theme-blue">

    <div class="preloader"></div>

    <div class="main-wrap">
      

        <div class="row">
            <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat" style="background-image: url(https://img.freepik.com/free-photo/smiley-businesswoman-posing-city-with-arms-crossed_23-2148767033.jpg?w=740&t=st=1680948573~exp=1680949173~hmac=d726274e507246e4d5061dc93bf35102d9c4686f56a5c6f63f006e16e4fa18a2);"></div>
            <div class="col-xl-7 vh-lg-100 align-items-center d-flex bg-white rounded-lg overflow-hidden">
                <div class="card shadow-none border-0 ml-auto mr-auto login-card">
                    <div class="card-body rounded-0 text-left">
                        <img src="/assets/images/logo.png" width="100" alt=""><br>
                        <h2 class="fw-300 display1-size display2-md-size mb-3">Recruiter Registration</h2>
                        <form action="/recruiter/register" method="post">
                            @csrf
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-user text-grey-500 pr-0"></i>
                                <input type="text" name="name" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your Name" required>                        
                            </div>
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-user text-grey-500 pr-0"></i>
                                <input type="text" name="org_name" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600" placeholder="Organisation Name" required>                        
                            </div>
                           
                          
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-email text-grey-500 pr-0"></i>
                                <input type="text" name="email" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600" placeholder=" Email Address" required>                        
                            </div>
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-email text-grey-500 pr-0"></i>
                                <input type="text" name="phone" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600" placeholder=" Phone Number" required>                        
                            </div>
                            
                            <div class="form-group icon-input mb-3">
                                <input type="Password" name="password" class="style2-input pl-5 form-control text-grey-900 font-xss ls-3" placeholder="Password" required>
                                <i class="font-sm ti-lock text-grey-500 pr-0"></i>
                            </div>
                          
                            <div class="form-check text-left mb-3">
                                <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1" required>
                                <label class="form-check-label font-xsss text-grey-500" for="exampleCheck1">Accept Term and Conditions</label>
                                <!-- <a href="#" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot your Password?</a> -->
                            </div>
                            
                            <div class="col-sm-12 p-0 text-left">
                                <div class="form-group mb-1">
                                    <!-- <a href="#" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Register</a> -->
                                    <button type="submit" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Register</button>
                                </div>
                                <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Already have account <a href="/login" class="fw-700 ml-1">Login</a></h6>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>

   



    

    @include("inc.footer")

</body>

</html>
