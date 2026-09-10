<?php
class Box
{
    public $width;
    public $height;
    public $length;
    public $isOpen = false;
    public $hasBeenOpened = false;

    public function open()
    {
        $this->isOpen = true;
    }
}
$box1 = new Box();
$box1->width = 10;
$box1->height = 10;
$box1->length = 10;
$box1->open();
var_dump($box1);


$box2 = new Box();
$box2->width = 110;
$box2->height = 102;
$box2->length = 102;
$box2->open();
var_dump($box1);
var_dump($box2);
