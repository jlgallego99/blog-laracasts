<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) {
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%'));
        } else if ($filters['category'] ?? false) {
            $query->whereHas('category', fn($query) => // 'category' here means the category function below
                $query->where('slug', request('category'))
            );
        } else if ($filters['author'] ?? false) {
            $query->whereHas('author', fn($query) => // 'category' here means the category function below
                $query->where('username', request('author'))
            );
        }
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
