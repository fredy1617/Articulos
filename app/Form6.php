<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form6 extends Model
{
    protected $table = 'forms6';

    protected $fillable = [
    	'id_info','Tema1', 'Tema2', 'Tema3','Tema4','Algorithms_Tecnologies', 
    ];

    protected $hidden = [
    	'id_info','Tema1', 'Tema2', 'Tema3','Tema4','Algorithms_Tecnologies', 
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}