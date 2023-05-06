@extends('layouts.layout')
@section('content')
@php
function hasLike($userId = 0, $id = 0)
{
$liked = DB::table('danh_gias')->where('yeu_thich',1)->where('tai_khoan_id', $userId)->where('san_pham_id', $id)->get();
if(count($liked) > 0)
return true;
return false;
}
@endphp
{{-- _MultiBanner --}}
<!-- <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators 
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow 
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner-1.jpg" alt="Compo 1" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/banner-2.png" alt="Compo 2" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/banner-3.png" alt="Compo 3" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls 
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div> -->
<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">
    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">

                <div class="col-md-6 col-sm-12 ftco-animate">
                    <span class="subheading">Delicious</span>
                    <h1 class="mb-4">Italian Cuizine</h1>
                    <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                </div>
                <div class="col-md-6 ftco-animate">
                    <img src="images/bg_1.png" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </div>

    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">

                <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
                    <span class="subheading">Crunchy</span>
                    <h1 class="mb-4">Italian Pizza</h1>
                    <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                </div>
                <div class="col-md-6 ftco-animate">
                    <img src="images/bg_2.png" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Welcome</span>
                    <h1 class="mb-4">We cooked your desired Pizza Recipe</h1>
                    <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                </div>

            </div>
        </div>
    </div>
