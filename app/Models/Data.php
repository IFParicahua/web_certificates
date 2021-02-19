<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'data';

    protected $fillable = [
        'dimension',
        'colada',
        'masa_lineal',
        'fy_mpa',
        'fs_mpa',
        'fs_fy',
        'alargamiento',
        'doblado',
        'alturanerv_mm',
        'espacnerv_m',
        'angNerv_mm',
        'gap',
    ];
}
