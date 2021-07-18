<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalePost extends Model
{
    use HasFactory;

    protected $table = 'locale_post';

    protected $fillable = [
        'post_id',
        'locale_id'
    ];
}
