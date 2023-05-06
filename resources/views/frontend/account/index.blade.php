@extends("backend.shared.frontend_theme")
@section("subtitle","Bilgileriniz")
@section("content"),

    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">Sıra</th>
            <th scope="col">Ad Soyad</th>
            <th scope="col">Eposta</th>
            <th scope="col">Durum</th>
            <th scope="col">İşlemler</th>
        </tr>
        </thead>
        <tbody>

            @foreach($users as $user)
                @if($user->user_id ==Auth::id())
                <tr id="{{$user->user_id}}">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->is_active == 1)
                            <span class="badge bg-success">Aktif</span>
                        @else
                            <span class="badge bg-danger">Pasif</span>
                        @endif
                    </td>
                    <td>
                        <ul class="nav float-start">
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{url("/users/$user->user_id/edit")}}">
                                    <span data-feather="edit"></span>
                                    Güncelle
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link list-item-delete text-black"
                                   href="{{url("/users/$user->user_id")}}">
                                    <span data-feather="trash-2"></span>
                                    Sil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black"
                                   href="{{url("/users/$user->user_id/change-password")}}">
                                    <span data-feather="lock"></span>
                                    Şifre Değiştir
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black"
                                   href="{{url("/users/$user->user_id/addresses")}}">
                                    <span data-feather="map-pin"></span>
                                    Adreslerim
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection
