<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarData extends Model
{
    use HasFactory;

    protected $table = "cars";
    protected $fillable = ["name","category","image","rentperday","availability"];
}
