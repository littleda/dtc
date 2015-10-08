<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UploadController extends Controller {
    function actionTest(){
        $filetype = '0';
        if (!empty($_POST['filetype'])) {
            $filetype = $_POST['filetype'];
            echo $filetype;
        }
        $this->render('test', array('filetype' => $filetype));        
    }
    function actionIndex() {
        $dir = 'myupload/';
        $uploaded = false;
        $model = new Upload();
        $new_name = '';
        $i = 0;



        if (isset($_POST['Upload'])) {

            $model->attributes = $_POST['Upload'];
            $uploadfile = CUploadedFile::getInstance($model, 'file');
            $new_name = $uploadfile->getName();
            $pathfile = realpath($dir) . "\\" . $new_name;
//            echo "Path =".$filename."<br>";
            if ($model->validate()) {
                $uploaded = $uploadfile->saveAs($dir . $new_name);
                $conn = mysql_connect("localhost", "root", "");
                if ($conn) {
                    echo "ture Connect" . "<br>";
                } else
                    return "false Connect";
//               
                mysql_select_db("mydatabase", $conn);
                mysql_select_db("datacenter");
                $objFopen = fopen($pathfile, 'r');
                $file = fgets($objFopen, 4096);
                list($HOSPCODE, $PID, $INSTYPE_OLD, $INSTYPE_NEW, $INSID, $STARTDATE, $EXPIREDATE, $MAIN, $SUB, $D_UPDATE) = explode("|", $file);
                if ($objFopen) {
                    while (!feof($objFopen)) {
                        $file = fgets($objFopen, 4096);
                        list($HOSPCODE, $PID, $INSTYPE_OLD, $INSTYPE_NEW, $INSID, $STARTDATE, $EXPIREDATE, $MAIN, $SUB, $D_UPDATE) = explode("|", $file);
//                        echo $a . $b . $c . $d . $e . $f . $g . $h . $i . $j . "<br>";

                        $sql = "INSERT INTO CARD(HOSPCODE, PID, INSTYPE_OLD,INSTYPE_NEW,INSID,STARTDATE,EXPIREDATE,MAIN,SUB,D_UPDATE)"
                                . " VALUES('" . $HOSPCODE . "','" . $PID . "','" . $INSTYPE_OLD . "','" . $INSTYPE_NEW . "','" . $INSID . "','" . $STARTDATE . "','" . $EXPIREDATE . "','" . $MAIN . "','" . $SUB . "','" . $D_UPDATE . "')";
                        mysql_query($sql, $conn) or die(mysql_error());
                    }

                    fclose($objFopen);
                }
            } // วงเล็บปิด  if ($model->validate())
        }

        $this->render('index', array(
            'model' => $model,
            'uploaded' => $uploaded,
            'dir' => $new_name,
        ));
    }

}
