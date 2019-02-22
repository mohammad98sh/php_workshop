<?php
//you can use "array()" keyword for creating array
//you should create array as a variable by dollar sign
$MusicGenres = array("Rock","Electroinc","Reggae");
//printing array elements by index
echo $MusicGenres[0] . ' ' . $MusicGenres[1] . ' ' . $MusicGenres[2] ;
echo '    //printed index by index'.'<br>';
//for loop is similar to other languages like c++
for($i=0;$i<=2;$i++){
    echo $MusicGenres[$i] .' ';
}
echo '    //printed by for loop'.'<br>';
//while loop is similar to other languages like c++
$count = 0;
while ($count < 3) {
    echo $MusicGenres[$count].' ';
    $count++;
}
echo '    //printed by while loop';
?>
