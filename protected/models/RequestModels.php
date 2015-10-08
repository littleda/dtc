<?php
class RequestModels extends CActiveRecord{
    static function model($className = __CLASS__) {
        return parent::model($className);
    }
      function tableName() {
        return 'request';
    }
    function relations() { /* การจอยตาราง */
        return array(
            'us' => array(self::BELONGS_TO, 'UserModels', 'userID','with'=>'wg'),
        );
    }
    
}
 