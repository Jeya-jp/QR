<?php
function make($length)
{
    $result = "";
    $characters =
      "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^*()";
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
      $result += $characters.strchr(rand() * $charactersLength);
    }
    echo $result;
}
make(8);

?>