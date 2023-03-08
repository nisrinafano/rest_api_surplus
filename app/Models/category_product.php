<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_product extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'category_product';

    protected $fillable = [
        'product_id',
        'category_id'
    ];
}
