
@include("inc_admin.header")

@php
$ebook_section = $data['ebook_section'];
$ebook_module = $data['ebook_module'];
$ebook = $data['ebook'];
$elements = $data['element'];

@endphp
<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_admin.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_admin.topbar")


            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg justify-content-between">
                                <h2 class="fw-400 font-lg d-block">Add <b> Elements</b> </h2>
                                <div class="float-right">
                                    <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                        <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/all_ebooks">&nbsp; Ebook</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/view_modules/{{$ebook->id}}">&nbsp; Modules</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active fw-500 text-black">&nbsp; Add Elements</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">


                            <form action="/admin/add_elements/{{$ebook_section->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Ebook Title</label>
                                            <input type="text" name="" value="{{$ebook->title}}" class="form-control" placeholder="Enter Course Title" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Module Title</label>
                                            <input type="text" name="" value="{{$ebook_module->module_title}}" class="form-control" placeholder="Enter Course Title" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Section Title</label>
                                            <input type="text" name="section_title" value="{{$ebook_section->section_title}}" class="form-control" placeholder="Enter Section Title" readonly>
                                        </div>
                                    </div>
                                </div>



<br>
<hr><br>
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Elements</label>
                                            <select class="form-control" name="element_name" id="element-select">
                                                <option value="" selected disabled readonly>--select--</option>
                                                @foreach ($elements as $element)
                                                <option value="{{$element->id}}">{{$element->element_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div id="additional-field-container" class="row">

                                </div>

                                <div class="col-lg-12">
                                    <button style="float:right" type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">save</button>

                                </div>
                            </form>
                            </div>
                        </div>
                        <!-- <div class="card w-100 border-0 p-2"></div> -->
                    </div>
                </div>

            </div>
        </div>
        <!-- main content -->
        <div class="app-footer border-0 shadow-lg">
            <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default-follower.html" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>
            <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/60x60.png" alt="user" class="w30 shadow-xss"></a>
        </div>

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





    @include("inc_admin.footer")

    <script>
$(document).ready(function() {
        var i = 1;

        $("#add_section").click(function() {
            $('#section' + i).html("<td class='col-lg-6 mb-3'><div class='form-group'><label class='mont-font fw-600 font-xsss'>Section Title</label><input type='text' name='section_title[]' class='form-control' placeholder='Enter Section Title' required></div></td>");

            $('#myTable').append('<tr class="row" id="section' + (i + 1) + '"></tr>');
            i++;


            $("#no_of_rows").val(i);
        });


    });


    </script>
    <script>
        $(document).ready(function() {
            $('#element-select').change(function() {
                var selectedElementId = $(this).val();
                var selectedElementName = $(this).find(':selected').text();

                // Check if a specific option is selected (change the condition as needed)
                if (selectedElementId == 1) {
                    // heading
                    // Create and display the additional input field
                    var additionalField = '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="content">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading Type</label>' +
                                                    '<select class="form-control" name="heading_type" id="heading_type">'+
                                                    '<option value="" selected disabled readonly>--select--</option>'+
                                                    '<option value="1">Type-1</option>'+
                                                    '<option value="2">Type 2</option>'+
                                                    '</select>' +
                                                '</div>'+
                                            '</div>';

                } else if (selectedElementId == 4){
                    // single image
                    // Clear the additional field container
                    // $('#additional-field-container').empty();
                    var additionalField = '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Image</label>' +
                                                '<input type="file" class="form-control" name="image">' +
                                             '</div>'+
                                            '</div>';

                } else if (selectedElementId == 2){
                    // paragraph

                    var additionalField = '<div class="col-lg-12 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Paragraph</label>' +
                                                '<textarea name="content" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false" id="abc_editor"></textarea>' +
                                             '</div>'+
                                          '</div>';
                }else if (selectedElementId == 3){
                    // code with output and memry allocation

                    // Clear the additional field container
                    // $('#additional-field-container').empty();
                    var additionalField = '<div class="col-lg-12 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Code</label>' +
                                                '<textarea name="code" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Code..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                          '</div>'+
                                          '<div class="col-lg-12 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Memoey Allocation</label>' +
                                                '<input type="file" class="form-control" name="memory">' +
                                             '</div>'+
                                          '</div>'+
                                          '<div class="col-lg-12 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Output</label>' +
                                                '<textarea name="output" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Code Output..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                          '</div>';

                }else if (selectedElementId == 5){
                    // image-2
                    var additionalField = '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Image Type</label>' +
                                                '<select class="form-control" name="image_type" id="image_type_2">'+
                                                '<option value="" selected disabled readonly>--select--</option>'+
                                                '<option value="image_2_1">Type-1</option>'+
                                                '<option value="image_2_2">Type-2</option>'+
                                                '<option value="image_2_3">Type-3</option>'+
                                                '<option value="image_2_4">Type-4</option>'+
                                                '</select>' +
                                             '</div>'+
                                            '</div>';

                                    // in the type-3 only there is heading in the image center
                            $(document).on('change', '#image_type_2', function() {
        var selectedValue = $(this).val();
        if (selectedValue === 'image_2_3') {
            var additionalCode = '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading" id="image_heading_2">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                                `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/2.3.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/2.3.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                '</a>'+
                                             '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Output</label>' +
                                                '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        } else {
            if (selectedValue === 'image_2_1') {
                image_link = '/assets_ebook/images/2.1.png';
            }else if (selectedValue === 'image_2_2'){
                image_link = '/assets_ebook/images/2.2.png';
            }else if (selectedValue === 'image_2_4'){
                image_link = '/assets_ebook/images/2.3.png';
            }
            var additionalCode = '<div class="col-lg-4 mb-3">' +
                                        `<a href="javascript:void(0);" onclick="window.open(${image_link}, '_blank', 'width=800,height=600');">`+
                                                        '<img src="' + image_link + '" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                '</a>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +

                                             '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Output</label>' +
                                                '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>';
                    $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code

            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));

        }
    });


                }else if (selectedElementId == 6){
                    // image-3

                    var additionalField = '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Image Type</label>' +
                                                '<select class="form-control" name="image_type" id="image_type">'+
                                                '<option value="" selected disabled readonly>--select--</option>'+
                                                '<option value="image_3_1">Type-1</option>'+
                                                '<option value="image_3_2">Type-2</option>'+
                                                '</select>' +
                                             '</div>'+
                                            '</div>';
                                            $(document).on('change', '#image_type', function() {
        var selectedValue = $(this).val();
        if (selectedValue === 'image_3_1') {
            var additionalCode =  '<div class="col-lg-4 mb-3">' +
                                                `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/3.1.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/3.1.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                '</a>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +

                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                              '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Sub Heading(Smaller)</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="image_subheading">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +

                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        } else {

            var additionalCode =  '<div class="col-lg-4 mb-3">' +
                                                `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/3.2.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/3.2.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                '</a>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +

                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Sub Heading(Smaller)</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="image_subheading">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +

                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Sub Text-1(smaller)</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_subtext_1">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Sub Text-2(smaller)</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_subtext_2">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Sub Text-3(smaller)</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_subtext_3">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>';
                    $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code

            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));

        }
    });



                }else if (selectedElementId == 7){
                    // image-4

                    var additionalField = '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Image Type</label>' +
                                                '<select class="form-control" name="image_type" id="image_type">'+
                                                '<option value="" selected disabled readonly>--select--</option>'+
                                                '<option value="image_4_1">Type-1</option>'+
                                                '<option value="image_4_2">Type-2</option>'+
                                                '<option value="image_4_3">Type-3</option>'+
                                                '</select>' +
                                            '</div>'+
                                            '</div>';
                                            $(document).on('change', '#image_type', function() {
        var selectedValue = $(this).val();
        if (selectedValue === 'image_4_1') {
            var additionalCode =  '<div class="col-lg-4 mb-3">' +
                                                `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/4.1.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/4.1.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                '</a>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +

                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Sub Heading(Smaller)</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="image_subheading">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +

                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Sub Text-1(smaller)</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_subtext_1">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Sub Text-2(smaller)</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_subtext_2">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Sub Text-3(smaller)</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_subtext_3">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Sub Text-4(smaller)</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_subtext_4">' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        } else if (selectedValue === 'image_4_2') {

            var additionalCode =  '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                                `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/4.2.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/4.2.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                '</a>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>';
                    $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code

            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));

        }else if (selectedValue === 'image_4_3') {

var additionalCode =  '<div class="col-lg-4 mb-3">' +
                                    `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/4.3.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/4.3.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                '</a>'+
                                    '</div>'+
                                    '<div class="col-lg-4 mb-3">' +

                                    '</div>'+
                                    '<div class="col-lg-4 mb-3">' +
                                '<div class="form-group">' +
                                    '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                '</div>'+
                                '</div>'+
                                '<div class="col-lg-4 mb-3">' +
                                 '<div class="form-group">' +
                                    '<label class="mont-font fw-600 font-xsss">Sub Heading(Smaller)</label>' +
                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_subheading">' +
                                 '</div>'+
                                '</div>'+
                                '<div class="col-lg-4 mb-3">' +

                                '</div>'+
                                '<div class="col-lg-4 mb-3">' +
                                '<div class="form-group">' +
                                    '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                '</div>'+
                                '</div>'+
                                '<div class="col-lg-8 mb-3">' +
                                 '<div class="form-group">' +
                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                    '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                 '</div>'+
                                '</div>'+
                                '<div class="col-lg-4 mb-3">' +
                                '<div class="form-group">' +
                                    '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                '</div>'+
                                '</div>'+
                                '<div class="col-lg-8 mb-3">' +
                                 '<div class="form-group">' +
                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                    '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                 '</div>'+
                                '</div>'+
                                '<div class="col-lg-4 mb-3">' +
                                '<div class="form-group">' +
                                    '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                '</div>'+
                                '</div>'+
                                '<div class="col-lg-8 mb-3">' +
                                 '<div class="form-group">' +
                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                    '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                 '</div>'+
                                '</div>'+
                                '<div class="col-lg-4 mb-3">' +
                                '<div class="form-group">' +
                                    '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                '</div>'+
                                '</div>'+
                                '<div class="col-lg-8 mb-3">' +
                                 '<div class="form-group">' +
                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                    '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                 '</div>'+
                                '</div>';
        $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code

$(additionalCode).insertAfter($(this).closest('.col-lg-4'));

}
    });



                }else if (selectedElementId == 8){
                    // image-5

                    var additionalField = '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Image Type</label>' +
                                                '<select class="form-control" name="image_type" id="image_type">'+
                                                '<option value="" selected disabled readonly>--select--</option>'+
                                                '<option value="image_5_1">Type-1</option>'+
                                                '<option value="image_5_2">Type-2</option>'+
                                                '</select>' +
                                            '</div>'+
                                            '</div>';
                                            $(document).on('change', '#image_type', function() {
        var selectedValue = $(this).val();
        if (selectedValue === 'image_5_2') {
            var additionalCode =  '<div class="col-lg-4 mb-3">' +

                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                                `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/5.2.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/5.2.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                '</a>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Sub Heading 1</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="image_subheading">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Sub Heading 2</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="image_subheading_2">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-5</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_5">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_5" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        }else if (selectedValue === 'image_5_1') {
            var additionalCode =  '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                                `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/5.1.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/5.1.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                '</a>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text-5</label>' +
                                                '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_5">' +
                                            '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-8 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                '<textarea name="image_desc_5" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                            '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        }
    });

                    }else if (selectedElementId == 9){
                        // image-6

                        var additionalField = '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Image Type</label>' +
                                                    '<select class="form-control" name="image_type" id="image_type">'+
                                                    '<option value="" selected disabled readonly>--select--</option>'+
                                                    '<option value="image_6_1">Type-1</option>'+
                                                    '<option value="image_6_2">Type-2</option>'+
                                                    '<option value="image_6_3">Type-3</option>'+
                                                    '</select>' +
                                                '</div>'+
                                                '</div>';
                                                $(document).on('change', '#image_type', function() {
        var selectedValue = $(this).val();
        if (selectedValue === 'image_6_1') {
            var additionalCode =
                                                '<div class="col-lg-4 mb-3">' +

                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                    `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/6.1.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/6.1.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                    '</a>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Sub Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_subheading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading 2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-5</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_5">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_5" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-6</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_6">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_6" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        }else if (selectedValue === 'image_6_2') {
            var additionalCode =
                                                '<div class="col-lg-4 mb-3">' +

                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                    `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/6.2.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/6.2.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                    '</a>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Sub Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_subheading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Sub Heading 2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_subheading_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-5</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_5">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_5" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-6</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_6">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_6" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        }else if (selectedValue === 'image_6_3') {
            var additionalCode =
                                                '<div class="col-lg-4 mb-3">' +

                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                    `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/6.3.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/6.3.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                    '</a>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading 2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +

                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-5</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_5">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_5" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-6</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_6">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_6" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        }
    });

                    }else if (selectedElementId == 10){
                        // image-7

                        var additionalField = '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Image Type</label>' +
                                                    '<select class="form-control" name="image_type" id="image_type">'+
                                                    '<option value="" selected disabled readonly>--select--</option>'+
                                                    '<option value="image_7_1">Type-1</option>'+
                                                    '<option value="image_7_2">Type-2</option>'+
                                                    '</select>' +
                                                '</div>'+
                                                '</div>';
                                                $(document).on('change', '#image_type', function() {
        var selectedValue = $(this).val();
        if (selectedValue === 'image_7_1') {
            var additionalCode = '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                    `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/7.1.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/7.1.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                    '</a>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-5</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_5">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_5" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-6</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_6">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_6" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-7</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_7">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_7" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        }else if (selectedValue === 'image_7_2') {
            var additionalCode = '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                    `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/7.2.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/7.2.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                    '</a>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-5</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_5">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_5" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-6</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_6">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_6" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-7</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_7">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_7" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        }
    });


                    }else if (selectedElementId == 11){
                        // image-8

                        var additionalField = '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Image Type</label>' +
                                                    '<select class="form-control" name="image_type" id="image_type">'+
                                                    '<option value="" selected disabled readonly>--select--</option>'+
                                                    '<option value="image_8_1">Type-1</option>'+
                                                    '<option value="image_8_2">Type-2</option>'+
                                                    '</select>' +
                                                '</div>'+
                                                '</div>';
                                                $(document).on('change', '#image_type', function() {
        var selectedValue = $(this).val();
        if (selectedValue === 'image_8_1') {
            var additionalCode = '<div class="col-lg-4 mb-3">' +

                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                    `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/8.1.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/8.1.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                    '</a>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading 2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +

                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-5</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_5">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_5" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-6</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_6">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_6" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-7</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_7">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_7" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-8</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_8">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_8" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        }else if (selectedValue === 'image_8_2') {
            var additionalCode = '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                    `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/8.2.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/8.2.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                    '</a>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-5</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_5">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_5" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-6</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_6">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_6" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-7</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_7">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_7" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-8</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_8">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_8" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        }
    });

                    }else if (selectedElementId == 13){
                        // image-10

                        var additionalField = '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Image Type</label>' +
                                                    '<select class="form-control" name="image_type" id="image_type">'+
                                                    '<option value="" selected disabled readonly>--select--</option>'+
                                                    '<option value="image_10_1">Type-1</option>'+
                                                    '<option value="image_10_2">Type-2</option>'+
                                                    '<option value="image_10_3">Type-3</option>'+

                                                    '</select>' +
                                                '</div>'+
                                                '</div>';
                                                $(document).on('change', '#image_type', function() {
        var selectedValue = $(this).val();
        if (selectedValue === 'image_10_1') {
            var additionalCode =  '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                    `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/10.1.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/10.1.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                    '</a>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-5</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_5">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_5" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-6</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_6">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_6" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-7</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_7">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_7" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-8</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_8">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_8" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-9</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_9">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_9" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-10</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_10">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_10" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        }else if (selectedValue === 'image_10_2') {
            var additionalCode =  '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                    `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/10.2.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/10.2.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                    '</a>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-5</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_5">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_5" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-6</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_6">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_6" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-7</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_7">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_7" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-8</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_8">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_8" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-9</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_9">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_9" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-10</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_10">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_10" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        }else if (selectedValue === 'image_10_3') {
            var additionalCode =  '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="image_heading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                    `<a href="javascript:void(0);" onclick="window.open('/assets_ebook/images/10.3.png', '_blank', 'width=800,height=600');">`+
                                                        '<img src="/assets_ebook/images/10.3.png" alt="photo1" style="height: 100px; max-width: 100%;">'+
                                                    '</a>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-1</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_1">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_1" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-2</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_2">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_2" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-3</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_3">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_3" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-4</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_4">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_4" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-5</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_5">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_5" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-6</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_6">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_6" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-7</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_7">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_7" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-8</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_8">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_8" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-9</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_9">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_9" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Text-10</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Text" name="image_text_10">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-8 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Description</label>' +
                                                    '<textarea name="image_desc_10" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                                '</div>'+
                                                '</div>';
                $(this).closest('.col-lg-4').nextAll('.col-lg-4, .col-lg-8').remove(); // Remove the existing additional code
            $(additionalCode).insertAfter($(this).closest('.col-lg-4'));
        }
    });

                    }else if (selectedElementId == 14){
                        // list
                        var additionalField = '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">List Type</label>' +
                                                    '<select class="form-control" name="list_type" id="list_type">'+
                                                    '<option value="" selected disabled readonly>--select--</option>'+
                                                    '<option value="Bullet">Bullet</option>'+
                                                    '<option value="Check">Check</option>'+
                                                    '<option value="Arrow">Arrow</option>'+
                                                    '<option value="Star">Star</option>'+
                                                    '</select>' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Heading</label>' +
                                                    '<input type="text" class="form-control" placeholder="Enter Heading" name="list_heading">' +
                                                '</div>'+
                                                '</div>'+
                                                '<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<button style="float:right" type="button" id="add_input" class="btn btn-default btn-add bg-current text-white font-xsss">+ADD POINTS'
                                                    '</button>'+
                                                '</div>'+
                                                '</div>';

                            $(document).on('click', '#add_input', function() {
                    var htmlCode = '<div class="col-lg-4 mb-3">' +
                                        '<div class="form-group">' +
                                        '<label class="mont-font fw-600 font-xsss">Points</label>' +
                                        '<input type="text" class="form-control" placeholder="Enter Points" name="list_points[]">' +
                                        '</div>' +
                                    '</div>';

                    $(htmlCode).insertAfter('.col-lg-4.mb-3:last');
                    });


                    }else if (selectedElementId == 15){
                        // eaxamples--any code or text with in a box

                    var additionalField = '<div class="col-lg-12 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Content</label>' +
                                                '<textarea name="content" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                            '</div>'+
                                        '</div>';

                    }else if (selectedElementId == 17){
                        // table

                    var additionalField = '<div class="col-lg-6 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">No of Columns</label>' +
                                                '<input type="text" class="form-control" id="columns" placeholder="Enter Columns" name="columns">' +
                                            '</div>'+
                                        '</div>'+
                                        '<div class="col-lg-6 mb-3" id="row_input">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">No of Rows (1st row is for column headings)</label>' +
                                                '<input type="text" class="form-control" id="rows" placeholder="Enter Rows" name="rows">' +
                                            '</div>'+
                                        '</div>';

                                  // Add an event listener for the 'input' event on the 'columns' input field
                            $(document).on('input', '#columns', function () {
                                var columns = parseInt($(this).val());
                                var rows = parseInt($('#rows').val());
                                var columnSizeClass = 'col-lg-' + (12 / columns);
                                var htmlCode = '';
                                for (var i = 0; i < rows; i++) {
                                    for (var j = 0; j < columns; j++) {
                                        htmlCode += '<div class="' + columnSizeClass + ' mb-3">' +
                                            '<div class="form-group">' +
                                            '<label class="mont-font fw-600 font-xsss">Data</label>' +
                                            '<input type="text" class="form-control" placeholder="Enter data" name="data[]">' +
                                            '</div>' +
                                            '</div>';
                                    }
                                }
                                // $(this).closest('.col-lg-6').nextAll('.col-lg-*').remove(); // Remove the existing additional code
                                // $('#additionalField').children().remove();
                                // $(htmlCode).insertAfter('.col-lg-6.mb-3:last');
                                // $('#additionalField').html(htmlCode);
                                $(('#row_input')).closest('#row_input').nextAll().remove(); // Remove the existing additional code
                                $(htmlCode).insertAfter('#row_input');
                            });
                            $(document).on('input', '#rows', function () {
                                var columns = parseInt($('#columns').val());
                                var rows = parseInt($('#rows').val());
                                var columnSizeClass = 'col-lg-' + (12 / columns);
                                var htmlCode = '';
                                for (var i = 0; i < rows; i++) {
                                    for (var j = 0; j < columns; j++) {
                                        htmlCode += '<div class="' + columnSizeClass + ' mb-3">' +
                                            '<div class="form-group">' +
                                            '<label class="mont-font fw-600 font-xsss">Data</label>' +
                                            '<input type="text" class="form-control" placeholder="Enter data" name="data[]">' +
                                            '</div>' +
                                            '</div>';
                                    }
                                }
                                $(this).closest('#row_input').nextAll().remove(); // Remove the existing additional code
                                // $('#additionalField').children().remove();
                                $(htmlCode).insertAfter('#row_input');
                                // $('#additionalField').html(htmlCode);
                            });

                    }else if (selectedElementId == 18){
                        // gif file
                        var additionalField = '<div class="col-lg-4 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Gif file</label>' +
                                                '<input type="file" class="form-control" id="" placeholder="" name="gif_file">' +
                                            '</div>'+
                                        '</div>';
                    }else if (selectedElementId == 19){
                        // gif file
                        var additionalField ='<div class="col-lg-6 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">No of Examples</label>' +
                                                '<input type="text" class="form-control" id="example_count" placeholder="Enter Count" name="example_count">' +
                                            '</div>'+
                                        '</div>'+
                                        '<div class="col-lg-6 mb-3" id="example_count_div">' +
                                        '</div>';

                            $(document).on('input', '#example_count', function () {
                                var columns = parseInt($(this).val());
                                // var columnSizeClass = 'col-lg-' + (12 / columns);
                                var htmlCode = '';
                                for (var j = 0; j < columns; j++) {
                                    htmlCode += '<div class="col-lg-4 mb-3">' +
                                        '<div class="form-group">' +
                                        '<label class="mont-font fw-600 font-xsss">Text for Example button(optional)</label>' +
                                        '<input type="text" class="form-control" placeholder="Enter data" name="example_text[]">' +
                                        '</div>' +
                                        '</div>'+
                                        '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description for Example button</label>' +
                                                '<textarea name="example_description[]" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                          '</div>'+
                                          '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description for practice</label>' +
                                                '<textarea name="practice_description[]" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                          '</div>';
                                }
                                $(('#example_count_div')).closest('#example_count_div').nextAll().remove(); // Remove the existing additional code
                                $(htmlCode).insertAfter('#example_count_div');
                            });
                    }else if (selectedElementId == 20){
                        // gif file
                        var additionalField ='<div class="col-lg-6 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">No of Examples</label>' +
                                                '<input type="text" class="form-control" id="example_count" placeholder="Enter Count" name="example_count">' +
                                            '</div>'+
                                        '</div>'+
                                        '<div class="col-lg-6 mb-3" id="example_count_div">' +
                                        '</div>';

                            $(document).on('input', '#example_count', function () {
                                var columns = parseInt($(this).val());
                                // var columnSizeClass = 'col-lg-' + (12 / columns);
                                var htmlCode = '';
                                for (var j = 0; j < columns; j++) {
                                    htmlCode += '<div class="col-lg-6 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">GIF file</label>' +
                                                '<input type="file" class="form-control" id="" placeholder="" name="example_gif[]">' +
                                             '</div>'+
                                          '</div>'+
                                          '<div class="col-lg-6 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description for practice</label>' +
                                                '<textarea name="practice_description[]" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                          '</div>';
                                }
                                $(('#example_count_div')).closest('#example_count_div').nextAll().remove(); // Remove the existing additional code
                                $(htmlCode).insertAfter('#example_count_div');
                            });
                    }else if (selectedElementId == 21){
                        // gif file
                        var additionalField ='<div class="col-lg-6 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">No of Examples</label>' +
                                                '<input type="text" class="form-control" id="example_count" placeholder="Enter Count" name="example_count">' +
                                            '</div>'+
                                        '</div>'+
                                        '<div class="col-lg-6 mb-3" id="example_count_div">' +
                                        '</div>';

                            $(document).on('input', '#example_count', function () {
                                var columns = parseInt($(this).val());
                                // var columnSizeClass = 'col-lg-' + (12 / columns);
                                var htmlCode = '';
                                for (var j = 0; j < columns; j++) {
                                    htmlCode += '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Text on the image</label>' +
                                                '<input type="text" class="form-control" id="" placeholder="" name="example_image_text[]">' +
                                             '</div>'+
                                          '</div>'+
                                          '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description for programming example</label>' +
                                                '<textarea name="example_description[]" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                          '</div>'+
                                          '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Description for practice</label>' +
                                                '<textarea name="practice_description[]" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false"></textarea>' +
                                             '</div>'+
                                          '</div>';
                                }
                                $(('#example_count_div')).closest('#example_count_div').nextAll().remove(); // Remove the existing additional code
                                $(htmlCode).insertAfter('#example_count_div');
                            });
                    }else if (selectedElementId == 22){
                        var additionalField ='<div class="col-lg-6 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">No of Button</label>' +
                                                '<input type="text" class="form-control" id="button_count" placeholder="Enter Count" name="button_count">' +
                                            '</div>'+
                                        '</div>'+
                                        '<div class="col-lg-6 mb-3" id="button_count_div">' +
                                        '</div>';
                            $(document).on('input', '#button_count', function () {
                                var columns = parseInt($(this).val());
                                // var columnSizeClass = 'col-lg-' + (12 / columns);
                                var htmlCode = '';
                                for (var j = 0; j < columns; j++) {
                                    htmlCode +=  '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Content for button</label>' +
                                                '<input type="text" class="form-control" id="" placeholder="Enter Description" name="button_text[]">' +
                                             '</div>'+
                                          '</div>';
                                }
                                $(('#button_count_div')).closest('#button_count_div').nextAll().remove(); // Remove the existing additional code
                                $(htmlCode).insertAfter('#button_count_div');
                            });
                    }
                    else if (selectedElementId == 23){
                        var additionalField ='<div class="col-lg-6 mb-3">' +
                                            '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">No of Text Box</label>' +
                                                '<input type="text" class="form-control" id="button_count" placeholder="Enter Count" name="button_count">' +
                                            '</div>'+
                                        '</div>'+
                                        '<div class="col-lg-6 mb-3" id="button_count_div">' +
                                        '</div>';
                            $(document).on('input', '#button_count', function () {
                                var columns = parseInt($(this).val());
                                // var columnSizeClass = 'col-lg-' + (12 / columns);
                                var htmlCode = '';
                                for (var j = 0; j < columns; j++) {
                                    htmlCode +=  '<div class="col-lg-4 mb-3">' +
                                             '<div class="form-group">' +
                                                '<label class="mont-font fw-600 font-xsss">Content for Text Box</label>' +
                                                '<input type="text" class="form-control" id="" placeholder="Enter Description" name="button_text[]">' +
                                             '</div>'+
                                          '</div>';
                                }
                                $(('#button_count_div')).closest('#button_count_div').nextAll().remove(); // Remove the existing additional code
                                $(htmlCode).insertAfter('#button_count_div');
                            });
                    }else if (selectedElementId == 24){
                        var additionalField ='<div class="col-lg-4 mb-3">' +
                                                '<div class="form-group">' +
                                                    '<label class="mont-font fw-600 font-xsss">Button Type</label>' +
                                                    '<select class="form-control" name="single_button_type" id="single_button_type">'+
                                                    '<option value="" selected disabled readonly>--select--</option>'+
                                                    '<option value="1">Practice</option>'+
                                                    '<option value="2">Click To View Output</option>'+
                                                    '</select>' +
                                                '</div>'+
                                                '</div>';
                    }
                $('#additional-field-container').html(additionalField);
                // initializeCKEditor('abc_editor');
            });



        });
    </script>


{{-- text editor --}}
{{-- <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML" async>
</script>
<script src="https://cdn.ckeditor.com/4.16.0/full-all/ckeditor.js"></script>

<script>
    function initializeCKEditor(textareaId) {
    CKEDITOR.replace(textareaId, {
        extraPlugins: 'mathjax',
        mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_HTML',
        height: 150
    });

    if (CKEDITOR.env.ie && CKEDITOR.env.version == 8) {
        document.getElementById('ie8-warning').className = 'tip alert';
    }
}
</script> --}}

</body>

</html>
