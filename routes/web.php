<?php

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
    return view('welcome');
});


Route::view('/register','register');
Route::post('/store','UserController@store');
Route::view('/login','login');
//Route::post('/store','evencontroller@store');





Route::match(['get','post'],'/logs','UserController@logs');
Route::get('/dashboard ', 'UserController@dashboard');
// Route::get('/login/event','UserController@Event');


	Route::get('/login/settings','UserController@settings');
	 Route::get('/login/check-pwd','UserController@chkPassword');
	 Route::match(['get','post'],'/logs/update-pwd','AdminController@updatePassword');
     Route::get('/login/view-membre', 'MembreController@viewmembres');
     Route::match(['get','post'],'/login/delete-membre/{email}','MembreController@deleteMembre');
     Route::get('/login/view_membres','MembreController@viewmembres');
     Route::get('/login/stat' , 'MembreController@stat');
     Route::get('/login/view-memoffre','memOffreController@afficher');
     Route::get('/login/view-reseffectue','reseffectueController@liste');
     Route::get('/login/view-nonreseffectue','reseffectueController@liste1');
     Route::get('/login/view-lieuoffre','lieuxoffreController@afficher');
     Route::get('/login/my-chart', 'ChartController@chart');
     Route::get('/login/chartgenre','ChartController@chartgenre');
     Route::get('/login/chartres','ChartController@chartRes');
     Route::get('/login/resmois','ChartController@chartRes1') ;
         
     Route::get('/login/line','ChartController@line');


 Route::get('/login/dashboard ', 'UserController@dashboard');
 



Route::get('/logout ', 'UserController@logout');

/*get('/password/email','Auth\ResetPasswordController@getEmail');
/*get('/password/email','Auth\ResetPasswordController@postEmail');
get('/password/reset/{token}','Auth\ResetPasswordController@getReset');
get('/password/reset','Auth\ResetPasswordController@postReset');*/
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/mail','MailController@basic_email');
Route::get('/htmlmail','MailController@html_email');


Route::get('/toMail', function () {

     $user = \App\User::find(1);

    Mail::to($user->email)->send(new \App\Mail\Mail($user));

    

    dd("Email is Send.");

});




//Route::get('login/events','evencontroller@calendar');
//Route::post('login/events','EventController@addEvent')->name('events.add');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
// Route::match(['get','post'],'/login/add-event/{Request}','evencontroller@addEvent');


 Route::get('login/event','evencontroller@event');