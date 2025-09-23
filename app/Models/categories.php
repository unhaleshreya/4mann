<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "slug",
        "status",
        "has_subcategories",
    ];

    public function subCategories()
    {
        return $this->hasMany(subcategory::class, 'category_id');
    }
}
