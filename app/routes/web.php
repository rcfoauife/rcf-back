<?php
use App\department;
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
    return view('layouts.admin')->with(['title'=>'Dash']);
});

//user site
Route::get('/posts',['as'=>'blog','uses'=>'HomeController@blog']);
Route::get('/downloads',['as'=>'downloads','uses'=>'HomeController@downloads']);
Route::get('/newUser',['as'=>'register','uses'=>'HomeController@register']);
Route::post('/newUser','userRegistration@create');
Route::get('/edit',['as'=>'edit','uses'=>'HomeController@edit']);


//Laravel authorization routes....breeze
Auth::routes();


Route::get('/downloads/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get']);


Route::group(['prefix'=>'/admin/'], function(){

	//major routes
	Route::get('/dashboard',['as' => 'dashboard', 'uses' => 'adminMajorController@dashboard']);
	Route::get('/allUsers', ['as' => 'allUsers', 'uses' => 'adminMajorController@allUsers']);
	Route::get('/users',['as' => 'users', 'uses' => 'adminMajorController@users']);
	Route::get('/subGroup',['as' => 'subGroup', 'uses' => 'adminMajorController@subGroup']);
	Route::get('/addPost',['as' => 'addPost', 'uses' => 'adminMajorController@addPost']);
	Route::get('/addDownload',['as' => 'addDownload', 'uses' => 'adminMajorController@addDownload']);

	//
	Route::get('/sort','sortController@sort');
	Route::get('/search','sortController@search');

	//set session
	Route::post('/setSession','user_operations@setSession');
	//roles and authorization
	Route::get('/users/addRole/{id}',['as'=>'users', 'uses'=>'adminMajorController@addRole']);
	Route::get('/users/search',['as'=>'users', 'uses'=>'rolesController@search_user']);
	Route::post('/user/update','rolesController@save');
	//blog routes
	Route::post('blog', 'blogController@store');
	Route::delete('blog/{id}', 'blogController@destroy');
	//file upload route	
	Route::post('/file',['as' => 'addentry', 'uses' => 'FileEntryController@add']);

});


/*
Route::get('/test', function(){
	$fills = [ 'African Languages and Literature','Dramatic Arts',
				'Fine and Applied Arts','Foreign Languages',
				'History','Linguistics','Literature in English',
				'Music','Philosophy','Psychology',
				'Religious Studies','Sociology and Anthropology',
				'Biochemistry','Botany','Chemical Pathology',
				'Chemistry','Geology','Mathematics','Microbiology',
				'Physics','Zoology','Medical Rehabilitation',
				'Management and Accounting','Public Administration',
				'Agricultural Extension and Rural Sociology','Animal Science',
				'Crop production','Food Nutrition and Consumer Sciences',
				'Plant Science','Soil Science','Educational Administration and Planning',
				'Educational Foundation and Counseling','Educational Technology',
				'English Language','pharmarcy','Architecture','Building',
				'Estate Management','Quantity Surveying','Urban and Regional Planning',
				'Agricultural and Environmental Engineering','Chemical Engineering',
				'Civil Engineering','Computer Science and Engineering','Food Science and Technology',
				'Mechanical Engineering','Materials Science & Engineering','Electronic and Electrical Engineering',
				'Demography and Social Statistics','Economics','Geography','Political Science'
			];

	foreach ($fills as $name) {
		department::create([
				'name'=>$name
			]);
	}
});
