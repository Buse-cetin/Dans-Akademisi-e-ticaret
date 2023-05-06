<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş Yapın</title>

    <link rel="stylesheet" href="{{asset("css/login.css")}}">
    <link rel="login.css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">

            <main class="mt-5">

                <form method="POST" action="{{url("/giris")}}">
                    @csrf
                    <h1 class="login">Giriş Yapın</h1>


                    <div class="login__input">
                        <x-input label="Eposta giriniz"  class="login__input"  placeholder="Eposta giriniz" field="email" type="email"/>
                    </div>


                    <div class="login__input">
                        <x-input label="Şifre Giriniz" class="login__input"  placeholder="Şifre giriniz" field="password" type="password"/>
                    </div>


                    <div class="login__input">
                        <x-checkbox field="remember-me" label="Beni Hatırla"/>
                    </div>

                    <img class="logo" src="logo/logo_.png"  width="180" height="180"  alt="Web Sitesi Logosu" />
                    <button class="button login__submit"  type="submit">Giriş</button>
                    <div class="social-login">
                    <div class="sosyalbutonlar">
                        <a href="https://www.facebook.com/kou92official" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/kou92official" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://plus.google.com/+kocaeli%C3%BCniversitesi" target="_blank" class="google-plus" ><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="https://instagram.com/kou92official" target="_blank" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/c/kocaeli%C3%BCniversitesi" target="_blank" class="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </div>
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
