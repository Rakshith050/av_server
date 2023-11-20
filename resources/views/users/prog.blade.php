@include("inc.header")
<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}

    
    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc.navbar")
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc.topbar")
            <body>
    
                <style>
                  .embed-brand-area{
                display: none !important;
                  }
                </style>
                  <div data-pym-src='https://www.jdoodle.com/plugin' data-language={{$data['prog']}}
                    data-version-index="4" data-libs="mavenlib1, mavenlib2" >
                    
                  </div>
                  <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
                </body>


        </div> 
    
    
        
    
        @include("inc.footer")
    

</body>
    
</html>
