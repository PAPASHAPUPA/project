<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;
use App\Http\Controllers\AdminController;

Route::get('/', [BbsController::class, 'index'])->name('index');
Route::get('/news', [BbsController::class, 'news'])->name('news');
Route::get('/afisha', [BbsController::class, 'afisha'])->name('afisha');
Route::get('/teatr', [BbsController::class, 'teatr'])->name('teatr');
Route::get('/staff', [BbsController::class, 'staff'])->name('staff');
Route::get('/otziv', [BbsController::class, 'otziv'])->name('otziv');
Route::get('/oplata', [BbsController::class, 'oplata'])->name('oplata');
Route::get('/reg', [BbsController::class, 'reg'])->name('reg');
Route::get('/auth', [BbsController::class, 'auth'])->name('auth');

Route::get('logout', function(){
    Auth::logout();
    return redirect('/');
}) -> name('logout');

Route::post('make_order', [BbsController::class, 'make_application']);


Route::get('/admin_afisha', [AdminController::class, 'admin_afisha']);
Route::post('/adminadd_afisha', [AdminController::class, 'create_item_afisha']);
Route::get('/update_afisha/{id}', [AdminController::class, 'admin_update_afisha']);
Route::post('update_afisha/{id}', [AdminController::class, 'update_afisha']);
Route::get('/delete_afisha/{id}', [AdminController::class, 'delete_afisha']);




Route::get('/admin_news', [AdminController::class, 'admin_news']);
Route::post('/adminadd_news', [AdminController::class, 'create_item_news']);
Route::get('/update_news/{id}', [AdminController::class, 'admin_update_news']);
Route::post('update_news/{id}', [AdminController::class, 'update_news']);
Route::get('/delete_news/{id}', [AdminController::class, 'delete_news']);



Route::post('reg', [BbsController::class, 'users_valid']);
Route::post('auth', [BbsController::class, 'users_auth']);