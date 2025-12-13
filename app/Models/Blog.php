<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasTranslations;

    protected $guarded = [];
    public $translatable = ['title', 'slug', 'content'];

    protected $casts = [
        'published_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    public function getPublishedAtAttribute($value)
    {
        return $value ? \Illuminate\Support\Carbon::parse($value) : null;
    }
}
