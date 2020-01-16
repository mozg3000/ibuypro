<?php


namespace app\models;

use app\lib\ibuypro\Graph;
use app\lib\ibuypro\IbuyproAlgorithm;
use yii\base\Model;
use app\lib\ibuypro\Tails;

class FindPath extends Model
{
    public $categories2Find = [];
    public $links = [];
    public $racks = [];
    public $graph = [];
    public $startTopNumber = null;
    public $pathTops = [];
//    private

    public function __construct($categories, $links, $racks, $config = [])
    {
        parent::__construct($config);

//        foreach ($categories as $category){
//
//            array_push($this->categories2Find, $category);
//        }
        $this->categories2Find = $categories;
        $this->links = $links;
        $this->racks = $racks;
    }

    public function buildTails(array $racks){

        return Tails::buildTails($racks);
    }

    public function findPath()
    {
        $this->graph = $this->buildGraph($this->links);
        $this->startTopNumber =array_values(array_filter($this->racks, function ($el){
            return $el['label'] === 'Старт';
        }))[0]['top'];

//        array_push($this->pathTops, $this->startTopNumber);
        foreach ($this->racks as $rack){
          if(in_array($rack['label'], $this->categories2Find)){
              array_push($this->pathTops, $rack['top']);
          }
        }
//        var_dump($this->graph);
//        var_dump($this->pathTops);

        $solve = new IbuyproAlgorithm($this->graph, $this->startTopNumber, $this->pathTops);
        return $solve->findPath();
    }

    private function buildGraph(array $links)
    {
        $input = [];

        foreach ($links as $link){

//            var_dump('from',$link["from"]);
//            var_dump('to',$link["to"]);

            if(!array_key_exists((string)$link["from"], $input)){

                $input[$link["from"]] = [[$link['to'], 50]];
            }else{

                array_push($input[$link["from"]], [$link['to'], 50]);
            }

            if(!array_key_exists((string)$link['to'], $input)){

                $input[$link["to"]] =  [[$link["from"], 50]];
            }else{

                array_push($input[$link['to']], [$link["from"],50]);
            }
        }
//        var_dump($input);

        return new Graph($input);

    }
}