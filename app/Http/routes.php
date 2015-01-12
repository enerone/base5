<?php







Route::bind('series', function($slug){
   
    return App\Serie::whereSlug($slug)->first();
});

Route::patch('series/{slug}/ultimo','SeriesController@ultimo');


Route::resource('series', 'SeriesController');

/*get('user/login', 'Auth\AuthController@showLoginForm');
post('user/login', 'Auth\AuthController@postLogin');*/


get('user/register', 'Auth\AuthController@getRegister');

post('user/register', 'Auth\AuthController@postRegister');
