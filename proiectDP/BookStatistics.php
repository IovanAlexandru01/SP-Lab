<?php
require_once("Visitor.php");


class BookStatistics implements Visitor{ 

    private $paragraphCounter;
    private $imageCounter;
    private $tableCounter;

    public function visit($element) {
        
    }

    public function visitBook($book) {

    }

    public function visitSection($section) {
       
    }

    public function visitTable($table) {
        $this->tableCounter = $this->tableCounter + 1;
    }

    public function visitParagraph($paragraph) {
        $this->paragraphCounter = $this->paragraphCounter + 1;
    }

    public function visitImageProxy($imageProxy) {
        $this->imageCounter = $this->imageCounter + 1;
    }

    public function visitImage($image) {
        $this->imageCounter = $this->imageCounter + 1;
    }

    public function visitTableOfContent($tableOfContent) {

    }

    public function printStatistics() {
        echo "Book Statistics:";
        echo nl2br("\n");
        echo ("*** Number of images: ") . $this->imageCounter;
        echo nl2br("\n");
        echo ("*** Number of tables: ") . $this->tableCounter;
        echo nl2br("\n");
        echo ("*** Number of paragraphs: ") . $this->paragraphCounter;
    }

}


?>