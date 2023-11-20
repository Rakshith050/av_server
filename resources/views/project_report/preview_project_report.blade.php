<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ABC eBook">
    <meta name="author" content="Kods">
    <!-- Favicon -->

    <!-- Site Title -->
    <title>ABC Project Report</title>
    <!-- Bootstrap 5 Core CSS -->
    <link href="/assets_ebook/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="/assets_ebook/css/animate.min.css">
    <link rel="stylesheet" href="/assets_ebook/css/aos.css">
    <link rel="stylesheet" href="/assets_ebook/css/style.css">
    <link rel="stylesheet" href="/assets_ebook/css/prism.css">
    <link rel="stylesheet" href="/assets_ebook/css/doc.css">
    <!-- custom image css  -->
    <link rel="stylesheet" href="/assets_ebook/css/image.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="/assets_ebook/css/fontawesome-all.min.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- video player -->
    <link rel='stylesheet' href='https://cdn.plyr.io/3.5.6/plyr.css'>

    <!-- audio -->
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="prefetch" href="https://rpsthecoder.github.io/js-speech-synthesis/pause1.svg">
    <link rel="prefetch" href="https://rpsthecoder.github.io/js-speech-synthesis/stop1.svg">
    <link rel="prefetch" href="https://rpsthecoder.github.io/js-speech-synthesis/play1.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>


</style>
<style>
    /* Style the tab */
    .tab {
        overflow: hidden;
        background-color: #fff;

    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        width: 50%;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #fff;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: rgba(240, 240, 240, 0.5);

    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        border-top: none;
    }

    .doc-code {
        max-height: 200px;
        overflow-x: scroll;
    }

    /* progress bar */
    .progress-bar {
        width: 100%;
        height: 15px;
        background-color: #f2f2f2;
        z-index: 1000;
        position: fixed;
    }

    .progress {
        height: 15px;
        background-color: #fa960b;
        width: 0%;
        transition: width 0.2s ease-in-out;
        /* z-index: 1001; */
        position: fixed;
        margin: 0;
    }

</style>
<style>
    /* Hide scrollbar for WebKit (Chrome, Safari) */
    #nav-scroll .collapse.navbar-collapse::-webkit-scrollbar {
        width: 0.5em;
    }

    /* Hide scrollbar track for WebKit */
    #nav-scroll .collapse.navbar-collapse::-webkit-scrollbar-track {
        background: transparent;
    }

    /* Hide scrollbar thumb for WebKit */
    #nav-scroll .collapse.navbar-collapse::-webkit-scrollbar-thumb {
        background-color: transparent;
    }

    /* Hide scrollbar for Firefox */
    #nav-scroll .collapse.navbar-collapse {
        scrollbar-width: none;
    }
</style>
@php
    use App\Models\Project_report;
    use App\Models\Project_report_modules;
    use App\Models\Project_report_element;

    $project_report_module = $data['project_report_module'];
    $project_report = $data['project_report'];

@endphp

