<?php
//$text='finish';
//$this->widget('zii.widgets.grid.CGridView', array(
//    'id' => 'request-grid',
//    'dataProvider' => $model,
//    //'enablePagination' => true,
//    
//));
?>
<div id="for-link">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>วันที่ขอข้อมูล</th>                
                <th>รายละเอียด</th>
                <th>ผู้ขอ</th>
                <th>อีเมล์</th>
                <th>สถานะ</th>                
            </tr>
        </thead>
        <tbody>
            <?php
            $list = Yii::app()->db->createCommand()->select('*')->from('request')->order('date_request')->query();
            $row = 1;
            foreach ($list as $ds) {
                ?>
                <tr>
                    <td><?php echo $row ?></td>            
                    <td><?php echo $ds['date_request'] ?></td>
                    <td><?php echo $ds['reqDetail'] ?></td>
                    <td><?php echo $ds['name'] ?></td> 
                    <td><?php echo $ds['email'] ?></td> 
                    <?php if( Yii::app()->session["user_type_login"] == 'ADMINISTRATOR'){ ?>
                    <td><input type='checkbox' name='status'><td>
                    <?php }else{?>
                    <td><?php echo $ds['status'] ?></td>          
                    <?php } ?>
                </tr>
                <?php
                $row++;
            }
            ?>
            <?php
            //$model = RequestModels::model()->findAll();
            //echo CHtml::ajaxLink('xllx', Yii::app->createUrl('Request/Checked');
            //   echo CHtml::ajaxLink('dd',Yii::app->createUrl('Request/Checked'),
            //        array(
            //           'type'=>'POST',
            //           'data'=>js:{theIds : $.fn.yiiGridView.getChecked("request-grid","example-check-boxes").toString()}
            //           // pay special attention to how the data is passed here
            //        ),
            //   );
            ?>

            </div>
        

