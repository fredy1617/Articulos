<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form3 extends Model
{
    protected $table = 'forms3';

    protected $fillable = [
    	'id_info','Country', 'Focus', 'Tecnology', 'Economic','Environment','Social', 'Other', 'Keyboard', 'Abstract',
    ];

    protected $hidden = [
    	'id_info','Country', 'Focus', 'Tecnology', 'Economic','Environment','Social', 'Other', 'Keyboard', 'Abstract',
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}
