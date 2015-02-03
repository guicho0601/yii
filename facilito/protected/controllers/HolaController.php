<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 2/02/15
 * Time: 20:57
 */

class HolaController extends Controller{

    public function actionIndex(){
        //$model=CActiveRecord::model("users")->findAll();
        $model=Users::model()->findAll();
        $twitter = "@codigofacilito";
        $this->render("index",array("model"=>$model,"twitter"=>$twitter));
    }

} 