<ul class="nav flex-column" style="color: #a0557b">
    <li class="nav-item">
        <br><br>
        <a class="nav-link" aria-current="page" href="#">
            <span data-feather="home"></span>
            Kullanıcı Paneli
        </a>
    </li>
    <li class="nav-item" >
        <a class="nav-link {{Str::of(url()->current())->contains("/hesabim") ? "active" : ""}}"
           href="/hesabim">
            <span data-feather="users"></span>
            Hesap Ayarlarım
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Str::of(url()->current())->contains("/cuzdan") ? "active" : ""}}"
           href="/cuzdan">
            <span data-feather="grid"></span>
            Cüzdanım
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Str::of(url()->current())->contains("/siparislerim") ? "active" : ""}}"
           href="/siparislerim">
            <span data-feather="grid"></span>
            Siparişlerim
        </a>
    </li>
</ul>
