<?php
require_once('Book.php');
// require_once('Author.php');
require_once('Section.php');
require_once('Paragraph.php');
require_once('Image.php');
require_once('ImageProxy.php');
// require_once('AlignLeft.php');
// require_once('AlignRight.php');
// require_once('AlignCenter.php');
require_once('Tabel.php');
require_once('BookStatistics.php');
require_once('DocumentManager.php');

function printing() {
    DocumentManager::getInstance()->getBook()->print();
}

$book = new Book("Carte laborator");
$author = new Author("Marius");
$book->addAuthor($author);
DocumentManager::getInstance()->setBook($book);


printing();
?>