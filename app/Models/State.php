<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\project;

class State extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function cities()
    {
        return $this->hasMany(City::class);
    }
    public function projects()
    {
        return $this->hasMany(project::class, 'project_state', 'id');
    }
}
