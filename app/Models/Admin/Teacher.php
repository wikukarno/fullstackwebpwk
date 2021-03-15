<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'photo', 'name', 'nidn', 'position', 'education', 'university', 'expertise', 'email'
    ];
}
