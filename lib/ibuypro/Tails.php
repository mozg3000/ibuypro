<?php


namespace app\lib\ibuypro;

use app\lib\ibuypro\Rack;

class Tails
{
    public static function buildTails(array $racks): array
    {
        $occupiedOrigin = self::findOccupiedOrigin($racks);
        $tails = [];
        for ($i = 0; $i < 600; $i += 6) {
            for ($j = 0; $j < 400; $j += 6) {
                if (!self::isOccupied(['x' => $i, 'y' => $j], $occupiedOrigin)) {
                    array_push($tails, [$i, $j]);
                }
            }
        }
        return $tails;
    }

    /**
     * @param Rack $racks
     * @return array
     */
    public static function findOccupiedOrigin(array $racks):array{
        $occupied = [];
        foreach ($racks as $r){
            $x = $r->position['x'];
            $y = $r->position['y'];
            $d = $r->angle;
            $l = $r->label;
            $occupied['width'] = $x;
            $occupied['height'] = $y;
            $occupied['angle'] = $d;
            $occupied['label'] = $l;
        }
        return $occupied;
    }
    public static function isOccupied($position, $occupied){
        for($i=0; $i<count($occupied); ++$i){
            $x = $occupied['width'];
            $y = $occupied['height'];
            $d = $occupied['angle'];
            switch ($d) {
                case 0: {
                    if(($position['x']>=$x&&$position['x']<$x+198)&&($position['y']>=$y&&$position['y']<$y+18)){
                        return true;
                    }
                    break;
                }
                case 270:
                case 90: {
                    if(($position['x']>=$x&&$position['x']<$x+18)&&($position['y']>=$y&&$position['y']<$y+198)){
                        return true;
                    }
                    break;
                }
            }
        }
    }
}