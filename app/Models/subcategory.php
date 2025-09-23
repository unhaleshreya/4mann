<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;
    protected $table = "sub_categories";
    protected $fillable = [
        "name","category_id","sub_category_img","slug"
    ];
    public function category()
    {
        return $this->belongsTo(categories::class, 'category_id');
    }
}
