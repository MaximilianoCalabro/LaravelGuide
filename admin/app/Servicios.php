<?php

namespace admin;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $table='servicios';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
    	'titulo',
    	'texto',
    	'subtitulo',
    	'subtexto',
    	'icono'
    ];

    protected $guarded =[

    ];
    
}
