<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Tabla y campos editables

    protected $table = "category";
    protected $fillable = ["name"];
    public $timestamps = true;


}
