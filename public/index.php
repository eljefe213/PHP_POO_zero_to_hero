<?php
use AppClass\ParentClass;
use AppClass\ChildClass;
require '../vendor/autoload.php';


$parent = new ParentClass();
$child = new ChildClass();

// var_dump($parent->getName(), $child->getName());

// var_dump( ParentClass::class, ChildClass::class );

var_dump( $parent->factory(), $child->factory() );

