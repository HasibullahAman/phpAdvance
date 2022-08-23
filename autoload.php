<?php
// function __autoload($class){
//     $class = strtolower($class);
//     $path = "classes/".$class.".php";
//     if(file_exists($class)){
//         require_once($path);
//     }
//     else{
//         echo "File not Exist";
//     }
// }

function auto($classname){
    $path = "classes/".$classname.".php";
    if(is_readable($path)){
        require $path;
    }
}

spl_autoload_register("auto");
