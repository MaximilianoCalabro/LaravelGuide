<?php

namespace admin;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table='portfolio';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
    	'titulo',
    	'subtitulo',
    	'imagen',
    	'link'
    ];

    protected $guarded =[

    ];
    
}
