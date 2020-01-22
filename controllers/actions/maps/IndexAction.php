<?php


namespace app\controllers\actions\maps;


use app\models\Racks;
use yii\rest\Action;

class IndexAction extends Action
{
    public function run($id)
    {
//        if (\Yii::$app->rbac->canAdmin()) {
//            throw new \yii\web\ForbiddenHttpException(sprintf('Only administrators can edit maps.'));
//        }
        return Racks::find()->andWhere(['id_shops'=>$id])->all();
    }
}