<?php

namespace App\Repositories\Eloquent;

use App\Models\Setting;
use App\Repositories\Contracts\SettingRepositoryInterface;

class EloquentSettingRepository implements SettingRepositoryInterface
{
    public function get($key, $default = null)
    {
        return Setting::where('key', $key)->value('value') ?? $default;
    }

    public function getAll()
    {
        return Setting::all()->pluck('value', 'key');
    }
}
