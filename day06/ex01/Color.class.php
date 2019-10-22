<?php

class Color {

    public static $verbose = false;
    public $red;
    public $green;
    public $blue;

    public function __construct($color) {
        if (isset($color['red']) && isset($color['green']) && isset($color['blue']))
        {
            $this->red = intval($color['red'] & 255);
            $this->green = intval($color['green'] & 255);
            $this->blue = intval($color['blue'] & 255);
        }
        else if (isset($color['rgb']))
        {
            $this->red = intval((($color['rgb'] >> 16) & 255));
            $this->green = intval((($color['rgb'] >> 8) & 255));
            $this->blue = intval(($color['rgb'] & 255));
        }
        if (Self::verbose) {
            sprintf("%s destructed.", $this->__toString());
        }
 
    }

    public function doc() {
        return (file_get_contents('Color.doc.txt'));
    }

    public function __toString() {
        return (vsprintf("Color( red: %3d, green: %3d, blue: %3d ) ", array($this->red, $this->green, $this->blue)));
    }

    public function add($operand_color) {
        return new Color( array('red' => $this->red + $operand_color->red, 'green' => $this->green + $operand_color->green, 'blue' => $this->blue + $operand_color->blue));
    }

    public function sub() {
        return new Color( array('red' => $this->red - $operand_color->red, 'green' => $this->green - $operand_color->green, 'blue' => $this->blue - $operand_color->blue));
    }

    public function mult() {
        return new Color( array('red' => $this->red * $operand_color->red, 'green' => $this->green * $operand_color->green, 'blue' => $this->blue * $operand_color->blue));
    }

    public function __destruct() {
		if (Self::$verbose)
		{
			sprintf("%s destructed.", $this->__toString());
		}
        return;
    }
}
?>