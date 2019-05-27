<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{

    public $timestamps = false;

    protected $table = "tb_crud";

    protected $primaryKey = "id_crud";

    protected $fillable = [
        'nombre',
        'email',
        'area',
        'Curriculum'
    ];
    
}
