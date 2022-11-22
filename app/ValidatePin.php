<?php
namespace App;

class ValidatePin {

    public static function isValidPin(string $pin): bool {
        
        //descomponer la cadena por elementos
        $elementsPin =  str_split($pin);
        
        //validar que los elementos sean números validos enteros e igual o mayor a cero
        foreach($elementsPin as $p){
            if( is_numeric($p) AND ($p>=0) ){
                continue;
            }else{
                return false;
            }
        }

        //validar que sean exactamente 4 o 6 digitos
        if(count($elementsPin) != 4 && count($elementsPin) != 6){
            return false;
        }
        
        //validations passed
        return true;
    }
}