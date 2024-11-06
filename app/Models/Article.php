<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'vlog_overview',
        'description',
        'author',
        'published',
        'profile_image',

    ];

    public function User()
    {
        return $this->hasMany(Article::class);
    }
}
