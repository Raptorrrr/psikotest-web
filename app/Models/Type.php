<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

/**
 * @property $order
 * @property $name
 * @property $slug
 * @property $intro
 */

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';

    protected $fillable = [
        'order',
        'name',
        'slug',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function sessions(): HasMany
    {
        return $this->hasMany(Session::class);
    }
}
