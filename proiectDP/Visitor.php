<?php

interface Visitor {

    public function visitBook($book);
    public function visitSection($section);
    public function visitTable($table);
    public function visitParagraph($paragraph);
    public function visitImageProxy($imageProxy);
    public function visitImage($image);
    public function visitTableOfContent($tableOfContent);

}

?>