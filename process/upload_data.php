<?php 
//ฟังก์ชั่นวันที่
error_reporting(0);
include("../class/connect.php");
include("../include/function.php");
session_start();
date_default_timezone_set('Asia/Bangkok');
$date = date("Y-m-d");
$date_upload = date("Y-m-d H:i:s");
$num_delete = "60 day";
$date_delete =  date('Y-m-d H:i:s',strtotime($num_delete));
$username = $_SESSION['username'];

if(isset($_FILES["files"]))
{
	foreach($_FILES['files']['tmp_name'] as $key => $val)
	{
		if($val!=""){
		//ฟังก์ชั่นสุ่มตัวเลข
		$numrand = (mt_rand());
		$time = time();
		//เพิ่มไฟล์
		$path="../picture/"; 
		//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
		$type = strrchr($_FILES['files']['name'][$key],".");
		//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
		$newname = $_POST["pdr_no"].'_'.$date.'_'.$time.'_'.$numrand.'_'.$type;
		// $url = 'destination.jpg';
		$path_copy = $path.$newname;
		// $filename = compress_image($val, $path.$newname, 75);
		$newname_insert[] = $_POST["pdr_no"].'_'.$date.'_'.$time.'_'.$numrand.'_'.$type;
		// $newname = $date.$numrand.$type;
		$path_link="../picture/".$newname;  
		$file_name = $_FILES['files']['name'][$key];
		$file_size = $_FILES['files']['size'][$key];
		$file_tmp = $_FILES['files']['tmp_name'][$key];
		$file_type = $_FILES['files']['type'][$key];
		// อัพโหลดไฟล์
		$filename = compress_image($file_tmp, $path_copy, 75);
		// move_uploaded_file($file_tmp,$path_copy);
		}
	}
		// เพิ่มไฟล์เข้าไปในตาราง uploadfile
			$class_con_125 = new Sqlsrv();
            $class_con_125->getConnect();
            $query=$class_con_125->getQuery("
                INSERT INTO first_lot_list (Machine,Prod_order_no,Drawing_no,Remark,Pic_1,Pic_2,Pic_3,Pic_4,Pic_5,Pic_6,Pic_7,Pic_8,Pic_9,Pic_10,Pic_11,Pic_12,Pic_13,Pic_14,Pic_15,Pic_16,Pic_17,Pic_18,Pic_19,Pic_20,Date_Delete,User_upload,Date_upload) 
				VALUES('".$_POST["machine"]."','".$_POST["pdr_no"]."','".$_POST["drawing_no"]."','".$_POST["remark"]."','".$newname_insert['0']."','".$newname_insert['1']."','".$newname_insert['2']."','".$newname_insert['3']."','".$newname_insert['4']."','".$newname_insert['5']."','".$newname_insert['6']."','".$newname_insert['7']."','".$newname_insert['8']."','".$newname_insert['9']."','".$newname_insert['10']."','".$newname_insert['11']."','".$newname_insert['12']."','".$newname_insert['13']."','".$newname_insert['14']."','".$newname_insert['15']."','".$newname_insert['16']."','".$newname_insert['17']."','".$newname_insert['18']."','".$newname_insert['19']."','".$date_delete."','".$username."','".$date_upload."')
            ");
	$Head_send = "FIRST INSPECTION by QUALITY CONTROL";
	$PDR = $_POST["pdr_no"];
	$date_product = $date_upload;
	$machine = $_POST["machine"];
	$SO = "-";
	$name_cus = "-";
	$name_product = "-";
	$block_no = $_POST["drawing_no"];
	$num_create = "-";
	$detail_first_lot = "PASS";
	$gradient = "PASS";
	$term = "PASS";
	$barcode = "-";
	$Shipingmark = "-";
	$send_to = "-";
	$weight_box = "-";
	$problems = "-";
	$remark = "-";
	$message =  "\n *$Head_send* \n";
	$message .= "PDR : $PDR \n";
	$message .= "วันที่ผลิต : $date_product \n";
	$message .= "เครื่อง : $machine \n";
	$message .= "SO : $SO \n";
	$message .= "ชื่อลูกค้า : $name_cus \n";
	$message .= "ชื่อสินค้า : $name_product \n";
	$message .= "BLOCK NO. / REV. : $block_no \n";
	$message .= "จำนวนผลิต : $num_create \n";
	$message .= "รายละเอียดงานใบแรก : $detail_first_lot \n";
	$message .= "เฉดสี : $gradient \n";
	$message .= "ระยะ : $term \n";
	$message .= "barcode : $barcode \n";
	$message .= "Shipingmark : $Shipingmark \n";
	$message .= "ส่งต่อ : $send_to \n";
	$message .= "นำหนักต่อกล่อง : $weight_box \n";
	$message .= "ปัญหาที่พบ : $problems \n";
	$message .= "หมายเหตุ : $remark \n";
	line_notify($Token, $message);
?>
	Upload File Successfully!
	<?
	 header( "location: ../index.php?success=1" );
	?>
<?php }else{ ?>
	Error back to upload again!
	<?
	 header( "location: ../index.php?success=0" );
	?>
<?php } ?>