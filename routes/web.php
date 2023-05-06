<?php

use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
//Route::get("/home", [HomeController::class, 'index']);
Route::get('/kategori/{category:slug}', [\App\Http\Controllers\Frontend\CategoryController::class, 'index']);

Route::get("/giris", [AuthController::class, 'showSignInForm']);
Route::post("/giris", [AuthController::class, 'signIn']);

Route::get("/girisAdmin", [\App\Http\Controllers\Admin\AuthControllerAdmin::class, 'showSignInForm']);
Route::post("/girisAdmin", [\App\Http\Controllers\Admin\AuthControllerAdmin::class, 'signIn']);

Route::get("/uye-ol", [AuthController::class, 'showSignUpForm']);
Route::post("/uye-ol", [AuthController::class, 'signUp']);

Route::get("/cikis", [AuthController::class, 'logout']);
Route::get("/hesabim", [\App\Http\Controllers\Frontend\AccountController::class, 'account']);

Route::get("/urunler", [HomeController::class, 'index']);

Route::get("/cuzdan", [\App\Http\Controllers\frontend\CuzdanContoller::class, 'index']);

Route::get("/siparisler", [\App\Http\Controllers\Admin\OrdersController::class, 'orders']);
Route::get("/siparislerim", [\App\Http\Controllers\Frontend\MyOrders::class, 'index']);

Route::group(["middleware" => "auth"], function () {
    Route::get("/sepetim", [CartController::class, 'index']);
    Route::get("/sepetim/ekle/{product}", [CartController::class, 'add']);
    Route::get("/sepetim/sil/{cartDetails}", [CartController::class, 'remove']);
    Route::get("/satin-al", [CheckoutController::class, 'showCheckoutForm']);
    Route::post("/satin-al", [CheckoutController::class, 'checkout']);
});


Route::group(["middleware" => "auth"], function () {
    Route::resource("/users", UserController::class);
    Route::get("/users/{user}/change-password", [UserController::class, 'passwordForm']);
    Route::post("/users/{user}/change-password", [UserController::class, 'changePassword']);
    Route::resource("/users/{user}/addresses", AddressController::class);
    Route::resource("/categories", CategoryController::class);
    Route::resource("/products", ProductController::class);
    Route::resource("/products/{product}/images", ProductImageController::class);
});

Route::post('/siparis/{id}/teslim-alindi', [\App\Http\Controllers\Admin\OrdersController::class, 'teslimAlindi'])->name('siparis.teslim_alindi');

//Ürün Detay
Route::get('/urun', [\App\Http\Controllers\Admin\ProductController::class, 'details'])->name('urun');

// Sipariş onaylama
Route::post('/siparis/onayla/{id}', [\App\Http\Controllers\Admin\OrdersController::class, 'onayla'])->name('siparis.onayla');

// Sipariş iptal etme
Route::post('/siparis/iptal/{id}', [\App\Http\Controllers\Admin\OrdersController::class, 'iptal'])->name('siparis.iptal');


// Sipariş kargoya verme
Route::post('/siparis/kargoya-ver/{id}', [\App\Http\Controllers\Admin\OrdersController::class, 'kargoyaVer'])->name('siparis.kargoya_ver');

// Sipariş teslim edildi olarak işaretleme
Route::post('/siparis/teslim-edildi/{id}', [\App\Http\Controllers\Admin\OrdersController::class, 'teslimEdildi'])->name('siparis.teslim_edildi');

// Sipariş tedarik
Route::post('/siparis/tedarik/{id}', [\App\Http\Controllers\Admin\OrdersController::class, 'tedarik'])->name('siparis.tedarik');

// Sipariş kutulama
Route::post('/siparis/kutulama/{id}', [\App\Http\Controllers\Admin\OrdersController::class, 'kutulama'])->name('siparis.kutulama');

// Sipariş dağıtım
Route::post('/siparis/dagıtım/{id}', [\App\Http\Controllers\Admin\OrdersController::class, 'dagıtım'])->name('siparis.dagıtım');

Route::post('/orders/{orderId}/prepare', [\App\Http\Controllers\Admin\OrdersController::class, 'updateOrderStatus']);

