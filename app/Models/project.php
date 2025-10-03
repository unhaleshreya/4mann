<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\products;
use App\Models\ProjectImage;
use App\Models\State;
use App\Models\City;

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
    ];
    public function product() {
    return $this->belongsTo(products::class, 'project_products_id');
}
public function images()
{
    return $this->hasMany(ProjectImage::class);
}
public function state()
{
    return $this->belongsTo(State::class, 'project_state', 'id');
}
public function city()
{
    return $this->belongsTo(City::class, 'project_city', 'id');
}
}
