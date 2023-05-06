<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class OrdersController extends Controller
{
    public function orders():View
    {
        $orders=Order::all();
        $orderDetails=OrderDetails::all();
        return view("backend.orders.index", ["orders" => $orders]);

        return view("backend.orders.index", ["orderDetails" => $orderDetails]);

    }

    public function updateOrderStatus($order_id, $status)
    {
        $orders = Order::find($order_id);
        $orders->status = $status;
        $orders->save();
    }
    // Sipariş onaylama
    public function onayla($order_id)
    {
        $orders = Order::find($order_id);
        $orders->status = ' Siparişiniz Onaylandı';
        $orders->save();

        return redirect()->back()->with('success', 'Sipariş başarıyla onaylandı.');
    }

    // Sipariş iptal etme
    public function iptal($order_id)
    {
        $orders = Order::find($order_id);
        if ($orders->status == 'Siparişiniz Onaylandı') {
            return redirect()->back()->with('error', 'Bu sipariş zaten onaylandı ve iptal edilemez.');
        } else {
            $orders->status = 'İptal Edildi';
            $orders->save();
            return redirect()->back()->with('success', 'Sipariş başarıyla iptal edildi.');
        }
    }
    // Sipariş iptal etme
    public function iptaleski($order_id)
    {
        $orders = Order::find($order_id);
        $orders->status = 'İptal Edildi';
        $orders->save();

        return redirect()->back()->with('success', 'Sipariş başarıyla iptal edildi.');
    }

    public function tedarik($order_id)
    {
        $orders = Order::find($order_id);
        $orders->status = 'Ürünleriniz Tedarik Ediliyor';
        $orders->save();

        return redirect()->back()->with('success', 'Ürünleriniz Tedarik Edildi.');
    }

    public function kutulama($order_id)
    {
        $orders = Order::find($order_id);
        $orders->status = 'Ürünleriniz Kutulanıyor';
        $orders->save();

        return redirect()->back()->with('success', 'Ürünleriniz Kutulandı.');
    }


    public function dagıtım($order_id)
    {
        $orders = Order::find($order_id);
        $orders->status = 'Ürünleriniz Size Doğru Yola Çıktı';
        $orders->save();

        return redirect()->back()->with('success', 'Ürünleriniz Size Doğru Yola Çıktı.');
    }

    // Sipariş kargoya verme
    public function kargoyaVer($order_id)
    {
        $orders = Order::find($order_id);
        $orders->status = 'Kargoya Verildi';
        $orders->save();

        return redirect()->back()->with('success', 'Sipariş başarıyla kargoya verildi.');
    }

    // Sipariş teslim edildi olarak işaretleme
    public function teslimEdildi($order_id)
    {
        $orders = Order::find($order_id);
        $orders->status = 'Teslim Edildi';
        $orders->save();

        return redirect()->back()->with('success', 'Sipariş başarıyla teslim edildi.');
    }


    public function detay():View
    {
        return view('siparis');
    }

    public function teslimAlindi($order_id)
    {
        $orders = Order::find($order_id);
        $orders->status = 'Teslim Alındı';
        $orders->save();

        return redirect()->back()->with('success', 'Sipariş teslim alındı.');
    }
}
