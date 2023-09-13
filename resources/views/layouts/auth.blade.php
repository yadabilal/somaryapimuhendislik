<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Admin Paneli</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/css/style.css') }}">
    <!--[if lt IE 9]>
    <script src="{{ asset('preadmin/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('preadmin/js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">
    <div class="account-page">
        <div class="container">
            <h3 class="account-title">Login</h3>
            <div class="account-box">
                <div class="account-wrapper">
                    <div class="account-logo">
                        <a>Yönetim Paneli</a>
                    </div>
                    <form method="POST" action="{{ url('giris-yap') }}">
                        @csrf
                        <div class="form-group form-focus">
                            <label class="focus-label">Kullanıcı</label>
                            <input type="text" name="login" class="form-control floating" placeholder="Kullanıcı adı ya da telefon numarası" value="{{ old('username') ?: old('phone') }}">
                            @error('username')
                            <p class="text-error">{{$message}}</p>
                            @enderror
                            @error('phone')
                            <p class="text-error">{{$message}}</p>
                            @enderror

                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Şifre</label>
                            <input class="form-control floating" type="password" placeholder="Şifre" name="password" value="{{ old('password') ?: '' }}">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-block account-btn" type="submit">Giriş Yap</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('preadmin/js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/js/app.js') }}"></script>
</body>

</html>
