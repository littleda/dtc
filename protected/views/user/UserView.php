<?php if ((Yii::app()->session["user_typelogin"] == 'ADMINISTRATOR') || !empty($id)) { ?>
    <div class="alert alert-success" role="alert">
        <center><a href="<?php echo Yii::app()->createUrl("User/Adduser"); ?>"> 
                <input type="button" value="เพิ่มผู้ใช้"  class="btn btn-info"/>
                <!--                <button type="button" class="btn btn-sm btn-primary">เพิ่มข้อมูล</button>-->
            </a></center>
        <!--    <h2><small>เพิ่มผู้ใช้สำเร็จ!!</small>-->
        <?php
//$user=UserModels::model()->findByPk($id);
//echo 'ยินดีต้อนรับคุณ "'.$user->fullname.'" เข้าใช้งานระบบ</h2>' ;
        ?>
        <!--    <a class="btn btn-default" href="index.php?r=User/Adduser" role="button">กลับ</a>-->
    </div>
    <?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'user-grid',
        'dataProvider' => $model,
        'columns' => array(
            array(
                'header' => '####',
                'class' => 'CLinkColumn',
                'imageUrl' => 'images/person.png',
                'htmlOptions' => array(
                    'style' => 'text-align:center;color:red',
                    'width' => '1%'
                )
            ),
            array(
                'header' => 'ชื่อล็อคอิน',
                'value' => '($data->username)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'ชื่อผู้ใช้',
                'value' => '($data->fullname)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'ตำแหน่ง',
                'value' => '($data->position)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'หน่วยงาน',
                'value' => '($data->wg->department)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'อีเมล์',
                'value' => '($data->email)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'เบอร์โทร',
                'value' => '($data->telephone)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'ชนิดผู้ใช้',
                'value' => '($data->user_type)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'เคลียร์รหัสผ่าน',
                'class' => 'CLinkColumn',
                'imageUrl' => 'images/clear.png',
                'urlExpression' => 'Yii::app()->createUrl("/user/clear",array("id" => $data->id))',
                'htmlOptions' => array(
                    'width' => '2%',
                    'align' => 'center',
                    'onclick' => 'return confirm("ยืนยันการเคลียร์รหัสผ่าน")'
                )
            ),
            array(
                'header' => 'ยกเลิก',
                'class' => 'CLinkColumn',
                'imageUrl' => 'images/cancle.png',
                'urlExpression' => 'Yii::app()->createUrl("/user/cancle",array("id" => $data->id))',
                'htmlOptions' => array(
                    'width' => '2%',
                    'align' => 'center',
                    'onclick' => 'return confirm("ยืนยันการยกเลิกผู้ใช้")'
                )
            )
//        array(
//                    'header' => 'แก้ไข',
//                    'class' => 'CLinkColumn',
//                    'imageUrl' => 'images/edit.png',
//                    'urlExpression' => 'Yii::app()->createUrl("/User/InsertUpdate", array("id" =>$data->id))',
//                    'htmlOptions' => array(
//                        'width' => '2%',
//                        'align' => 'center'
//                    )
//                ),
        ),
    ));
} if ((Yii::app()->session["user_typelogin"] == 'SUPERUSER') || (Yii::app()->session["user_typelogin"] == 'USER')) {
    echo "<script type=\"text/javascript\"> alert(\"แก้ไขข้อมูลสำเร็จ\");</script>";
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'user-grid',
        'dataProvider' => $model,
        'columns' => array(
            array(
                'header' => '####',
                'class' => 'CLinkColumn',
                'imageUrl' => 'images/person.png',
                'htmlOptions' => array(
                    'style' => 'text-align:center;color:red',
                    'width' => '1%'
                )
            ),
            array(
                'header' => 'ชื่อล็อคอิน',
                'value' => '($data->username)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'ชื่อผู้ใช้',
                'value' => '($data->fullname)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'ตำแหน่ง',
                'value' => '($data->position)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'หน่วยงาน',
                'value' => '($data->wg->department)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'อีเมล์',
                'value' => '($data->email)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'เบอร์โทร',
                'value' => '($data->telephone)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
            array(
                'header' => 'ชนิดผู้ใช้',
                'value' => '($data->user_type)',
                'htmlOptions' => array(
                    'style' => 'text-align:center',
                    'width' => '6%',
                )
            ),
        ),
    ));
}
?>






