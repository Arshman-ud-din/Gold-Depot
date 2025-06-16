<?php

use App\Http\Controllers\admin\AdminAttributeController;
use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminCarouselController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminCoinController;
use App\Http\Controllers\admin\AdminFeedbackController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminOrderController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminRegisteredUserController;
use App\Http\Controllers\admin\AdminUserContactController;
use App\Http\Controllers\admin\AdminVariantController;
use App\Http\Controllers\admin\CoinController;
use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\BlogController;
use App\Http\Controllers\web\CartController;
use App\Http\Controllers\web\CheckOutController;
use App\Http\Controllers\web\ContactUsController;
use App\Http\Controllers\web\GoldController;
use App\Http\Controllers\web\GoldDetailController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\LoginController;
use App\Http\Controllers\web\PlatinumController;
use App\Http\Controllers\web\PlatinumDetailController;
use App\Http\Controllers\web\ProductController;
use App\Http\Controllers\web\ShopController;
use App\Http\Controllers\web\SignUpController;
use App\Http\Controllers\web\SilverController;
use App\Http\Controllers\web\SilverDetailController;
use App\Http\Middleware\SignUpMiddleware;
use Illuminate\Support\Facades\Route;


Route::prefix('')->name('web.')->controller(HomeController::class)->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/profile', 'profile')->name('profile')->middleware(['auth']);
    Route::get('/orders', 'orders')->name('orders')->middleware(['auth']);

});


Route::prefix('')->name('about.')->controller(AboutController::class)->group(function () {

    Route::get('/about', 'index')->name('index');

});


Route::prefix('')->name('blog.')->controller(BlogController::class)->group(function () {



    Route::get('/blog', 'index')->name('index');

});


Route::prefix('')->name('contact.')->controller(ContactUsController::class)->group(function () {



    Route::get('/contact-us', 'create')->name('create');
    Route::post('/contact', 'store')->name('store');

});
Route::prefix('')->name('product.')->controller(ProductController::class)->group(function () {
    Route::get('/product/{category}', 'index')->name('index');
    Route::get('/product-detail/{product_id}', 'show')->name('show');
    // Route::get('/product/add-to-cart/', 'addtocart')->name('submit.ajax');
    Route::post('/product-review/{product_id}', 'productreview')->name('productreview');



});



Route::prefix('')->middleware('guest')->controller(LoginController::class)->group(function () {

    Route::get('/login', 'loginview')->name('login');
    Route::post('/login', 'login')->name('login');
    Route::get('/forgot-password', 'forgot')->name('forgot');
    Route::post('/forgot-password', 'forgotpassword')->name('forgotpassword');
    Route::get('/reset-password/{token}', 'reset')->name('reset');
    Route::post('/reset-password', 'resetpassword')->name('resetpassword');


});

Route::prefix('')->name('signup.')->controller(SignUpController::class)->group(function () {

    Route::get('/sign-up', 'create')->name('create')->middleware('guest');
    Route::post('/sign', 'store')->name('store')->middleware('guest');
    Route::get('/logout', 'logout')->name('logout');

});


Route::prefix('')->name('cart.')->controller(CartController::class)->group(function () {

    Route::get('/cart', 'index')->name('index');
    Route::get('/add-to-cart', 'addToCart')->name('add');
    Route::post('/cart/update', 'update')->name('update');
    Route::get('/cart/delete', 'delete')->name('delete');


});

Route::prefix('')->middleware(['auth'])->name('checkout.')->controller(CheckOutController::class)->group(function () {



    Route::get('/check-out', 'index')->name('index');
    Route::get('/check-out', 'create')->name('create');
    Route::post('/check-out', 'store')->name('store');
    Route::get('/check-out/invoice/{order_id}', 'invoice')->name('invoice');
    Route::get('/check-out/download-pdf/{id}', 'downloadpdf')->name('downloadpdf');


});
Route::prefix('')->name('shop.')->controller(ShopController::class)->group(function () {



    Route::get('/shop-all', 'index')->name('index');
    Route::get('/shop-all/product/{product_id}', 'show')->name('show');


});



/////////// Admin Routes//////////



