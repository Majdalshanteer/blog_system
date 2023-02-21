<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Category extends Model
{
  
    use HasFactory, Searchable;

    protected $fillable = [
        'category_name',
        'image',
        'description',
        'user_id',
        'parent_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }



    public function toSearchableArray()
    {
        return [
            'category_name' => $this->category_name,
            // 'description' => $this->description
        ];
    }
}
