<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Diploma extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'title',
        'type',
        'start_date',
        'end_date',
        'institution',
        'location',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public $translatable = ['title', 'type', 'institution', 'location']; // Ces champs seront traduisibles
}
