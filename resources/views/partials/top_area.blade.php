
<!-- top-area Start -->
<div class="top-area">
    <div class="header-area">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search">
                            <a href="#"><span class="lnr lnr-magnifier"></span></a>
                        </li><!--/.search-->
                        <li class="nav-setting">
                            <a href="#"><span class="lnr lnr-cog"></span></a>
                        </li><!--/.search-->
                        <li class="dropdown">
                            <a href="/sepetim" class="dropdown-toggle" data-toggle="dropdown" >
                                <span class="lnr lnr-cart"></span>
                                <span class="badge badge-bg-1"></span>
                            </a>

                        </li><!--/.dropdown-->
                    </ul>
                </div><!--/.attr-nav-->
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/girisAdmin"><img src="logo/logo_2.png" width="100" height="100" alt="images"></a>

                    <a class="navbar" href="/"> <img src="logo/logo_min.png" width="100" height="70" alt="images"></a>


                </div><!--/.navbar-header-->
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class=" scroll active"> <a class="nav-link active" aria-current="page" href="/">Anasayfa</a></li>

                        <li class="scroll"><a href="#new-arrivals">Mağazamız</a></li>
                        @auth()
                            <li class="nav-item">
                                <a class="nav-link" href="/sepetim">Sepetim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cikis">Çıkış</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/giris">Giriş Yap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/uye-ol">Üye ol</a>
                            </li>
                        @endauth
                    </ul><!--/.nav -->
                </div><!-- /.navbar-collapse -->
            </div><!--/.container-->
        </nav><!--/nav-->
        </nav><!--/nav-->
        <!-- End Navigation -->
    </div><!--/.header-area-->
    <div class="clearfix"></div>

</div><!-- /.top-area-->
<!-- top-area End -->
