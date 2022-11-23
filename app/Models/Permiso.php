<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = "permiso";
    protected $fillable = ['nombre', 'slug'];

    //use HasFactory;
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'permiso_rol');
    }
}
