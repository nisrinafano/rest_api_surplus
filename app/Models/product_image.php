<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'product_image';

    protected $fillable = [
        'product_id',
        'image_id'
    ];
}
