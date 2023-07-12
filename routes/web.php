<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/unicode', function () {
//     $user = new User();
//     dd($user);
// });

Route::get('/', function () {
    return view('home');
})->name('home');
// Route::get('/', function () {
//     // return view('welcome');
//     $html = '<h1> Học lập trình unicode</h1>';
//     return $html;
// });
Route::get('/unicode', function () {
    // return view('welcome');
    // $html = '<h1> Học lập trình unicode phương thức get</h1>';
    // return $html;
    return view('form');
});

// Route::post('/unicode', function () {
//     // return view('welcome');
//     $html = '<h1> Học lập trình unicode phương thức post</h1>';
//     return $html;
// });

// Route::put('/unicode', function () {
//     // return view('welcome');
//     $html = '<h1> Học lập trình unicode phương thức put</h1>';
//     return $html;
// });

// Route::delete('/unicode', function () {
//     // return view('welcome');
//     $html = '<h1> Học lập trình unicode phương thức delete</h1>';
//     return $html;
// });

// Route::patch('/unicode', function () {
//     // return view('welcome');
//     $html = '<h1> Học lập trình unicode phương thức patch</h1>';
//     return $html;
// });

// Route::match(['get', 'post'],'unicode', function () {
//     return $_SERVER['REQUEST_METHOD'];
// });
// Route::any('unicode', function (Request $request) {
//     return $request->method();
// });

// Route::get('show-form', function () {
//     return view('form');
// });


// Route::redirect('unicode', 'show-form');

// Route::view('show-form', 'form');

Route::prefix('admin')->group(function (){
    Route::get('/tintuc/{slug}-{id}.html', function ($slug,$id) {
        $content= 'get phương thức id là ';
        $content.= $id.'<br>';
        $content.= 'slug test '.$slug;
        return $content;
    })->where(
        [
            'slug'=>'.+',
            'id'=>'[0-9]+'
        ]
    );
    Route::get('/khongbatbuoc/{slug?}/{id?}', function ($slug=null,$id=null) {
        $content= 'get phương thức id là ';
        $content.= $id. '<br>';
        $content.= 'slug thêm ? ở sau là k bắt buộc '.$slug;
        return $content;
    })->name('admin.tintuc');
    Route::get('/show-form', function () {
        return view('form');
    })->name('admin.show-form');
    Route::prefix('products')->middleware('CheckPermission')->group(function (){
        Route::get('/', function () {
            return 'danh sách sản phẩm';
        });
        Route::get('add', function () {
            return 'thêm sản phẩm';
        })->name('admin.products.add');
        Route::get('edit', function () {
            return 'edit sản phẩm';
        });
        Route::get('delete', function () {
            return 'delete sản phẩm';
        });
    });
});
