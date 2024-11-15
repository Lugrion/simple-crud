<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    /** @use HasFactory<\Database\Factories\LabelFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'label_task');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
