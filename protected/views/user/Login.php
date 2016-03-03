 <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    คุณยังไม่มีสิทธิ์เข้าใช้เมนูนี้ กรุณาLoginเข้าระบบ
                </div>
<div class="panel panel-primary">
    <div class="panel-heading">USER LOGIN</div>
    <div class="panel-body">

        <div class="jumbotron">
            <div class="container">

               

                <div class="form-signin" >
                    <?php echo CHtml::form(array("User/Check")); ?>


                    <div class="form-group has-success col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon"><img src='images/user_1.png'></span>
                            <input type="text" class="form-control"  placeholder="Username" name="Username">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><img src='images/pass.png'></span>
                            <input type="password" class="form-control" placeholder="Password" name="Password">
                        </div>

                        <br>
                        <div align='right'>
                            <input type="submit" value="เข้าระบบ" class="btn btn-primary" />
                        </div>
                        <br />
                    </div>
                    <?php echo CHtml::endForm(); ?>
                </div>
            </div>
        </div>

    </div>
</div>
