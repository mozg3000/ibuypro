<?php


namespace app\lib\ibuypro;


class Rack
{
    public  $position,
            $width,
            $height,
            $label,
            $fill,
            $angle;

    public function __construct($position, $width, $height, $label, $fill, $angle)
    {
        $this->position = $position;
        $this->width = $width;
        $this->height = $height;
        $this->label = $label;
        $this->fill = $fill;
        $this->angle = $angle;
    }
}