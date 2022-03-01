<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
use \App\Http\Controllers\PostController;
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
    return view('layout/master');
    // return "Hello World Form php Laravel";
});
Route::get('/login', function () {
    $form = <<<FORM
        <form action ="handle" method="get">
        Name </br>
        <input type="text" name="name"><br><br>
        Email </br>
        <input type="text" name="email"><br><br>
        <input type="submit" value="Login">
        </form>
    FORM;
    return $form;
    return '<h1>This is Login Page</h1>';
});
Route::get('/about', function () {
    return '<h1>This is About Page</h1>';
});
Route::get('/contact', function () {
    return '<h1>This is Contact Page</h1>';
});
Route::get('/handle', function (Request $request) {
    
    $name = $request->name;
    $email = $request->email;
     
    echo $name;
    echo "</br>";
    echo $email;
});

//Route View
// Route::get('/hello/{id}/{age?}',function($id,$age=''){
//     echo $id;
//     echo "<br/>";
//     echo $age;
//     echo "<br/>";
//     return view('hello');
// })->where('id','[0-9]{2}')->where('age','[a-zA-Z2]+');

Route::get('/hello/{id}/{age?}',function($id,$age=''){
    echo $id;
    echo "<br/>";
    echo $age;
    echo "<br/>";
    return view('hello');
})->where(['id'=>'[0-9]{2}','age'=>'[a-z]+']);

Route::view('hello-world','hello');  // view Route

// Route::get('/data-passing',function(){
//      $data['name'] = 'Brijesh';
//      $data['mobile'] = '7524998203';
//      $data['email'] = 'brijesh@gmail.com';
//     return view('hello',$data);
// });


// Route::get('/data-passing',function(){
//     $name = 'Brijesh';
//     $mobile = '7524998203';
//     $email = 'brijesh@gmail.com';
//    return view('hello',compact($name,$mobile,$email));

// $name = 'Brijesh Kumar';
// $mobile = '7524998203';
// $email = 'brijesh@gmail.com';
// return view('hello')
// ->with('name',$name)
// ->with('mobile',$mobile)
// ->with('email',$email);

// });

Route::get('/add-form',function(){
    return view('task.form'); //resource/views/task/form.blade.php
});
Route::post('add-value',function(Request $request){
    $num1 = $request->num1;
    $num2 = $request->num2;
    $sum = $num1 + $num2;
    echo "Sum Of Two Numbers = ".$sum;
});

Route::get('/add-post',function(){
    return view('addpost');
});


Route::get('/post/create',function(){
    return view('addpost');
});

Route::get('/post/show',function(){
    return view('show');
});
Route::post('post/store',[PostController::class,'store']);


