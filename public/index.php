<?php
use AppClass\ParentClass;
use AppClass\ChildClass;
require '../vendor/autoload.php';


$parent = new ParentClass();
$child = new ChildClass();

var_dump($parent->getName(), $child->getName());