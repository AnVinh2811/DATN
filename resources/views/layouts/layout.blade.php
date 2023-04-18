<!DOCTYPE html>
<html lang="en">

<head>
    @php
    $isCart = DB::table('hoa_dons')
    ->where('trang_thai', -1)
    ->where('tai_khoan_id', Session::get('UserId'))
    ->get();
    if(count($isCart) > 0)
    Session::put('cartId', $isCart[0]->id);
    $user = DB::table('tai_khoans')->where('id',Session::get('UserId'))->get();

    @endphp
    <title>VinaFood - Yêu là phải nói, đói là phải ăn</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="shortcut icon" href="{{asset('/images/logo.jpg')}}">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>
@php
$quantityFoodInCart = DB::table('hoa_dons')
->join('chi_tiet_hoa_dons','hoa_don_id','=','hoa_dons.id')
->where('hoa_dons.id',Session::get('cartId'))
->count('*');
@endphp

<body class="goto-here" id="head">
    <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a href="/"> <img src="/images/logo.jpg" alt="" style="width: 155px;height: 100px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ route('productpage',['key' => "Tất cả",'page' => 1]) }}" class="nav-link" style="font-size: 15px">Thực đơn</a></li>
                    <li class="nav-item"><a href="{{ route('sale') }}" class="nav-link" style="font-size: 15px">Ưu Đãi</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link" style="font-size: 15px">Liên Hệ</a></li>
                    <li class="nav-item"><a href="{{ route('cart') }}" class="nav-link" style="font-size: 15px"><span class="icon-shopping_cart"></span>[{{ $quantityFoodInCart }}]</a></li>
                    @if(empty(Session::get('UserId')))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px"><span class="glyphicon glyphicon-user"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{ route('user.login')}}">Đăng nhập</a>
                            <a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a>
                            @else
                    <li class="nav-item"><a href="" class="nav-link" style="font-size: 15px"><span class="glyphicon glyphicon-user"></span></a></li>
                    @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- -->
    @yield('content');
    <!-- -->

    <div class="container py-4">
        <footer class="ftco-footer ftco-section">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">CKCFastFoods</h2>
                        <p>Liên hệ chúng tôi qua </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">

                            <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100010403162844"><span class="icon-facebook"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Thực Đơn</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('productpage',['key' => 'Gà Rán','page' => 1]) }}" class="py-2 d-block">Gà Chiên Giòn</a></li>
                            <li><a href="{{ route('productpage',['key' => 'Hamburger','page' => 1]) }}" class="py-2 d-block">Hamburger</a></li>
                            <li><a href="{{ route('productpage',['key' => 'Bánh Mì','page' => 1]) }}" class="py-2 d-block">Bánh mì</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">65 Huỳnh Thúc Kháng, Bến Nghé, Quận 1, TP.HCM</span></li>
                                <li><span class="icon icon-phone"></span><span class="text">+84 358 543 210</span></li>
                                <li><span class="icon icon-envelope"></span><span class="text">ckcfood.dev@gmail.cpm</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <div class="goTop">
        <a href="#head" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-up" style="color: black;"></span></div>
        </a>
    </div>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/scrollax.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop()) {
                    $('.goTop').fadeIn();
                } else {
                    $('.goTop').fadeOut();
                }
            });
        });
    </script>
</body>

</html>