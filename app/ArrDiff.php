<?php
namespace App;

class ArrDiff {

    public static function arrDiff(array $a, array $b):array {
        
        $elementsToDelete = array();

        //recorro el primer array
        foreach($a as $element){

            //busco elementos de $a que esten en $b para posteriormente ser eliminados
            if(in_array($element, $b)){
                $elementsToDelete[] = $element;
            }
        }
        
        //validations passed
        foreach($elementsToDelete as $e){
            #removiendo de $a los elementos que se repiten en $b
            $a = self::remove($e, $a);
        }
        return array_values($a);
    }

    private function remove($value,$arr)
    {
        foreach (array_keys($arr, $value) as $key){
            unset($arr[$key]);
        }
        return $arr;
    }
}