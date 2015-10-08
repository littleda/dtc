<?php

date_default_timezone_set("Asia/Bangkok");

//echo $date = date('m/d/Y H:i:s');
class RequestController extends Controller {

    function actionIndex() {
        if (!empty(Yii::app()->session["user_typelogin"])) {
            $this->render('request_form');
        } else {
            $this->redirect('index.php');
        }
    }

    function actionaddRequest() {
        if (!empty(Yii::app()->session["user_typelogin"])) {
            $attributes = array();
            $attributes["username"] = Yii::app()->session["userlogin"];
            $find = UserModels::model()->findByAttributes($attributes);
            // echo "<script type=\"text/javascript\"> alert(\"$find->email\");</script>";
            if (!empty($_POST["reqDetail"])) {

                $model = new RequestModels;
                $model->reqDetail = $_POST["reqDetail"];
                // $model->name = Yii::app()->session["fullname"];
                // $model->workgroup = $find->workgroup;
                $model->userID = $find->id;
                //$model->email = Yii::app()->session["user_email"];
                $model->date_request = date('Y-m-d H:i:s');
               // $model->maker = Yii::app()->session["fullname"];
                //$prov = new CActiveDataProvider('reqDetail');
                if ($model->save()) {
                    echo "<script type=\"text/javascript\"> alert(\"คำร้องขอถูกส่งเรียบร้อย \");</script>";
                    $this->redirect('index.php?r=request/View');
                }
                // echo "<p>" . $_POST["reqDetail"] . "</p>";
                //$attributes = array();
                //$attributes["reqDetail"] = $_POST["reqDetail"];
                //$attributes["password"] = $_POST["Password"];
            }
        } else {
            $this->redirect('index.php');
        }
    }

    function actionView($id = null) {
        if (!empty(Yii::app()->session["user_typelogin"])) {
            if (!empty($id)) {
                $check = RequestModels::model()->findByPk($id);
                echo "<script type=\"text/javascript\"> alert($check->status);</script>";
                if ($check->status == 'wait') {
                    $check->status = 'finish';
                } else {
                    $check->status = 'wait';
                }
                $check->maker = Yii::app()->session["fullname"];
                if ($check->save()) {
                    $this->redirect('index.php?r=request/View');
                    //echo "<script type=\"text/javascript\"> alert(\"ดำเนินการส่งรายงานให้ผู้ขอเรียบร้อยแล้ว\");</script>";
                }
            }
            $criteria = new CDbCriteria();
            $criteria->order = "reqNo DESC";
            $model = new CActiveDataProvider('RequestModels', array(
                'criteria' => $criteria));
            $this->render('View', array("model" => $model,));
            // $this->render('View');
        } else {
            $this->redirect('index.php');
        }
    }

//    function actionChecked($id){
//       $model = RequestModels::model()->findByPk($id);
//       $model->status ='finish';
//    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

