<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{ 
    protected $table = 'autores';

    protected $fillable = [
    	'id_info','autor1', 'autor2', 'autor3', 'autor4','autor5','autor6', 'autor7', 'autor8', '9','autor10', 
    ];

    protected $hidden = [
    	'id_info','autor1', 'autor2', 'autor3', 'autor4','autor5', 'autor6', 'autor7', 'autor8', '9','autor10', 
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}
