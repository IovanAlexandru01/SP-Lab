<?php
require_once('Paragraph.php');
require_once('Image.php');
require_once('Tabel.php');
class SubChapter{

    private $name;
    private $paragraphArray=[];
    private $imageArray=[];
    private $tableArray=[];

    function __construct($name) {
        $this->name = $name;
    }

    function createNewParagraph($text){
        $paragraph = new Paragraph($text);
        array_push($this->paragraphArray, $paragraph);
    }

    function createNewImage($imageURL){
        $image = new Image($imageURL);
        array_push($this->imageArray, $image);
    }

    function createNewTabel($tableData){
        $table = new Tabel($tableData);
        array_push($this->tableArray, $table);
    }

    function print(){
        echo nl2br('Subchapter: '.$this->name."\n");
        foreach($this->paragraphArray as $paragraf){
            echo 'Paragraph: ';
            echo nl2br($paragraf->print()."\n");
        }
        foreach($this->imageArray as $image){
            echo "Image with name:";
            echo nl2br($image->print()."\n");
        }
        foreach($this->tableArray as $table){
            echo "Table with Title: ";
            echo nl2br($table->print()."\n");
        }
    }
}

?>