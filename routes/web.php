<?php
use App\Models\posts;
use App\Models\Student;
use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\postsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\PageController;

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

Route::get('/', function () {
    return view('home', [
        'name' => 'Calvin Raditya',
        'title'=> "home"
    ]);
});
Route::get('/home', function () {
    return view('home', [
        'name' => 'Calvin Raditya',
        "title" => "home"
    ]);
});
Route::get('/berita', function () {
    return view('berita', [
        'name' => 'Calvin Raditya',
        "title" =>"berita"
    ]);
});
Route::get('/agenda', function () {
    return view('agenda', [
        "title" =>"agenda"
    ]);
});
Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
        "Name" => "Calvin Raditya",
        "email" => "Calvinraditya@gmail.com",
        "image" => "saya.png"

    ]);
});
Route::get('/profil', function () {
    return view('profil', [
        "title" =>"profil"
    ]);
});
    Route::get('/berita', function () {
    return view('posts', [
    "title" => "Blog",
    "posts" => posts::all()
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $new_post = [];
    foreach ($blog_posts as $post) {
    if ($post["slug"] === $slug) {
    $new_post = $post;
    }
    }
    return view('post', [
    "title" => "Single Post",
    "post" => $new_post
    ]);
    });
    Route::get('posts/{slug}', function ($slug) {
        return view('post', [
        "title" => "Singgle Post",
        "post" => posts::find($slug)
        ]);
    });

    Route::get('/berita', [postsController::class, 'index']);

    // Route::get('/', [PageController::class, 'index']);
    // Route::post('/page/uploadFile', [PageController::class, 'uploadFile'])->name('uploadFile');

    // Route::resource('products-ajax-crud', ProductAjaxController::class);

    Route::get('/vacancy', [VacancyController::class, 'index']);
    Route::get('/vacancy/tambah', [VacancyController::class,'tambah']);
    Route::put('/vacancy/edit/{id}', [VacancyController::class,'edit']);
    Route::get('/vacancy/detail/{id}', [VacancyController::class,'']);
    Route::get('/vacancy/hapus/{id}', [VacancyController::class,'delete']);
    Route::put('/vacancy/update/{id}', [VacancyController::class,'update']);
    Route::post('/vacancy/simpan', [VacancyController::class,'simpan']);
    Route::get('/vacancy/search', [VacancyController::class, 'search'])->name('vacancy.search');
    // Route::post('/vacancy/detail{id}', [VacancyController::class, 'detail'])->name('vacancy.detail');

    Route::get('/siswa', [StudentController::class, 'index']);
    Route::get('/siswa/tambah', [StudentController::class,'tambah']);
    Route::get('/siswa/edit/{id}', [StudentController::class,'edit']);
    Route::get('/siswa/hapus/{id}', [StudentController::class,'delete']);
    Route::put('/siswa/update/{id}', [StudentController::class,'update']);
    Route::post('/siswa/simpan', [StudentController::class,'simpan']);


    Route::get('/guru', [TeacherController::class, 'index']);
    Route::get('/guru/tambah', [TeacherController::class,'tambah']);
    Route::post('/guru/simpan', [TeacherController::class,'simpan']);
    Route::get('/guru/edit/{id}', [TeacherController::class,'edit']);
    Route::put('/guru/update/{id}', [TeacherController::class,'update']);
    Route::get('/guru/hapus/{id}', [TeacherController::class,'delete']);


    // hanya user yang memiliki role admin yang dapat mengakses halaman ini
    // Route::middleware('role:admin|pegawai')->group(function () {
    //     Route::controller(VacancyController::class)
    //         ->prefix('vacancy')
    //         ->name('vacancy.')
    //         ->group(function () {
    //             Route::post('/', 'store')->name('store');
    //             Route::get('/{id}/edit', 'edit')->name('edit');
    //             Route::put('/{id}', 'update')->name('update');
    //             Route::delete('/{id}', 'destroy')->name('destroy');
    //         });

    // Route::middleware('role:admin')->prefix('dashboard')->name('dashboard.')->group(function () {
    //     Route::get('/', [VacancyController::class, 'index'])->name('index');
    //     Route::delete('/vacancy/hapus/{id}', [VacancyController::class,'delete']);
    // });
    


