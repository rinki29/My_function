<?php
//string reverce function my fucntion

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
?>