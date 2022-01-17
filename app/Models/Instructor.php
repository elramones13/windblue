<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $table = "instructores";
    public $timestamps = false;
    protected $guarded = ['id'];

    public function inmersiones()
    {
        return $this->hasMany(Inmersion::class);
    }
}
