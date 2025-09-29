<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\project;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'state_id'];
      public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function projects()
    {
        return $this->hasMany(project::class, 'project_state', 'id');
    }
}
