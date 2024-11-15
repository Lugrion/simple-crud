<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description', 'urgency', 'deadline'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function labels()
    {
        return $this->belongsToMany(Label::class, 'label_task');
    }
}
