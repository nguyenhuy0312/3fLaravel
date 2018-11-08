<?php
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',function(){
//     return "Trang Chủ !";
// });
// Route::get('/chitiet',function(){
//     $a = 'Đây là trang chi tiết !';
//     return $a;
// });
// Route::get('user/{id}',function($id){
//     return 'user'.$id;
// });
// Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Post '.$postId.' Comments '.$commentId;
// });
// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });
// Route::get('/test',function(){
//     return 'Đây là trang Test';
// })->name('user.test');

// Route::get('/chidentrangtest/{so1}/{so2}',function($so1,$so2){
//     if($so1 + $so2 == 2){
//         return redirect()->route('user.test'); //Chuyển hướng tới 1 route khác
//     }else{
//         return 'Vẫn ở trang này k phải trang TEST';
//     }
// })->name('user.chiden');

// Route::group(['prefix' => 'user'],function(){
//     Route::get('/',function(){
//         return 'user/';
//     })->name('user.route1');
//     Route::get('/danhsach',function(){
//         return 'user/danhsach';
//     })->name('user.route2');
// });
Route::get('/','Huycontroller@index'/*index là tên hàm bên controller */)->name('user.index');
Route::get('/pagetest','Huycontroller@getviews')->name('user.pagetest');
Route::get('/user/login','Auth\LoginController@Login')->name('cusomer.login');
Route::post('/user/login','Auth\LoginController@postLogin');
Route::get('/home', 'Auth\LoginController@Logined')->name('homeIndex');

Route::get('/user/register','Auth\RegisterController@Register')->name('register');
Route::post('/user/register','Auth\RegisterController@PostRegister')->name('registerPost');

Route::get('/user/update','Auth\UserUpdateController@getUpdate')->name('getUpdate');
Route::post('/user/update','Auth\UserUpdateController@postUpdate');

Route::get('/user/changePassword', 'Auth\ChangePassword@index')->name('changePassword');
Route::post('/user/changePassword', 'Auth\ChangePassword@change');

Route::get('/getdata','Huycontroller@getdata')->name('user.getdata');
Route::get('/detail','Huycontroller@detail'/*index là tên hàm bên controller */)->name('user.detail');
Auth::routes();
Route::get('/{slug}', function(){
  return "caigi cung ra";
});