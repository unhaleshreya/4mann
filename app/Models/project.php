<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use App\Models\ProjectImage;

class project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_title',
        'project_image',
        'project_sector',
        'project_description',
        'project_client',
        'project_products_id',
        'project_slug',
        'project_state',
        'project_city',
        'project_location',
    ];
    public function product() {
    return $this->belongsTo(Products::class, 'project_products_id');
}
public function images()
{
    return $this->hasMany(ProjectImage::class);
}
}
