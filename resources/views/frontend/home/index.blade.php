<!doctype html>
<html class="no-js" lang="tr">

<head>
    @include('partials.head')

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->


<!--welcome-hero start -->
<header id="home" class="welcome-hero">

    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!--/.carousel-indicator -->
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
            <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
            <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
        </ol><!-- /ol-->
        <!--/.carousel-indicator -->

        <!--/.carousel-inner -->

    </div><!--/#header-carousel-->

    @include('partials.top_area')

</header><!--/.welcome-hero-->
<!--welcome-hero end -->

<!--populer-products start -->
<section id="populer-products" class="populer-products">
    <div class="container">
        <div class="populer-products-content">
            <div class="row">
                <br><br><br>
                <div class="col-md-3">
                    <div class="single-populer-products">
                        <div class="single-populer-product-img mt40">
                            <img src="images/products/bale_kiyafeti.jpg"  width="120" height="100" alt="images">
                        </div>
                        <h2><a href="#">Bale Elbisesi</a></h2>
                        <div class="single-populer-products-para">
                            <p>NPLIKSUVER Kız çocuk bale elbisesi, kısa kollu, bale kıyafeti, jimnastik dans mayosu,
                                şifon etekli.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-populer-products">
                        <div class="single-inner-populer-products">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div style="text-align: center;">
                                        <br><br><br>
                                        <h3>Dans Etmek İçin Mükemmel Bir Gün Değil Mi?</h3>
                                        <div id="ww_6482886b40367" v='1.3' loc='auto'
                                             a='{"t":"horizontal","lang":"tr","sl_lpl":1,"ids":[],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"#FFFFFF00","cl_font":"#000000","cl_cloud":"#d4d4d4","cl_persp":"#2196F3","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                                            <a href="https://weatherwidget.org/tr/" id="ww_6482886b40367_u"
                                               target="_blank">Web Sitesine Hava Durumu Widget Yerleştirin</a></div>
                                        <script async
                                                src="https://app1.weatherwidget.org/js/?id=ww_6482886b40367"></script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-populer-products">
                        <div class="single-populer-products">
                            <div class="single-populer-product-img">
                                <img src="images/products/yogaMati.jpg" width="150" height="100" alt="populer-products images">
                            </div>
                            <h2><a href="#">Yoga Matı</a></h2>
                            <div class="single-populer-products-para">
                                <p> Yoga ve pilates egzersizleri sırasında eklemleri destekler.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.populer-products-->
<!--populer-products end-->

<!--new-arrivals start -->
<section id="new-arrivals" class="new-arrivals">
    <div class="container">
        <div class="section-header">
            <h2>Mağazamız</h2>
        </div><!--/.section-header-->
        <div class="new-arrivals-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarNav"
                                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 pt-12">
                            <h5>Kategoriler</h5>
                            <div class="list-group">
                                <a href="/"
                                   class="list-group-item list-group-item-action">Hepsi</a>
                                @if(count($categories) > 0)
                                    @foreach($categories as $category)
                                        <a href="/kategori/{{$category->slug}}"
                                           class="list-group-item list-group-item-action">{{$category->name}}</a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12 pt-12">
                            <br>
                            <h5>Ürünler</h5>
                            @if(count($products) > 0)
                                <div class="card-group">
                                    @foreach($products as $product)
                                        <div class="col-sm-9 pt-9" style="width: 18rem;">
                                            <img src="{{asset("/storage/products/".$product->images[0]->image_url)}}"
                                                 class="card-img-top" alt="{{$product->images[0]->alt}}">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$product->name}}</h5>
                                                <br>
                                                <h6 class="card-title">Fiyat: {{$product->price}}TL</h6>
                                                <a href="/urun"{{$product->product_id}}"
                                                   class="btn btn-success">Detay</a>
                                                <a href="/sepetim/ekle/{{$product->product_id}}"
                                                   class="btn btn-success">Sepete Ekle</a>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div>

</section><!--/.new-arrivals-->
<!--new-arrivals end -->






<!-- clients strat -->
<section id="clients" class="clients">
    <div class="container">
        <div class="owl-carousel owl-theme" id="client">
            <div class="item">
                <a href="#">
                    <img src="images/clients/c1.png" alt="brand-image"/>
                </a>
            </div><!--/.item-->
            <div class="item">
                <a href="#">
                    <img src="images/clients/c2.png" alt="brand-image"/>
                </a>
            </div><!--/.item-->
            <div class="item">
                <a href="#">
                    <img src="images/clients/c3.png" alt="brand-image"/>
                </a>
            </div><!--/.item-->
            <div class="item">
                <a href="#">
                    <img src="images/clients/c4.png" alt="brand-image"/>
                </a>
            </div><!--/.item-->
            <div class="item">
                <a href="#">
                    <img src="images/clients/c5.png" alt="brand-image"/>
                </a>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->

    </div><!--/.container-->

</section><!--/.clients-->
<!-- clients end -->
<!--blog start -->
<section id="blog" class="blog">
    <div class="container">
        <div class="section-header">
            <h2>Çok Satılan Ürünler</h2>
        </div><!--/.section-header-->
        <div class="blog-content">
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="images/products/salsaCocuk.jpeg" width="10" height="10" alt="blog image">
                            <div class="single-blog-img-overlay"></div>
                        </div>
                        <div class="single-blog-txt">
                            <h2><a href="#">Çocuk Salsa Kıyafeti</a></h2>
                            <p>
                                Zarif dik yaka, süslü suni elmas süsleme, belde perspektif, içi boş file tasarım, benzersiz yeni tarz. Dansta tartılan zarif uzun püsküllü etek çekici ve zarif bir görünüm sunar.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="images/products/tangoKadın.jpg" width="10" height="10" alt="blog image">
                            <div class="single-blog-img-overlay"></div>
                        </div>
                        <div class="single-blog-txt">
                            <h2><a href="#">Kadın Tango Kıyafeti</a></h2>
                            <p>
                                arlak suni elmaslarla vintage kare yaka tasarımı, kontrast renkler, yüksek kaliteli el nakışı, tam tasarım, şık sırt ve çok katmanlı file etek, sahnede performansınızı mükemmel bir şekilde tamamlayabilmeniz için çok katmanlı file tasarım.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="images/products/yogaMati2.jpg" width="10" height="10" alt="blog image">
                            <div class="single-blog-img-overlay"></div>
                        </div>
                        <div class="single-blog-txt">
                            <h2><a href="#">Yoga Matı</a></h2>
                            <p>
                                Bu yoga matı kaymazlık ve rahatlık sunmasının yanı sıra çok işlevli bir mat arayan kullanıcılar için tasarlandı.

                                5 mm kalınlık,bileşen yumuşaklığı ve sabitliği ile yoganın keyfine tam anlamıyla varmanızı sağlar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.blog-->
<!--blog end -->
<!--newsletter strat -->
@include('partials.footer')

</body>

</html>
