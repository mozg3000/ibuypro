<?php


namespace app\lib\ibuypro;


class Edge
{
    public $neighbor = null;
    public $weight = null;

    /**
     * Edge constructor.
     * @param null $neighbor
     * @param null $weight
     */
    public function __construct($neighbor, $weight)
    {
        $this->neighbor = $neighbor;
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getNeighbor():int
    {
        return $this->neighbor;
    }

    /**
     * @param int $neighbor
     */
    public function setNeighbor(int $neighbor): void
    {
        $this->neighbor = $neighbor;
    }

    /**
     * @return int
     */
    public function getWeight():int
    {
        return $this->weight;
    }

    /**
     * @param null $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }
}