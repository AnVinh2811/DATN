@extends('layouts.layout')
@section('content')
<!-- Form without bootstrap -->
<section class="ftco-section contact-section bg-light">
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Đăng ký
                    </h2>
                    <form class="login-form" action="{{ route('dangky')}}" method="POST">
                        @csrf
                        <input type="text" class="auth-form-input" placeholder="Họ và Tên">
                        <input type="email" class="auth-form-input" placeholder="Email">
                        <input type="password" class="auth-form-input" placeholder="Mật khẩu">
                        <input type="password" class="auth-form-input" placeholder="Nhập lại mật khẩu">
                        <label class="btn active">
                            <input type="checkbox" name='email1' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i>
                            <span> Tôi đồng ý với các <a href="#">Chính sách hoạt động của VinaFood</a>.</span>
                        </label>
                        <div class="footer-action">
                            <input type="submit" value="Đăng ký" class="auth-submit" style="font-weight: bold;">
                            <a href="/login" class="auth-btn-direct" style="color:black; font-weight: bold;">Đăng nhập</a>
                        </div>
                    </form>
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
@if(session('alert'))
<script>
    alert('Email đã tồn tại!');
</script>
@endif
@if(session('alertPassword'))
<script>
    alert('Mật khẩu nhập lại không đúng!');
</script>
@endif
<script>
    $('input[name="phone"]').on('keyup', function() {
        console.log($('input[name="phone"]').val()[0] == 0);
    });
    var password = $('input[name="password"]').val();
    var password_confirmation = $('input[name="password_confirm"]').val();

    submit.addEventListener('click', function(e) {
        if (checkPhonenumber() == false) {
            alert('Số điện thoại phải tối thiểu là 10 chữ số và bắt đầu bằng số 0!');
            e.preventDefault();
        } else if (password != password_confirmation) {
            alert('Vui lòng nhập lại mật khẩu đúng với mật khẩu đăng ký!');
            e.preventDefault();
        }
    });

    function checkPhonenumber() {
        if ($('input[name="phone"]').val()[0] == 0 && $('input[name="phone"]').val().length >= 10) {
            return true;
        }
        return false;
    }
</script>
@endsection