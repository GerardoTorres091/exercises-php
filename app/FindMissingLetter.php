<?php
namespace App;

class FindMissingLetter {

    public function findMissingLetter(array $chars): string {
        
        define('ALPHABET', array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'));

        //convirtiendo a minusculas
        $chars = array_map('strtolower', $chars);

        //obteniendo el inicio y el final del array}
        $firstLetter = reset($chars);
        $lastLetter  = end($chars);

        //obteniendo el rango del alfabeto
        $range = range($firstLetter,$lastLetter);

        //verificando el elemento faltante
        $missinLetter = array_diff($range, $chars);

        //validations passed
        return reset($missinLetter);
    }
}