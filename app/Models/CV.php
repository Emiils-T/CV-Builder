<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    /** @use HasFactory<\Database\Factories\CVFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone_number',
        'date_of_birth',
        'address',
        'experience',
        'education',
        'languages',
        'skills'
    ];
}
