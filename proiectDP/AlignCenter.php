<?php
require_once("AlignStrategy.php");
class AlignCenter implements AlignStrategy { 

    function render($paragraph) {
        echo '#######' . $paragraph . '###########';
    }

}

?>