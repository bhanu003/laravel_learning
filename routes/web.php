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

//use App\Task;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return view('hello');
});

Route::get('notepad', function () {
    return view('notepad');
});


//Different ways to pass variables to route view

/* Route::get('name', function () {
    return view('name',[
	'user_name'=> 'User',
	'id'=>'30'
	]);
}); */

/* Route::get('name', function () {
    return view('name')->with('user_name','User')->with('id','30');
});
 */
 
/* Route::get('name', function () {
	
	$user_name='User';
	$id='30';
	
    return view('name',['user_name'=>$user_name,'id'=>$id]);
}); */

/* Route::get('name', function () {
	
	$user_name='User';
	$id='30';
	
    return view('name', compact('user_name','id'));
});
 */
 
/*  Route::get('name', function () {
	$user_name='User';
	$id='30';
	$tasks=[
		'Go to: /system/product/etc/prop/',
		'Open local.prop',
		'Find persist.hw_camera.video_sta=false and change to true',
		'Camera app -> video -> setting and find stabilization'
	];
	
    return view('name', compact('user_name','id','tasks'));
}); */


/* Route::get('name/{id}', function ($id) {
	$task=DB::table('tasks')->find($id);
	dd($task);

});


Route::get('tasks', function () {

	$tasks_data=DB::table('tasks')->latest()->get();
	
    return $tasks_data;
}); */


/*  Route::get('/tasks', function () {

	$tasks_data=DB::table('tasks')->latest()->get();
	
    return view('tasks.index', compact('tasks_data'));
});

Route::get('/tasks/{num}', function ($id) {

	$tasks_data=DB::table('tasks')->find($id);
	
    return view('tasks.show', compact('tasks_data'));
});

 */
 
//Switching from Query Builder to Eloquent in a dedicated class

/* Route::get('/tasks', function () {

	$tasks_data=Task::all();
	
    return view('tasks.index', compact('tasks_data'));
});	
	
Route::get('/tasks/{num}', function ($id) {

	$tasks_data=Task::find($id);
	
    return view('tasks.show', compact('tasks_data'));
});
 */
 
 // Creating Controllers
 
Route::get('/tasks','TasksController@index'); 
Route::get('/tasks/{num}','TasksController@show'); 

Route::resource('products','ProductController');
Route::resource('crud', 'CRUDController');

Route::resource('/articles','ArticlesController');
Route::post('/articles/{post}/comments','CommentsController@store');

Route::get('/register','RegistrationController@create'); 
Route::post('/register','RegistrationController@store'); 

Route::get('/login','SessionController@create'); 
Route::post('/logout','SessionController@destroy'); 

/* Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

*/
