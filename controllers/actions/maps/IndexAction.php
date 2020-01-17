<?php


namespace app\controllers\actions\maps;


use app\models\Racks;
use yii\rest\Action;

class IndexAction extends Action
{
    public function run($id)
    {
        return Racks::find()->andWhere(['id_shops'=>$id])->all();
    }
}