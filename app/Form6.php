<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form6 extends Model
{
    protected $table = 'forms6';

    protected $fillable = [
    	'id_info','Algorithms_Tecnologies', 
    ];

    protected $hidden = [
    	'id_info','Algorithms_Tecnologies', 
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}