<?php
class Vertex {

    public static $verbose = false;
    private $_x;
    private $_y;
    private $_z;
    private $_w = 1.0;
    private $_color;
    public function __construct($vertex) {
        if (isset($vertex['x']) && isset($vertex['y']) && isset($vertex['z']) && isset($vertex['color'])) {
            $this->_x = $vertex['x'];
            $this->_y = $vertex['y'];
            $this->_z = $vertex['z'];
            if (isset($vertex['w']))
                $this->_w = $vertex['w'];
            if (isset($vertex['color']))
                $this->_color = $vertex['color'];
            else
                $this->_color = new Color( array('rgb'))
        }
        if (Self::$verbose)
		{
			printf("Vertex( red: %3d, green: %3d, blue: %3d ) constructed.\n",
				$this->red, $this->green, $this->blue);
		}
        return;
    }

}
?>