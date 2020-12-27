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


define('ADMINPATH', url('resources/views/admin'));
define('SITEPATH', url('resources/views/site'));
define('UPLOADPATH', base_path('uploads'));
define('UPLOAD', url('uploads'));
define('UPLOADPATTERN', 'jpeg,jpg,png,bmp,pdf');
define('ADMIN', 'admin');
define('SITE', 'site');



Route::get('/', 'FrontController@home');
Route::get('404', 'FrontController@p404');
Route::get('about-us', 'FrontController@aboutUs');
Route::get('gpa', 'FrontController@gpa');
Route::get('download-{id?}', 'FrontController@Download');
Route::get('programs', 'FrontController@Programs');
Route::get('news', 'FrontController@News');
Route::get('news/{id}', 'FrontController@NewsById');
Route::get('gallary', 'FrontController@Gallary');
Route::get('contact-us', 'FrontController@contactUs');
Route::post('contact-us', 'FrontController@postContactUs');
Route::get('plan-{id}', 'FrontController@getPlan');
Route::get('link-{id}', 'FrontController@getLink');
Route::get('closed', 'SettingsController@closed');






Route::group(['middleware' => ['guest:admin']], function(){
    Route::get('admin/login', 'LoginController@loginForm');
    Route::post('admin/login', 'LoginController@Login');
    Route::post('admin/remember', 'LoginController@Remember');
    Route::get('admin/reset/{token}', 'LoginController@Reset');
    Route::post('admin/reset/{token}', 'LoginController@ResetPost');
});

Route::group(['middleware' => ['auth:admin']], function(){
    Route::get('admin', 'HomeController@Home');
    Route::get('admin/logout','LoginController@logout');

    Route::get('admin/settings', 'SettingsController@Settings');
    Route::post('admin/settings', 'SettingsController@postSettings');

    Route::get('admin/profile', 'SettingsController@Profile');
    Route::post('admin/profile', 'SettingsController@postProfile');
    Route::get('admin/about', 'SettingsController@About');
    Route::post('admin/about', 'SettingsController@postAbout');

    Route::get('admin/toggle/{col}/{name}/{id}', 'HomeController@activeToggle');

    Route::resource('admin/admins', 'AdminsController');
    Route::post('admin/admins/deletelist', 'AdminsControllerAdminsController@deleteList');
    Route::get('admin/admins/{id}/delete', 'AdminsController@destroy');
    Route::resource('admin/slides', 'SlidesController');
    Route::post('admin/slides/deletelist', 'SlidesController@deleteList');
    Route::get('admin/slides/{id}/delete', 'SlidesController@destroy');

    Route::resource('admin/pages', 'PagesController');
    Route::post('admin/pages/deletelist', 'PagesController@deleteList');
    Route::get('admin/pages/{id}/delete', 'PagesController@destroy');

    Route::resource('admin/news', 'NewsController');
    Route::post('admin/news/deletelist', 'NewsController@deleteList');
    Route::get('admin/news/{id}/delete', 'NewsController@destroy');

    Route::resource('admin/programs', 'ProgramsController');
    Route::post('admin/programs/deletelist', 'ProgramsController@deleteList');
    Route::get('admin/programs/{id}/delete', 'ProgramsController@destroy');

    Route::resource('admin/galaries', 'GalariesController');
    Route::post('admin/galaries/deletelist', 'GalariesController@deleteList');
    Route::get('admin/galaries/{id}/delete', 'GalariesController@destroy');

    Route::resource('admin/contacts', 'ContactsController');
    Route::post('admin/contacts/deletelist', 'ContactsController@deleteList');
    Route::get('admin/contacts/{id}/delete', 'ContactsController@destroy');

    Route::resource('admin/download_cats', 'DownloadCatsController');
    Route::post('admin/download_cats/deletelist', 'DownloadCatsController@deleteList');
    Route::get('admin/download_cats/{id}/delete', 'DownloadCatsController@destroy');

    Route::resource('admin/downloads', 'DownloadsController');
    Route::post('admin/downloads/deletelist', 'DownloadsController@deleteList');
    Route::get('admin/downloads/{id}/delete', 'DownloadsController@destroy');

    Route::resource('admin/media', 'MediaController');
    Route::post('admin/media/deletelist', 'MediaController@deleteList');
    Route::get('admin/media/{id}/delete', 'MediaController@destroy');

    Route::post('uploader', 'HomeController@Uploader');

});


