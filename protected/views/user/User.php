<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
<script type="text/javascript">


    function myFunction(id) {
        alert(id);
        myWindow = window.open("<?php echo Yii::app()->theme->baseurl; ?>/ajax/test.php?id=" + id, "MsgWindow", "width=200, height=200");
        myWindow.document.write("<form><input type=\"password\"  placeholder=\"รหัสผ่านเก่า\" onkeyup=\"checkpass(this.value)\"</form>");
    }

    function checkpass(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "<?php echo Yii::app()->theme->baseurl; ?>/ajax/getpass.php?q=" + str + "&id=<?php echo $model->id ?>", true);
            xmlhttp.send();
        }
    }

    $(document).ready(function () {
        var newP = " ";
        var l = " ";
        var code = " ";
        $(this).mousemove(function () {
            //l = $("#txtHint").children().length;
            l = $("#txtHint").children("div").text();
            //l="x";
            //alert(l);
            if (l == "รหัสผ่านตรงกับที่บันทึกไว้") {
                //alert("ss");
                $("#newpass").prop('readonly', false);
                $("#newpass").css({"background": "#FFFFFF"});
            } else {
                $("#newpass").prop('readonly', true);
                $("#newpass").css({"background": "#DDDDDD"});
            }

        });

        $("#newpass").keyup(function () {
            //alert("ne");
            newP = $("#newpass").val();
            $("#UserModels_password").val(newP);
        });
        
        $(this).click(function () {
            code = $("#dept_id").val();
            $("#UserModels_workgroup").val(code);
        });
//        $("#dept_id").change(function(){
//            //alert("ee");
//            code = $("#dept_id").val();
//            $("#UserModels_workgroup").val(code);
//        });
    });

//    $(document).ready(function () {
//        var old = ' ';
//        $("#oldpass").keyup(function () {
//            old = $("#oldpass").val();
//            alert(old);
//        });

//    });
</script>

<div class="page-header">
    <?php if ((!empty($model->id)) || (!empty($id))) { ?>
        <h1 class="panel-title"><?php echo CHtml::image('images/admin.png'); ?> แก้ไขผู้ใช้ </h1>
    <?php } else { ?>
        <h1 class="panel-title"><?php echo CHtml::image('images/admin.png'); ?> เพิ่มผู้ใช้ </h1>
    <?php } ?>
</div>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'User-form',
    'enableAjaxValidation' => false,
        ));
?>
<?php if ((!empty($model->id)) || (!empty($id))) { ?>
    <div class="row">
        <div class="col-md-2  col-xs-5" align="right">
            <?php echo $form->labelEx($model, "ชื่อล็อคอิน"); ?><font size="3" color="red">*</font>

        </div>
        <div class="col-md-5">
            <?php echo $form->textField($model, "username", array('readonly' => true, 'style' => 'background: #DDDDDD')); ?>
        </div>
    </div><br>
<?php } else { ?>
    <div class="row">
        <div class="col-md-2  col-xs-5" align="right">
            <?php echo $form->labelEx($model, "ชื่อล็อคอิน"); ?><font size="3" color="red">*</font>
        </div>
        <div class="col-md-3">
            <?php echo $form->textField($model, "username"); ?>
        </div>
    </div><br>
<?php } ?>
<div class="row">
    <div class="col-md-2  col-xs-5" align="right">
        <?php echo $form->labelEx($model, 'ชื่อ-สกุล'); ?><font size="3" color="red">*</font>
    </div>
    <div class="col-md-3">
        <?php echo $form->textField($model, 'fullname'); ?>
    </div>       
</div><br>

<div class="row">
    <div class="col-md-2 col-xs-5" align="right">
        <?php echo $form->labelEx($model, 'ตำแหน่งงาน'); ?>
    </div>
    <div class="col-md-3 ">
        <?php echo $form->textField($model, 'position'); ?>
    </div>
</div><br>

