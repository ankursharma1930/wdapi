<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'link_to',
        'link_filter',
        'product_name_formula',
        'product_name_suffix',
        'path',
        'parent_id'
    ];
}