<body class="doc-body doc-white-body" data-bs-spy="scroll" data-bs-target="#nav-scroll">
    <div class="progress-bar">
        <div class="progress"></div>
    </div>

    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <div id="#top"></div>

    <nav id="nav-scroll" class="side-nav left-nav navbar-expand-lg nav bg-white p-3" style="margin-top: 20px;">

        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbar-toggle" aria-controls="navbar-toggle" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button><!-- / navbar-toggler -->

        <div class="collapse navbar-collapse" id="navbar-toggle" style="margin-top: 0px; height: 95vh; overflow-y: auto;">

            <ul class="pl-0" id="main-collapse" style="padding-top: 150px;">

                <li>
                    <img src="/assets_ebook/images/project_report.png" alt="" style="width:100%;height: auto;" class="p-4">
                </li>
                @php
                    $count = 10;
                @endphp
                @foreach ($project_report_module as $module)
                    <li class="nav-item mb-3" style="border-bottom:3px solid #273078; border-radius:10px;background-color: #f0f0f0; font-weight:700">
                        <a class="nav-link" href="#{{ $module->module_title }}" style="font-weight:700; font-size:14px;color:#000"><span>{{ $module->module_title }}</span></a>

                    </li><!-- / nav-item -->
                @endforeach

            </ul><!-- / main-collapse -->
        </div><!-- / collapse -->
    </nav><!-- / nav-scroll -->
    <!-- / side-nav -->



    <div class="page-container" style="background-color: #f0f0f0">
        <div class="doc-container">
            {{-- -------------------------------dynamic content--------------------------------------------- --}}

            <h2 id="getting-started" class="text-center mb-4" style="font-family: 'Raleway','Poppins', 'sans-serif';font-weight: 800;">{{ $project_report->title }}</h2>
            @foreach ($project_report_module as $module)
                <div class="mb-2" style="background-color: #ffff;border:2px solid #273078;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);">
                    <div class="p-1 position-relative" style="margin-left: 65px;margin-right: 65px;border:2px solid #273078;">
                        <div class="p-1 position-absolute translate-middle-y d-flex justify-content-center align-items-center" style="width:63px;height: 105%; top:50%;left:-68px; font-size:35px;border:2px solid #273078;">
                            <i class="fa-solid fa-file-pen p-2  text-light" style="background-color: #273078;"></i> <!-- Icon on the left -->
                        </div>
                        <h4 id="{{ $module->module_title }}" class="doc-main-title text-center bg-secondary p-2" > <!-- Adjust margin as needed -->
                            {{ $module->module_title }}
                        </h4>
                        <div class="p-1 position-absolute translate-middle-y d-flex justify-content-center align-items-center" style="width:63px;height: 105%; top:50%;right:-68px; font-size:31px;border:2px solid #273078;">
                            <i class="fa-solid fa-volume-high p-2 text-light"style="background-color: #273078;"></i> <!-- Icon on the left -->
                        </div>

                    </div>



                    @php
                        $project_report_element = Project_report_element::where('module_id', $module->id)->get();
                    @endphp
                    <div class="element-container p-4">
                    @foreach ($project_report_element as $element)
                        @if ($element->element_id == 1)
                            {{-- heading --}}
                                <h6 id="{{ $element->content }}-link" class="" style="font-weight:600;color:#273078;font-size: 18px">
                                    {{ $element->content }}</h6>

                        @elseif($element->element_id == 2)
                            {{-- paragraph --}}
                            <p class="pt-2" style="font-size: 15px;">{{ $element->content }}</p>
                        @endif
                    @endforeach
                </div>
                </div>
            @endforeach

            {{-- -------------------------------dynamic content end--------------------------------------------- --}}

        </div><!-- / doc-container -->
    </div><!-- / page-container -->






    <!-- Core JavaScript -->
    <script src="/assets_ebook/js/bootstrap.bundle.min.js"></script>
    <script src="/assets_ebook/js/theme.js"></script>

    <!-- aos -->
    <script src="/assets_ebook/js/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        })
    </script>
    <!-- / aos -->

    <!-- prism -->
    <script src="/assets_ebook/js/prism.js"></script>
    <!-- / prism -->

    <!-- copy-to-clipboard -->
    <script src="/assets_ebook/js/clipboard.min.js"></script>

    <script src="/assets_ebook/js/audio.js"></script>




    <script>
        var clipboard = new ClipboardJS('.btn');

        clipboard.on('success', function(e) {
            console.log(e);
            e.clearSelection();
        });

        clipboard.on('error', function(e) {
            console.log(e);
            e.clearSelection();
        });
    </script>
    <!-- / copy-to-clipboard -->
    <script>
        $(document).ready(function() {
            // Show the first tab by default
            $(".tablinks:first").addClass("active");
        });

        function changeTab(evt, tab) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get the parent container of the clicked button
            var container = evt.target.closest('.doc-holder');

            // Get all elements with class="tabcontent" and hide them
            tabcontent = container.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = container.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }


            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(tab).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

    <script>
        // Calculate the progress based on the current scroll position and page height
        function calculateProgress() {
            const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight || document.body.scrollHeight;
            const clientHeight = document.documentElement.clientHeight || window.innerHeight;

            const progress = (scrollTop / (scrollHeight - clientHeight)) * 100;

            return progress;
        }

        function updateProgressBar() {
            const progress = calculateProgress();
            const progressBar = document.querySelector('.progress');
            progressBar.style.width = progress + '%';
        }

        window.addEventListener('scroll', updateProgressBar);
        window.addEventListener('resize', updateProgressBar); // Add this line
    </script>

    <!-- audio -->
    <script type="text/javascript">
        var txtInput = document.querySelector('#txtInput');
        var btnSpeak = document.querySelector('#btnSpeak');
        var synth = window.speechSynthesis;
        var voices = [];
        var isSpeaking = false; // Variable to track speech state

        PopulateVoices();
        if (speechSynthesis !== undefined) {
            speechSynthesis.onvoiceschanged = PopulateVoices;
        }

        btnSpeak.addEventListener('click', () => {
            if (isSpeaking) {
                // If speaking, stop the speech
                synth.cancel();
                isSpeaking = false;
                btnSpeak.classList.remove('fa-volume-mute'); // Remove mute icon class
                btnSpeak.classList.add('fa-volume-up'); // Add speak icon class
            } else {
                // If not speaking, start the speech
                var toSpeak = new SpeechSynthesisUtterance(txtInput.textContent);
                toSpeak.voice = voices[55];
                toSpeak.pitch = 1;
                toSpeak.rate = 1;
                synth.speak(toSpeak);
                isSpeaking = true;
                btnSpeak.classList.remove('fa-volume-up'); // Remove speak icon class
                btnSpeak.classList.add('fa-volume-mute'); // Add mute icon class
            }
        });

        function PopulateVoices() {
            voices = synth.getVoices();
            voices.forEach((item, index) => console.log(item.name, index));
        }
    </script>
    <script>
        if (window.parent && window.parent.parent) {
            window.parent.parent.postMessage(["resultsFrame", {
                height: document.body.getBoundingClientRect().height,
                slug: "25yfme36"
            }], "*")
        }
        window.name = "result"
    </script>
</body>
