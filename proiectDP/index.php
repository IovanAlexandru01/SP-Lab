<?php
// require_once('Book.php');
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

$cap1 = new Section("Capitolul 1");
$p1 = new Paragraph("Paragraph 1");
$cap1->add($p1);
$p2 = new Paragraph("Paragraph 2");
$cap1->add($p2);
$p3 = new Paragraph("Paragraph 3");
$cap1->add($p3);
$p4 = new Paragraph("Paragraph 4");
$cap1->add($p4);
$cap1->add(new ImageProxy("Image One"));
$cap1->add(new Image("Image Two"));
$cap1->add(new Paragraph("Some text"));
$cap1->add(new Tabel("Table 1"));

$stats = new BookStatistics();
$cap1->accept($stats);
$stats->printStatistics();
?>