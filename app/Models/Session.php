<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property $id
 * @property $type_id
 * @property $session
 * @property $time
 * @property $count_answer
 */

class Session extends Model
{
    use HasFactory;

    protected $table = 'sessions';

    protected $fillable = [
        'type_id',
        'session',
        'time',
        'count_answer',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    public function historyTestes(): HasMany
    {
        return $this->hasMany(HistoryTest::class);
    }
}
