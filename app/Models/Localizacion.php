<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localizacion extends Model
{
    use HasFactory;
    protected $table = "localizaciones";
    public $timestamps = false;
    protected $guarded = ['id'];

    public function buceos()
    {
        return $this->hasMany(Inmersion::class);
    }
}
