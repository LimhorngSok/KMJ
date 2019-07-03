<?php
Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});

Route::get('/About-Us', function(){
  return view('index');
});
Route::get('/Schedule', function(){
  return view('schedule');
});
Route::get('/InProcess', 'ScheduleController@index');

Route::get('/booking/{type}', function($type){
  return view('destination')->with('type',$type);
});
Route::get('/booking/{type}/schedule', function($type){
  return view('schedule')->with('type',$type);
});
Route::get('/booking/{type}/schedule', 'ScheduleController@show');
//   return view('schedule')->with('type',$type);
// });


Route::resource('/Contact_Us','ContactUsController');

Route::group(['namespace' => 'User'],function(){
  Route::get('Blog','HomeController@index');
	Route::get('post/{post}','PostController@post')->name('post');

	Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
	Route::get('post/category/{category}','HomeController@category')->name('category');

	//vue routes
	Route::post('getPosts','PostController@getAllPosts');
	Route::post('saveLike','PostController@saveLike');
});

//Admin Routes
Route::group(['namespace' => 'Admin'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');
	// Users Routes
	Route::resource('admin/user','UserController');
	// Roles Routes
	Route::resource('admin/role','RoleController');
	// Permission Routes
	Route::resource('admin/permission','PermissionController');
	// Post Routes
	Route::resource('admin/post','PostController');
	// Tag Routes
	Route::resource('admin/tag','TagController');
	// Category Routes
	Route::resource('admin/category','CategoryController');
	// Admin Auth Routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Schedulel
Route::get('/addSchedule','ScheduleController@add');
