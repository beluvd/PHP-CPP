<?php

/**
  *  For debugging tests
  *  
  */








//-

// initialize a couple of objects
$object1 = new TestBaseClass\Comparable();
$object2 = new TestBaseClass\Comparable();
$object3 = new TestBaseClass\Comparable();

// compare the objects
if ($object1 < $object2)
{
    echo("$object1 is smaller than $object2\n");
}
else
{
    echo("$object1 is bigger than $object2\n");
}

if ($object1 == $object3)
{
    echo("$object1 is equal to $object3\n");
}
else
{
    echo("$object1 is not equal to $object3\n");
}

if ($object1 != $object2)
{
    echo("$object1 is not equal to $object2\n");
}
else
{
    echo("$object1 is equal to $object2\n");
}