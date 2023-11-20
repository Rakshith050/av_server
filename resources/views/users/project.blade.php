@include("inc.header")
<style>

    textarea {
      width: 32%;
      float: top;
      min-height: 250px;
      overflow: scroll;
      margin: auto;
      display: inline-block;
      background: #F4F4F9;
      outline: none;
      font-family: Courier, sans-serif;
      font-size: 14px;
    }
    
    iframe {
      bottom: 0;
      position: relative;
      width: 100%;
      height: 35em;
    }
    
    </style>

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
    

                <head>
                    <title>Code Editor</title>
                  <meta name="viewport" content="width=device-width, initial-scale=1">
              
                  <link rel="stylesheet" href="style.css">
                </head>
              
               <div class="card">
              <div class="card-body">
                  <textarea class="form-control" style="background:#333;width:33%" id="html" placeholder="HTML"></textarea>
                  <textarea class="form-control" style="background:#333;width:33%" id="css" placeholder="CSS"></textarea>
                  <textarea class="form-control" style="background:#333;width:33%" id="js" placeholder="JavaScript"></textarea>
                  <iframe style="width:99.5%" id="code"></iframe>
              
                  <script type="text/javascript" src="app.js"></script>
              
               </div></div>
              
                 </body>   







        </div> 
    
    
        
    
        @include("inc.footer")
    
        <script src="js/plugin.js"></script>
        <script src="js/countdown.js"></script> 
        <script src="js/scripts.js"></script>
    
        <script>
            function compile() {
           
           var html = document.getElementById("html");
           var css = document.getElementById("css");
           var js = document.getElementById("js");
           var code = document.getElementById("code").contentWindow.document;
           
            document.body.onkeyup = function(){
             code.open();
             code.writeln(html.value+"<style>"+css.value+"</style>" + " <script>" + js.value);
             code.close();
               };
             }
           
           compile();
           </script>
        
</body>
    
</html>