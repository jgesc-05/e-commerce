<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    protected $table = "brand";
    protected $primaryKey = "id";
    protected $fillable = ["name"];
    public $timestamps = true;
}
