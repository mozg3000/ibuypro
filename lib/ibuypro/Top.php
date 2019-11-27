<?php


namespace app\lib\ibuypro;


class Top
{
    private $topNumber = null;
    private $isLocked = false;
    private $distance = null;

    /**
     * @return null
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param null $distance
     */
    public function setDistance($distance): void
    {
        $this->distance = $distance;
    }
    private $connections = [];
    private $path = [];

    /**
     * Top constructor.
     * @param int $topNumber
     */
    public function __construct(int $topNumber)
    {
        $this->topNumber = $topNumber;
    }

    /**
     * @return int
     */
    public function getTopNumber():int
    {
        return $this->topNumber;
    }

    /**
     * @param int $topNumber
     */
    public function setTopNumber($topNumber): void
    {
        $this->topNumber = $topNumber;
    }

    /**
     * @return bool
     */
    public function isLocked(): bool
    {
        return $this->isLocked;
    }

    /**
     * @param bool $isLocked
     */
    public function setIsLocked(bool $isLocked): void
    {
        $this->isLocked = $isLocked;
    }

    /**
     * @return  Edge []
     */
    public function getConnections(): array
    {
        return $this->connections;
    }

    /**
     * @param Edge $connection
     */
    public function addConnection(Edge $connection):void{

        array_push($this->connections, $connection);
    }
    /**
     * @return array
     */
    public function getPath(): array
    {
        return $this->path;
    }

    /**
     * @param array $path
     */
    public function setPath(array $path): void
    {
        $this->path = $path;
    }
}