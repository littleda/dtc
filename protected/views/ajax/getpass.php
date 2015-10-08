<?php
$q = intval($_GET['q']);
$id = intval($_GET['id']);
//$q = $_REQUEST["q"];

$hint = "";
$con = mysqli_connect('localhost', 'root', 'l234s', 'dtc');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con, "ajax_demo");
$sql = "SELECT username FROM user WHERE id ='".$id."' and password = '" . md5($q) . "'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
if(!empty($row)){
    echo "รหัสผ่านตรงกัน";
    
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

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

