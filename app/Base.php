<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    protected $table = 'bases';

    protected $fillable = [
    	'id_Art','titulo', 'year', 'id_revista', 'tipo',
    ];

    protected $hidden = [
    	'id_Art','titulo', 'year', 'id_revista', 'tipo',
    ];

    public function revista()
    {
        return $this->belongsTo('App\Revista');
    }
    public function tema()
    {
        return $this->hasMany('App\Tema');
    }
    public function autor()
    {
        return $this->hasMany('App\Autor');
    }
}
