<?php session()->put('curnav','forum'); ?>
@include('inc_aprex.header')
<style>
    /* .result {
        max-height: 200px;
        position: absolute;
        z-index: 20;
        top: -10px;
    }
    .result p{
        padding-left: 30px;
        font-weight: 500;
    } */
    /* #search-button{
        font-size: 10px !important;
    } */
    .result {
        top: -115px;
    }
    .result p{
        padding-left: 30px;
        font-weight: 500;
    }
</style>

<body class="color-theme-orange mont-font">

    {{-- <div class="preloader"></div> --}}

    <div class="main-wrapper">

        <!-- navigation -->
        @include('inc_aprex.navbar')

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include('inc_aprex.topbar')

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    {{-- search bar --}}
                    <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                        <div class="form-group p-3 border-light border p-2 bg-white rounded-lg" style="margin-bottom: 0;">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group icon-input mb-0 search-box">
                                        <i class="ti-search font-xs text-grey-400"></i>
                                        <input type="text"
                                            class="style1-input bg-transparent border-0 pl-5 font-xsss mb-0 text-grey-500 fw-500"
                                            placeholder="Search questions..">


                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <a href="" id="search-button" class="w-100 d-block btn bg-current text-white font-xssss fw-600 ls-3 style1-input p-0 border-0 text-uppercase ">Search</a>
                                </div>
                               
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-5">
                                <div class="result scroll-bar card w-100 border-0 bg-white shadow-xs p-0"
                                    ></div>
                            </div>
                        </div>
                    </div>


                    <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">

                        <div class="card-body p-4 w-100 border-0 d-flex rounded-lg">
                            <h2 class="fw-400 font-lg d-block">Ask <b> Question</b> </h2>
                        </div>

                        <div class="card-body p-lg-5 p-4 w-100 border-0 ">


                            <form action="/aprex/create_forum" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-6">

                                    <div class="col-lg-12">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <label class="mont-font fw-600 font-xsss">Question</label><br>
                                            <textarea rows="4" cols="70" class="form-control" name="question" placeholder="Enter Question.." required></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <button type="submit" class="btn bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block border-0">Submit</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                    {{--  --}}

                    {{-- <div class="mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="float-right">
                                <a href="/add_forum" class="btn btn-info float-right mt-2 mr-2 bg-current" style="border: 0;"><i class="fa-solid fa-plus fa-xl"></i> ASK QUESTION</a>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                <h4 class="font-xs text-dark fw-600 ml-4 mb-5 mt-2">All Forums</h4>


                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Forum ID</th>
                                            <th scope="col">Question</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($forum_questions as $forum_question)
                                            <tr>
                                                <th scope="row">{{ $forum_question->id }}</th>
                                                <td>{{ $forum_question->question }}</td>
                                                <td> <a href="/view_forum/{{ $forum_question->id }}" type="button" id="" class="btn btn-default btn-add bg-current text-white font-xsss">View
                                                    </a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                </div>


              @include('inc_aprex.sidebar') 
            </div>


        </div>
        @include('inc_aprex.footer_app') 
    </div>

    @include('inc_aprex.footer')

    <script>
        $(document).ready(function() {
            var searchBox = $('.search-box');
            var resultDropdown = $(".result");
            $('.search-box input[type="text"]').on("keyup input", function() {
                /* Get input value on change */
                var inputVal = $(this).val();
                // var resultDropdown = $(this).siblings(".result");
                var resultDropdown = $(".result");
                if (inputVal.length) {
                    $.get("/search_forum_questions", {
                        term: inputVal
                    }).done(function(data) {
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else {
                    resultDropdown.empty();
                }
            });
            // Handle click events on the document
            $(document).on("click", function(event) {
                // Close the search results dropdown if the clicked element is not within the search box
                if (!searchBox.is(event.target) && searchBox.has(event.target).length === 0) {
                resultDropdown.empty();
                }
            });


            // Set search input value on click of result item
            $(document).on("click", ".result p", function() {
                // $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(".search-box").find('input[type="text"]').val($(this).text());
                $(".result").empty();
                var resultId = $(this).data("id");
                // console.log("Clicked result ID:", resultId);
                var searchButtonUrl = "/aprex/view_forum/" + resultId;
    $("#search-button").attr("href", searchButtonUrl);
            });
        });
    </script>
</body>

</html>
