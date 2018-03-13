<?php

namespace admin;

use Illuminate\Database\Eloquent\Model;

class Institucional extends Model
{
    protected $table='institucional';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
    	'titulo',
    	'texto',
    	'prezi'
    ];

    protected $guarded =[

    ];
    
}
