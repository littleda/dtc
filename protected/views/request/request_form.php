<br>
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-info ">
    <!-- Default panel contents -->
    <div class="panel-heading">คำขอรายงาน</div>

    <!-- Table -->
    <div class="panel-body">
        <br>
        <?php echo CHtml::form(array("Request/addRequest")); ?>
        <textarea class="form-control" rows="5" name="reqDetail"></textarea><br>
        <center><button type="submit" class="btn btn-info" >ส่งคำขอ</button></center>
         <?php echo CHtml::endForm(); ?>
        <br>
    </div>
</div>
</div>