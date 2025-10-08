<?php

namespace LSPViolation;

class Rectangle
{
    /** @var  integer */
    protected $width;
    /** @var  integer */
    protected $height;
    /** @var  bool */
    protected $isSquare = false;

    /**
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
        $this->checkIfSquare();
    }

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
        $this->checkIfSquare();
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->height * $this->width;
    }

    public function checkIfSquare()
    {
        $this->isSquare = ($this->height == $this->width);
    }
}

class TestLS
{
    /**
     * @return Rectangle
     */
    private static function getNewRectangle()
    {
        return new Rectangle();
    }

    /**
     * main test
     */
    public static function test()
    {
        $rectangle = self::getNewRectangle();
        $rectangle->setHeight(5);
        $rectangle->setWidth(10);
        // user knows that $rectangle is a rectangle.
        // It assumes that he's able to set the width and height as for the base class


        echo $rectangle->getArea();
        // now he is surprised to see that the area is 100 instead of 50.
    }
}

TestLS::test();
