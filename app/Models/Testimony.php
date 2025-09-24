<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use HasFactory;
    protected $table = 'project_testimony';
    protected $fillable = ['name', 'message', 'customer_type', 'image_path', 'rating'];
}
