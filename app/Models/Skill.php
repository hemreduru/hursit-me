<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Skill extends Model
{
    use HasTranslations;

    protected $guarded = [];
    public $translatable = ['category'];

    public function usages()
    {
        return $this->hasMany(SkillUsage::class)->orderBy('sort_order');
    }
}
