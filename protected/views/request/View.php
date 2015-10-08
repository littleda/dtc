<br>

<div class="page-header">
    <h1 class="panel-title"><?php echo CHtml::image('images/admin.png'); ?> รายการคำขอรายงาน </h1>
</div>


<?php
if ((Yii::app()->session["user_typelogin"] == 'ADMINISTRATOR')||(Yii::app()->session["userlogin"] == '3820800015972')) {
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'request-grid',
        'dataProvider' => $model,
        'columns' => array(
            array(
                'header' => 'เลขที่คำขอ',
                'value' => '($data->reqNo)',
                'htmlOptions' => array(
                    'width' => '6%',
                    'style' => 'text-align:center',
                )
            ),
            array(
                'header' => 'วันที่ขอรายงาน',
                'value' => '($data->date_request)',
                'htmlOptions' => array(
                    'width' => '10%',
                    'style' => 'text-align:center',
                )
            ),
            array(
                'header' => 'รายละเอียด',
                'value' => '($data->reqDetail)',
                'htmlOptions' => array(
                    'width' => '35%',
                    'style' => 'text-align:center',
                )
            ),
            array(
                'header' => 'ผู้ขอ',
                'value' => '($data->us->fullname)',
                'htmlOptions' => array(
                    'width' => '20%',
                    'style' => 'text-align:center',
                )
            ),
            array(
                'header' => 'หน่วยงาน',
                'value' => '($data->us->wg->department)',
                'htmlOptions' => array(
                    'width' => '10%',
                    'style' => 'text-align:center',
                )
            ),
            array(
                'header' => 'อีเมล์',
                'value' => '($data->us->email)',
                'htmlOptions' => array(
                    'width' => '10%',
                    'style' => 'text-align:center',
                )
            ),
//            array(
//                'header' => 'สถานะ',
//                'value' => '($data->status)',
//                'htmlOptions' => array(
//                    'width' => '10%',
//                    'style' => 'text-align:center',
//                )
//            ),
//            array(
//                'header' => 'สถานะ',
//                'htmlOptions' => array(
//                    'width' => '10%',
//                    'align' => 'center',
//                    'style' => 'text-align:center;color:green'
//                ),
//                'value' => function($data) {
//                    if ($data->status == 'wait') {
//                        return 'รอดำเนินการ';
//                        //return CHtml::link('รอดำเนินการ',array('Request/View', array("id" =>$data->reqNo)));
//                    } else {
//                        return 'ส่งแล้ว';
//                    }
//                }
//            ),
            array(
                'header' => 'สถานะ',
                'class' => 'CLinkColumn',
//                'labelExpression'=>function($data){
//                    if('finish' == $data->status){
//                        
//                    }
//                    
//                }
                'labelExpression' => function($data) {
                    if ($data->status == 'wait') {
                        return 'รอดำเนินการ';
                        //return CHtml::link('รอดำเนินการ',array('Request/View', array("id" =>$data->reqNo)));
                    } else {
                        return 'ส่งแล้ว';
                    }
                },
                //'class' => 'CButtonColumn',
                // 'template' => 'status',
                // 'buttons' => array(
                //    '$data["status"]' => array(
                //        'labelExpression' => '$data["status"]',
                //'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                //      'url' => 'Yii::app()->createUrl("/Request/View", array("id" =>$data->reqNo))',
                //   ),
                // ),
                //'value' => '($data->status)',
                //'imageUrl' => 'images/edit.png',
                'urlExpression' => 'Yii::app()->createUrl("/Request/View", array("id" =>$data->reqNo))',
                'htmlOptions' => array(
                    'style' => 'text-align:center;color:green',
                    // 'type' => 'button',
                    //'class' => 'btn btn-default',
                    'width' => '9%',
                    'align' => 'center',
                    'onclick' => 'return confirm("ยืนยันการแก้ไขสถานะ")'
                )
            )
        ),
    ));
} else {
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'request-grid',
        'dataProvider' => $model,
        'columns' => array(
            array(
                'header' => 'เลขที่คำขอ',
                'value' => '($data->reqNo)',
                'htmlOptions' => array(
                    'width' => '6%',
                    'style' => 'text-align:center',
                )
            ),
            array(
                'header' => 'วันที่ขอรายงาน',
                'value' => '($data->date_request)',
                'htmlOptions' => array(
                    'width' => '10%',
                    'style' => 'text-align:center',
                )
            ),
            array(
                'header' => 'รายละเอียด',
                'value' => '($data->reqDetail)',
                'htmlOptions' => array(
                    'width' => '35%',
                    'style' => 'text-align:center',
                )
            ),
            array(
                'header' => 'ผู้ขอ',
                'value' => '($data->us->fullname)',
                'htmlOptions' => array(
                    'width' => '20%',
                    'style' => 'text-align:center',
                )
            ),
            array(
                'header' => 'หน่วยงาน',
                'value' => '($data->us->wg->department)',
                'htmlOptions' => array(
                    'width' => '10%',
                    'style' => 'text-align:center',
                )
            ),
            array(
                'header' => 'อีเมล์',
                'value' => '($data->us->email)',
                'htmlOptions' => array(
                    'width' => '10%',
                    'style' => 'text-align:center',
                )
            ),
            array(
                'header' => 'สถานะ',
                'value' => function($data) {
                    if ($data->status == 'wait') {
                        return 'รอดำเนินการ';
                    } else {
                        return 'ส่งแล้ว';
                    }
                },
                'htmlOptions' => array(
                    'style' => 'text-align:center',

                    'width' => '9%',

                )
            )
        ),
    ));
    
    
//    $this->widget('zii.widgets.grid.CGridView', array(
//        'id' => 'request-grid',
//        'dataProvider' => $model,));
}
?>



