@extends("backend.shared.backend_theme")
@section("title","Kullanıcı Modülü")
@section("subtitle","Kullanıcılar")
@section("btn_url",url("/users/create"))
@section("btn_icon","plus")
@section("content")
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">Sipariş No</th>
            <th scope="col">Sipariş Kodu</th>
            <th scope="col">Sipariş Tarihi</th>
            <th scope="col">Kart İd</th>
            <th scope="col">Durum</th>
        </tr>
        </thead>
        <tbody>

        @if(count($orders) > 0)
            @foreach($orders as $order)
                    <td>{{$order->order_id}}</td>
                    <td>{{$order->code}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->cart_id}}</td>
                    <td>{{$order->status}}</td>


                    <td>

                        <ul class="nav float-start">

                            </li>
                            <li>
                                @if($order->status == '	Teslim Edildi')
                                    <form action="{{ route('siparis.teslim_alindi', $order->order_id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Ürünleri Teslim Aldım</button>
                                    </form>
                                @endif

                            </li>
                            <li class="nav-item">
                                <form action="{{ route('siparis.onayla', $order->order_id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Onayla</button>
                                </form>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('siparis.tedarik', $order->order_id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-info">Tedarik</button>
                                </form>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('siparis.kutulama', $order->order_id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-info">Kutulama</button>
                                </form>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('siparis.dagıtım', $order->order_id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-info">Dağıtım</button>
                                </form>
                            </li>
                            <li>
                                <form action="{{ route('siparis.kargoya_ver', $order->order_id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-info">Kargoya Ver</button>
                                </form>
                            </li>
                            <li>
                                <form action="{{ route('siparis.teslim_edildi', $order->order_id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-info">Teslim Et</button>
                                </form>
                            </li>
                            <li>
                            @if($order->status == 'Siparişiniz Onaylandı')
                                <li>
                                    <form action="{{ route('siparis.iptal', $order->order_id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" disabled>İptal Et</button>
                                    </form>
                                </li>
                            @elseif($order->status != 'İptal Edildi')
                                <li>
                                    <form action="{{ route('siparis.iptal', $order->order_id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">İptal Et</button>
                                    </form>
                                </li>
                                @endif

                                </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5">
                    <p class="text-center">Herhangi bir kullanıcı bulunamadı.</p>
                </td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection
