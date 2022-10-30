<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RentalRequest extends Model
{
    use HasFactory;

    protected $table = "rentalrequest";
    protected $fillable = ["user_id","car_id","carname","days","totalrent"];
}
