<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UploadFile extends CFormModel
{
 
    public $fileField;
     
    public function rules()
    {
        return array(
            array(
                'fileField', 'files', 'file',
                'types' => 'jpg,pdf,doc,txt',  // ให้ (Field) files กำหนดประเภท file ชนิด jpg,pdf,doc
                'wrongType' => 'รองรับไฟล์ jpg, pdf, doc ,txt เท่านั้น', 'allowEmpty' => true, // ข้อความเตือน
                'maxSize' => 1024 * 1024 * 5, // 5 MB
                'tooLarge' => 'ขนาดไฟล์ไม่เกิน 5MB' // ขนาดไฟล์
            ),
        );
    }
     
    public function attributeLabels()
    {
        return array(
            'fileField' => 'อัพโหลดไฟล์',
        );
    }
     
}