<?php

// TODO refactoriser le code pour respecter le principe LSP de la programmation SOLID

interface Shape 
{
    public function calculateArea();
}

class Rectangle  implements Shape
{
    protected $height;
    protected $width; 
    
    public function setWidth($width)
    {
        $this->width = $width;
    }
    
    public function setHeight($height)
    {
        $this->height = $height;
    }
    
    public function getWidth()
    {
        return $this->width;
    }
    
    public function getHeight()
    {
        return $this->height;
    }
    
    public function calculateArea()
    {
        return $this->height * $this->width;
    }
}

class Square implements Shape {
    protected $side;
    
	public function setSide($side) 
	{
		$this->side = $side;
	}
	
	public function getSide() 
	{
		return $this->side;
	}

    public function calculateArea()
    {
        return $this->side ** 2;
    }
}

class GraphicEditor
{
    public function resize(Rectangle $rectangle)
    {
        $rectangle->setHeight($rectangle->getHeight() * 2);
        $rectangle->setWidth($rectangle->getWidth() * 4);
    }

    public function resizeSquare(Square $square)
    {
        $square->setSide($square->getSide() * 2); 
    }
}