<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    protected $table = 'products';
    public $timestamps = false;

    //Declarando quais inputs do form
    protected $fillable = [
        'ID',
        'NAME',
        'DETAILS'         
    ];
}
