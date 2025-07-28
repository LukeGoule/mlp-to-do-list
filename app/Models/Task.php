<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $fillable = [
        'number',
        'name',
        'completed',
    ];

    protected $casts = [
        'number' => 'integer',
        'name' => 'string',
        'completed' => 'boolean',
    ];
}
