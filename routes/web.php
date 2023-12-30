<?php
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PhotoController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/test',function(){
    echo 'Hello';
});
Route::get('categories/mobile',function(){
    return 'Hello from mobile';
});

Route::get('user/{name}',function($name){
    return "<h1> Hello $name </h1>";
});

Route::get('user/delete/{id}',function($id){
    return "<h1> delete $id </h1>";
});

Route::get('user/{id?}/{name}',function($id = 0,$name){
    return "the id is: " . $id . " " . $name;
})->where(['id' => '[0-9]+','name' => '[a-zA-Z]+']);

Route::prefix('cars')->group(function(){
    Route::get('bmw',function(){
        return 'bmw page';
    });
    Route::get('mercedes',function(){
        return 'mercedes page';
    });
});
Route::prefix('users')->group(function(){
    Route::get('user/{name}/{id}',function($name,$id){
        return "the name is $name and the id is $id";
    });
    Route::get('edit',function(){
        return 'Hello';
    });
});
// Route::fallback(function(){
//     return redirect('/');
// });
Route::get('/getform',function(){
    return view('form');
});

Route::view('test','des');

// Route::get('home',function(){
//     $data=['name'=>'hind','email'=>'hindmohsen@gmail.com','age'=>22];
//     return view('home',$data);
// });

Route::get('form',function(){
    return view('form');
});

Route::post('receive',function(){
    return view('form2');
})->name('form2');

Route::get('client',function(){
    $data=['name'=>'hind','email'=>'hindmohsen@gmail.com','age'=>22];
    return view('home',$data);
});

Route::get('/customer',[CustomerController::class,'index']);


// Route::get('/home',function(){
//     return view('home');
// });

// Route::get('/contact',function(){
//     return view('contact_us');
// });

// Route::get('/about',function(){
//     return view('about_us');
// });

// Route::get('/data',[CustomerController::class,'custdata']);

// Route::get('/test',TestController::class);

// Route::resource('/photos',PhotoController::class);
Route::get('about',[CustomerController::class,'about']);

Route::get('home',[CustomerController::class,'home']);

Route::get('contact/{role}',[CustomerController::class,'contact'])->middleware(Admin::class);


// Route::get('/create',[PostController::class,'create']);

// Route::get('/post',[PostController::class,'post']);

Route::get('create',[CustomerController::class,'create']);

Route::post('store',[CustomerController::class,'store'])->name('store');

Route::get('edit/{id}',[CustomerController::class,'edit']);
Route::post('update/{id}',[CustomerController::class,'update'])->name('update');

Route::get('home',[CustomerController::class,'home']);
Route::get('show/{id}',[CustomerController::class,'show']);
Route::get('delete/{id}',[CustomerController::class,'delete']);
Route::delete('delete',[CustomerController::class,'deletecust'])->name('delete');

// Route::get('getdata',[UserController::class,'getdata'])->name('getdata');
// Route::get('store',[UserController::class,'store'])->name('store');
// Route::post('insertdata',[UserController::class,'insertdata'])->name('insertdata');
// Route::get('edituser/{id}',[UserController::class,'edituser'])->name('edituser');
// Route::post('update/{id}',[UserController::class,'update'])->name('update');
// Route::get('form',[PostController::class,'form_data']);
// Route::get('/table',[PostController::class,'get_data']);
// Route::post('insert',[PostController::class,'insert_form']);
// Route::get('/show/{id}',[PostController::class,'show']);php
// Route::get('/edit/{id}',[PostController::class,'edit']);
// Route::post('/update/{id}',[PostController::class,'update'])->name('update');
// Route::get('/delete/{id}',[PostController::class,'delete']);
Route::delete('deletepost',[PostController::class,'deletepost']);
Route::get('users',function(){
    return view('form2');
});
Route::get('/home3',function(){
    return view('home');
});
Route::get('/contact3',function(){
    return view('contact_us');
});
Route::get('/about3',function(){
    return view('about_us');
});

Route::get('users',function(){
    return view('admin.users');
});
Route::get('adduser',function(){
    return view('admin.login');
});
Route::get('edituser',function(){
    return view('admin.edituser');
});
Route::get('categories',function(){
    return view('admin.categories');
});
Route::get('addCategory',function(){
    return view('admin.addCategory');
});
Route::get('editcategory',function(){
    return view('admin.editCategory');
});
Route::get('furnitures',function(){
    return view('admin.furnitures');
});
Route::get('addFurniture',function(){
    return view('admin.addFurniture');
});
Route::get('editFurniture',function(){
    return view('admin.editFurniture');
});

















