<?php

// define('NAMA', 'Audi Aqsha');
// echo NAMA;
// echo "<br>";

// const UMUR = 23;
// echo UMUR;



// class Coba {
//    const NAMA = 'Audi Aqsha';
// }

// echo Coba::NAMA;


// echo __FILE__;


// function coba() {
//    return __FUNCTION__;
// }

// echo coba();

class Audi_Aqsha {
    public $kelas = __CLASS__;
}

$obj = new  Audi_Aqsha;
echo $obj->kelas;






?>