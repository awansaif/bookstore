<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    {{-- <meta name="description" content="{{$meta->description}}">
    <meta name="Keywords" content="{{$meta->keywordsimp}}"> --}}
    <!-- Fav Icon -->
    <link rel="icon" type="image/png" href="{{ asset('assests/img/logo.png') }}">
    <!-- style file -->
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">
    <link href="{{ asset('assests/css/style.css')}}" rel="stylesheet">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .bordr i {
            padding: 10px !important;
        }

        #dropdownMenuButton::before {
            content: "\f038";
            font-family: "Font Awesome 5 Free";
            font-size: 23px;
            border: none;
            top: 2px;
            left: 20px;
            display: inline-block;
        }

        .background-remove {
            background-color: white;
            padding: 0px 8px;
        }

        .dropdown-toggle::after {
            display: none !important;
        }

        .form-control:focus {
            border-color: inherit;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .footer .col-5 ul li a,
        .footer .col-10 ul li a {
            display: block;
            padding: 10px 0px;
            font-size: 12px;
            text-transform: capitalize;
            font-weight: bolder;
            color: #46495c;
            text-decoration: none;
        }

        .footer .col-5 ul li,
        .footer .col-10 ul li {
            display: block;
        }

        .footer .col-5 ul,
        .footer .col-10 ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
    </style>
    @yield('style')
    @livewireStyles
</head>

<body>
    <div class="wrapper">
        <form action="{{URL::to('searchItemFind')}}" method="post">
            <div class="container">
                <header class="bg-white">
                    <div class="row bd-bottom w-100">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <nav class="">
                                <div class="row w-100">
                                    <div class="w10">
                                        <a class="navbar-brand" href="{{ env('APP_URL') }}">
                                            <img src="{{ asset('assests/img/logo.png') }}" class="img-fluid" alt="logo"
                                                class="img-fluid" style="width: 100px;"></a>
                                    </div>
                                    <div class="w20">
                                        <div class="input-group ml5" style="padding-left: 68px">
                                            <div class="input-group-prepend" id="inputGroupSelect03">

                                                <div class="dropdown">
                                                    <button class="dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        All
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#" type="all" src="All">All</a>
                                                        {{-- @foreach($AllBookCategories as $bookCat)
                                                        <a class="dropdown-item show-read-more" href="#" type="category"
                                                            src="{{$bookCat->id}}">{{$bookCat->name}}</a>
                                                        @endforeach
                                                        @foreach($AllBookTypes as $bookTyp)
                                                        <a class="dropdown-item show-read-more" href="#" type="type"
                                                            src="{{$bookTyp->id}}">{{$bookTyp->name}}</a>
                                                        @endforeach --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="width-input">
                                                <input type="search" name="terms"
                                                    class="form-control form-control-height" id="searchsite" required
                                                    autocomplete="off">
                                            </div>
                                            <div>
                                                <button class="input-group-append bordr btn p-0 bg-white" type="submit">
                                                    <i class="fas fa-search form-control-height"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w30">
                                        <div class="d-flex">
                                            @guest
                                            <a href="#" class="btn btn-ligh mr-3">
                                                <i class="fa fa-shopping-cart"></i>
                                                <sup class="addOnCartClick">10</sup>
                                            </a>
                                            <a href="{{ Route('user.showLoginForm') }}"
                                                class="btn btn-ligh mr-3">Login</a>
                                            <a href="#" class="btn btn-ligh mr-3">Author</a>
                                            @else
                                            <a href="{{URL::to('/shoping-cart')}}" class="btn btn-ligh mr-3"><i
                                                    class="fa fa-shopping-cart"></i><sup
                                                    class="addOnCartClick">10</sup></a>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle background-remove"
                                                    data-toggle="dropdown">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('adminStyle/assets/images/avatars/profile-image-2.png') }}"
                                                        width="40px" height="40px">
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="{{URL::to('/orders')}}" class="dropdown-item">My Orders</a>
                                                    <a href="{{ Route('user.logout') }}"
                                                        class="dropdown-item">Logout</a>
                                                </div>
                                            </div>

                                            @endguest
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </header>
            </div>
        </form>
        <div class="ml-4 mr-4 shadow-sm">
            @include('web.partials.navbar')
        </div>
    </div>
    @yield('content')
    @include('web.partials.footer')


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="{{ asset('slick/slick.js') }}"></script>
    <script>
        $('.one-time').slick({
            dots: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            touchMove: false
            });
    </script>
    <script>
        $(function() {
        $(".AddToCart").on("click",function () {
            console.log("ads");
            var productId = $(this).attr("productid");
            var productType = $(this).attr("productType");
            var productPrice = $(this).attr("productPrice");
            var url = "{{URL::to('addToCart')}}" + "?productId=" + productId + "&productType="+ productType + "&price=" + productPrice;
            $(function() {
            $.ajax({
                type: "POST",
                url: url,
                success: function(data){
                    console.log(data);
                    var numCart = $(".addOnCartClick").html();
                    $(".addOnCartClick").html(++numCart);
                }
            });
            });
        });
        });
    </script>
    <script>
        var ALERT_TITLE = "Bookweb";
        var ALERT_BUTTON_TEXT = "Ok";

        if(document.getElementById) {
            window.alert = function(txt) {
                createCustomAlert(txt);
            }
        }

        function createCustomAlert(txt) {
            d = document;

            if(d.getElementById("modalContainer")) return;

            mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
            mObj.id = "modalContainer";
            mObj.style.height = d.documentElement.scrollHeight + "px";

            alertObj = mObj.appendChild(d.createElement("div"));
            alertObj.id = "alertBox";
            if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
            alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
            alertObj.style.visiblity="visible";

            h1 = alertObj.appendChild(d.createElement("h1"));
            h1.appendChild(d.createTextNode(ALERT_TITLE));

            msg = alertObj.appendChild(d.createElement("p"));
            //msg.appendChild(d.createTextNode(txt));
            msg.innerHTML = txt;

            btn = alertObj.appendChild(d.createElement("a"));
            btn.id = "closeBtn";
            btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
            btn.href = "#";
            btn.focus();
            btn.onclick = function() { removeCustomAlert();return false; }

            alertObj.style.display = "block";

        }

        function removeCustomAlert() {
            document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
        }
        function ful(){
        alert('Your cart update succesfully.');
        }


    </script>
    <!-- jquery Cdn -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js">
    </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        // autocomplete search
            var path="{{URL::to('autocomplete?category=All')}}";
            $("input.searchsite").typeahead({
                source:function(terms,process){
                    return $.get(path,{terms:terms},function(data) {
                    return process(data);
                    })
                }
            })
        // autocomplete sarch menu change
            $('.dropdown-menu a').on('click', function() {
                var getValue = $(this).text();
                var getCat = $(this).attr("src");
                var getTyp = $(this).attr("type");
                if (getTyp == "category") {
                    path="{{URL::to('autocomplete?category=')}}" + getCat;
                }else if(getTyp == "type"){
                    path="{{URL::to('autocomplete?type=')}}" + getCat;
                }else{
                    path="{{URL::to('autocomplete?category=All')}}";
                }
                $('#dropdownMenuButton').text(getValue);
            });
        // autocomplete sarch menu limit character
            var maxLength = 10;
            $(".show-read-more").each(function(){
                var myStr = $(this).text();
                if($.trim(myStr).length > maxLength){
                    var newStr = myStr.substring(0, maxLength) + "...";
                    $(this).empty().html(newStr);
                }
            });
        // Book Title limit character
            var maxLength1 = 30;
            $(".book-title-character").each(function(){
                var myStr1 = $(this).text();
                if($.trim(myStr1).length > maxLength1){
                    var newStr1 = myStr1.substring(0, maxLength1) + "...";
                    $(this).empty().html(newStr1);
                }
            });
    </script>

    @yield('scripts')
    @livewireScripts
</body>

</html>
