<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(BookCategory::class, 'category_id');
    }

    public function name()
    {
        return $this->belongsTo(BookCategory::class, 'name');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function votes()
    {
    return $this->hasMany(Vote::class, 'vote');
    }
}
