<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    protected $table = 'forms1';

    protected $fillable = [
    	'id_info', 'Tema1', 'Tema2', 'Tema3','Tema4','Focus', 'Type', 'Agency','Open_access','Parameters', 'Keyboard', 'Abstract',
    ];

    protected $hidden = [
    	'id_info', 'Tema1', 'Tema2', 'Tema3','Tema4', 'Focus', 'Type', 'Agency','Open_access','Parameters', 'Keyboard', 'Abstract',
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}
