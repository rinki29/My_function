<?php


function stringreverce($name){
    $value = '';
    $strnglength = strlen($name);
    for($i=$strnglength-1;$i>=0;$i--){
      $value.=$name[$i];
    }
return $value;
}

$username = 'rinkiMishra';
echo stringreverce($username);

//palidrom function

function ispalidrom($value){

  $namereverce = stringreverce($value);
  if($value == $namereverce){
echo  'it is palidrom';
  }else{
    echo  'it is not palidrome';
  }

}

$username = 'mam';
echo ispalidrom($username);
?>