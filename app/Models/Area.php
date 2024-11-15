<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    /** @use HasFactory<\Database\Factories\AreaFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}