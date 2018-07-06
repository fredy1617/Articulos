<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form5 extends Model
{
    protected $table = 'forms4';

    protected $fillable = [
    	'id_info','Focus', 'Methodology','Models','Solvers','Keyboard','Abstract',
    ];

    protected $hidden = [
    	'id_info','Focus', 'Methodology','Models','Solvers','Keyboard','Abstract',
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}
