<?php


namespace app\lib\ibuypro;


class IbuyproAlgorithm
{
    /**
     * @var Graph $graph
     */

    private $graph = null;
    private $startTopNumber = null;
    private $pathTops = [];

    /**
     * IbuyproAlgorithm constructor.
     * @param Graph $graph Граф магазина
     * @param int $startTopNumber начальная вершина
     * @param array $pathTops вершины пути обхода
     */
    public function __construct($graph, $startTopNumber, array $pathTops)
    {
        $this->graph = $graph;
        $this->startTopNumber = $startTopNumber;
        $this->pathTops = $pathTops;
    }

    /**
     * @summary Вычисляет путь обхода магазина на основании списка вершин обхода
     * @return array Массив вершин пути обхода
     */
    public function findPath():array {

        $curTop = $this->startTopNumber;
        $lastTop = 0;
        $restPathTops = $this->pathTops;
        $path = [];

        while (count($restPathTops) > 0){

            $subPath = $this->graph->findPathToClosestTop($curTop, $restPathTops);
            $key = array_search($curTop, $restPathTops);
            $restPathTops = array_splice($restPathTops, $key+1, 1);
            $curTop = end($subPath);
            array_pop($subPath);
            array_shift($subPath);
            $path[$curTop] = $subPath;
        }
        return $path;
    }
}