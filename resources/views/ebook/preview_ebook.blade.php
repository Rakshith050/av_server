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
    <title>ABC eBook</title>
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
@php
    use App\Models\Ebook;
    use App\Models\Ebook_module;
    use App\Models\Element;
    use App\Models\Ebook_section;
    use App\Models\Ebook_element;

    $ebook_module = $data['ebook_module'];
    $ebook = $data['ebook'];

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

    <nav id="nav-scroll" class="side-nav left-nav navbar-expand-lg nav bg-white">

        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbar-toggle" aria-controls="navbar-toggle" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button><!-- / navbar-toggler -->

        <div class="collapse navbar-collapse" id="navbar-toggle" style="margin-top:0px">

            <ul class="pl-0" id="main-collapse">

                <li>
                    <img src="/{{ $ebook->image }}" alt="" style="width:100%;height: auto;">
                </li>
                @php
                    $count = 10;
                @endphp
                @foreach ($ebook_module as $module)
                    <li class="nav-item">
                        <a class="nav-link has-collapse collapsed" href="#side-dropdown{{ $count }}"
                            data-bs-toggle="collapse" data-bs-target="#side-dropdown{{ $count }}"
                            aria-expanded="false"
                            aria-controls="side-dropdown{{ $count }}"><span>{{ $module->module_title }}</span></a>
                        <div class="collapse" id="side-dropdown{{ $count }}" data-bs-parent="#main-collapse">
                            <ul class="nav">
                                @php
                                    $count++;
                                    $ebook_sections = Ebook_section::where('module_id', $module->id)->get();
                                @endphp
                                @foreach ($ebook_sections as $section)
                                    <li class="nav-item">
                                        <a class="nav-link sidenav-sub-item"
                                            href="#{{ $section->section_title }}">{{ $section->section_title }}</a>
                                    </li><!-- / nav-item -->
                                @endforeach

                            </ul><!-- nav -->
                        </div><!-- / collapse -->
                    </li><!-- / nav-item -->
                @endforeach

            </ul><!-- / main-collapse -->
        </div><!-- / collapse -->
    </nav><!-- / nav-scroll -->
    <!-- / side-nav -->



    <div class="page-container">
        <div class="doc-container">
            {{-- -------------------------------dynamic content--------------------------------------------- --}}
            <h4 id="getting-started" class="doc-main-title">{{ $ebook->title }}<a href="#getting-started"><i
                        class="fas fa-hashtag"></i></a></h4>
            <div id="" class="doc-wrapper">
                <div class="doc-preview">
                    <img src="/{{ $ebook->image }}" alt="preview" class="introduction-img">
                </div>
            </div><!-- / doc-wrapper -->
            @foreach ($ebook_module as $module)
                <h4 id="content" class="doc-main-title">{{ $module->module_title }} <a
                        href="#{{ $module->module_title }}"><i class="fas fa-hashtag"></i></a></h4>
                @php
                    $ebook_sections = Ebook_section::where('module_id', $module->id)->get();
                @endphp
                @foreach ($ebook_sections as $section)
                    <div id="{{ $section->section_title }}" class="doc-wrapper">
                        <div class="d-flex justify-content-center">
                            <h6 class="doc-title custom-h6">{{ $section->section_title }} </h6>
                        </div>

                        @php
                            $ebook_element = Ebook_element::where('section_id', $section->id)->get();
                        @endphp
                        @foreach ($ebook_element as $element)
                            @if ($element->element_id == 1)
                            {{-- heading --}}
                            <div class="d-flex justify-content-center align-items-center">
                                @if ($element->heading_type === 1)
                                <h6 id="{{ $element->content }}-link" class="pt-20 doc-sub-title bg-grey">
                                    {{ $element->content }}</h6>
                                @else
                                <h6 id="{{ $element->content }}-link" class="pt-20 doc-sub-title bg-danger">
                                    {{ $element->content }}</h6>
                                @endif

                            </div>

                                <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 2)
                            {{-- paragraph --}}

                                <pre class="custom-pre">
                                    {{ $element->content }}
                                </pre>


                                <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 4)
                                <div class="doc-info">
                                    <img src="/{{ $element->image }}" class="img-fluid" alt="Responsive image">
                                </div><!-- / doc-info -->
                                <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 3)
                                <div class="doc-holder">
                                    <!-- tabs -->
                                    <div class="tab d-flex justify-content-around">
                                        <button class="tablinks" onclick="changeTab(event, 'code')">Code</button>
                                        <button class="tablinks" onclick="changeTab(event, 'output')">Output</button>
                                        <button class="tablinks"
                                            onclick="changeTab(event, 'code_memory')">Memory</button>
                                    </div>

                                    <!-- Tab content -->
                                    <div id="code" class="tabcontent" style="display: block ;">
                                        <div class="doc-result-footer text-center">

                                            <button class="btn btn-primary btn-code" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#code-headings-collapse"
                                                aria-expanded="false" aria-controls="code-headings-collapse"><i
                                                    class="fas fa-code va-middle mr-5"></i>
                                                <span>View Code</span></button>
                                        </div><!-- / doc-result-footer -->
                                        <div class="collapse" id="code-headings-collapse">
                                            <div class="doc-code">
                                                <pre class="language-markup"><code id="code-headings" class="language-markup" >
                                                    {{ $element->code }}
                                            </code></pre><!-- / code -->
                                            </div><!-- / doc-code -->
                                        </div><!-- / collapse -->
                                    </div>
                                    <div id="output" class="tabcontent">
                                        <div class="doc-code">
                                            <pre class="language-markup"><code id="code-headings" class="language-markup" >
                                                {{ $element->output }}</code></pre><!-- / code -->
                                        </div>
                                    </div>
                                    <div id="code_memory" class="tabcontent">
                                        <img src="/{{ $element->memory }}" alt="">
                                    </div>
                                </div><!-- / doc-holder -->
                                <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 5 && $element->image_type == 'image_2_1')
                                    <div class="img-preview-2_1">
                                        <img src="/assets_ebook/images/2.1.png" alt="preview" class="introduction-img">
                                        <div class="box1 open-modal-2_1_1" data-bs-toggle="modal"
                                            data-bs-target="#imgModal_2_1_1{{$element->id}}">
                                            <p class="p1">{{ $element->image_text_1 }}
                                            </p>
                                        </div>

                                        <div class="box2 open-modal-2_1_2" data-bs-toggle="modal"
                                            data-bs-target="#imgModal_2_1_2{{$element->id}}">
                                            <p class="p2">{{ $element->image_text_2 }}
                                            </p>
                                        </div>

                                        <!-- Modal 2 Option-1 -->
                                        <div class="modal modal-2_1_1 fade" id="imgModal_2_1_1{{$element->id}}" tabindex="-1"
                                            aria-labelledby="imgModal_2_1Label" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="imgModal_2_1Label"
                                                            style="display: inline;">{{ $element->image_text_1 }}</h5>
                                                        <button type="button" class="btn-close light"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $element->image_desc_1 }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal 2 Option-2 -->
                                        <div class="modal modal-2_1_2 fade" id="imgModal_2_1_2{{$element->id}}" tabindex="-1"
                                            aria-labelledby="imgModal_2_2Label" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="imgModal_2_1Label"
                                                            style="display: inline;">{{ $element->image_text_2 }}</h5>
                                                        <button type="button" class="btn-close light"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $element->image_desc_2 }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 5 && $element->image_type == 'image_2_2')
                                    <div class="img-preview-2_2">
                                        <img src="/assets_ebook/images/2.2.png" alt="preview" class="introduction-img">

                                        <div class="box0">
                                            <p class="p0">Vs
                                            </p>
                                        </div>

                                        <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_2_2_1{{$element->id}}">
                                            <p class="p1">{{ $element->image_text_1 }}
                                            </p>
                                        </div>

                                        <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_2_2_2{{$element->id}}">
                                            <p class="p2">{{ $element->image_text_2 }}
                                            </p>
                                        </div>

                                        <!-- Modal 2 Option-1 -->
                                        <div class="modal modal-2_2_1 fade" id="imgModal_2_2_1{{$element->id}}" tabindex="-1"
                                            aria-labelledby="imgModal_2_2Label" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="imgModal_2_1Label" style="display: inline;">{{ $element->image_text_1 }}
                                                        </h5>
                                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $element->image_desc_1 }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal 2 Option-2 -->
                                        <div class="modal modal-2_2_2 fade" id="imgModal_2_2_2{{$element->id}}" tabindex="-1"
                                            aria-labelledby="imgModal_2_2Label" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="imgModal_2_2Label" style="display: inline;">{{ $element->image_text_2 }}
                                                        </h5>
                                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $element->image_desc_2 }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 5 && $element->image_type == 'image_2_3')
                                    <div class="img-preview-2_3">
                                        <img src="/assets_ebook/images/2.3.png" alt="preview"
                                            class="introduction-img">

                                        <div class="box0">
                                            <p class="p0">{{ $element->image_heading }}
                                            </p>
                                        </div>

                                        <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_2_3_1{{$element->id}}">
                                            <p class="p1 ">{{ $element->image_text_1 }}
                                            </p>
                                        </div>

                                        <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_2_3_2{{$element->id}}">
                                            <p class="p2">{{ $element->image_text_2 }}
                                            </p>
                                        </div>

                                        <!-- Modal 2 Option-1 -->
                                        <div class="modal modal-2_3_1 fade" id="imgModal_2_3_1{{$element->id}}" tabindex="-1"
                                            aria-labelledby="imgModal_2_3Label" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="imgModal_2_3Label"
                                                            style="display: inline;">{{ $element->image_text_1 }}</h5>
                                                        <button type="button" class="btn-close light"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $element->image_desc_1 }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal 2 Option-2 -->
                                        <div class="modal modal-2_3_2 fade" id="imgModal_2_3_2{{$element->id}}" tabindex="-1"
                                            aria-labelledby="imgModal_2_3Label" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="imgModal_2_3Label"
                                                            style="display: inline;">{{ $element->image_text_2 }}</h5>
                                                        <button type="button" class="btn-close light"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $element->image_desc_2 }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 5 && $element->image_type == 'image_2_4')
                                    <div class="img-preview-2_4">
                                        <img src="/assets_ebook/images/2.3.png" alt="preview" class="introduction-img">

                                        <div class="box0">
                                            <p class="p0">Vs
                                            </p>
                                        </div>

                                        <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_2_4_1{{$element->id}}">
                                            <p class="p1">{{ $element->image_text_1 }}
                                            </p>
                                        </div>

                                        <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_2_4_2{{$element->id}}">
                                            <p class="p2">{{ $element->image_text_2 }}
                                            </p>
                                        </div>

                                        <!-- Modal 2 Option-1 -->
                                        <div class="modal modal-2_4_1 fade" id="imgModal_2_4_1{{$element->id}}" tabindex="-1" aria-labelledby="imgModal_2_4Label"
                                            aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="imgModal_2_4Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $element->image_desc_1 }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal 2 Option-2 -->
                                        <div class="modal modal-2_4_2 fade" id="imgModal_2_4_2{{$element->id}}" tabindex="-1" aria-labelledby="imgModal_2_4Label"
                                            aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="imgModal_2_4Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $element->image_desc_2 }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 6 && $element->image_type == 'image_3_1')
                            <div class="img-preview-3_1">
                                <img src="/assets_ebook/images/3.1.png" alt="preview" class="introduction-img">
                                <div class="box0">
                                    <p class="p0">{{ $element->image_heading }}
                                    </p>
                                </div>

                                <div class="box0_1">
                                    <p class="p0_1">{{ $element->image_subheading }}
                                    </p>
                                </div>

                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_3_1_1{{$element->id}}">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>

                                <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_3_1_2{{$element->id}}">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>

                                <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_3_1_3{{$element->id}}">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>

                                <!-- Modal 3 Option-1-1 -->
                                <div class="modal modal-3_1_1 fade" id="imgModal_3_1_1{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_3_1Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_3_1Label" style="display: inline;">{{ $element->image_text_1 }}
                                                </h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_1 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal 3 Option-1-2 -->
                                <div class="modal modal-3_1_2 fade" id="imgModal_3_1_2{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_3_1Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_3_1Label" style="display: inline;">{{ $element->image_text_2 }}
                                                </h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_2 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal 3 Option-1-3 -->
                                <div class="modal modal-3_1_3 fade" id="imgModal_3_1_3{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_3_1Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_3_1Label" style="display: inline;">{{ $element->image_text_3 }}
                                                </h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_3 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 6 && $element->image_type == 'image_3_2')
                            <div class="img-preview-3_2">
                                <img src="/assets_ebook/images/3.2.png" alt="preview" class="introduction-img">
                                <div class="box0">
                                    <p class="p0">{{ $element->image_subheading }}
                                    </p>
                                </div>

                                <div class="box0_1">
                                    <p class="p0_1">{{ $element->image_heading }}
                                    </p>
                                </div>

                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_3_2_1{{$element->id}}">
                                    <p class="p1">{{ $element->image_subtext_1 }}
                                    </p>
                                </div>
                                <div class="box1_1" data-bs-toggle="modal" data-bs-target="#imgModal_3_2_1{{$element->id}}">
                                    <p class="p1_1">{{ $element->image_text_1 }}
                                    </p>
                                </div>

                                <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_3_2_2{{$element->id}}">
                                    <p class="p2">{{ $element->image_subtext_2 }}
                                    </p>
                                </div>
                                <div class="box2_1" data-bs-toggle="modal" data-bs-target="#imgModal_3_2_2{{$element->id}}">
                                    <p class="p2_1">{{ $element->image_text_2 }}
                                    </p>
                                </div>

                                <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_3_2_3{{$element->id}}">
                                    <p class="p3">{{ $element->image_subtext_3 }}
                                    </p>
                                </div>
                                <div class="box3_1" data-bs-toggle="modal" data-bs-target="#imgModal_3_2_3{{$element->id}}">
                                    <p class="p3_1">{{ $element->image_text_3 }}
                                    </p>
                                </div>
                                <!-- Modal 3 Option-2-1 -->
                                <div class="modal modal-3_2_1 fade" id="imgModal_3_2_1{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_3_2Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_3_2Label" style="display: inline;">{{ $element->image_text_1 }}
                                                </h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_1 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal 3 Option-2-2 -->
                                <div class="modal modal-3_2_2 fade" id="imgModal_3_2_2{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_3_2Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_3_2Label" style="display: inline;">{{ $element->image_text_2 }}
                                                </h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_2 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal 3 Option-2-3 -->
                                <div class="modal modal-3_2_3 fade" id="imgModal_3_2_3{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_3_2Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_3_2Label" style="display: inline;">{{ $element->image_text_3 }}
                                                </h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_3 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @elseif($element->element_id == 7 && $element->image_type == 'image_4_1')
                            <div class="img-preview-4_1">
                                <img src="/assets_ebook/images/4.1.png" alt="preview" class="introduction-img">
                                <div class="option-container-4-1-0">
                                    <div class="box0_1">
                                        <p class="p0_1">{{ $element->image_subheading }}
                                        </p>
                                    </div>
                                    <div class="box0">
                                        <p class="p0">{{ $element->image_heading }}
                                        </p>
                                    </div>
                                </div>


                                <div class="option-container-4-1-1">
                                    <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_4_1_1{{$element->id}}">
                                        <p class="p1">{{ $element->image_text_1 }}
                                        </p>
                                    </div>

                                    <div class="box1_1" data-bs-toggle="modal" data-bs-target="#imgModal_4_1_1{{$element->id}}">
                                        <p class="p1_1">{{ $element->image_subtext_1 }}
                                        </p>
                                    </div>
                                </div>
                                <div class="option-container-4-1-2">
                                    <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_4_1_2{{$element->id}}">
                                        <p class="p2">{{ $element->image_text_2 }}
                                        </p>
                                    </div>
                                    <div class="box2_1" data-bs-toggle="modal" data-bs-target="#imgModal_4_1_2{{$element->id}}">
                                        <p class="p2_1">{{ $element->image_subtext_2 }}
                                        </p>
                                    </div>
                                </div>
                                <div class="option-container-4-1-3">
                                    <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_4_1_3{{$element->id}}">
                                        <p class="p3">{{ $element->image_text_3 }}
                                        </p>
                                    </div>
                                    <div class="box3_1" data-bs-toggle="modal" data-bs-target="#imgModal_4_1_3{{$element->id}}">
                                        <p class="p3_1">{{ $element->image_subtext_3 }}
                                        </p>
                                    </div>
                                </div>
                                <div class="option-container-4-1-4">
                                    <div class="box4" data-bs-toggle="modal" data-bs-target="#imgModal_4_1_4{{$element->id}}">
                                        <p class="p4">{{ $element->image_text_4 }}
                                        </p>
                                    </div>
                                    <div class="box4_1" data-bs-toggle="modal" data-bs-target="#imgModal_4_1_4{{$element->id}}">
                                        <p class="p4_1">{{ $element->image_subtext_4 }}
                                        </p>
                                    </div>
                                </div>

                                <!-- Modal 4 Option-1-1 -->
                                <div class="modal modal-4_1_1 fade" id="imgModal_4_1_1{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_4_1Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_3_1Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_1 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal 4 Option-1-2 -->
                                <div class="modal modal-4_1_2 fade" id="imgModal_4_1_2{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_4_1Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_3_1Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_2 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal 4 Option-1-3 -->
                                <div class="modal modal-4_1_3 fade" id="imgModal_4_1_3{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_4_1Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_3_1Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_3 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal 4 Option-1-4 -->
                                <div class="modal modal-4_1_4 fade" id="imgModal_4_1_4{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_4_1Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_3_1Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_4 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 7 && $element->image_type == 'image_4_2')
                            <div class="img-preview-4_2">
                                <img src="/assets_ebook/images/4.2.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">{{ $element->image_heading }}
                                    </p>
                                </div>

                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_4_2_1{{$element->id}}">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>

                                <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_4_2_2{{$element->id}}">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>

                                <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_4_2_3{{$element->id}}">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>


                                <div class="box4" data-bs-toggle="modal" data-bs-target="#imgModal_4_2_4{{$element->id}}">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-4_2_1 fade" id="imgModal_4_2_1{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_4_2Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_4_2Label" style="display: inline;">
                                                    {{ $element->image_text_1 }}</h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_1 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Modal 4 Option-2-1 -->
                                    <div class="modal modal-4_2_2 fade" id="imgModal_4_2_2{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_4_2Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_4_2Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_2 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Modal 4 Option-2-1 -->
                                    <div class="modal modal-4_2_3 fade" id="imgModal_4_2_3{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_4_2Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_4_2Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_3 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Modal 4 Option-2-1 -->
                                    <div class="modal modal-4_2_4 fade" id="imgModal_4_2_4{{$element->id}}" tabindex="-1"
                                    aria-labelledby="imgModal_4_2Label" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imgModal_4_2Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                                <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $element->image_desc_4 }}
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 7 && $element->image_type == 'image_4_3')
                            <div class="img-preview-4_3">
                                <img src="/assets_ebook/images/4.3.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">{{ $element->image_subheading }}
                                    </p>
                                </div>

                                <div class="box0_1">
                                    <p class="p0_1">{{ $element->image_heading }}
                                    </p>
                                </div>

                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_4_3_1{{$element->id}}">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>

                                <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_4_3_2{{$element->id}}">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>

                                <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_4_3_3{{$element->id}}">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>

                                <div class="box4" data-bs-toggle="modal" data-bs-target="#imgModal_4_3_4{{$element->id}}">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                         <div class="modal modal-4_3_1 fade" id="imgModal_4_3_1{{$element->id}}" tabindex="-1"
                         aria-labelledby="imgModal_4_3Label" aria-hidden="true">
                         <div class="modal-dialog  modal-dialog-scrollable">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="imgModal_4_3Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                     <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    {{ $element->image_desc_1 }}
                                 </div>
                                 <div class="modal-footer">
                                     <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                 </div>
                             </div>
                         </div>
                        </div>
                         <!-- Modal 4 Option-2-1 -->
                          <!-- Modal 4 Option-2-1 -->
                          <div class="modal modal-4_3_2 fade" id="imgModal_4_3_2{{$element->id}}" tabindex="-1"
                          aria-labelledby="imgModal_4_2Label" aria-hidden="true">
                          <div class="modal-dialog  modal-dialog-scrollable">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="imgModal_4_2Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                      <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    {{ $element->image_desc_2 }}
                                  </div>
                                  <div class="modal-footer">
                                      <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                  </div>
                              </div>
                          </div>
                         </div>
                          <!-- Modal 4 Option-2-1 -->
                           <!-- Modal 4 Option-2-1 -->
                         <div class="modal modal-4_3_3 fade" id="imgModal_4_3_3{{$element->id}}" tabindex="-1"
                         aria-labelledby="imgModal_4_2Label" aria-hidden="true">
                         <div class="modal-dialog  modal-dialog-scrollable">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="imgModal_4_2Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                     <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    {{ $element->image_desc_3 }}
                                 </div>
                                 <div class="modal-footer">
                                     <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                 </div>
                             </div>
                         </div>
                        </div>
                         <!-- Modal 4 Option-2-1 -->
                          <!-- Modal 4 Option-2-1 -->
                          <div class="modal modal-4_3_4 fade" id="imgModal_4_3_4{{$element->id}}" tabindex="-1"
                          aria-labelledby="imgModal_4_2Label" aria-hidden="true">
                          <div class="modal-dialog  modal-dialog-scrollable">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="imgModal_4_2Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                      <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    {{ $element->image_desc_4 }}
                                  </div>
                                  <div class="modal-footer">
                                      <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                  </div>
                              </div>
                          </div>
                         </div>
                          <!-- Modal 4 Option-2-1 -->

                            </div>
                            <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 8 && $element->image_type == 'image_5_1')
                            <div class="img-preview-5_1">
                                <img src="/assets_ebook/images/5.1.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">{{ $element->image_heading }}
                                    </p>
                                </div>

                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_5_1_1">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>

                                <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_5_1_2">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>

                                <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_5_1_3">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>

                                <div class="box4" data-bs-toggle="modal" data-bs-target="#imgModal_5_1_4">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>

                                <div class="box5" data-bs-toggle="modal" data-bs-target="#imgModal_5_1_5">
                                    <p class="p5">{{ $element->image_text_5 }}
                                    </p>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-5_1_1 fade" id="imgModal_5_1_1" tabindex="-1"
                        aria-labelledby="imgModal_5_1Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_1Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_1 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                       </div>
                        <!-- Modal 4 Option-2-1 -->
                        <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-5_1_2 fade" id="imgModal_5_1_2" tabindex="-1"
                        aria-labelledby="imgModal_5_2Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_2Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_2 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                       </div>
                        <!-- Modal 4 Option-2-1 -->
                         <!-- Modal 4 Option-2-1 -->
                         <div class="modal modal-5_1_3 fade" id="imgModal_5_1_3" tabindex="-1"
                         aria-labelledby="imgModal_5_3Label" aria-hidden="true">
                         <div class="modal-dialog  modal-dialog-scrollable">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="imgModal_5_3Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                     <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    {{ $element->image_desc_3 }}
                                 </div>
                                 <div class="modal-footer">
                                     <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                 </div>
                             </div>
                         </div>
                        </div>
                         <!-- Modal 4 Option-2-1 -->
                          <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-5_1_4 fade" id="imgModal_5_1_4" tabindex="-1"
                        aria-labelledby="imgModal_5_4Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_4Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_4 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                       </div>
                        <!-- Modal 4 Option-2-1 -->
                         <!-- Modal 4 Option-2-1 -->
                         <div class="modal modal-5_1_5 fade" id="imgModal_5_1_5" tabindex="-1"
                         aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                         <div class="modal-dialog  modal-dialog-scrollable">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_5 }}</h5>
                                     <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    {{ $element->image_desc_5 }}
                                 </div>
                                 <div class="modal-footer">
                                     <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                 </div>
                             </div>
                         </div>
                        </div>
                         <!-- Modal 4 Option-2-1 -->

                            </div>

                            <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 8 && $element->image_type == 'image_5_2')
                            <div class="img-preview-5_2">
                                <img src="/assets_ebook/images/5.2.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">{{ $element->image_subheading }}
                                    </p>
                                </div>
                                <div class="box0_1">
                                    <p class="p0_1">{{ $element->image_heading }}
                                    </p>
                                </div>
                                <div class="box0_2">
                                    <p class="p0_2">{{ $element->image_subheading_2 }}
                                    </p>
                                </div>

                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_5_2_1">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>

                                <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_5_2_2">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>

                                <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_5_2_3">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>

                                <div class="box4" data-bs-toggle="modal" data-bs-target="#imgModal_5_2_4">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>

                                <div class="box5" data-bs-toggle="modal" data-bs-target="#imgModal_5_2_5">
                                    <p class="p5">{{ $element->image_text_5 }}
                                    </p>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
            <div class="modal modal-5_2_1 fade" id="imgModal_5_2_1" tabindex="-1"
            aria-labelledby="imgModal_5_2Label" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imgModal_5_2Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ $element->image_desc_1 }}
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
           </div>
            <!-- Modal 4 Option-2-1 -->
            <!-- Modal 4 Option-2-1 -->
            <div class="modal modal-5_2_2 fade" id="imgModal_5_2_2" tabindex="-1"
            aria-labelledby="imgModal_5_2Label" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imgModal_5_2Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ $element->image_desc_2 }}
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
           </div>
            <!-- Modal 4 Option-2-1 -->
             <!-- Modal 4 Option-2-1 -->
             <div class="modal modal-5_2_3 fade" id="imgModal_5_2_3" tabindex="-1"
             aria-labelledby="imgModal_5_3Label" aria-hidden="true">
             <div class="modal-dialog  modal-dialog-scrollable">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="imgModal_5_3Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                         <button type="button" class="btn-close light" data-bs-dismiss="modal"
                             aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        {{ $element->image_desc_3 }}
                     </div>
                     <div class="modal-footer">
                         <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                     </div>
                 </div>
             </div>
            </div>
             <!-- Modal 4 Option-2-1 -->
             <!-- Modal 4 Option-2-1 -->
            <div class="modal modal-5_2_4 fade" id="imgModal_5_2_4" tabindex="-1"
            aria-labelledby="imgModal_5_4Label" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imgModal_5_4Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ $element->image_desc_4 }}
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
           </div>
            <!-- Modal 4 Option-2-1 -->
             <!-- Modal 4 Option-2-1 -->
             <div class="modal modal-5_2_5 fade" id="imgModal_5_2_5" tabindex="-1"
             aria-labelledby="imgModal_5_5Label" aria-hidden="true">
             <div class="modal-dialog  modal-dialog-scrollable">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_5 }}</h5>
                         <button type="button" class="btn-close light" data-bs-dismiss="modal"
                             aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        {{ $element->image_desc_5 }}
                     </div>
                     <div class="modal-footer">
                         <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                     </div>
                 </div>
             </div>
            </div>
             <!-- Modal 4 Option-2-1 -->

                            </div>

                            <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 9 && $element->image_type == 'image_6_1')
                            <div class="img-preview-6_1">
                                <img src="/assets_ebook/images/6.1.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">{{ $element->image_heading }}
                                    </p>
                                </div>
                                <div class="box0_1">
                                    <p class="p0_1">{{ $element->image_subheading }}
                                    </p>
                                </div>
                                <div class="box0_2">
                                    <p class="p0_2">{{ $element->image_heading_2 }}
                                    </p>
                                </div>
                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_6_1_1">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>
                                <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_6_1_2">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>
                                <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_6_1_3">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>
                                <div class="box4" data-bs-toggle="modal" data-bs-target="#imgModal_6_1_4">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>
                                <div class="box5" data-bs-toggle="modal" data-bs-target="#imgModal_6_1_5">
                                    <p class="p5">{{ $element->image_text_5 }}
                                    </p>
                                </div>
                                <div class="box6" data-bs-toggle="modal" data-bs-target="#imgModal_6_1_6">
                                    <p class="p6">{{ $element->image_text_6 }}
                                    </p>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-6_1_1 fade" id="imgModal_6_1_1" tabindex="-1"
                        aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_1 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal 4 Option-2-1 -->
                        <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-6_1_2 fade" id="imgModal_6_1_2" tabindex="-1"
                        aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_2 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal 4 Option-2-1 -->
                        <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-6_1_3 fade" id="imgModal_6_1_3" tabindex="-1"
                        aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_3 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal 4 Option-2-1 -->
                        <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-6_1_4 fade" id="imgModal_6_1_4" tabindex="-1"
                        aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_4 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal 4 Option-2-1 -->
                        <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-6_1_5 fade" id="imgModal_6_1_5" tabindex="-1"
                        aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_5 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_5 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal 4 Option-2-1 -->
                        <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-6_1_6 fade" id="imgModal_6_1_6" tabindex="-1"
                        aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_6 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_6 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal 4 Option-2-1 -->
                            </div>

                            <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 9 && $element->image_type == 'image_6_2')
                            <div class="img-preview-6_2">
                                <img src="/assets_ebook/images/6.2.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">{{ $element->image_subheading }}
                                    </p>
                                </div>
                                <div class="box0_1">
                                    <p class="p0_1">{{ $element->image_heading }}
                                    </p>
                                </div>
                                <div class="box0_2">
                                    <p class="p0_2">{{ $element->image_heading_2 }}
                                    </p>
                                </div>
                                <div class="box1"  data-bs-toggle="modal" data-bs-target="#imgModal_6_2_1">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>
                                <div class="box2"  data-bs-toggle="modal" data-bs-target="#imgModal_6_2_2">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>
                                <div class="box3"  data-bs-toggle="modal" data-bs-target="#imgModal_6_2_3">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>
                                <div class="box4"  data-bs-toggle="modal" data-bs-target="#imgModal_6_2_4">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>
                                <div class="box5"  data-bs-toggle="modal" data-bs-target="#imgModal_6_2_5">
                                    <p class="p5">{{ $element->image_text_5 }}
                                    </p>
                                </div>
                                <div class="box6"  data-bs-toggle="modal" data-bs-target="#imgModal_6_2_6">
                                    <p class="p6">{{ $element->image_text_6 }}
                                    </p>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-6_2_1 fade" id="imgModal_6_2_1" tabindex="-1"
                        aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_1 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal 4 Option-2-1 -->
                        <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-6_2_2 fade" id="imgModal_6_2_2" tabindex="-1"
                        aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_2 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal 4 Option-2-1 -->
                        <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-6_2_3 fade" id="imgModal_6_2_3" tabindex="-1"
                        aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_3 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal 4 Option-2-1 -->
                        <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-6_2_4 fade" id="imgModal_6_2_4" tabindex="-1"
                        aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_4 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal 4 Option-2-1 -->
                        <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-6_2_5 fade" id="imgModal_6_2_5" tabindex="-1"
                        aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_5 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_5 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal 4 Option-2-1 -->
                        <!-- Modal 4 Option-2-1 -->
                        <div class="modal modal-6_2_6 fade" id="imgModal_6_2_6" tabindex="-1"
                        aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_6 }}</h5>
                                    <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $element->image_desc_6 }}
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Modal 4 Option-2-1 -->
                            </div>

                            <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 9 && $element->image_type == 'image_6_3')
                            <div class="img-preview-6_3">
                                <img src="/assets_ebook/images/6.3.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">{{ $element->image_heading }}
                                    </p>
                                </div>
                                <div class="box0_1">
                                    <p class="p0_1">VS
                                    </p>
                                </div>
                                <div class="box0_2">
                                    <p class="p0_2">{{ $element->image_heading_2 }}
                                    </p>
                                </div>
                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_6_3_1">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>
                                <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_6_3_2">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>
                                <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_6_3_3">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>
                                <div class="box4" data-bs-toggle="modal" data-bs-target="#imgModal_6_3_4">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>
                                <div class="box5" data-bs-toggle="modal" data-bs-target="#imgModal_6_3_5">
                                    <p class="p5">{{ $element->image_text_5 }}
                                    </p>
                                </div>
                                <div class="box6" data-bs-toggle="modal" data-bs-target="#imgModal_6_3_6">
                                    <p class="p6">{{ $element->image_text_6 }}
                                    </p>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-6_3_1 fade" id="imgModal_6_3_1" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_1 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-6_3_2 fade" id="imgModal_6_3_2" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_2 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-6_3_3 fade" id="imgModal_6_3_3" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_3 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-6_3_4 fade" id="imgModal_6_3_4" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_4 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-6_3_5 fade" id="imgModal_6_3_5" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_5 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_5 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-6_3_6 fade" id="imgModal_6_3_6" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_6 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_6 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                            </div>
                            @elseif($element->element_id == 10 && $element->image_type == 'image_7_1')
                            <div class="img-preview-7_1">
                                <img src="/assets_ebook/images/7.1.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">{{ $element->image_heading }}
                                    </p>
                                </div>
                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_7_1_1">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>
                                <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_7_1_2">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>
                                <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_7_1_3">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>
                                <div class="box4" data-bs-toggle="modal" data-bs-target="#imgModal_7_1_4">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>
                                <div class="box5" data-bs-toggle="modal" data-bs-target="#imgModal_7_1_5">
                                    <p class="p5">{{ $element->image_text_5 }}
                                    </p>
                                </div>
                                <div class="box6" data-bs-toggle="modal" data-bs-target="#imgModal_7_1_6">
                                    <p class="p6">{{ $element->image_text_6 }}
                                    </p>
                                </div>
                                <div class="box7" data-bs-toggle="modal" data-bs-target="#imgModal_7_1_7">
                                    <p class="p7">{{ $element->image_text_7 }}
                                    </p>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_1_1 fade" id="imgModal_7_1_1" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_1 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_1_2 fade" id="imgModal_7_1_2" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_2 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_1_3 fade" id="imgModal_7_1_3" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            L{{ $element->image_desc_3 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_1_4 fade" id="imgModal_7_1_4" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_4 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_1_5 fade" id="imgModal_7_1_5" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_5 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_5 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_1_6 fade" id="imgModal_7_1_6" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_6 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_6 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_1_7 fade" id="imgModal_7_1_7" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_7 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_7 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                            </div>
                            <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 10 && $element->image_type == 'image_7_2')
                            <div class="img-preview-7_2">
                                <img src="/assets_ebook/images/7.2.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">TEXT FILE FEATURES
                                    </p>
                                </div>
                                <div class="box1"  data-bs-toggle="modal" data-bs-target="#imgModal_7_2_1">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>
                                <div class="box2"  data-bs-toggle="modal" data-bs-target="#imgModal_7_2_2">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>
                                <div class="box3"  data-bs-toggle="modal" data-bs-target="#imgModal_7_2_3">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>
                                <div class="box4"  data-bs-toggle="modal" data-bs-target="#imgModal_7_2_4">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>
                                <div class="box5"  data-bs-toggle="modal" data-bs-target="#imgModal_7_2_5">
                                    <p class="p5">{{ $element->image_text_5 }}
                                    </p>
                                </div>
                                <div class="box6"  data-bs-toggle="modal" data-bs-target="#imgModal_7_2_6">
                                    <p class="p6">{{ $element->image_text_6 }}
                                    </p>
                                </div>
                                <div class="box7"  data-bs-toggle="modal" data-bs-target="#imgModal_7_2_7">
                                    <p class="p7">{{ $element->image_text_7 }}
                                    </p>
                                </div>

                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_2_1 fade" id="imgModal_7_2_1" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_1 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_2_2 fade" id="imgModal_7_2_2" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_2 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_2_3 fade" id="imgModal_7_2_3" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_3 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_2_4 fade" id="imgModal_7_2_4" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_4 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_2_5 fade" id="imgModal_7_2_5" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_5 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_5 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_2_6 fade" id="imgModal_7_2_6" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_6 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_6 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-7_2_7 fade" id="imgModal_7_2_7" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_7 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_7 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                            </div>
                            <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 11 && $element->image_type == 'image_8_1')
                            <div class="img-preview-8_1">
                                <img src="/assets_ebook/images/8.1.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">{{ $element->image_heading }}
                                    </p>
                                </div>
                                <div class="box0_1">
                                    <p class="p0_1">{{ $element->image_heading_2 }}
                                    </p>
                                </div>
                                <div class="box1"  data-bs-toggle="modal" data-bs-target="#imgModal_8_1_1">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>
                                <div class="box2"  data-bs-toggle="modal" data-bs-target="#imgModal_8_1_2">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>
                                <div class="box3"  data-bs-toggle="modal" data-bs-target="#imgModal_8_1_3">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>
                                <div class="box4"  data-bs-toggle="modal" data-bs-target="#imgModal_8_1_4">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>
                                <div class="box5"  data-bs-toggle="modal" data-bs-target="#imgModal_8_1_5">
                                    <p class="p5">{{ $element->image_text_5 }}
                                    </p>
                                </div>
                                <div class="box6"  data-bs-toggle="modal" data-bs-target="#imgModal_8_1_6">
                                    <p class="p6">{{ $element->image_text_6 }}
                                    </p>
                                </div>
                                <div class="box7"  data-bs-toggle="modal" data-bs-target="#imgModal_8_1_7">
                                    <p class="p7">{{ $element->image_text_7 }}
                                    </p>
                                </div>
                                <div class="box8"  data-bs-toggle="modal" data-bs-target="#imgModal_8_1_8">
                                    <p class="p8">{{ $element->image_text_8 }}
                                    </p>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_1_1 fade" id="imgModal_8_1_1" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_1 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_1_2 fade" id="imgModal_8_1_2" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_2 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_1_3 fade" id="imgModal_8_1_3" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_3 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_1_4 fade" id="imgModal_8_1_4" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_4 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_1_5 fade" id="imgModal_8_1_5" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_5 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_5 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_1_6 fade" id="imgModal_8_1_6" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_6 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_6 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_1_7 fade" id="imgModal_8_1_7" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_7 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_7 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_1_8 fade" id="imgModal_8_1_8" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_8 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_8 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                            </div>
                            <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 11 && $element->image_type == 'image_8_2')
                            <div class="img-preview-8_2">
                                <img src="/assets_ebook/images/8.2.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">{{ $element->image_heading }}
                                    </p>
                                </div>
                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_8_2_1">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>
                                <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_8_2_2">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>
                                <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_8_2_3">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>
                                <div class="box4" data-bs-toggle="modal" data-bs-target="#imgModal_8_2_4">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>
                                <div class="box5" data-bs-toggle="modal" data-bs-target="#imgModal_8_2_5">
                                    <p class="p5">{{ $element->image_text_5 }}
                                    </p>
                                </div>
                                <div class="box6" data-bs-toggle="modal" data-bs-target="#imgModal_8_2_6">
                                    <p class="p6">{{ $element->image_text_6 }}
                                    </p>
                                </div>
                                <div class="box7" data-bs-toggle="modal" data-bs-target="#imgModal_8_2_7">
                                    <p class="p7">{{ $element->image_text_7 }}
                                    </p>
                                </div>
                                <div class="box8" data-bs-toggle="modal" data-bs-target="#imgModal_8_2_8">
                                    <p class="p8">{{ $element->image_text_8 }}
                                    </p>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_2_1 fade" id="imgModal_8_2_1" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_1 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_2_2 fade" id="imgModal_8_2_2" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_2 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_2_3 fade" id="imgModal_8_2_3" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_3 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_2_4 fade" id="imgModal_8_2_4" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_4 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_2_5 fade" id="imgModal_8_2_5" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_5 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_5 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_2_6 fade" id="imgModal_8_2_6" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_6 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_6 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_2_7 fade" id="imgModal_8_2_7" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_7 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_7 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-8_2_8 fade" id="imgModal_8_2_8" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_8 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_8 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                            </div>
                            <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 13 && $element->image_type == 'image_10_1')
                            <div class="img-preview-10_1">
                                <img src="/assets_ebook/images/10.1.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">{{ $element->image_heading }}
                                    </p>
                                </div>
                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_10_1_1">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>
                                <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_10_1_2">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>
                                <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_10_1_3">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>
                                <div class="box4" data-bs-toggle="modal" data-bs-target="#imgModal_10_1_4">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>
                                <div class="box5" data-bs-toggle="modal" data-bs-target="#imgModal_10_1_5" >
                                    <p class="p5">{{ $element->image_text_5 }}
                                    </p>
                                </div>
                                <div class="box6" data-bs-toggle="modal" data-bs-target="#imgModal_10_1_6">
                                    <p class="p6">{{ $element->image_text_6 }}
                                    </p>
                                </div>
                                <div class="box7" data-bs-toggle="modal" data-bs-target="#imgModal_10_1_7">
                                    <p class="p7">{{ $element->image_text_7 }}
                                    </p>
                                </div>
                                <div class="box8" data-bs-toggle="modal" data-bs-target="#imgModal_10_1_8">
                                    <p class="p8">{{ $element->image_text_8 }}
                                    </p>
                                </div>
                                <div class="box9" data-bs-toggle="modal" data-bs-target="#imgModal_10_1_9">
                                    <p class="p9">{{ $element->image_text_9 }}
                                    </p>
                                </div>
                                <div class="box10" data-bs-toggle="modal" data-bs-target="#imgModal_10_1_10">
                                    <p class="p10">{{ $element->image_text_10 }}
                                    </p>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-10_1_1 fade" id="imgModal_10_1_1" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_1 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-10_1_2 fade" id="imgModal_10_1_2" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_2 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-10_1_3 fade" id="imgModal_10_1_3" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_3 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-10_1_4 fade" id="imgModal_10_1_4" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_4 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-10_1_5 fade" id="imgModal_10_1_5" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_5 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_5 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-10_1_6 fade" id="imgModal_10_1_6" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_6 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_6 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-10_1_7 fade" id="imgModal_10_1_7" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_7 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_7 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-10_1_8 fade" id="imgModal_10_1_8" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_8 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_8 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-10_1_9 fade" id="imgModal_10_1_9" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_9 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_9 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->
                                <!-- Modal 4 Option-2-1 -->
                                <div class="modal modal-10_1_10 fade" id="imgModal_10_1_10" tabindex="-1"
                                aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_10 }}</h5>
                                            <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $element->image_desc_10 }}
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Modal 4 Option-2-1 -->

                            </div>

                            <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 13 && $element->image_type == 'image_10_2')
                            <div class="img-preview-10_2">
                                <img src="/assets_ebook/images/10.2.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">DBMS COMPONENTS
                                    </p>
                                </div>
                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_10_2_1">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>
                                <div class="box2" data-bs-toggle="modal" data-bs-target="#imgModal_10_2_2">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>
                                <div class="box3" data-bs-toggle="modal" data-bs-target="#imgModal_10_2_3">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>
                                <div class="box4" data-bs-toggle="modal" data-bs-target="#imgModal_10_2_4">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>
                                <div class="box5" data-bs-toggle="modal" data-bs-target="#imgModal_10_2_5">
                                    <p class="p5">{{ $element->image_text_5 }}
                                    </p>
                                </div>
                                <div class="box6" data-bs-toggle="modal" data-bs-target="#imgModal_10_2_6">
                                    <p class="p6">{{ $element->image_text_6 }}
                                    </p>
                                </div>
                                <div class="box7" data-bs-toggle="modal" data-bs-target="#imgModal_10_2_7">
                                    <p class="p7">{{ $element->image_text_7 }}
                                    </p>
                                </div>
                                <div class="box8" data-bs-toggle="modal" data-bs-target="#imgModal_10_2_8">
                                    <p class="p8">{{ $element->image_text_8 }}
                                    </p>
                                </div>
                                <div class="box9" data-bs-toggle="modal" data-bs-target="#imgModal_10_2_9">
                                    <p class="p9">{{ $element->image_text_9 }}
                                    </p>
                                </div>
                                <div class="box10" data-bs-toggle="modal" data-bs-target="#imgModal_10_2_10">
                                    <p class="p10">{{ $element->image_text_10 }}
                                    </p>
                                </div>

                                <div class="box1_1">
                                    <p class="p1_1">01
                                    </p>
                                </div>
                                <div class="box2_1">
                                    <p class="p2_1">02
                                    </p>
                                </div>
                                <div class="box3_1">
                                    <p class="p3_1">03
                                    </p>
                                </div>
                                <div class="box4_1">
                                    <p class="p4_1">04
                                    </p>
                                </div>
                                <div class="box5_1">
                                    <p class="p5_1">05
                                    </p>
                                </div>
                                <div class="box6_1">
                                    <p class="p6_1">06
                                    </p>
                                </div>
                                <div class="box7_1">
                                    <p class="p7_1">07
                                    </p>
                                </div>
                                <div class="box8_1">
                                    <p class="p8_1">08
                                    </p>
                                </div>
                                <div class="box9_1">
                                    <p class="p9_1">09
                                    </p>
                                </div>
                                <div class="box10_1">
                                    <p class="p10_1">10
                                    </p>
                                </div>
                            </div>

                            <!-- Modal 10 Option-2-1 -->
                            <div class="modal modal-10_2_1 fade" id="imgModal_10_2_1" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_1 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-2-1 -->
                            <!-- Modal 10 Option-2-2 -->
                            <div class="modal modal-10_2_2 fade" id="imgModal_10_2_2" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_2 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-2-2 -->
                            <!-- Modal 10 Option-2-3 -->
                            <div class="modal modal-10_2_3 fade" id="imgModal_10_2_3" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_3 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-2-3 -->
                            <!-- Modal 10 Option-2-4 -->
                            <div class="modal modal-10_2_4 fade" id="imgModal_10_2_4" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_4 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-2-4 -->
                            <!-- Modal 10 Option-2-5 -->
                            <div class="modal modal-10_2_5 fade" id="imgModal_10_2_5" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_5 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_5 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-2-5 -->
                            <!-- Modal 10 Option-2-6 -->
                            <div class="modal modal-10_2_6 fade" id="imgModal_10_2_6" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_6 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_6 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-2-6 -->
                            <!-- Modal 10 Option-2-7 -->
                            <div class="modal modal-10_2_7 fade" id="imgModal_10_2_7" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_7 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_7 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-2-7 -->
                            <!-- Modal 10 Option-2-8 -->
                            <div class="modal modal-10_2_8 fade" id="imgModal_10_2_8" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_8 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_8 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-2-8 -->
                            <!-- Modal 10 Option-2-9 -->
                            <div class="modal modal-10_2_9 fade" id="imgModal_10_2_9" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_9 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_9 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-2-9 -->
                            <!-- Modal 10 Option-2-10 -->
                            <div class="modal modal-10_2_10 fade" id="imgModal_10_2_10" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_10 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_10 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-2-10 -->

                            <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 13 && $element->image_type == 'image_10_3')
                            <div class="img-preview-10_3">
                                <img src="/assets_ebook/images/10.3.png" alt="preview" class="introduction-img">

                                <div class="box0">
                                    <p class="p0">STANDARD FILE OPERATIONS
                                    </p>
                                </div>
                                <div class="box1" data-bs-toggle="modal" data-bs-target="#imgModal_10_3_1">
                                    <p class="p1">{{ $element->image_text_1 }}
                                    </p>
                                </div>
                                <div class="box2"data-bs-toggle="modal" data-bs-target="#imgModal_10_3_2">
                                    <p class="p2">{{ $element->image_text_2 }}
                                    </p>
                                </div>
                                <div class="box3"data-bs-toggle="modal" data-bs-target="#imgModal_10_3_3">
                                    <p class="p3">{{ $element->image_text_3 }}
                                    </p>
                                </div>
                                <div class="box4"data-bs-toggle="modal" data-bs-target="#imgModal_10_3_4">
                                    <p class="p4">{{ $element->image_text_4 }}
                                    </p>
                                </div>
                                <div class="box5"data-bs-toggle="modal" data-bs-target="#imgModal_10_3_5">
                                    <p class="p5">{{ $element->image_text_5 }}
                                    </p>
                                </div>
                                <div class="box6"data-bs-toggle="modal" data-bs-target="#imgModal_10_3_6">
                                    <p class="p6">{{ $element->image_text_6 }}
                                    </p>
                                </div>
                                <div class="box7"data-bs-toggle="modal" data-bs-target="#imgModal_10_3_7">
                                    <p class="p7">{{ $element->image_text_7 }}
                                    </p>
                                </div>
                                <div class="box8"data-bs-toggle="modal" data-bs-target="#imgModal_10_3_8">
                                    <p class="p8">{{ $element->image_text_8 }}
                                    </p>
                                </div>
                                <div class="box9"data-bs-toggle="modal" data-bs-target="#imgModal_10_3_9">
                                    <p class="p9">{{ $element->image_text_9 }}
                                    </p>
                                </div>
                                <div class="box10"data-bs-toggle="modal" data-bs-target="#imgModal_10_3_10">
                                    <p class="p10">{{ $element->image_text_10 }}
                                    </p>
                                </div>


                                <div class="box1_1">
                                    <p class="p1_1">01
                                    </p>
                                </div>
                                <div class="box2_1">
                                    <p class="p2_1">02
                                    </p>
                                </div>
                                <div class="box3_1">
                                    <p class="p3_1">03
                                    </p>
                                </div>
                                <div class="box4_1">
                                    <p class="p4_1">04
                                    </p>
                                </div>
                                <div class="box5_1">
                                    <p class="p5_1">05
                                    </p>
                                </div>
                                <div class="box6_1">
                                    <p class="p6_1">06
                                    </p>
                                </div>
                                <div class="box7_1">
                                    <p class="p7_1">07
                                    </p>
                                </div>
                                <div class="box8_1">
                                    <p class="p8_1">08
                                    </p>
                                </div>
                                <div class="box9_1">
                                    <p class="p9_1">09
                                    </p>
                                </div>
                                <div class="box10_1">
                                    <p class="p10_1">10
                                    </p>
                                </div>
                            </div>

                            <!-- Modal 10 Option-3-1 -->
                            <div class="modal modal-10_3_1 fade" id="imgModal_10_3_1" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_1 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_1 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-3-1 -->
                            <!-- Modal 10 Option-3-2 -->
                            <div class="modal modal-10_3_2 fade" id="imgModal_10_3_2" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_2 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_2 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-3-2 -->
                            <!-- Modal 10 Option-3-3 -->
                            <div class="modal modal-10_3_3 fade" id="imgModal_10_3_3" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_3 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_3 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-3-3 -->
                            <!-- Modal 10 Option-3-4 -->
                            <div class="modal modal-10_3_4 fade" id="imgModal_10_3_4" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_4 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_4 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-3-4 -->
                            <!-- Modal 10 Option-3-5 -->
                            <div class="modal modal-10_3_5 fade" id="imgModal_10_3_5" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_5 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_5 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-3-5 -->
                            <!-- Modal 10 Option-3-6 -->
                            <div class="modal modal-10_3_6 fade" id="imgModal_10_3_6" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_6 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_6 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-3-6 -->
                            <!-- Modal 10 Option-3-7 -->
                            <div class="modal modal-10_3_7 fade" id="imgModal_10_3_7" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_7 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_7 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-3-7 -->
                            <!-- Modal 10 Option-3-8 -->
                            <div class="modal modal-10_3_8 fade" id="imgModal_10_3_8" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_8 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_8 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-3-8 -->
                            <!-- Modal 10 Option-3-9 -->
                            <div class="modal modal-10_3_9 fade" id="imgModal_10_3_9" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_9 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_9 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-3-9 -->
                            <!-- Modal 10 Option-3-10 -->
                            <div class="modal modal-10_3_10 fade" id="imgModal_10_3_10" tabindex="-1"
                            aria-labelledby="imgModal_5_5Label" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imgModal_5_5Label" style="display: inline;">{{ $element->image_text_10 }}</h5>
                                        <button type="button" class="btn-close light" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $element->image_desc_10 }}
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Modal 10 Option-3-10 -->


                            {{-- lists --}}
                            @elseif($element->element_id == 14)
                            <h6 id="lists-link" class="pt-50 doc-sub-title">{{$element->list_heading}} <a href="#lists-link"><i
                                class="fas fa-hashtag"></i></a></h6>
                            <div class="doc-info">
                                @php
                                    $list_points = explode(',', $element->list_points);
                                @endphp
                                @if ($element->list_type == 'Bullet')
                                <ul class="list-unstyled list-icon list-bullet list-primary mb-25">
                                @foreach ($list_points as $points)
                                <li>{{$points}}</li>
                                @endforeach
                                </ul>

                                @elseif($element->list_type == 'Check')
                                <ul class="list-unstyled list-icon list-check list-success mb-25">
                                    @foreach ($list_points as $points)
                                    <li>{{$points}}</li>
                                    @endforeach
                                </ul>
                                @elseif($element->list_type == 'Arrow')
                                <ul class="list-unstyled list-icon list-arrow list-info mb-25">
                                    @foreach ($list_points as $points)
                                    <li>{{$points}}</li>
                                    @endforeach
                                </ul>
                                @elseif($element->list_type == 'Star')
                                <ul class="list-unstyled list-icon list-star list-warning">
                                    @foreach ($list_points as $points)
                                    <li>{{$points}}</li>
                                    @endforeach
                                </ul>

                                @endif
                            </div><!-- / doc-info -->
                            @elseif($element->element_id == 15)
                            <div class="doc-code">
                                <pre><code id="font-link" class="language-markup">{{ $element->content }}</code></pre>
                            </div><!-- / doc-code -->
                                <div class="spacer">&nbsp;</div>

                            @elseif($element->element_id == 17)
                            <div class="doc-info">
                                <table class="table">
                                    <thead>
                                        @php
                                            $table_data = json_decode($element->table_data, true);
                                            // Extract the data, columns, and rows from the decoded JSON
                                            $dataArray = $table_data['data'];
                                            $columns = $table_data['columns'];
                                            $rows = $table_data['rows'];
                                            $count =$columns;
                                        @endphp
                                        <tr>
                                            @for ($j = 0; $j < $columns; $j++)
                                            <th>{{$dataArray[$j]}}</th>

                                            @endfor

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @for ($i = 1; $i < $rows; $i++)
                                        <tr>
                                            @for ($j = 0; $j < $columns; $j++)
                                            <td>{{$dataArray[$count]}}</td>
                                            @php
                                                $count++;
                                            @endphp
                                            @endfor
                                        </tr>
                                        @endfor

                                    </tbody>
                                </table><!-- / table -->
                            </div><!-- / doc-info -->
                            @elseif($element->element_id == 18)
                            <div class="doc-info">
                                <img src="/{{ $element->image }}" class="img-thumbnail rounded-20" alt="Responsive image">
                            </div><!-- / doc-info -->
                            <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 19)
                            @php
                                $example_text = explode(',',$element->example_text);
                                $example_descriptions = explode(',',$element->example_description);
                                $practice_descriptions = explode(',',$element->practice_description);
                                $columnCount = count($practice_descriptions);
                                $columnSize =  12 / $columnCount; // Calculate the column size based on the count
                                // $centerClass = ($columnCount < 6) ? 'mx-auto' : ''; // Center-align when fewer than six columns
                            @endphp
                            <div class="doc-info">
                                <div class="row text-center">
                                    @if ($columnCount == 1)
                                        <div class="col-lg-6">
                                            <a href="#x" class="btn btn-primary pill">PROGRAMMING EXAMPLE</a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#x" class="btn btn-primary pill mt-2">PRACTICE</a>
                                        </div>
                                    @else
                                        @foreach ($practice_descriptions as $index =>$item)
                                        <div class="col-lg-{{ $columnSize }}">
                                            <a href="#x" class="btn btn-secondary pill text-black"><p>{{$example_text[$index]}}</p>PROGRAMMING EXAMPLE</a>
                                            <a href="#x" class="btn btn-secondary pill text-black mt-2">PRACTICE</a>
                                        </div>
                                        @endforeach
                                    @endif

                                </div>

                            </div>


                            <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 20)
                            @php
                                $example_descriptions = explode(',',$element->example_description);
                                $practice_descriptions = explode(',',$element->practice_description);
                                $columnCount = count($practice_descriptions);
                                // $columnSize =  12 / $columnCount; // Calculate the column size based on the count
                                // $centerClass = ($columnCount < 6) ? 'mx-auto' : ''; // Center-align when fewer than six columns
                            @endphp
                            <div class="doc-info">
                                <div class="row text-center justify-content-center">
                                    @if ($columnCount == 1)
                                        <div class="col-lg-6">
                                            <img src="/{{ $example_descriptions[0] }}" class="img-thumbnail rounded-20" alt="Responsive image">
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#x" class="btn btn-primary pill mt-2">PRACTICE</a>
                                        </div>
                                    @else
                                    @php
                                        $count = 0;
                                    @endphp
                                        @foreach ($example_descriptions as $item)
                                        <div class="col-lg-2 col-lg-offset-1">
                                            <img src="/{{ $example_descriptions[$count] }}" class="img-thumbnail rounded-20" alt="Responsive image">
                                            <a href="#x" class="btn btn-secondary pill text-black mt-2">PRACTICE</a>
                                        </div>
                                        @php
                                            $count++;
                                        @endphp
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 21)
                            @php
                                $example_image_text = explode(',',$element->example_image_text);
                                $example_descriptions = explode(',',$element->example_description);
                                $practice_descriptions = explode(',',$element->practice_description);
                                $columnCount = count($practice_descriptions);
                            @endphp
                            <div class="doc-info">
                                <div class="row text-center justify-content-center">
                                    @if ($columnCount == 1)
                                        <div class="col-lg-6">
                                            <img src="/{{ $example_descriptions[0] }}" class="img-thumbnail rounded-20" alt="Responsive image">
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#x" class="btn btn-primary pill mt-2">PRACTICE</a>
                                        </div>
                                    @else
                                    @php
                                        $count = 0;
                                    @endphp
                                        @foreach ($example_descriptions as $item)
                                        <div class="col-lg-2">
                                            <div class="bg-grey mb-2 rounded d-flex align-items-center justify-content-center" style="width: 100%; height:100px;">{{$example_image_text[$count]}}</div>
                                            <a href="#x" class="btn btn-secondary pill text-black" style="max-width: 100%; padding: 0; white-space: normal;">PROGRAMMING EXAMPLE</a>
                                            <a href="#x" class="btn btn-secondary pill text-black mt-2">PRACTICE</a>
                                        </div>
                                        @php
                                            $count++;
                                        @endphp
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 22)
                            @php
                            $button_texts = explode('#@#',$element->button_text);
                            $columnCount = count($button_texts);
                            @endphp
                            <div class="doc-info">
                                <div class="row text-center justify-content-center">
                                    @if ($columnCount == 1)
                                        <div class="col-lg-6">
                                            <div style="background-image: url('/assets_ebook/images/BOTTON.jpg'); background-repeat: no-repeat; background-size: contain; height: 4em; width: 100%; border-left: 0;">
                                                {{$item}}
                                            </div>
                                        </div>

                                    @else

                                            {{-- <div class="d-flex justify-content-evenly">
                                        @foreach ($button_texts as $item)
                                            <div class="col-lg-2">
                                                <div style="background: url('/assets_ebook/images/BOTTON.jpg') no-repeat center center; background-size: contain; height: 4em; width: 100%; border-left: 0; display: flex; justify-content: center; align-items: center;">
                                                    {{$item}}
                                                </div>
                                            </div>

                                        @endforeach
                                        </div> --}}

                                        @php
                                            $halfCount = ceil(count($button_texts) / 2); // Calculate half the number of elements
                                        @endphp
                                        <div class="d-flex justify-content-evenly">
                                            @foreach ($button_texts as $key => $item)
                                                @if ($key < $halfCount)
                                                    <div style="background: url('/assets_ebook/images/BOTTON.jpg') no-repeat center center; background-size: contain; height: 4em; width: 100%; border-left: 0; display: flex; justify-content: center; align-items: center; margin: 0px 10px">
                                                        {{$item}}
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="d-flex justify-content-evenly mt-2">
                                            @foreach ($button_texts as $key => $item)
                                                @if ($key >= $halfCount)
                                                    <div style="background: url('/assets_ebook/images/BOTTON.jpg') no-repeat center center; background-size: contain; height: 4em; width: 100%; border-left: 0; display: flex; justify-content: center; align-items: center; margin: 0px 10px">
                                                        {{$item}}
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif

                                </div>
                            </div>
                            @elseif($element->element_id == 23)
                            @php
                                $button_texts = explode('#@#',$element->button_text);
                                $columnCount = count($button_texts);
                            @endphp
                            <div class="doc-info">
                                <div class="row text-center justify-content-center">
                                    @if ($columnCount == 1)

                                    @else
                                    @php
                                        $count = 0;
                                    @endphp
                                        @foreach ($button_texts as $item)
                                        <div class="col-lg-2 ">
                                            <div class="bg-grey mb-2 rounded d-flex align-items-center justify-content-center" style="width: 100%; height:100px;">{{$item}}</div>
                                        </div>
                                        @php
                                            $count++;
                                        @endphp
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="spacer">&nbsp;</div>
                            @elseif($element->element_id == 24)
                            @if ($element->single_button_type == 1)
                            <div class="text-center">
                                <a href="#x" class="btn btn-primary pill mt-2">PRACTICE</a>
                            </div>
                            @elseif ($element->single_button_type == 2)
                            <div class="text-center">
                                <a href="#x" class="btn btn-primary pill mt-2">CLICK TO VIEW OUTPUT</a>
                            </div>
                            @endif

                            <div class="spacer">&nbsp;</div>
                            @endif
                        @endforeach
                    </div><!-- / doc-wrapper -->
                @endforeach




                <div class="spacer">&nbsp;</div>
            @endforeach
            {{-- ------------------------------------dynamic content----------------------------------------- --}}







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
