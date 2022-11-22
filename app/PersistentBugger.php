<?php
namespace App;

class PersistentBugger {

    private $count = 0;
    public  function getMultiPersistence(int $num):int {
       
        //descomponer en digitos el numero
        $elementsNum =  str_split($num);

        //validar que los elementos sean números validos enteros e igual o mayor a cero
        foreach($elementsNum as $n){
            if( is_numeric($n) AND ($n>0) ){
                continue;
            }else{
                return 0;
            }
        }

        //si es de un solo elemento retorna 0
        if(count($elementsNum) == 1){
            return 0;
        }

        //mando a llamar la funcion persistense que se ejecutará hasta llegar a 1 solo digito
        $this->persistence($elementsNum);

        return $this->count;
    }

    private function persistence($elementsNum){

        if(count(str_split(array_product($elementsNum))) != 1){
            $this->count++;
            $this->persistence(str_split(array_product($elementsNum)));
        }

        if(count(str_split(array_product($elementsNum))) == 1){
            $this->count++;

            return $this->count;
        }

    }
}