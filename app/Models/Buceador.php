<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buceador extends Model
{
    use HasFactory;
    protected $table = "buceadores";
    public $timestamps = false;
    protected $guarded = ['id'];
}
