<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'product_code',
        'product_title',
        'product_desc',
        'product_image',
        'slug'
    ];

    public function category()
    {
        return $this->belongsTo(categories::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(subcategory::class, 'sub_category_id');
    }
}
