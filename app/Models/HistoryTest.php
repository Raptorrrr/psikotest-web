<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistoryTest extends Model
{
    use HasFactory;

    protected $table = 'history_tests';

    protected $fillable = [
        'user_id',
        'session_id',
        'correct_answer',
        'wrong_answer',
        'start_at',
        'finish_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }
}
