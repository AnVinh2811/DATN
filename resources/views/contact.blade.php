﻿@extends('layouts.layout')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/banhmi.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <div > 
                    <h1 class="mb-0 bread" style="font-size: 35px; color: rgb(87, 247, 93); font-family: 'Courier New', Courier, monospace;">Liên Hệ Chúng Tôi</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Địa Chỉ:</span> 65 Huỳnh Thúc Kháng, Bến Nghé, Quận 1, TP.HCM</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>SĐT:</span> <a href="tel://0934961323">+ 093 496 1323</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p style="overflow: hidden; text-overflow: ellipsis;"><span>Email:</span> <a href="mailto:ckcfood.dev@gmail.com">ckcfood.dev@gmail.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p style="overflow: hidden; text-overflow: ellipsis;"><span>Website</span> <a href="#">ckcfastfoods.com</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="{{ route('feedback') }}" class="bg-white p-5 contact-form" method="get">
                    <div class="form-group">
                        <input name="fullname" type="text" class="form-control" placeholder="Tên đầy đủ">
                    </div>
                    <div class="form-group">
                        <input name="topic" type="text" class="form-control" placeholder="Chủ đề" required>
                    </div>
                    <div class="form-group">
                        <textarea name="content" id="" cols="30" rows="7" class="form-control" placeholder="Nội dung" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Gửi" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1165.2796272396602!2d106.70108130190616!3d10.771593562046956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f40bec88d2d%3A0x8c952412b6cb8f7d!2zTmjDoCBBLCA2NSDEkMaw4budbmcgSHXhu7NuaCBUaMO6YyBLaMOhbmcsIELhur9uIE5naMOpLCBRdeG6rW4gMSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1645255593390!5m2!1svi!2s" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/js/google-map.js"></script>
@if(session('message'))
    <script>
        alert('Cảm ơn bạn vì đã phản hồi với chúng tôi, chúng tôi sẽ xem xét và phản hồi lại với bạn!')
    </script>
@endif
@endsection