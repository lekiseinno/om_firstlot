<?php 
//ฟังก์ชั่นวันที่
error_reporting(0);
include("../class/connect.php");
session_start();
date_default_timezone_set('Asia/Bangkok');
$date = date("Y-m-d");
$date_upload = date("Y-m-d H:i:s");
$username = $_SESSION['username'];

if(isset($_FILES["files"]))
{
	foreach($_FILES['files']['tmp_name'] as $key => $val)
	{
		if($val!=""){
		//ฟังก์ชั่นสุ่มตัวเลข
		$numrand = (mt_rand());
		//เพิ่มไฟล์
		$path="../picture/"; 
		//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
		$type = strrchr($_FILES['files']['name'][$key],".");
		//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
		$newname_insert[] = $date.$numrand.$type;
		$newname = $date.$numrand.$type;
		$path_copy = $path.$newname;
		$path_link="../picture/".$newname;  
		$file_name = $_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];
		// echo "ID: ".$i.$file_tmp."AND".$path_copy."<br>";
		move_uploaded_file($file_tmp,$path_copy);
		}
	}
		// เพิ่มไฟล์เข้าไปในตาราง uploadfile
			$class_con_125 = new Sqlsrv();
            $class_con_125->getConnect();
            $query=$class_con_125->getQuery("
                INSERT INTO first_lot_list (Prod_order_no,Layout_no,Remark,Pic_1,Pic_2,Pic_3,Pic_4,Pic_5,Pic_6,Pic_7,Pic_8,Pic_9,Pic_10,Pic_11,Pic_12,Pic_13,Pic_14,Pic_15,Pic_16,Pic_17,Pic_18,Pic_19,Pic_20,Date_Delete,User_upload,Date_upload) 
				VALUES('".$_POST["pdr_no"]."','".$_POST["layout_no"]."','".$_POST["remark"]."','".$newname_insert['0']."','".$newname_insert['1']."','".$newname_insert['2']."','".$newname_insert['3']."','".$newname_insert['4']."','".$newname_insert['5']."','".$newname_insert['6']."','".$newname_insert['7']."','".$newname_insert['8']."','".$newname_insert['9']."','".$newname_insert['10']."','".$newname_insert['11']."','".$newname_insert['12']."','".$newname_insert['13']."','".$newname_insert['14']."','".$newname_insert['15']."','".$newname_insert['16']."','".$newname_insert['17']."','".$newname_insert['18']."','".$newname_insert['19']."','".date("Y-m-d H:i",strtotime($_POST["date_delete"]))."','".$username."','".$date_upload."')
            ");
	// javascript แสดงการ upload file
	echo "<script type='text/javascript'>";
	echo "alert('Upload File Successfully!');";
	echo "window.history.back();";
	echo "</script>";
}else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to upload again!');";
	echo "window.history.back();";
	echo "</script>";
}
?>