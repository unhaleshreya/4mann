<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediablog extends Model
{
    use HasFactory;
    protected $table = 'media_blog';
    protected $fillable = ['title', 'slug', 'html_content', 'image'];
}
