<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SkillUsage extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['skill_id', 'description', 'sort_order'];
    public $translatable = ['description'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
