<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Graduation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'photo', 'npm', 'email', 'name', 'gender', 'year', 'address'
    ];
}
