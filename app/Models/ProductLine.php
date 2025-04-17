<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    protected $table = 'productlines';
    protected $fillable = [
        'productLine',
        'textDescription',
        'htmlDescription',
        'image',
    ];
}
