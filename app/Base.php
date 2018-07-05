<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    protected $table = 'bases';

    protected $fillable = [
    	'titulo', 'año', 'id_revista', 'tipo',
    ];

    protected $hidden = [
    	'titulo', 'año', 'id_revista', 'tipo',
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
