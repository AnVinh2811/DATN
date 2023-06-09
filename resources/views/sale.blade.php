﻿@extends('layouts.layout')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/banner-2.png');">
</div>
@php
      function hasLike($userId = 0, $id = 0)
    {
        $liked = DB::table('danh_gias')->where('yeu_thich',1)->where('tai_khoan_id', $userId)->where('san_pham_id', $id)->get();
        if(count($liked) > 0)
            return true;
        return false;
    }
@endphp
<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <div style="background-color: rgba(212, 243, 212, 0.5);">
                    <h1 class="mb-0 bread" style="color: rgb(87, 247, 93)">Thực Phẩm Giảm Giá</h1>
                </div>
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($lstsp as $sp)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{ route('productdetail',['id'=>$sp->id]) }}" class="img-prod">
                        <img class="img-fluid w-100" style="height: 160px;" src="{{ asset("/images/$sp->hinh") }}" alt="Colorlib Template">
                        @if($sp->khuyen_mai_id != 3)
                        <span class="status">{{ $sp->gia_tri }}%</span>
                         @endif
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{ $sp->ten_san_pham }}</a></h3>
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
                                        <a href="{{ route('like',['id' => $sp->id]) }}"class="heart d-flex justify-content-center align-items-center"  style="background-image: linear-gradient(red, white);" id="heart">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    @else
                                    <a href="{{ route('like',['id' => $sp->id]) }}"class="heart d-flex justify-content-center align-items-center" id="heart">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                    @endif
                                    @else
                                    <a href="{{ route('like',['id' => $sp->id]) }}"class="heart d-flex justify-content-center align-items-center" id="heart">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
<hr>
</section>
@endsection