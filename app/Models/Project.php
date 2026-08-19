<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'summary',
        'challenge',
        'solution',
        'tech_stack',
        'client_name',
        'project_url',
        'thumbnail',
        'gallery',
        'is_featured',
        'order',
    ];

    protected function casts(): array
    {
        return [
            'tech_stack' => 'array',
            'gallery' => 'array',
            'is_featured' => 'boolean',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
