<?php

// define('NAMA', 'Chris Hemswort');
// echo NAMA;

// echo "<br>";

// const UMUR = 42;
// echo UMUR;


// class coba{
//     Const NAMA = 'Chris';
// }

// echo coba::NAMA;



// echo __FILE__;


// function coba() {
//     return __FUNCTION__;
// }

// echo coba();


class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;