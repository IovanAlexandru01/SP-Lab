<?php
require_once('Book.php');
require_once('Author.php');
require_once('Section.php');
require_once('Paragraph.php');
require_once('Image.php');
require_once('ImageProxy.php');

$startTime = floor(microtime(true) * 1000);
$img1 = new ImageProxy("Pamela Anderson");
$img2 = new ImageProxy("Kim Kardashian");
$img3 = new ImageProxy("Kirby Griffin");
$playboyS1 = new Section("Front Cover");
$playboyS1->add($img1);
$playboyS2 = new Section("Summer Girls");
$playboyS2->add($img2);
$playboyS2->add($img3);
$playboy = new Book("Playboy");
$playboy->addContent($playboyS1);
$playboy->addContent($playboyS2);
$endTime = floor(microtime(true) * 1000);
echo "Creation of the content took " . ($endTime - $startTime) . " milliseconds";

$startTime = floor(microtime(true) * 1000);
$playboyS1->print();
$endTime = floor(microtime(true) * 1000);

echo "Printing of the section 1 took " . ($endTime - $startTime) . "milliseconds";

$startTime = floor(microtime(true) * 1000);
$playboyS1->print();
$endTime = floor(microtime(true) * 1000);

echo "Printing again the section 1 took " . ($endTime - $startTime) . "milliseconds";




?>