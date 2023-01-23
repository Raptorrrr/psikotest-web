<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property $id
 * @property $session_id
 * @property $question
 * @property $image
 * @property $order
 * @property $correct_answer
 * @property $is_import
 */

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';
    protected $fillable = [
        'session_id',
        'question',
        'image',
        'is_import',
        'order',
        'correct_answer',
    ];

    /**
     * Interact with the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function correctAnswer(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value),
            set: fn ($value) => json_encode($value),
        );
    }

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

    public function choices(): HasMany
    {
        return $this->hasMany(QuestionChoice::class);
    }

    public function userAnswers(): HasMany
    {
        return $this->hasMany(UserAnswer::class);
    }
}
