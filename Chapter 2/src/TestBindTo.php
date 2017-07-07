<?php
class Foo
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$obj = new Foo('robin');
$say = function ()
{
    return "hello world" . $this->name;
};

$say = $say->bindTo($obj, $obj);

// $obj->say->__invoke();
echo ($obj->say->__invoke());
 ?>
