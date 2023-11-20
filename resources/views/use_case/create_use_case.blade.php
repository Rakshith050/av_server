
@include("inc_admin.header")

@php

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
                                <h2 class="fw-400 font-lg d-block">Create <b> Use Cases</b> </h2>
                                <div class="float-right">
                                    <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                        <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/project_reports">&nbsp; Use Cases</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active fw-500 text-black">&nbsp; Create Use Cases</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">


                            <form action="/admin/create_use_case" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Use Case Title</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Use Case Title" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Use Case Image</label>
                                            <input type="file" name="image" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label class="mont-font fw-600 font-xsss">Description</label>
                                        <textarea name="description" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Enter Description..." spellcheck="false" required></textarea>
                                    </div>
                                </div>



<br>
<hr><br>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                        <h4 class="font-xs mont-font fw-600">Add Module</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">

                                            <button style="float:right" type="button" id="add_section" class="btn btn-default btn-add bg-current text-white font-xsss">+ADD
                                            </button>

                                        </div>
                                    </div>
                                </div>

                                <div>
                                <table id="myTable" style="width:100%">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <tr id="section0" class="row">
                                            <td class="col-lg-6 mb-3">
                                                <div>
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Module title</label>
                                                        <input type="text" name="module_title[]" class="form-control" placeholder="Enter Module Title" required>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-lg-6 mb-3">
                                                <div>
                                                    <div class="form-group">
                                                        <label class="mont-font fw-600 font-xsss">Description</label>
                                                        <input type="text" name="module_desc[]" class="form-control" placeholder="Enter Module Description" required>

                                                        {{-- <textarea name="section_desc0" class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Write your message..." spellcheck="false"></textarea> --}}

                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr id="section1" class="row"></tr>
                                    </tbody>
                                </table>
                                <input id="no_of_rows" type="hidden" value="1" name="no_of_rows" >
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
            $('#section' + i).html("<td class='col-lg-6 mb-3'><label class='mont-font fw-600 font-xsss'>Module Title</label><input name='module_title[]' type='text' class='form-control' placeholder='Enter Module Title' required></td><td class='col-lg-6 mb-3'><label class='mont-font fw-600 font-xsss'>Description</label><input name='module_desc[]' type='text' class='form-control' placeholder='Enter Module Description' required></td>");

            $('#myTable').append('<tr class="row" id="section' + (i + 1) + '"></tr>');
            i++;


            $("#no_of_rows").val(i);
        });


    });


    </script>
</body>

</html>
