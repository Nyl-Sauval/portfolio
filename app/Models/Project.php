<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'summary',
        'description',
        'images',
        'complexity',
        'technologies',
        'start_date',
        'end_date',
        'project_link',
        'status',
        'type',
        'estimated_duration',
        'visibility',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'images' => 'array',
        'technologies' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
        'complexity' => 'integer',
        'estimated_duration' => 'integer',
        'visibility' => 'boolean',
    ];
}
