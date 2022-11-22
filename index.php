<?php

require 'vendor/autoload.php';

use App\ValidatePin;
use App\PersistentBugger;
use App\FindMissingLetter;
use App\ArrDiff;

//var_dump(ValidatePin::isValidPin('098765'));

//$persistentBugger = new PersistentBugger;
//var_dump($persistentBugger->getMultiPersistence(25));

//var_dump(FindMissingLetter::findMissingLetter(['O','Q','R','S']));

var_dump(ArrDiff::arrDiff([1,2,2,2,3],[2])); 