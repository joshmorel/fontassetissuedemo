<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function likes()
    {
        return $this->belongsToMany(User::class, 'product_likes', 'product_id', 'user_id')
            ->withTimestamps();
    }

    public function toggleLike($user)
    {
        $this->likes()->toggle($user);
    }

    public function getLikedAttribute()
    {
        return auth()->check() &&
            $this->likes()
              ->where('user_id', auth()->user()->id)
              ->exists();
    }
}
