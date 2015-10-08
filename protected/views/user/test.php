<script>
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
            xmlhttp.open("GET", "<?php echo Yii::app()->theme->baseurl; ?>/ajax/getpass.php?q=" + str + "&id=<?php echo $model->id; ?>", true);
            xmlhttp.send();
        }
    }
</script>
<html>
    
<div class="row">
    <div class="col-md-3 ">
        <form><input type=\"password\"  placeholder=\"รหัสผ่านเก่า\" onkeyup=\"checkpass(this.value)\"</form>
        <br>    
        <!-- <input type="textbox" id="oldpass" placeholder="รหัสผ่านเก่า"> -->
    </div>
</div><br>
<div class="row">    
    <div class="col-md-3"  id="txtHint">
<!--            <input type="textbox" id="newpass" value="<?php //$newpass           ?>" placeholder="รหัสผ่านใหม่">-->
    </div>
</div><br>
</html>
