<?php
require_once('Book.php');
require_once('Author.php');
require_once('Chapter.php');
require_once('SubChapter.php');
require_once('Author.php');

$carte = new Book('Disco Titanic');
$autor = new Autor('Radu Pavel Gheo');
$carte->addAuthor($autor);
$indexChapterOne = $carte->createChapter('Capitolul unu');
$chp1 = $carte->getChapter();
$indexSubChapterOneOne = $chp1->createSubChapter('Subcapitolul 1.1');
$scOneOne = $chp1->getSubChapter($indexSubChapterOneOne);

$scOneOne->createNewParagraph('Paragraph 1');
$scOneOne->createNewParagraph('Paragraph 2');
$scOneOne->createNewParagraph('Paragraph 3');
$scOneOne->createNewImage('Image 1');
$scOneOne->createNewParagraph('Paragraph 4');
$scOneOne->createNewTable('Table 1');
$scOneOne->createNewParagraph('Paragraph 5');

$scOneOne->print();


?>