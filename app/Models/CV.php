<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CV extends Model
{
    /** @use HasFactory<\Database\Factories\CVFactory> */
    use HasFactory;
    protected $table = 'cv';

    protected $fillable = [
        'title',
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

    protected $casts = [
        'experiences' => 'array',
        'educations' => 'array',
        'skills' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
