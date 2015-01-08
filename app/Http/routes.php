<?php







Route::bind('series', function($slug){
   
    return App\Serie::whereSlug($slug)->first();
});

Route::patch('series/{slug}/ultimo','SeriesController@ultimo');


Route::resource('series', 'SeriesController');
