<?php
require_once('Book.php');
require_once('Author.php');
require_once('Section.php');
require_once('Paragraph.php');
require_once('Image.php');

$carte = new Book('Amintiri din copilarie');
$autor = new Author('Ion Creanga');
$carte->addAuthor($autor);
$cap1 = new Section("Capitolul 1");
$cap11 = new Section("Capitolul 1.1");
$cap111 = new Section("Capitolul 1.1.1");
$cap1111 = new Section ("Subchapter 1.1.1.1");
$carte->addContent(new Paragraph("Multumesc celor care..."));
$carte->addContent($cap1);
$cap1->add(new Paragraph("Moto capitol"));
$cap1->add($cap11);
$cap11->add(new Paragraph("Text from subchapter 1.1"));
$cap11->add($cap111);
$cap111->add(new Paragraph("Text from subchapter 1.1.1"));
$cap111->add($cap1111);
$cap1111->add(new Image("Image from subchapter 1.1.1.1"));

$carte->print();

?>