<?php


namespace app\lib\ibuypro;


class Graph
{
    /**
     * @var Top []
     */
    public $graph = [];

    /**
     * Graph constructor.
     */
    public function __construct(array $input = [])
    {
        if (count($input) !== 0){
            $this->buildGraph($input);
        }
    }

    /**
     * @param array $input
     */
    public function buildGraph(array $input):void
    {
        foreach ($input as $topNumber => $neighbor){

            $this->addTop($topNumber);

            foreach ($neighbor as $nbr){
                $this->addConnection($topNumber, $nbr[0], $nbr[1]);
            }
        }
    }
    /**
     * @return Top []
     */
    public function getGraph(): array
    {
        return $this->graph;
    }

    /**
     * @param int $index
     * @return Top
     */
    private function getTopByIndex(int $index):Top{

        return $this->getGraph()[$index];
    }
    /**
     * @param int $index
     * @return int
     */
    private function getTopNumber(int $index) :int{

        return $this->getTopByIndex($index)->getTopNumber();
    }
    public function addTop(int $tn):void{

        $top = new Top($tn);
        array_push($this->graph, $top);
    }

    /**
     * @param int $topNumber
     * @param int $neighborNumber
     * @param int $weight
     */
    public function addConnection(int $topNumber, int $neighborNumber, int $weight):void{

//        foreach ($neighbornumbers as $nbr){

        $edge = new Edge($neighborNumber, $weight);
        $topIndex = $this->findTopIndex($topNumber);
        $this->getTopByIndex($topIndex)->addConnection($edge);
//        }
    }

    private function setInitialState(int $startTop):void
    {
        /**
         * @var Top $top
         */
        foreach ($this->graph as $top){

            $top->setIsLocked(false);
            if ($top->getTopNumber() === $startTop){
                $top->setDistance(0);
            }else{
                $top->setDistance(2400000);
            }
        }
    }

    /**
     * @param int $topNumber
     * @return int
     */
    private function findTopIndex(int $topNumber):int
    {

        for ($i=0; $i<count($this->graph); $i++){
            if($this->graph[$i]->getTopNumber() === $topNumber){
                return $i;
            }
        }
        return  -1;
    }

    /**
     * @param int $topIndex
     * @return int
     */
    private function findTopNumber(int $topIndex):int{
        return $this->graph[$topIndex]->getTopNumber();
    }
    /**
     * @param array $lst
     * @return int
     */
    private function findMinPathTopNumber(array $lst):int
    {
        $minDistance = 2400000;
        $minTopNumber = 0;

        foreach ($lst as $topNumber) {
            $index = $this->findTopIndex($topNumber);
            if ($this->graph[$index]->getDistance() < $minDistance){
                $minDistance = $this->graph[$index]->getDistance();
                $minTopNumber = ($this->graph[$index]->getTopNumber());
            }
        }
        return $minTopNumber;
    }

    /**
     * @param int $startTopNumber
     * @return int
     */
    public function calculateDistancesFrom(int $startTopNumber):void
    {
        $this->setInitialState($startTopNumber);
        $list = [];
        array_push($list, $startTopNumber);

        while (count($list) > 0){
            $curTopNumber = $this->findMinPathTopNumber($list);
            $curTopIndex = $this->findTopIndex($curTopNumber);

            $key = array_search($curTopNumber, $list);
            unset($list[$key]);

            foreach ($this->graph[$curTopIndex]->getConnections() as $edge) {
                $newDistance = $this->graph[$curTopIndex]->getDistance() + $edge->getWeight();
                $curNeighborIndex = $this->findTopIndex($edge->getNeighbor());

                if (!$this->graph[$curNeighborIndex]->isLocked()){
                    if (!in_array($edge->getNeighbor(), $list)){
                        $list[] = $edge->getNeighbor();
                    }
                    if ($newDistance < $this->graph[$curNeighborIndex]->getDistance()){
                        $this->graph[$curNeighborIndex]->setDistance($newDistance);
                    }
                }
            }
            $this->graph[$curTopIndex]->setIsLocked(true);
        }
    }

    /**
     * @param array $pathTops
     * @return int
     */
    public function findMinTopIndex(array $pathTops):int
    {
        $mindist = 2400000;
        $minTopInd = 0;
        $n = count($pathTops);
        for($i = 0; $i < $n; $i++){
            $topInd = $this->findTopIndex($pathTops[$i]);
            if ($this->graph[$topInd]->getDistance() < $mindist){
                $mindist = $this->graph[$topInd]->getDistance();
                $minTopInd = $topInd;
            }
        }
        return $minTopInd;
    }
    /**
     * @param int $destinationTopIndex
     * @return array
     */
    public function findPathTo(int $destinationTopIndex):array
    {
        $list = [$this->findTopNumber($destinationTopIndex)];
        $curInd = $destinationTopIndex;
        while ($this->graph[$curInd]->getDistance() != 0){
            foreach ($this->graph[$curInd]->getConnections() as $edge){
                $newInd = $this->findTopIndex($edge->getNeighbor());
                if ($this->graph[$curInd]->getDistance() - $edge->getWeight() == $this->graph[$newInd]->getDistance()){
                    array_push($list, $edge->getNeighbor());
                    $curInd = $newInd;
                    break;
                }
            }
        }
        return array_reverse($list);
    }
    public function findPathToClosestTop(int $startTopNumber, array $pathTops):array{
        $this->calculateDistancesFrom($startTopNumber);
        $res = $this->findMinTopIndex($pathTops);
        $path = $this->findPathTo($res);
        return $path;
    }
}