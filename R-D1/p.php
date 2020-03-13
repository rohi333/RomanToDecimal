<?php
include "index.php";

class RomanToDecimal{

function roman($input_roman){
 $di=array('I'=>1,
'V'=>5,
'X'=>10,
'L'=>50,
'C'=>100,
'D'=>500,
'M'=>1000);
 $n=0;
 if($input_roman=='') return $n;
for($i=0;$i<strlen($input_roman);$i++)
{
 $n=(($i+1)<strlen($input_roman) and
 $di[$input_roman[$i]]<$di[$input_roman[$i+1]])?($n-$di[$input_roman[$i]]):($n+$di[$input_roman[$i]]);
}
 return $n;
}
  
}
?>