<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş Yapın</title>


    <link rel="stylesheet" href="{{asset("css/login.css")}}">
</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <main class="mt-5">
                <form method="POST" action="{{url("/girisAdmin")}}">
                    @csrf
                    <h2 class="login">Admin Paneline Hoşgeldiniz</h2>

                    <div class="login__input">
                        <x-input label="Eposta giriniz"  class="login__input" placeholder="Eposta giriniz" field="email" type="email"/>
                    </div>

                    <div class="login__input">

                        <x-input label="Şifre Giriniz"   placeholder="Şifre giriniz" field="password" type="password"/>
                    </div>

                    <div class="login__input">
                        <x-checkbox field="remember-me" label="Beni Hatırla"/>
                    </div>

                    <img class="logo" src="logo/logo_.png"  width="150" height="150"  alt="Web Sitesi Logosu" />
                    <button class="button login__submit" style="height: 20px"; type="submit">Giriş</button>

                </form>
            </main>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>
</body>
</html>
