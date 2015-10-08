<?php

echo CHtml::beginForm();
    echo CHtml::label('กลุ่มภารกิจ ', false);
    echo CHtml::dropDownList('codegroup', '',
        array(
            '' => 'กรุณาเลือกกลุ่มภารกิจ',
            1 => 'อำนวยการ',
            2 => 'ปฐมภูมิ',
            3 => 'ตติยภูมิ',
            4 => 'พัฒนาระบบบริการสุขภาพ',
            5 => 'การพยาบาล',
        ),
        array(
            'ajax' => array(
                'type' => 'POST',
                'url' => $this->createUrl('Example/dynamic'),
                'update' => '#dept_id',
            )
        )
    );
    echo CHtml::label('งาน/ฝ่าย', false);
    echo CHtml::dropDownList('dept_id', '', array('' => 'ยังไม่ได้เลือกกลุ่มภารกิจ'));
echo CHtml::endForm();
?>

