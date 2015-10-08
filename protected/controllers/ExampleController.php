<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ExampleController extends Controller {

    public function actionIndex() {
        $model = new UploadFile();
        $this->render('index', array(
            'model' => $model
        ));
    }

    public function actionSelect() {
        $this->render('testselectgroup');
    }

    public function actiondynamic() {
       
        if ($_POST['codegroup'] == 1) {            
            $attributes["codegroup"] = 1;           
            $arr = Example::model()->findAllByAttributes($attributes);           
        foreach ($arr as $value) {
                echo CHtml::tag('option', array('value' => $value['department']),
                CHtml::encode($value['department']), true);
            }
        }
        
        if ($_POST['codegroup'] == 2) {
            $attributes["codegroup"] = 2; 
            $arr = Example::model()->findAllByAttributes($attributes);               
            foreach ($arr as $value) {
                echo CHtml::tag('option', array('value' => $value['department']), CHtml::encode( $value['department']), true);
            }
        }
        
        if ($_POST['codegroup'] == 3) {
            $attributes["codegroup"] = 3; 
            $arr = Example::model()->findAllByAttributes($attributes);  
            foreach ($arr as $value) {
                echo CHtml::tag('option', array('value' => $value['department']), CHtml::encode( $value['department']), true);
            }
        }
        
        if ($_POST['codegroup'] == 4) {
           $attributes["codegroup"] = 4; 
            $arr = Example::model()->findAllByAttributes($attributes);  
            foreach ($arr as $value) {
                echo CHtml::tag('option', array('value' => $value['department']), CHtml::encode( $value['department']), true);
            }
        }

        if ($_POST['codegroup'] == 5) {            
            $attributes["codegroup"] = 5;           
            $arr = Example::model()->findAllByAttributes($attributes);           
        foreach ($arr as $value) {
                echo CHtml::tag('option', array('value' => $value['department']),
                CHtml::encode($value['department']), true);
            }
        }
        
        exit();
    }

}
