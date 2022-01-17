<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Http\InstructorController;

class ValidarDni implements Rule
{
    public function __construct()
    {
        //
    }
    public function passes($attribute, $value)
    {
  
        $letra = substr($value, -1);
        $numeros = substr($value, 0, -1);
        $valido;
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
          return true;
        }else{
          return false;
        }
        
    }
    public function message()
    {
        return 'Introduce un DNI correcto';
    }
}
