<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable =[
        'category_id',
        'user_id',
        'title',
        'content',
        'slug',
        'feactured_image',
        'is_feactured',
        'is_published'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function users()
    {
    return $this->belongsTo(User::class);
    }
    public function tagss()
    {
        return $this->belongsToMany(Tag::class);
    }
}
