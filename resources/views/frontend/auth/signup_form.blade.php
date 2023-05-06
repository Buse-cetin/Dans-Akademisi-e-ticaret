<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Üye Olun</title>
    <link rel="stylesheet" href="{{asset("css/login.css")}}">
</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <main class="mt-5">
                <form method="POST" action="{{url("/uye-ol")}}">
                    @csrf
                    <h2 class="login">Üye Olun</h2>

                    <div class="login__input">
                        <x-input label="Ad Soyad" placeholder="Ad soyad giriniz" field="name"/>
                    </div>

                    <div class="login__input">
                        <x-input label="Eposta giriniz" placeholder="Eposta giriniz" field="email" type="email"/>
                    </div>

                    <div class="login__input">
                        <x-input label="Şifre Giriniz" placeholder="Şifre giriniz" field="password" type="password"/>
                    </div>

                    <img class="logo" src="logo/logo_.png"  width="160" height="160"  alt="Web Sitesi Logosu" />
                    <div class="login__input">
                        <x-input label="Şifre Tekrarı" placeholder="Şifrenizi tekrar giriniz"
                                 field="password_confirmation" type="password"/>
                    </div>
                    <div class="login__field">
                        <button class="button login__submit" style="height: 20px";type="submit">Kayıt Ol</button>
                    </div>



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
