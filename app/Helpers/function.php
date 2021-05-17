<?php

function split_name($name){
    $name=trim($name);
    $massiv= explode(' ',$name);
    return [$massiv[0],$massiv[1]];
}
