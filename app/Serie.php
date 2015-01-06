<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Serie  extends Eloquent{

        protected $fillable=[
          'titulo', 'temporadas','slug', 'descripcion'
        ];
}