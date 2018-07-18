<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form5 extends Model
{
    protected $table = 'forms5';

    protected $fillable = [
    	'id_info','Tema1', 'Tema2', 'Tema3','Tema4','Focus', 'Methodology','Models','Solvers','Keyboard','Abstract',
    ];

    protected $hidden = [
    	'id_info','Tema1', 'Tema2', 'Tema3','Tema4','Focus', 'Methodology','Models','Solvers','Keyboard','Abstract',
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}
