<?php session()->put('curnav', 'students'); ?>


<link href="/assets/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
@include('inc_admin.header')

@php

@endphp

<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc_admin.navbar')

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc_admin.topbar')


            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 d-flex justify-content-between">
                            <div>
                                <h2 class="fw-400 font-lg d-block">All <b> Students</b> </h2>
                            </div>
                            <div class="float-right">
                                <a href="/sub_admin/add_student"
                                    class="p-2  d-inline-block text-white fw-700 lh-30 rounded-lg  text-center font-xsssss ls-3 bg-current">Add
                                    student</a>
                            </div>
                        </div>

                        <div class="card-body p-lg-5 p-4 w-100 border-0 ">

                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl. No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">School</th>
                                        <th scope="col">Class</th>
                                        <th scope="col">Section</th>
                                        <th scope="col" class="text-dark">Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $index => $student)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->school->school_name;  }}</td>
                                            <td>{{ $student->class->class }}</td>
                                            <td>{{ $student->section_id == 1 ? "A" : "B" }}</td>
                                            <td><a href="/admin/student_profile/{{ $student->id }}"
                                                    class="btn bg-current text-center text-white font-xsss fw-600 p-2  rounded-lg d-inline-block border-0">View
                                                    </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content -->
        <div class="app-footer border-0 shadow-lg">
            <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default-follower.html" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i
                    class="feather-layout"></i></a>
            <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/50x50.png"
                    alt="user" class="w30 shadow-xss"></a>
        </div>

        <div class="app-header-search">
            <form class="search-form">
                <div class="form-group searchbox mb-0 border-0 p-1">
                    <input type="text" class="form-control border-0" placeholder="Search...">
                    <i class="input-icon">
                        <ion-icon name="search-outline" role="img" class="md hydrated"
                            aria-label="search outline"></ion-icon>
                    </i>
                    <a href="#" class="ml-1 mt-1 d-inline-block close searchbox-close">
                        <i class="ti-close font-xs"></i>
                    </a>
                </div>
            </form>
        </div>

    </div>





    @include('inc_admin.footer')

    {{-- <script src="/assets/dropzone/dropzone.js"></script>
    <script src="/assets/dropzone/dropzone-call.js"></script>
    <script src="/assets/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/datatables/plugins/bootstrap/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/datatables/export/dataTables.buttons.min.js"></script>
    <script src="/assets/datatables/export/buttons.flash.min.js"></script>
    <script src="/assets/datatables/export/jszip.min.js"></script>
    <script src="/assets/datatables/export/pdfmake.min.js"></script>
    <script src="/assets/datatables/export/vfs_fonts.js"></script>
    <script src="/assets/datatables/export/buttons.html5.min.js"></script>
    <script src="/assets/datatables/export/buttons.print.min.js"></script>
    <script src="/assets/table/table_data.js"></script> --}}




    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
    <script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">


    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script>
 $(document).ready(function() {
        $('#myTable').DataTable({
          dom: 'Bfrtip',
          buttons: [
            'excelHtml5',
            'pdfHtml5'
          ]
        });
      });

    </script>



</body>

</html>
