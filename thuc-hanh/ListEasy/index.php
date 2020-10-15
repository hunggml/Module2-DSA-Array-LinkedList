<?php
include "Node.php";
include "LinkList.php";

$node1 = new LinkList();

$node1->addFirstNode(10);
$node1->addFirstNode("0606");

$node1->addLastNode("hung");


echo "<pre>";
var_dump($node1);
