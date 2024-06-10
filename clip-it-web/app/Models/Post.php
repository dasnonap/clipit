<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory, HasUuids;

    public $fillable = [
        'title',
        'content',
        'user_id',
        'excerpt',
        'slug'
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
