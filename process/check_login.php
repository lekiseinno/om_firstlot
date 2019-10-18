<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.text-center {
  padding-top: 400px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
  text-align: center;
}
</style>
<?php
session_start();
// include("class/connect.php");
// $class_con_125 = new Sqlsrv();
// $class_con_125->getConnect();
// // Select
// $query=$class_con_125->getQuery("
//   SELECT * FROM first_lot_list WHERE username = '".$_POST["username"]."' AND password = '".$_POST["password"]."'
// ");
// while($result=$class_con_125->getResult($query)){
//   $ID[] = $result['ID'];
//   $username[] = $result['username'];
// }
$username = $_POST["username"];
$password = $_POST["password"];
$usersname = array("admin","user");
$passwords = array("12345","12345");
if(in_array($username, $usersname) && in_array($password, $passwords)){
  $username = $_POST["username"];
}else{
  $username = "";
}
// check date expiry
if($username != ''){
    $_SESSION["username"] = $username;
    echo "<div class='text-center'>";
    echo "<div class='spinner-border text-dark' role='status' style='width: 5rem; height: 5rem;'>";
    echo "<span class='sr-only'>Loading...</span>";
    echo "</div>"."<br>";
    echo "Log In Complete Please Wait Page Loading...";
    echo "</div>";
    if($username=="user"){
      echo "<meta http-equiv='refresh' content='2;url=../index.php'>";
    }else{
      echo "<meta http-equiv='refresh' content='2;url=../report.php'>";
    }
}else{
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Username หรือ Password ไม่ถูกต้อง.<<\");";
    echo "window.history.back();";
    echo "</script>";
}
session_write_close();
// $class_con_125->Destroy();
?>