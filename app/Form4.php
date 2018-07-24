<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form4 extends Model
{
    protected $table = 'forms4';

    protected $fillable = [
    	'id_info','Tema1', 'Tema2', 'Tema3','Tema4','Country', 'Focus', 'Agency','Keyboard', 'Abstract',
    ];

    protected $hidden = [
    	'id_info','Tema1', 'Tema2', 'Tema3','Tema4','Country', 'Focus', 'Agency','Keyboard', 'Abstract',
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}
