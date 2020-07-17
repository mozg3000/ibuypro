<?php


namespace app\controllers\actions\maps;


use app\models\Connections;
use app\models\Racks;
use yii\rest\Action;

class CreateAction extends Action
{
    public function run($id)
    {
        if (!\Yii::$app->rbac->canAdmin()) {
            throw new \yii\web\ForbiddenHttpException(sprintf('Only administrators can edit maps.'));
        }
        Racks::deleteAll(['id_shops'=>$id]);
        Connections::deleteAll(['id_shops'=>$id]);

        $data = \Yii::$app->request->post();
        $racks = $data['Racks'];
        $links = $data['Links'];
        $res = '';

        foreach ($racks as $rack){
            $model = new Racks([
                'x' => $rack['position']['x'],
                'y' => $rack['position']['y'],
                'width' => $rack['width'],
                'height' => $rack['height'],
                'label' => $rack['label'],
                'fill' => $rack['fill'],
                'angle' => $rack['angle'],
                'top' => $rack['top'],
                'id_shops'=>$id
            ]);
            $model->save();
        }


        foreach ($links as $link){
            $model = new Connections([
                'firstN' => $link['from'],
                'secondN' => $link['to'],
                'id_shops'=>$id,
                'weight' => 50
            ]);
            $model->save();
        }

//        return   $links;
    }
}
