<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{ 
    protected $table = 'autores';

    protected $fillable = [
    	'id_info','Nombre_1', 'Apellido_1', 'Nombre_2', 'Apellido_2','Nombre_3', 'Apellido_3','Nombre_4', 'Apellido_4','Nombre_5', 'Apellido_5',
    ];

    protected $hidden = [
        'id_info','Nombre_1', 'Apellido_1', 'Nombre_2', 'Apellido_2','Nombre_3', 'Apellido_3','Nombre_4', 'Apellido_4','Nombre_5', 'Apellido_5', 
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}
