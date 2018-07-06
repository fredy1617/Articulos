<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form4 extends Model
{
    protected $table = 'forms4';

    protected $fillable = [
    	'id_info','Country', 'Focus', 'Agency',
    ];

    protected $hidden = [
    	'id_info','Country', 'Focus', 'Agency',
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}
