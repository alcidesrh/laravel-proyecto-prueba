<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    protected $table = 'car_type';

    protected $fillable = ['name', 'feed'];
}
