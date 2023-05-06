<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Paneli</title>

    <link rel="stylesheet" href="{{asset("css/app.css")}}">

    <!-- Custom styles for this template -->
    <link href="{{asset("css/dashboard.css")}}" rel="stylesheet">
</head>
<body >

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" style="color: #0a53be" >
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/"><img src="logo/logo_min.png" width="70" height="70" alt="images"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed"  type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav" style="color: #0a53be">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Çıkış</a>
        </div>
    </div>
</header>

<div class="container-fluid" style="color: #a0557b" >
    <div class="row">
        <nav  id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" >
            <div class="position-sticky pt-3">
                @include("backend.shared.leftnav")
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" >
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" >
                <h1 class="h2">@yield("title")</h1>
                <div class="btn-toolbar mb-2 mb-md-0" >
                    <div class="btn-group me-2">
                        <a href="@yield("btn_url")" class="btn btn-sm btn-outline-success"><span
                                data-feather="@yield("btn_icon")"></span> @yield("btn_label")</a>
                    </div>
                </div>
            </div>
            <h2>@yield("subtitle")</h2>
            <div class="table-responsive">
                @yield("content")
            </div>
        </main>
    </div>
</div>
<script type="text/javascript" src="{{asset("js/app.js")}}"></script>
</body>
</html>
