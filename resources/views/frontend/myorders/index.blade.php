@extends("backend.shared.frontend_theme")
@section("subtitle","Bilgileriniz")
@section("content"),

<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th scope="col">Sipariş No</th>
        <th scope="col">Sipariş Kodu</th>
        <th scope="col">Sipariş Tarihi</th>
        <th scope="col">Durum</th>
    </tr>
    </thead>
    <tbody>


        @foreach($orders as $order)
            @if($order->order_id==Auth::id())
            <td>{{$order->order_id}}</td>
            <td>{{$order->code}}</td>
            <td>{{$order->created_at}}</td>
            <td>{{$order->status}}</td>

            <td>
                <ul class="nav float-start">

                    </li>
                    <li>
                        <form action="{{ route('siparis.teslim_edildi', $order->order_id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-dark"> ÜrünlerimiTeslim Aldım</button>
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
    @endif
        @endforeach
    </tbody>
</table>
@endsection
