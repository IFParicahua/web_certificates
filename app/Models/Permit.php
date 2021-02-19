<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    use HasFactory;

    protected $table = 'permits';

    protected $fillable = [
        'guardar',
        'editar',
        'generar',
        'user_id',
        'rol_id',
    ];

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function rol(){
        return $this->belongsTo(Rol::class , 'rol_id');
    }
}