</section>
{{-- Index --}}
<section class="ftco-section ftco-services">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">DỊCH VỤ</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">THỰC PHẨM LÀNH MẠNH</h3>
                        <p>Thực phẩm lành mạnh cải thiện tâm trạng của bạn.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-bicycle"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">MIỄN PHÍ GIAO HÀNG</h3>
                        <p>Giao hàng tận nơi - thanh toán khi nhận hàng</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
                    <div class="media-body">
                        <h3 class="heading">CÔNG THỨC</h3>
                        <p>Công thức chế biến gà rán truyền thống nổi tiếng thế giới</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div _ngcontent-ng-cli-universal-c64="" class="container item-wrapper mb-3 ng-star-inserted" style="padding: 27px;">
        <h2 _ngcontent-ng-cli-universal-c64="" class="heading-line mt-4" style="font-size: 30px;
    position: relative;
    letter-spacing: 2px;
    font-family: Oswald,sans-serif;
    text-transform: uppercase;
    background: transparent;
    display: inline-block;
    position: relative;
    padding-right: 1.07142857rem;"><span _ngcontent-ng-cli-universal-c64="" style="color: white;">Danh Mục Món Ăn</span></h2>
        <div class="row">
            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end">
                    <a href="{{ route('food') }}" class="text-white"><img src="images/bg_food.jpg" alt="" style="width: 450px; height: 300px;"></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end">
                    <a href="{{ route('drink') }}" class="text-white"><img src="images/bg_drink.jpg" alt="" style="width: 450px; height: 300px;"></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end">
                    <a href="{{ route('sale') }}" class="text-white"><img src="images/KHUYENMAI.jpg" alt="" style="width: 450px; height: 300px;"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div _ngcontent-ng-cli-universal-c64="" class="container item-wrapper mb-3 ng-star-inserted" style="padding: 27px;">
            <h2 _ngcontent-ng-cli-universal-c64="" class="heading-line mt-4" style="font-size: 30px;
    position: relative;
    letter-spacing: 2px;
    font-family: Oswald,sans-serif;
    text-transform: uppercase;
    background: transparent;
    display: inline-block;
    position: relative;
    padding-right: 1.07142857rem;"><span _ngcontent-ng-cli-universal-c64="" style="color: white;">Có Thể Bạn Sẽ Thích Món Này</span></h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end">
                        <a href="{{ route('productpage',['key' => "Tất cả",'page' => 1]) }}" class="see-more">Mua thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="listSP">
            @foreach ($lstsp as $sp)
            <div id="idsp" class="carousel-item active" style="margin-right: 0; width: 25%;">
                <div class="col-md-6 col-lg-3 ftco-animate" style="max-width: 100%;">
                    <div class="product">
                        <a href="{{ route('productdetail',['id'=>$sp->id]) }}" class="img-prod">
                            <img class="img-fluid w-100" style="height: 160px;" src="{{ asset("/images/$sp->hinh") }}" alt="Colorlib Template">
                            @if($sp->khuyen_mai_id != 3)
                            <span class="status">{{ $sp->gia_tri }}%</span>
                            @endif
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="{{ route('productdetail',['id'=>$sp->id]) }}">{{ $sp->ten_san_pham }}</a></h3>
                            @if($sp->gia_tri > 0)
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price priceOld"><span>{{ number_format($sp->gia, 0, ",", ".") }} VNĐ</span></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class=" priceSales"><span>{{ number_format($sp->gia - ($sp->gia * $sp->gia_tri) / 100, 0, ",", ".") }} VNĐ</span></p>
                                </div>
                            </div>
                            @else
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>{{ number_format($sp->gia, 0, ",", ".") }} VNĐ</span></p>
                                </div>
                            </div>
                            @endif
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="{{ route('cart.add',['productId' => $sp->id,'quantity' => 1,'price' => $sp->gia,'sales' => $sp->gia_tri]) }}" class="buy-now d-flex justify-content-center align-items-center mx-1" id="cart">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    @if(!empty(Session::get('UserId')))
                                    @if (hasLike(Session::get('UserId'),$sp->id))
                                    <a href="{{ route('like',['id' => $sp->id]) }}" class="heart d-flex justify-content-center align-items-center" style="background-image: linear-gradient(red, white);" id="heart">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                    @else
                                    <a href="{{ route('like',['id' => $sp->id]) }}" class="heart d-flex justify-content-center align-items-center" id="heart">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                    @endif
                                    @else
                                    <a href="{{ route('like',['id' => $sp->id]) }}" class="heart d-flex justify-content-center align-items-center" id="heart">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            @foreach ($lstsp2 as $sp)
            <div id="idsp" class="carousel-item active" style="margin-right: 0; width: 25%;">

                <div class="col-md-6 col-lg-3 ftco-animate" style="max-width: 100%;">
                    <div class="product">
                        <a href="{{ route('productdetail',['id'=>$sp->id]) }}" class="img-prod">
                            <img class="img-fluid w-100" style="height: 160px;" src="{{ asset("/images/$sp->hinh") }}" alt="Colorlib Template">
                            @if($sp->khuyen_mai_id != 3)
                            <span class="status">{{ $sp->gia_tri }}%</span>
                            @endif
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="{{ route('productdetail',['id'=>$sp->id]) }}">{{ $sp->ten_san_pham }}</a></h3>
                            @if($sp->gia_tri > 0)
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price priceOld"><span>{{ number_format($sp->gia, 0, ",", ".") }} VNĐ</span></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class=" priceSales"><span>{{ number_format($sp->gia - ($sp->gia * $sp->gia_tri) / 100, 0, ",", ".") }} VNĐ</span></p>
                                </div>
                            </div>
                            @else
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>{{ number_format($sp->gia, 0, ",", ".") }} VNĐ</span></p>
                                </div>
                            </div>
                            @endif
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="{{ route('cart.add',['productId' => $sp->id,'quantity' => 1,'price' => $sp->gia,'sales' => $sp->gia_tri]) }}" class="buy-now d-flex justify-content-center align-items-center mx-1" id="cart">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    @if(!empty(Session::get('UserId')))
                                    @if (hasLike(Session::get('UserId'),$sp->id))
                                    <a href="{{ route('like',['id' => $sp->id]) }}" class="heart d-flex justify-content-center align-items-center" style="background-image: linear-gradient(red, white);" id="heart">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                    @else
                                    <a href="{{ route('like',['id' => $sp->id]) }}" class="heart d-flex justify-content-center align-items-center" id="heart">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                    @endif
                                    @else
                                    <a href="{{ route('like',['id' => $sp->id]) }}" class="heart d-flex justify-content-center align-items-center" id="heart">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div _ngcontent-ng-cli-universal-c64="" class="container item-wrapper mb-3 ng-star-inserted" style="padding: 27px;">
            <h2 _ngcontent-ng-cli-universal-c64="" class="heading-line mt-4" style="font-size: 30px;
    position: relative;
    letter-spacing: 2px;
    font-family: Oswald,sans-serif;
    text-transform: uppercase;
    background: transparent;
    display: inline-block;
    position: relative;
    padding-right: 1.07142857rem;"><span _ngcontent-ng-cli-universal-c64="" style="color: white;">Ưu Đãi Đặc Biệt</span></h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end">
                        <a href="{{ route('productpage',['key' => "Tất cả",'page' => 1]) }}" class="see-more">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if(isset($_GET['success']))

<div class="modal-assess" id="modal">
    <div class="form">
        <div class="modal-header">
            <img src="/images/kfc.jpg" width="30px" alt="logo">
            <div class="modal-exit">X</div>
        </div>
        <div class="star">
            <p>Cảm ơn quý khách đã ủng hộ!</p>
        </div>
        <div class="star">
            <p>Tổng số tiền của hóa đơn:</p>
        </div>
        <div class="star">
            <p style="font-weight: bold">{{ number_format($_GET['amount'],0,',','.') }} VNĐ</p>
        </div>
        <div class="content">
            <p>Người nhận hàng:</p>
            <p style=" width:150px; font-weight: bold">{{$_GET['getter'] }}</p>
        </div>
        <div class="content">
            <p>Địa chỉ:</p>
            <p style=" width:150px; font-weight: bold;">{{ $_GET['address'] }}</p>
        </div>
        <div class="content">
            <p>SĐT:</p>
            <p style=" width:150px; font-weight: bold">{{ $_GET['phone']}}</p>
        </div>
    </div>
</div>
<script>
    $('.modal-assess').css('display', 'flex');
</script>
<script>
    $('.modal-exit').on('click', function() {
        $('.modal-assess').css('display', 'none')
    });
</script>
@endif
<hr>
@endsection