<?php
$q = $_GET['q'];
$id = intval($_GET['id']);
//$q = $_REQUEST["q"];

$hint = "";
$con = mysqli_connect('localhost', 'root', 'l234s', 'dtc');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con, "ajax_demo");
$sql = "SELECT username FROM user WHERE id ='" . $id . "' and password = '" . md5($q) . "'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
if (empty($row)) {
    echo "<font color=\"red\"><i>รหัสผ่านไม่ตรงกับที่บันทึกไว้</i></font>";
    //echo $q;
}
if (!empty($row)) {
    echo "<div><font color=\"green\"><i>รหัสผ่านตรงกับที่บันทึกไว้</i></font></div>";
    //echo "<input type=\"password\" id=\"newpass\" placeholder=\"รหัสผ่านใหม่\">";
   // echo "<div class=\"col-md-3 col-md-offset-2\"  style=\"visibility:none\" >";
}
//while ($row = mysqli_fetch_array($result)) {
//    echo $row["username"];
//}
// lookup all hints from array if $q is different from "" 
//if ($q !== "") {
//     $len=strlen($q);
//     foreach($result as $name) {
//        if (stristr($q, substr($name, 0, $len))) {
//            if ($hint === "") {
//                $hint = $name;
//            } else {
//                $hint .= ", $name";
//            }
//        }
//    }
//    echo $q;
//}
//
//// Output "no suggestion" if no hint was found or output correct values 
//echo $hint === "" ? "no suggestion" : $hint;
mysqli_close($con);
?>



