<?php
//Tujuan menggunkan php untuk output data dapat dibaca dengan format json tanpa menggunakan library lain di browser
//Untuk membuat tampilan format ke Json
header('Content-type: application/json; charset=utf-8');

//Buat variable data dan array
//String data php
$name = 'Bagus Pambudi';
$address = 'Perum Wisma mas 1 Blok L1 No. 1, Kutajaya, Pasarkemis, Kab. Tangerang -15561';
//Array PHP
$hobies =  array('Bermain komputer','membaca', 'belajar', 'travelling');
//Objek pada PHP
class schoolObj {
    function highSchool(){
        return 'SMK YAPINKTEK';
    }
    function university(){
        return 'STMIK Masa Depan';
    }
}
$school = new schoolObj;
//Obj Array pada PHP
$skillArr = array('0'=>'HTML5, Javascript, CSS, PHP, Kotlin, Netwotking, Maintenace computer');
$skill = new ArrayObject($skillArr);
function myBio($strName, $strAddress, $strHobies, $strMarried, $strSchool, $strSkill){
    $json = array(
        'strName' => $strName,
        'strAddress' => $strAddress,
        'strHobies' => $strHobies,
        'strMarried' => ($strMarried =TRUE)? 'Menikah': 'Belum menikah',
        'strSchool' => $strSchool,
        'strSkill' => $strSkill
    );
    return json_encode($json);
}

echo myBio($name, $address, $hobies, FALSE, $school->university(), $skill[0]);

