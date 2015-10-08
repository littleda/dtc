<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class upfileController extends Controller{
public function actionindexupfile(){
    $model = new UploadFile();
    $this->render('updatafileView',array ('model' => $model));
}
function actionindex(){
     echo "<script type=\"text/javascript\"> alert(\"ทดสอบ \");</script>";
}
}