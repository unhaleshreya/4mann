<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'text_content',
        'sub_text_content',
        'mobile_img_path',
        'banner_link',
        'display_order',
    ];
}