Route::prefix('admin')->name('adminhome.')->middleware(['auth', 'rolecheckmiddleware'])->controller(AdminHomeController::class)->group(function () {


    Route::get('/dashboard', 'index')->name('index');



});
Route::prefix('admin')->name('admincarousel.')->middleware(['auth', 'rolecheckmiddleware'])->controller(AdminCarouselController::class)->group(function () {


    Route::get('/carousel-show', 'index')->name('index');
    Route::get('/carousel', 'create')->name('create');
    Route::post('/carousel-images', 'store')->name('store');
    Route::get('/carousel-edit/{id}', 'edit')->name('edit');
    Route::post('/carousel-update/{id}', 'update')->name('update');
    Route::get('/carousel-delete/{id}', 'delete')->name('delete');



});



Route::prefix('admin')->name('adminproduct.')->middleware(['auth', 'rolecheckmiddleware'])->controller(AdminProductController::class)->group(function () {



    Route::get('/show-product', 'index')->name('index');
    Route::get('/add-product', 'create')->name('create');
    Route::post('/add-product', 'store')->name('store');
    Route::get('/edit-product/{id}', 'edit')->name('edit');
    Route::post('/update-product/{id}', 'update')->name('update');
    Route::get('/update-delete/{id}', 'delete')->name('delete');
    Route::get('/product-detail/{id}', 'productdetail')->name('productdetail');



});


Route::prefix('admin')->name('adminblog.')->middleware(['auth', 'rolecheckmiddleware'])->controller(AdminBlogController::class)->group(function () {

    Route::get('/add-blog', 'create')->name('create');
    Route::get('/show-blog', 'index')->name('index');
    Route::get('/edit-blog/{id}', 'edit')->name('edit');
    Route::post('/update-blog/{id}', 'update')->name('update');
    Route::get('/delete-blog/{id}', 'delete')->name('delete');

});
Route::Post('/add', [AdminBlogController::class, 'store'])->name('admin.store');



Route::prefix('admin')->name('admincategory.')->middleware(['auth', 'rolecheckmiddleware'])->controller(AdminCategoryController::class)->group(function () {

    Route::get('/show-category', 'index')->name('index');
    Route::get('/add-catgory', 'create')->name('create');
    Route::post('/add', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/delete/{id}', 'delete')->name('delete');

});

Route::prefix('admin')->name('adminfeedback.')->middleware(['auth', 'rolecheckmiddleware'])->controller(AdminFeedbackController::class)->group(function () {

    Route::get('/show-feedbacks', 'index')->name('index');

});
Route::prefix('admin')->name('adminorder.')->middleware(['auth', 'rolecheckmiddleware'])->controller(AdminOrderController::class)->group(function () {
    Route::get('/orders', 'index')->name('index');
    Route::get('/order-user-detail/{id}', 'detail')->name('detail');
    Route::post('/update-status/{id}', 'updatestatus')->name('updatestatus');
});

Route::prefix('admin')->name('adminregistereduser.')->middleware(['auth', 'rolecheckmiddleware'])->controller(AdminRegisteredUserController::class)->group(function () {

    Route::get('/registered-user', 'index')->name('index');

});
Route::prefix('admin')->name('adminusercontacts.')->middleware(['auth', 'rolecheckmiddleware'])->controller(AdminUserContactController::class)->group(function () {

    Route::get('/user-contact', 'index')->name('index');

});

Route::prefix('admin')->name('adminattribute.')->middleware(['auth', 'rolecheckmiddleware'])->controller(AdminAttributeController::class)->group(function () {

    Route::get('/add-attribute', 'create')->name('create');
    Route::post('/add-attribute', 'store')->name('store');
    Route::get('/show-attribute', 'index')->name('index');
    Route::get('/edit-attribute/{id}', 'edit')->name('edit');
    Route::post('/show-attribute/{id}', 'update')->name('update');
    Route::get('/delete-attribute/{id}', 'delete')->name('delete');


});
Route::prefix('admin')->name('adminvariants.')->middleware(['auth', 'rolecheckmiddleware'])->controller(AdminVariantController::class)->group(function () {

    Route::get('/show-variant', 'index')->name('index');
    Route::get('/add-variant', 'create')->name('create');
    Route::post('/add-variant', 'store')->name('store');
    Route::get('/edit-variant/{id}', 'edit')->name('edit');
    Route::post('/update-variant/{id}', 'update')->name('update');
    Route::get('/delete-variant/{id}', 'delete')->name('delete');

});
