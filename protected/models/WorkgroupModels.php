<?php

class workgroupModels extends CActiveRecord{
    static function model($className = __CLASS__) {
        return parent::model($className);
    }
      function tableName() {
        return 'workgroup';
    }
    function relations() {
        return array();
    }
}

