<?php
$closure = function ($name)
{
    return printf('Hello %s', $name);
};

echo $closure("robinson");

function myCallback()
{
    echo "myCallback";
}

function sayHello($callback)
{
    echo "hello world";
    call_user_func($callback);
}

sayHello('myCallback');
 ?>
