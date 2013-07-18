<?php

class simples {
    function teste() {
        if(isset($this)) {
            echo '$this esta definida';
            echo get_class($this);
            echo ")\n";
        } else {
            echo '$this não esta definida';
        }
    }
}

class simples2 {
    function bar() {
        simples::teste(); 
    }
}

$simples = new simples;
$simples->teste();
simples::teste();

$simples2 = new simples2;
$simples2->bar();
$simples2::bar();

?>
