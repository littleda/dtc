<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Upload extends CFormModel {

    public $file;

    public function rules() {
        return array(array('file', 'file', 'types' => 'jpg,gif,png,txt'),);
    }

    public function attributeLabels() {
        return array(
            'fileField' => 'อัพโหลดไฟล์',
        );
    }

}

?>