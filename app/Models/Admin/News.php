<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class News extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'photo', 'date', 'title', 'slug', 'content', 'thumbnail'
    ];

    protected $hidden = [];
}
