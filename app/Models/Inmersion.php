<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmersion extends Model
{
    use HasFactory;
    protected $table = "inmersiones";
    public $timestamps = false;
    protected $guarded = ['id'];

    public function instructores(){
        return $this->belongsTo(Instructor::class);
    }
    public function localizacion()
    {
        return $this->belongsTo(Localizacion::class, 'localizacion_id');
    }
}

