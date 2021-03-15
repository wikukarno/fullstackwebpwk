<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Statistic extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'alumni', 'mahasiswa', 'dosen', 'gedung', 'prestasi', 'labor'
    ];
}
