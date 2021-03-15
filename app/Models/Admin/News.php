<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'photo', 'date', 'title', 'content', 'thumbnail'
    ];

    protected $hidden = [];
}
