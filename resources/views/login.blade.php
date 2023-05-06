@extends('layouts.layout')
@section('content')
<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Đăng nhập
                    </h2>
                    <form class="login-form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <input type="email" class="auth-form-input" placeholder="Email">
                        <input type="password" class="auth-form-input" placeholder="Mật khẩu">
                        <label class="btn active">
                            <input type="checkbox" name='email1' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i>
                            <span>Ghi nhớ đăng nhập</span>
                        </label>
                        <div class="footer-action">
                            <input type="submit" value="Đăng nhập" class="auth-submit" style="font-weight: bold;">
                            <a href="/dangky" class="auth-btn-direct" style="color:black; font-weight: bold;">Đăng ký</a>
                        </div>
                    </form>
                    <div class="auth-forgot-password">
                        <a href="/forgotpassword" style="color: black;">Quên mật khẩu?</a>
                    </div>
                </div>
            </div>
            <div class="auth-action-right">
                <div class="auth-image">
                    <img src="images/banner.jpg" alt="VinaFood">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <p>{!! QrCode::size(250)->generate('www.google.com'); !!}</p> --}}
<hr>
@if(session('message'))
<script>
    alert('Error');
</script>
@endif
@if(session('messageConfirm'))
<script>
    alert('Tài khoản chưa được kích hoạt, vui lòng vào email để kích hoạt tài khoản!');
</script>
@endif
@if(session('errorPassword'))
<script>
    alert('Sai mật khẩu hoặc tài khoản');
</script>
@endif
@endsection