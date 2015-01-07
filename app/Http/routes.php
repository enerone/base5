<?php







Route::bind('series', function($slug){
    return App\Serie::whereSlug($slug)->first();
});


Route::resource('series', 'SeriesController');
