<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'name', 'image', 'price', 
    ];
}
