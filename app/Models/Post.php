<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'page_text',
        'img',
        'status'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function locales()
    {
        return $this->belongsToMany(Locale::class);
    }
}
