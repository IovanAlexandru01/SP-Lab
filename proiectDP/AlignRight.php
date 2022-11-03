<?php
require_once("AlignStrategy.php");
class AlignRight implements AlignStrategy { 

    function render($paragraph) {
        echo '#####################################################' . $paragraph . '############';
    }

}

?>