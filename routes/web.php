
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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/','HomeController@index');
Route::get('/about-us','HomeController@aboutUs');
Route::get('/courses','HomeController@courses');
Route::get('/contact','HomeController@contact');
Route::post('contact','HomeController@contactStore');
Route::get('/services','HomeController@services');
Route::get('/sub-course/{id}','HomeController@sub_courses');




//************Admin section*************//
Route::get('admin/login','Admin\loginController@login');
Route::post('admin/login','Admin\loginController@authentication');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware'=>'admin'],function(){

	Route::get('home','loginController@home');
	Route::get('contact','StaticController@contact');
	Route::get('logout',function(){
		\Auth::logout();
	      return redirect('admin/login');
	});


//******************SLiders section*******
	Route::resource('sliders', 'sliderController');
	Route::group(['prefix' => 'sliders'],function(){
		Route::post('/status', 'sliderController@changeStatus');
		Route::post('/{id}/delete','sliderController@deleteSlider');
	});
	
//******************Partners section*******
	Route::resource('our-partners', 'PartnerController');
	Route::group(['prefix' => 'our-partners'],function(){
		Route::post('/status', 'PartnerController@changeStatus');
		Route::post('/{id}/delete','PartnerController@deletePartner');
	});
	

//*************General Settings***********
	Route::get('general-settings','GeneralSetting@settings');
	Route::post('general-settings','GeneralSetting@changeSetting');

//*************Courses Section***********
	Route::get('list-courses','CourseController@index');
	Route::get('main-courses/add','CourseController@addMainCourses');
	Route::post('main-courses/add','CourseController@addMain');
	Route::post('main-courses/{id}/delete','CourseController@deleteMainCourses');
	Route::get('main-courses/{id}/edit','CourseController@mainCourseEdit');
	Route::post('main-courses/edit/{id}','CourseController@maincourseUpdate');


	Route::get('sub-courses/add','CourseController@addSubCourses');
	Route::post('sub-courses/add','CourseController@addSub');
	Route::post('list-courses/{id}/delete','CourseController@deleteSubCourses');
	Route::get('sub-courses/edit/{id}','CourseController@subCourseEdit');
	Route::post('sub-courses/edit/{id}','CourseController@subcourseUpdate');

	Route::get('child-courses/add','CourseController@addChildCourses');
	Route::get('sub_course_list','CourseController@ajax_sub_course_list');
	Route::post('child-courses/add','CourseController@addChild');
	Route::post('/{id}/delete','CourseController@deleteChildCourses');
	Route::get('child-courses/{id}/edit','CourseController@childcourseEdit');
	Route::post('child-courses/{id}/edit','CourseController@childCourseUpdate');


});
