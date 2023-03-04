<?php

foreach(glob('src/*.php') as $file){
    echo "require_once __DIR_.'/$file';\n";
}

?>