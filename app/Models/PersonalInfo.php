<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PersonalInfo extends Model
{
    use HasTranslations;

    protected $guarded = [];
    public $translatable = ['hero_title', 'about_text'];
}
