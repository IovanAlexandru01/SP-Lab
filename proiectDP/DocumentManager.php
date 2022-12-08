<?php

class DocumentManager {
    private static $instance = null;
    private $book;

    private function __construct() {
        
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new DocumentManager();
        }
        return self::$instance;
    }

    function getBook() {
        return $this->book;
    }

    function setBook($book) {
        $this->book = $book;
    }
}

?>