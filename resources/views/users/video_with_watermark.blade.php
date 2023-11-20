@include('inc.header')


<style>
    

    .watermark_image {
        position: absolute;
        left: 2%;
        top: 7%;
        width: 60px;
    }
.watermark {
    position: absolute;
    left: 3%; top: 3%;
    color: white;
    animation: 500s moving-watermark infinite;
}

@keyframes moving-watermark {
    20% {left: 93%; top: 3%;}
    40% {left: 50%; top: 93%;}
    60% {left: 3%; top: 93%;}
    850% {left: 3%; top: 3%;}
    0%   {left: 3%; top: 3%;}
    25% {left: 50%; top: 3%;}
    50% {left: 93%; top: 93%;}
    75% {left: 30%; top: 93%;}
    100% {left: 3%; top: 3%;}
}
</style>
@php
    use Carbon\Carbon;
@endphp

<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc.navbar')
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc.topbar')
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-10 col-xxl-10">
                            <div class="card border-0 mb-0 rounded-lg overflow-hidden">

                                <div id="vid-cont" class="video-container">
                                    <video class="video" controls style="width: 100%; height: 100%; overflow: hidden;">
                                        <source src="https://abc.kods.app/uploads/SHGV1684912023.mp4" type='video/mp4'
                                            id='mp4'>
                                    </video>

                                    <i class="watermark" style="opacity:50%"> {{session('rexkod_user_phone')}}</i>
                                    <img class="watermark_image"
                                        src="https://jonnasuresh.files.wordpress.com/2013/03/vtu-logo.png"
                                        alt="" style="opacity:50%" width:50>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- main content -->




        </div>
    </div>





        @include('inc.footer')



</body>

</html>
