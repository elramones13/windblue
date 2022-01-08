<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buceador extends Model
{
    use HasFactory;
    protected $table = "buceadores";
    public $timestamps = false;
}
