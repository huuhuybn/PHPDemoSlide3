<?php

namespace model\Models;

abstract class Rectangle
{
    public $width;
    public $height;
    // khai bao su dung trail
    use \Shape2;

    abstract function echoName();
    abstract function echoInfo();

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }


    /**
     * @param $width
     * @param $height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    // final khoá : không cho phép
    // ghi đè phương thức
    function dienTich(){
        return $this->height * $this->width;
    }

    final function info(){
        echo $this->width . $this->height;
    }

}