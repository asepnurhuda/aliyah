<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SiteController@home')->name('home');
Route::get('/daftar', 'SiteController@daftar')->name('daftar');
Route::post('/daftar/create', 'SiteController@create')->name('daftar.create');
Route::get('/daftar/terdaftar', 'SiteController@terdaftar')->name('terdaftar');
Route::get('/profile', 'SiteController@profil')->name('profile');
Route::get('/all-posts', 'SiteController@allPosts')->name('all-post');
Route::get('/agenda', 'SiteController@agendaSekolah')->name('agenda');
Route::get('/all-teachers', 'SiteController@allTeachers')->name('all-teachers');
Route::get('/single-teacher/{id}', 'SiteController@singleTeacher')->name('single-teacher');
Route::get('/all-events', 'SiteController@allEvents')->name('all-events');
Route::get('/single-event/{id}', 'SiteController@singleEvent')->name('single-event');


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin')->name('postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){
    Route::get('/student', 'StudentController@index');
    Route::post('/student-create', 'StudentController@create');

    Route::get('/posts', 'PostController@index')->name('posts.index');
    Route::get('/posts-add','PostController@add')->name('posts.add');
    Route::post('/posts-create','PostController@create')->name('posts.create');
    Route::get('/posts/{id}/delete','PostController@delete')->name('posts.delete');
    Route::get('/posts/{id}/edit','PostController@edit')->name('posts.edit');
    Route::post('/posts/{id}/update','PostController@update')->name('posts.update');


    Route::get('/categories', 'CategoriesController@index')->name('categories.index');
    Route::post('/categories-create', 'CategoriesController@create')->name('categories.create');;
    Route::get('/categories/{id}/delete','CategoriesController@delete')->name('categories.delete');
    Route::get('/categories/{id}/edit','CategoriesController@edit')->name('categories.edit');
    Route::post('/categories/{id}/update','CategoriesController@update')->name('categories.update');


    Route::get('/sliders', 'SliderController@index')->name('sliders.index');
    Route::get('/sliders-add','SliderController@add')->name('sliders.add');
    Route::post('/sliders-create','SliderController@create')->name('sliders.create');
    Route::get('/sliders/{id}/delete','SliderController@delete')->name('sliders.delete');
    Route::get('/sliders/{id}/edit','SliderController@edit')->name('sliders.edit');
    Route::post('/sliders/{id}/update','SliderController@update')->name('sliders.update');

    Route::get('/profile-sekolah', 'ProfileController@index')->name('profile.index');
    Route::get('/profile-add', 'ProfileController@add')->name('profile.add');
    Route::post('/profile-create', 'ProfileController@create')->name('profile.create');
    Route::get('/profile/{id}/delete', 'ProfileController@delete')->name('profile.delete');
    Route::get('/profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');
    Route::post('/profile/{id}/update', 'ProfileController@update')->name('profile.update');
    
    Route::get('/events', 'EventsController@index')->name('events.index'); 
    Route::get('/events-add', 'EventsController@add')->name('events.add'); 
    Route::post('/events-create', 'EventsController@create')->name('events.create');
    Route::get('/events/{id}/delete', 'EventsController@delete')->name('events.delete');
    Route::get('/events/{id}/edit', 'EventsController@edit')->name('events.edit');
    Route::post('/events/{id}/update', 'EventsController@update')->name('events.update');

    Route::get('/teachers', 'TeachersController@index')->name('teachers.index'); 
    Route::get('/teachers-add', 'TeachersController@add')->name('teachers.add'); 
    Route::post('/teachers-create', 'TeachersController@create')->name('teachers.create');
    Route::get('/teachers/{id}/delete', 'TeachersController@delete')->name('teachers.delete');
    Route::get('/teachers/{id}/edit', 'TeachersController@edit')->name('teachers.edit');
    Route::post('/teachers/{id}/update', 'TeachersController@update')->name('teachers.update');

    Route::get('/courses', 'CoursesController@index')->name('courses.index'); 
    Route::get('/courses-add', 'CoursesController@add')->name('courses.add'); 
    Route::post('/courses-create', 'CoursesController@create')->name('courses.create');
    Route::get('/courses/{id}/edit', 'CoursesController@edit')->name('courses.edit'); 
    Route::post('/courses/{id}/update', 'CoursesController@update')->name('courses.update');
    Route::get('/courses/{id}/delete', 'CoursesController@delete')->name('courses.delete');

    Route::get('/ppdb', 'PpdbController@index')->name('ppdb.index');
    Route::get('/ppdb/{id}/detail', 'PpdbController@detail')->name('ppdb.detail');
    Route::get('/ppdb/export', 'PpdbController@exportExcel')->name('ppdb.export');
    Route::get('/ppdb/{id}/exportpdf', 'PpdbController@exportPdf')->name('ppdb.exportpdf');
    Route::get('/ppdb/{id}/diterima', 'PpdbController@diterima')->name('ppdb.diterima');
    Route::get('/ppdb/baru', 'PpdbController@baru')->name('ppdb.baru');
    Route::get('/ppdb/lengkapidata', 'PpdbController@lengkapidata')->name('ppdb.lengkapidata');
    Route::get('/ppdb/persertaditerima', 'PpdbController@pesertaditerima')->name('ppdb.pesertaditerima');
    Route::get('/ppdb/persertaditolak', 'PpdbController@pesertaditolak')->name('ppdb.pesertaditolak');
    Route::get('/ppdb/resetpassword/{id}', 'PpdbController@resetpassword')->name('ppdb.resetpassword');

    Route::get('/admin', 'UserController@index')->name('admin.index'); 
    Route::post('/admin-create', 'UserController@create')->name('admin.create');
    Route::get('/admin/{id}/delete', 'UserController@delete')->name('admin.delete');
    Route::get('/admin/{id}/edit', 'UserController@edit')->name('admin.edit');
    Route::post('/admin/{id}/update', 'UserController@update')->name('admin.update');
});

Route::group(['middleware' => ['auth', 'checkRole:admin,siswa,pendaftar']], function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/student/{id}/detail', 'StudentController@detail')->name('student.detail');
    Route::get('/student/{id}/edit', 'StudentController@edit')->name('student.edit');
    Route::post('/student/{id}/update', 'StudentController@update')->name('student.update');
    Route::get('/changepass/{id}', 'ChangesPassController@change')->name('changepass');
    Route::post('/changepass/{id}/store', 'ChangesPassController@store')->name('changepass.store');
    Route::get('/student/{id}/ppdb', 'StudentController@ppdb')->name('student.ppdb');
    Route::get('/student/{id}/exportpdf', 'StudentController@exportPdf')->name('student.exportpdf');
    Route::get('/student/{id}/pengumuman', 'StudentController@pengumuman')->name('student.pengumuman');
});

Route::get('/{slug}', 'SiteController@singlepost')->name('single.post');

