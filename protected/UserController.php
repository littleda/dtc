<?php

date_default_timezone_set("Asia/Bangkok");

class UserController extends Controller {

    function actionLogin() {
        $this->render('Login');
    }

    function actionCheck() {
        $attributes = array();
        $attributes["username"] = $_POST["Username"];
        $attributes["password"] = md5($_POST["Password"]);

        $models = UserModels::model()->findByAttributes($attributes);
        if (!empty($models) && ($models->active == 'True')) {
            Yii::app()->session["userlogin"] = $models->username;
            Yii::app()->session["fullname"] = $models->fullname;
            Yii::app()->session["user_typelogin"] = $models->user_type;
            //Yii::app()->session["user_email"] = $models->email;
            $this->redirect(Yii::app()->homeUrl);
        } else {
            //print_r($models);
            // echo "<script type=\"text/javascript\"> alert(\"ใส่ข้อมูลไม่ถูกต้องนะจ๊ะ\");</script>"; 
            $this->redirect(Yii::app()->homeUrl);
        }
    }

    function actionLogout() {
        unset(Yii::app()->session["userlogin"]);
        unset(Yii::app()->session["fullname"]);
        unset(Yii::app()->session["user_typelogin"]);
        unset(Yii::app()->session["user_email"]);
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actiondynamic() {
         $model = new UserModels;
        if ($_POST['codegroup'] == 1) {
            $attributes["codegroup"] = 1;
            $arr = WorkgroupModels::model()->findAllByAttributes($attributes);
            foreach ($arr as $value) {
                echo CHtml::tag('option', array('value' => $value['code']), CHtml::encode($value['department']), true);
            }           
        }

        if ($_POST['codegroup'] == 2) {
            $attributes["codegroup"] = 2;
            $arr = WorkgroupModels::model()->findAllByAttributes($attributes);
            foreach ($arr as $value) {
                echo CHtml::tag('option', array('value' => $value['code']), CHtml::encode($value['department']), true);
            }
        }

        if ($_POST['codegroup'] == 3) {
            $attributes["codegroup"] = 3;
            $arr = WorkgroupModels::model()->findAllByAttributes($attributes);
            foreach ($arr as $value) {
                echo CHtml::tag('option', array('value' => $value['code']), CHtml::encode($value['department']), true);
            }
        }

        if ($_POST['codegroup'] == 4) {
            $attributes["codegroup"] = 4;
            $arr = WorkgroupModels::model()->findAllByAttributes($attributes);
            foreach ($arr as $value) {
                echo CHtml::tag('option', array('value' => $value['code']), CHtml::encode($value['department']), true);
            }
        }

        if ($_POST['codegroup'] == 5) {
            $attributes["codegroup"] = 5;
            $arr = WorkgroupModels::model()->findAllByAttributes($attributes);
            foreach ($arr as $value) {
                echo CHtml::tag('option', array('value' => $value['code']), CHtml::encode($value['department']), true);
            }
        } 
        
       if (empty($_POST['codegroup'])) {
            echo CHtml::tag('option', array('value' => ''), CHtml::encode('ยังไม่ได้เลือกกลุ่มภารกิจ'), true);
        }
        exit();
    }

    function actionAdduser() {
        $model = new UserModels;

        if (!empty($_POST['UserModels'])) {
            //$model = new UserModels();
            $model->_attributes = $_POST['UserModels'];
            if (empty($model->username) || empty($model->fullname) || empty($model->workgroup)) {
                echo "<script type=\"text/javascript\"> alert(\"ยังใส่ข้อมูลไม่ครบนะจ๊ะ\");</script>";
                $this->render('User', array(
                    'model' => $model
                ));
                exit(0);
            }
            $sql = "SELECT username FROM user WHERE username ='$model->username'";
            $drFind = UserModels::model()->findBySql($sql);
            if (!empty($drFind)) {
                if ($model->username == $drFind->username) {
                    echo "<script type=\"text/javascript\"> alert(\"ชื่อผู้เข้าใช้มีผู้นำไปใช้งานแล้ว\");</script>";
                }
            } else {
                //$model->password = md5($model->password);
                $model->password = md5('1234'); //เข้ารหัส passwords ด้วย md5
                $model->date_create = date('Y-m-d H:i:s'); //บันทึกเวลาลงทะเบียน

                if ($model->save()) {
                    echo "<script type=\"text/javascript\"> alert(\"เพิ่มผู้ใช้สำเร็จ \");</script>";
                    $this->redirect('index.php?r=user/View&id=' . $model->id);
                }
            }
        }
        if (Yii::app()->session["user_typelogin"] == 'ADMINISTRATOR') {
            $this->render('User', array(
                'model' => $model,
            ));
        } else {
            $this->redirect('index.php');
        }
    }

    function actionView($id = null) {
        // $model = new CActiveDataProvider('UserModels');
        if (!empty($id)) {
            //echo "<script type=\"text/javascript\"> alert(\"เพิ่มผู้ใช้สำเร็จ \");</script>";
            $criteria = new CDbCriteria(array('condition' => 'ID=' . $id,
                'limit' => 1,
                    // 'active = True',
            ));
            $model = new CActiveDataProvider('UserModels', array(
                'criteria' => $criteria,
                'pagination' => false
            ));
        } else {

            $criteria = new CDbCriteria(array('condition' => 'active = True',));
            $model = new CActiveDataProvider('UserModels', array(
                'criteria' => $criteria,
                'pagination' => array(
                    'pagesize' => 20
                )
            ));
        }


        // array('condition' => 'active = True',)
        // $user=UserModels::model()->findByPk($id);
        $this->render('UserView', array(
            'model' => $model,
                // 'id' => $id,
        ));
    }

    function actionInsert($id = NULL) {
        if (!empty($id)) {
            $model = UserModels::model()->findByPk($id);
        }
        if (!empty($_POST['UserModels'])) {
            $model->_attributes = $_POST['UserModels'];

            if (empty($model->username) || empty($model->fullname) || empty($model->workgroup)) {
                // echo "<script type=\"text/javascript\"> alert(\"$kks\");</script>";
                echo "<script type=\"text/javascript\"> alert(\"ยังใส่ข้อมูลไม่ครบนะจ๊ะ\");</script>";
                $this->render('User', array(
                    'model' => $model,
                    'id' => $id
                ));
                exit(0);
            }
            $ufind = UserModels::model()->findByPk($id);

            if ((empty($model->password)) || (md5($ufind->password) == md5($model->password))) {
                $model->password = $ufind->password;
            } else {
                $model->password = md5($model->password);
            }

            if ($model->save()) {
                $this->redirect('index.php?r=user/View&id=' . $id);
                exit(0);
            }
        }

        if (Yii::app()->session["user_typelogin"] == 'ADMINISTRATOR') {
            $this->render('User', array(
                'model' => $model
            ));
        } else {
            $this->redirect('index.php');
        }
    }

    function actionInsertUpdate($id = NULL) {
        $model = new UserModels();
        if (!empty($id)) {
            $model = UserModels::model()->findByPk($id);
            //$model->password = md5($model->password);
        }

        if (!empty($_POST['UserModels'])) {
            //$model = new UserModels();

            $model->_attributes = $_POST['UserModels'];
            // echo "<script type=\"text/javascript\"> alert(\";;-$model->password\");</script>";
            // exit(0);
            // $kks = $_POST['oldpass'];
            if (empty($model->username) || empty($model->fullname)) {
                // echo "<script type=\"text/javascript\"> alert(\"$kks\");</script>";
                echo "<script type=\"text/javascript\"> alert(\"ยังใส่ข้อมูลไม่ครบนะจ๊ะ\");</script>";
                $this->render('User', array(
                    'model' => $model
                ));
                exit(0);
            }
            $sql = "SELECT username FROM user WHERE username ='$model->username'";
            $drFind = UserModels::model()->findBySql($sql);
            if (empty($id)) {
                if (!empty($drFind)) {
                    if ($model->username == $drFind->username) {
                        echo "<script type=\"text/javascript\"> alert(\"ชื่อผู้เข้าใช้มีผู้นำไปใช้งานแล้ว\");</script>";
                        $this->render('User', array(
                            'model' => $model
                        ));
                        exit(0);
                    }
                }
            }
            if (!empty($id)) {
                $uidFind = UserModels::model()->findByPk($id);
                if (!empty($drFind)) {
                    if ($model->username != $uidFind->username) {
                        echo "<script type=\"text/javascript\"> alert(\"ชื่อผู้เข้าใช้มีผู้นำไปใช้งานแล้ว\");</script>";
                        $this->render('User', array(
                            'model' => $model
                        ));
                        exit(0);
                    }
                }
            }
            if (!empty($id)) {

                $uidFind = UserModels::model()->findByPk($id);
                if ((md5($uidFind->password) != md5($model->password)) && (!empty($model->password))) {
                    echo "<script type=\"text/javascript\"> alert(\"$model->password\");</script>";
                    exit(0);
                    $model->password = md5($model->password);
                }
            } else {
                exit(0);
                $model->password = md5('1234'); //เข้ารหัส passwords ด้วย md5
            }
            $model->date_create = date('Y-m-d H:i:s'); //บันทึกเวลาลงทะเบียน

            if ($model->save()) {
                //echo "<script type=\"text/javascript\"> alert(\"เพิ่มผู้ใช้สำเร็จ \");</script>";
                $this->redirect('index.php?r=user/View&id=' . $model->id);
            }
        }
        if (Yii::app()->session["user_typelogin"] == 'ADMINISTRATOR') {
            $this->render('User', array(
                'model' => $model
            ));
        } else {
            $this->redirect('index.php');
        }
    }

    function actioncancle($id = NULL) {
        if (!empty($id) && Yii::app()->session["user_typelogin"] == 'ADMINISTRATOR') {
//            $getModel = EmpModels::model()->findByPk($id);
//            $getModel->active = 'False';
            UserModels::model()->updateByPk($id, array('active' => 'False'));
        }

        $this->redirect(array('View'));
    }

    function actionclear($id = NULL) {
        if (!empty($id) && Yii::app()->session["user_typelogin"] == 'ADMINISTRATOR') {
            UserModels::model()->updateByPk($id, array('password' => md5('1234')));
        }
        $this->redirect(array('View'));
    }

}

?>