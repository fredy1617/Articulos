<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
	protected $table = 'revistas';

    protected $fillable = [
    	'id','nombre',
    ];

    protected $hidden = [
    	'id','nombre',
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}
