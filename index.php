<?php
class Box
{
    public $isOpen = false;
    public $hasBeenOpened = false;

    public function __construct(public $width, public $height, public $length)
    {

        var_dump('obj created');
    }

    public function open()
    {
        $this->isOpen = true;
    }
    public function __call($name, $arguments)
    {
        var_dump($name, $arguments);
    }
    public function __toString()
    {
        return 'im a box';
    }
    public function __get($name)
    {
        var_dump($name);
        return 'cool value';
    }
    public function __set($name, $value)
    {
        var_dump($name, $value);
    }
    public function __destruct()
    {
        var_dump('obj destroyed');
    }
    public function __invoke()
    {
        var_dump('im a function');
    }
}
function test()
{
    $box2 = new Box(2, 4, 6);
}
test();

$box1 = new Box(1, 2, 3);
var_dump($box1);
echo $box1;
$box1->mew = 'lol';
var_dump($box1->coolio);
$box1();
$box1->hello(1, 'asdas', 3);
