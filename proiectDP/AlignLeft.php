<?php
require_once("AlignStrategy.php");
class AlignLeft implements AlignStrategy { 

    function render($paragraph) {
        echo '##    ' . $paragraph;
    }

}

?>