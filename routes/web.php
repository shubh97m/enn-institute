
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
Route::get('/faq','HomeController@faq');
Route::get('/gallery','HomeController@gallery');
Route::get('/courses','HomeController@courses');
Route::get('/courses/{id}','HomeController@courseView');
Route::get('/contact','HomeController@contact');
Route::post('contact','HomeController@contactStore');
Route::get('/services','HomeController@services');
Route::get('/search','HomeController@search');
Route::post('/subscribe','HomeController@subscribe');
Route::get('/sub-course/{id}','HomeController@sub_courses');
Route::get('/view-course','HomeController@view_course');
Route::get('/courseOffered','HomeController@offered_course');
Route::get('/ask-a-demo','HomeController@askDemo');
Route::post('/askdemo','HomeController@askDemoStore');
Route::post('/scholarship','HomeController@Register');
Route::post('/callback','HomeController@callBack');



//************Admin section*************//
Route::get('admin/login','Admin\loginController@login');
Route::post('admin/login','Admin\loginController@authentication');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware'=>'admin'],function(){

	Route::get('home','loginController@home');
	Route::get('contact','StaticController@contact');
	Route::get('ask-demo','StaticController@demo');
	Route::get('ask-demo/export','StaticController@exportDemo');
	Route::get('ask-demo/print','StaticController@demopdf');
	Route::get('logout',function(){
		\Auth::logout();
	      return redirect('admin/login');
	});


//******************SLiders section*******
	Route::resource('sliders', 'sliderController');
	Route::get('list/{type}', 'ScholarshipController@index');
	Route::group(['prefix' => 'sliders'],function(){
		Route::post('/status', 'sliderController@changeStatus');
		Route::post('/{id}/delete','sliderController@deleteSlider');
	});
	
//******************Partners section*******
	Route::resource('our-partners','PartnerController');
	Route::group(['prefix' => 'our-partners'],function(){
		Route::post('/status', 'PartnerController@changeStatus');
		Route::post('/{id}/delete','PartnerController@deletePartner');
	});
	
//******************Partners section*******
	Route::resource('scholarship','ScholarshipController');
		Route::group(['prefix' => 'scholarship'],function(){
		Route::post('/{id}/delete','sliderController@deleteScholarship');

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
	Route::post('child-courses/{id}/delete','CourseController@deleteChildCourses');
	Route::get('child-courses/{id}/edit','CourseController@childcourseEdit');
	Route::post('child-courses/{id}/edit','CourseController@childCourseUpdate');

//Gallery 
	Route::get('callback/print', 'TestimonialController@pdfcallBack');
	Route::get('callback/export', 'TestimonialController@exportcallBack');
	Route::get('callback','TestimonialController@callBackList');
	Route::resource('gallery','GalleryController');
	Route::post('testimonialDel/{id}/delete','TestimonialController@destroy');
	Route::resource('testimonial','TestimonialController');
	Route::group(['prefix' => 'gallery'],function(){
	  Route::post('/status', 'GalleryController@changeStatus');
	  Route::post('/{id}/delete','GalleryController@deleteGallery');	
	});
	Route::get('gallery-category','GalleryController@list');
	Route::post('gallery-category/{id}/delete','GalleryController@deleteGalleryCategory');

//Gallery 
	   Route::get('gallery-category/edit/{id}','GalleryController@editCategory');
	   Route::get('gallery-category/create','GalleryController@addCategory');
	   Route::post('gallery-category/store','GalleryController@storeCategory');
	   Route::post('gallery-category/update/{id}','GalleryController@updateCategory');

//trainings
	Route::resource('trainings','TrainingController');
		Route::group(['prefix' => 'trainings'],function(){
		Route::post('/{id}/delete','TrainingController@deleteTraining');
	});

		Route::get('staticpages','StaticController@staticpageList');
		Route::get('staticpages/{id}/edit','StaticController@editStaticPage');
		Route::post('staticpages/edit/{id}','StaticController@staticpageUpdate');
		Route::get('subscriber','StaticController@subscriberList');
	
	});
