<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Experience extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $fillable = [
        'title',
        'type',
        'start_date',
        'end_date',
        'company',
        'location',
        'description',
        'competencies',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'description' => 'json',
        'competencies' => 'json',
    ];

    public $translatable = ['title', 'type', 'company', 'location', 'type', 'description', 'compentencies']; // Ces champs seront traduisibles


}
