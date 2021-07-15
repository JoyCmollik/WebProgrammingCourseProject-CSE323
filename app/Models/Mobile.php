<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory;

    protected $table = 'mobiles'; // to define table
    // protected $primaryKey = 'id'; // to change the primay key
    protected $fillable = ['brand', 'model', 'processor', 'ram', 'rom', 'gpu', 'display', 'price']; // the inputs that are available to user end
}