<div class="row">
    <div class="col-md-2 col-xs-5" align="right">
        <?php echo $form->labelEx($model, 'หน่วยงานที่สังกัด'); ?><font size="3" color="red">*</font>
    </div>
    <div class="col-md-6 "> 
        <!--        <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on top">Tooltip on top</a>-->
        <?php
        echo CHtml::label('กลุ่มภารกิจ ', false);
        $options = array(
            '' => 'กรุณาเลือกกลุ่มภารกิจ',
            1 => 'อำนวยการ',
            2 => 'ปฐมภูมิ',
            3 => 'ตติยภูมิ',
            4 => 'พัฒนาระบบบริการสุขภาพ',
            5 => 'การพยาบาล',
        );
        if (!empty($model->workgroup)) {
            echo CHtml::dropDownList('codegroup', $model->wg->codegroup, $options, array(
                'ajax' => array(
                    'type' => 'POST',
                    'url' => $this->createUrl('User/dynamic'),
                    'update' => '#dept_id', '#workgroup',
                )
                    )
            );
        } else {
            echo CHtml::dropDownList('codegroup', '', $options, array(
                'ajax' => array(
                    'type' => 'POST',
                    'url' => $this->createUrl('User/dynamic'),
                    'update' => '#dept_id', '#workgroup',
                )
                    )
            );
        }
        echo CHtml::label('   งาน/ฝ่าย', false);
        if (!empty($model->workgroup)) {
            echo CHtml::dropDownList('dept_id','',  array( $model->wg->code=> $model->wg->department));
        } else {
            echo CHtml::dropDownList('dept_id', '', array('' => 'ยังไม่ได้เลือกกลุ่มภารกิจ'));
        }
        //echo CHtml::textField('workgroup', '');
        ?>
<?php echo $form->hiddenField($model, 'workgroup'); ?>
    </div>
</div><br>

<div class="row">
    <div class="col-md-2 col-xs-5" align="right">
        <?php echo $form->labelEx($model, 'อีเมล์'); ?>
    </div>
    <div class="col-md-3 ">
<?php echo $form->textField($model, 'email'); ?>
    </div>
</div><br>
<div class="row">
    <div class="col-md-2 col-xs-5" align="right">
        <?php echo $form->labelEx($model, 'เบอร์โทร'); ?>
    </div>
    <div class="col-md-3 ">
<?php echo $form->textField($model, 'telephone'); ?>
    </div>
</div><br>
<?php if (!empty($model->id) || !empty($id)) { ?>

        <?php } else { ?>
    <div class="row">
        <div class="col-md-2 col-xs-5" align="right">
            <?php echo $form->labelEx($model, 'สิทธิ์การใช้งาน'); ?><font size="3" color="red">*</font>
        </div>
        <div class="col-md-3 ">
    <?php echo $form->dropDownList($model, 'user_type', array('USER' => 'USER', 'SUPERUSER' => 'SUPERUSER', 'ADMINISTRATOR' => 'ADMINISTRATOR')); ?>
        </div>
    </div><br>

        <?php } ?>  
        <?php if ((!empty($model->id)) || (!empty($id))) { ?> 
    <div class="row">
        <div class="col-md-2 col-xs-5" align="right">
    <?php echo $form->labelEx($model, 'เปลี่ยนรหัสผ่าน'); ?>
    <!--            <a onclick="myFunction(<?php //echo $model->id    ?>)" ><label>เปลี่ยนรหัสผ่าน</label></a>-->
        </div>
        <div class="col-md-2 ">
            <input id="oldpass" type="password"  placeholder="รหัสผ่านเก่า" pattern="[a-zA-Z0-9]{4,}$" data-toggle="tooltip" data-placement="right" title="ต้องเป็นอักษรภาษาอังกฤษ หรือ ตัวเลข ไม่น้อยกว่า 4 ตัว"  onkeyup="checkpass(this.value)">
            <!--            <br>    -->

                                                                                <!-- <input type="textbox" id="oldpass" placeholder="รหัสผ่านเก่า"> -->
        </div>
        <div class="col-md-3 " id="txtHint"></div>
    </div><br>    
    <div class="row">    

        <div class="col-md-3 col-md-offset-2 col-xs-offset-5" >
        <!--            <input type="textbox" id="newpass" value="<?php //$newpass                                       ?>" placeholder="รหัสผ่านใหม่">-->
            <input type="password" id="newpass" placeholder="รหัสผ่านใหม่" pattern="[a-zA-Z0-9]{4,}$" data-toggle="tooltip" data-placement="right" title="ต้องเป็นอักษรภาษาอังกฤษ หรือ ตัวเลข ไม่น้อยกว่า 4 ตัว"  style="background: rgb(221, 221, 221);" readonly>

        </div> 
    <?php //echo $form->textField($model, 'password');   ?>
    <?php echo $form->hiddenField($model, 'password'); ?>

    </div><br>
    <div class="row">      
        <div class="col-md-4 col-md-offset-2"  align="center">
        <?php //echo CHtml::button('แก้ไข',array('submit' => array('User/InsertUpdate', 'oldpass'=>'oldpass','newpass'=>'newpass','class' => 'btn')));  ?>
            <?php echo CHtml::submitButton("แก้ไข", array('class' => 'btn')); ?>
        </div>
    <?php } else { ?>
        <div class="col-md-4 col-md-offset-2"  align="center">
    <?php echo CHtml::submitButton("เพิ่ม", array('class' => 'btn', '')); ?>
        </div>
<?php } ?>
</div>
<?php $this->endWidget(); ?><br>


<br><br>
