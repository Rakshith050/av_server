@include('inc_aprex.header')
<style>
    .certificate-container {
        background-color: #f8f9fa;
        padding: 30px;
        border: 1px solid #ccc;
        text-align: center;
        margin: 50px auto;
        width: 600px;
    }

    .certificate-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .certificate-details {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .certificate-recipient {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 40px;
    }

    .certificate-signature {
        font-size: 20px;
        font-style: italic;
    }
    @media (max-width: 992px){
        .certificate-container{
            max-width: 100%;
        }
        .certificate-title {
        font-size: 18px;
        margin-bottom: 12px;
    }
    .certificate-details {
        font-size: 12px;
        margin-bottom: 20px;
    }

    .certificate-recipient {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .certificate-signature {
        font-size: 15px;
    }


}
</style>

<body class="color-theme-orange mont-font">




    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc_aprex.navbar')
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc_aprex.topbar')

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="middle-wrap">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-lg">
                                {{-- <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a> --}}
                                <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">Certificate</h4>
                            </div>
                            

                            <div class="certificate-container">
                                <div class="certificate-title">Certificate of Completion</div>
                                <div class="certificate-details">This is to certify that</div>
                                <div class="certificate-recipient">{{session('rexkod_user_name')}}</div>
                                <div class="certificate-details">has successfully completed the course</div>
                                <div class="certificate-title">{{$course->course_name}}</div>
                                <div class="certificate-details">with a score of {{$quiz_result}}%</div>
                                <div class="certificate-signature">Signature</div>
                            </div>


                        </div>
                        <!-- <div class="card w-100 border-0 p-2"></div> -->
                    </div>
                </div>


                @include('inc_aprex.sidebar')
            </div>
        </div>
        
        @include('inc_aprex.footer_app')
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
    @include('inc_aprex.footer')


</body>

</html>
