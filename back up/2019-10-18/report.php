<?php include("include/head.php"); ?>
<style>
	body {
		font-family: 'Roboto', sans-serif;
		font-size: 14px;
              line-height: normal;
		background-color: #fff;

		margin: 0;
		padding: 20px;
	}

    .content-area {
    	background-color: #FFF;
    	border-radius: 10px 10px 10px 10px;
    	box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    	vertical-align: middle;
    	box-sizing: inherit;
	    padding: 30px 25px !important;
	    /*max-width: 1240px;*/
	    min-height: 500px;
	    margin: 0 auto;
	    padding: 0 20px;
	}

	.column_div{
		border: 1px solid grey;
  		padding: 10px;
  		border-radius: 25px;
  		width: 100%;
  		display: inline-flex;
	}

	.col-sm-6{
		border: 1px solid grey;
  		padding: 15px;
  		border-radius: 25px;
  		width: 100%;
  		min-height: 150px;
  		margin-bottom: 1%;
	}

	.col-sm-9{
		border: 1px solid grey;
  		padding: 15px;
  		border-radius: 25px;
  		width: 100%;
  		min-height: 130px;
  		margin-bottom: 1%;
	}

	.col-sm-12{
		border: 1px solid grey;
  		padding: 15px;
  		border-radius: 25px;
  		width: 100%;
  		min-height: 150px;
  		margin-bottom: 1%;
	}

	.column_picture{
		border: 1px solid grey;
  		padding: 15px;
  		border-radius: 25px;
  		width: 100%;
  		min-height: 75px;
	}

	.clear-under{
		float: left;
		background-color: red;
		width: 100%;
		height: 100%;
		margin-bottom: 10px; 
	}

	img{
		width: 175px;
		height: 75px;
	}

	span{
		font-size: 48px;
	}

	.search_box{
		float: right;
		width: 510px;
	}

	.text-size{
		font-size: 24px;
	}

	@media only screen and (max-width: 1680px) {
	  .column_picture {
	    width: 100%;
	  }
	  img{
		width: 140px;
		height: 75px;
	  }
	  .alert-danger{
	  	width: 60% !important;
	  }
	}
	@media only screen and (max-width: 1440px) {
	  .column_picture {
	    width: 100%;
	  }
	  img{
		width: 110px;
		height: 75px;
	  }
	  .alert-danger{
	  	width: 55% !important;
	  }
	}
	@media only screen and (max-width: 1366px) {
	  .column_picture {
	    width: 100%;
	  }
	  img{
		width: 100px;
		height: 75px;
	  }
	  .alert-danger{
	  	width: 50% !important;
	  }
	}
	@media only screen and (max-width: 1024px) {
	  .column_picture {
	    width: 100%;
	  }
	  img{
		width: 60px;
		height: 75px;
	  }
	  .alert-danger{
	  	width: 35% !important;
	  }
	}

</style>
<body>
<?php 
			include("class/connect.php");
			$class_con_125_check = new Sqlsrv();
            $class_con_125_check->getConnect();
            // Select
            $query=$class_con_125_check->getQuery("
                SELECT * FROM first_lot_list
            ");
			   $d=0;
            while($result=$class_con_125_check->getResult($query)){
            	$id_data[] = $result['ID'];
            	$date_delete_data[] = $result['Date_Delete'];
             	$picture_delete[$d][] = $result['Pic_1'];
            	$picture_delete[$d][] = $result['Pic_2'];
            	$picture_delete[$d][] = $result['Pic_3'];
            	$picture_delete[$d][] = $result['Pic_4'];
            	$picture_delete[$d][] = $result['Pic_5'];
            	$picture_delete[$d][] = $result['Pic_6'];
            	$picture_delete[$d][] = $result['Pic_7'];
            	$picture_delete[$d][] = $result['Pic_8'];
            	$picture_delete[$d][] = $result['Pic_9'];
            	$picture_delete[$d][] = $result['Pic_10'];
            	$picture_delete[$d][] = $result['Pic_11'];
            	$picture_delete[$d][] = $result['Pic_12'];
            	$picture_delete[$d][] = $result['Pic_13'];
            	$picture_delete[$d][] = $result['Pic_14'];
            	$picture_delete[$d][] = $result['Pic_15'];
            	$picture_delete[$d][] = $result['Pic_16'];
            	$picture_delete[$d][] = $result['Pic_17'];
            	$picture_delete[$d][] = $result['Pic_18'];
            	$picture_delete[$d][] = $result['Pic_19'];
            	$picture_delete[$d][] = $result['Pic_20'];
            $d++; }
	// $id_data = array("1","2");
	// $date_delete_data['1'] = "2019-10-15";
	// $date_delete_data['2'] = "2019-12-17";
	// $picture_delete['1'][] = "PDR1905-0744_2019-10-17_1571329237_1970690621_.png";
	// $picture_delete['1'][] = "PDR1905-0744_2019-10-17_1571329237_1857192469_.png";
	// $picture_delete['1'][] = "PDR1905-0744_2019-10-17_1571329237_371208449_.png";
	// $picture_delete['1'][] = "PDR1905-0744_2019-10-17_1571329237_912968084_.png";
	// $picture_delete['1'][] = "PDR1905-0744_2019-10-17_1571329237_558987838_.png";
	// $picture_delete['2'][] = "PDR1905-0452_2019-10-17_1571329777_357843376_.png";
            for ($i=0;$i<count($id_data);$i++) { 
            	$Today_check = date("Y-m-d H:m:s");
				$expires = strtotime($date_delete_data[$i]);
				$date_diff_check=($expires-strtotime($Today_check)) / 86400;
            	if(round($date_diff_check, 0)<='0'){
            		foreach ($picture_delete[$i] as $row => $id) {
            			@unlink("picture/$id");
            			// echo "picture/".$picture_delete[$i][$row]."<br>";
            		}
            		// echo "Delete ID:".$id_data[$i]."<br>";
            		$class_con_125_delete = new Sqlsrv();
		            $class_con_125_delete->getConnect();
		            $query=$class_con_125_delete->getQuery("
		                DELETE FROM first_lot_list WHERE ID = '".$id_data[$i]."'
		            ");
            	}else{
            		// echo "NO Delete ID:".$id_data[$i]."<br>";
            	}
            }

			if(isset($_POST["name_search"])){
				if($_POST['select_search']=="PDR"){
					$query_check = "Prod_order_no = '".$_POST['name_search']."'";
				}elseif($_POST['select_search']=="Drawing"){
					$query_check = "Drawing_no = '".$_POST['name_search']."'";
				}elseif($_POST['select_search']=="Date"){
					$date_plus =  date('Y-m-d', strtotime("+1 day", strtotime($_POST['name_search'])));
					$query_check = "Date_upload BETWEEN '".$_POST['name_search']."' AND '".$date_plus."'";
				}
				$query_data = "SELECT * FROM first_lot_list WHERE $query_check ORDER BY ID ASC";
			}else{
				$query_data = "SELECT * FROM first_lot_list ORDER BY ID ASC";
				$_POST["name_search"] = "";
				$_POST['select_search'] = "";
			}
			// echo $query_data;
			$class_con_125 = new Sqlsrv();
            $class_con_125->getConnect();
            // Select
            $query=$class_con_125->getQuery("
                $query_data
            ");
            $a=0;
            while($result=$class_con_125->getResult($query)){
            	$ID[] = $result['ID'];
            	$Machine[$a] = $result['Machine'];
            	$Prod_order_no[$a] = $result['Prod_order_no'];
            	$Drawing_no[$a] = $result['Drawing_no'];
            	$Remark[$a] = $result['Remark'];
            	$picture[$a][] = $result['Pic_1'];
            	$picture[$a][] = $result['Pic_2'];
            	$picture[$a][] = $result['Pic_3'];
            	$picture[$a][] = $result['Pic_4'];
            	$picture[$a][] = $result['Pic_5'];
            	$picture[$a][] = $result['Pic_6'];
            	$picture[$a][] = $result['Pic_7'];
            	$picture[$a][] = $result['Pic_8'];
            	$picture[$a][] = $result['Pic_9'];
            	$picture[$a][] = $result['Pic_10'];
            	$picture[$a][] = $result['Pic_11'];
            	$picture[$a][] = $result['Pic_12'];
            	$picture[$a][] = $result['Pic_13'];
            	$picture[$a][] = $result['Pic_14'];
            	$picture[$a][] = $result['Pic_15'];
            	$picture[$a][] = $result['Pic_16'];
            	$picture[$a][] = $result['Pic_17'];
            	$picture[$a][] = $result['Pic_18'];
            	$picture[$a][] = $result['Pic_19'];
            	$picture[$a][] = $result['Pic_20'];
            	$User_upload[$a] = $result['User_upload'];
            	$Date_upload[$a] = $result['Date_upload'];
             	$Date_Delete[$a] = $result['Date_Delete'];
            $a++; }
// $ID = array("1","2","3","4","5");	
// $Prod_order_no = array("PDR1905-0744","PDR1905-0745","PDR1905-0746","PDR1905-0747","PDR1905-0748");	
// $Drawing_no = array("0135","0136","0137","0138","0139");	
// $Remark = array("Test-1","Test-2","Test-3","Test-4","Test-5");	
// $User_upload = array("bew","bew","bew","bew","bew");	
// $Date_upload = array("2019-10-17","2019-10-17","2019-10-17","2019-10-17","2019-10-17");	
// $Date_Delete = array("2019-12-17","2019-12-17","2019-11-01","2019-10-30","2019-10-24");	
// $picture['0'] = array("1_U-R58ahr5dtAvtSLGK2wXg.png", "2019-05-07_134941.png" ,"2019-05-23_161228.png", "2019-05-23_162144.png", "2019-05-27_093831.png","2019-06-03_130926.png", "2019-06-18_131829.png" ,"2019-07-20_161255.png", "2019-07-20_161617.png", "2019-07-22_165051.png","2019-07-22_new_version.png", "2019-07-22_old_version.png" ,"2019-07-31_110942.png", "2019-07-31_111253.png", "2019-07-31_111741.png","
// 2019-07-31_111756.png", "2019-08-09_124436.png" ,"2019-08-09_124553.png", "2019-08-10_093053.png", "2019-08-14_140017.png");
// $picture['1'] = array("1_U-R58ahr5dtAvtSLGK2wXg.png", "2019-05-07_134941.png" ,"2019-05-23_161228.png", "2019-05-23_162144.png", "2019-05-27_093831.png");
// $picture['2'] = array("2019-07-31_111756.png", "2019-08-09_124436.png" ,"2019-08-09_124553.png", "2019-08-10_093053.png", "2019-08-14_140017.png");
// $picture['3'] = array("2019-06-03_130926.png", "2019-06-18_131829.png" ,"2019-07-20_161255.png", "2019-07-20_161617.png", "2019-07-22_165051.png");
// $picture['4'] = array("2019-07-22_new_version.png", "2019-07-22_old_version.png" ,"2019-07-31_110942.png", "2019-07-31_111253.png", "2019-07-31_111741.png");
?>
<div class="container-fluid">
	<div class="content-area">
	<h1 align="center">OM FIRST LOT : REPORT</h1>
	<div class="search_box">
		<form action="report.php" method="POST" class="form-inline">
			<select name="select_search" id="select_search" class="form-control" style="margin-right: 1%;">
				<option value="PDR" <?php if($_POST['select_search'] == 'PDR'){ echo " selected=\"selected\""; } ?>>Search PDR No.</option>
				<option value="Drawing" <?php if($_POST['select_search'] == 'Drawing'){ echo " selected=\"selected\""; } ?>>Search Layout No.</option>
				<option value="Date" <?php if($_POST['select_search'] == 'Date'){ echo " selected=\"selected\""; } ?>>Search Date Upload</option>
			</select>
			<input type="text" name="name_search" id="name_search" value="<?php echo $_POST['name_search'] ?>" class="form-control" placeholder="search data" style="margin-right: 1%;">
			<button type="submit" class="btn btn-success"><i class="fas fa-search"></i> Search</button>
		</form>
	</div>
	<?php if(@$ID==""){ ?>
	<div class="alert alert-danger" role="alert" style="position: absolute;width: 65%;text-align: center;">
	  ไม่พบข้อมูลที่ท่านค้นหา!
	</div>
	<?php }else{ ?>
	<?php $z=1; ?>
	<?php for ($i=0;$i<count($ID);$i++) { ?>
			<div class="col-lg-12" style="display: inline-flex;margin-bottom: 1%;">
				<div class="col-md-6">
					<h3>Detail</h3>
					<div class="column_div">
						<div class="col-md-6">
							<div class="col-sm-9">
								No:
								<span><?php echo $z; ?></span>
							</div>
							<div class="col-sm-9">
								Machine: 
								<font class="text-size"><?php echo $Machine[$i]; ?></font>
							</div>
							<div class="col-sm-9">
								Remark: 
								<font class="text-size"><?php echo $Remark[$i]; ?></font>
							</div>
							<div class="col-sm-9">
								Date Upload: 
								<font class="text-size"><?php echo date("Y-m-d H:i", strtotime($Date_upload[$i])); ?></font>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-sm-9">
								PDR No: 
								<font class="text-size"><?php echo $Prod_order_no[$i]; ?></font>
							</div>
							<div class="col-sm-9">
								Layout No: 
								<font class="text-size"><?php echo $Drawing_no[$i]; ?></font>
							</div>
							<div class="col-sm-9">
								User Upload: 
								<font class="text-size"><?php echo $User_upload[$i]; ?></font>
							</div>
							<div class="col-sm-9">
								วันที่ลบข้อมูลและจำนวนวันที่เหลือ: 
								<font class="text-size">
								<?php
						        	$Today = date("Y-m-d H:i:s");
						        	$expires = strtotime($Date_Delete[$i]);
						        	$date_diff=($expires-strtotime($Today)) / 86400;
						        ?>
								<?php
									if(round($date_diff, 0)>="16"){
						        		echo "<font color='green'>".date("Y-m-d",strtotime($Date_Delete[$i])).": ".round($date_diff, 0)." วัน"."</font>";
									}elseif(round($date_diff, 0)>="8" && round($date_diff, 0)<="15"){
										echo "<font color='#cfa218'>".date("Y-m-d",strtotime($Date_Delete[$i])).": ".round($date_diff, 0)." วัน"."</font>";
									}elseif(round($date_diff, 0)<="7"){
										echo "<font color='red'>".date("Y-m-d",strtotime($Date_Delete[$i])).": ".round($date_diff, 0)." วัน"."</font>";
									}
						        ?>
						        </font>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h3>Picture</h3>
					<div class="column_div">
						<div class="column_row">
							<?php if(@$picture[$i]['0']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['0'] ?>"><img src="picture/<?php echo $picture[$i]['0'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['1']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['1'] ?>"><img src="picture/<?php echo $picture[$i]['1'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['2']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['2'] ?>"><img src="picture/<?php echo $picture[$i]['2'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['3']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['3'] ?>"><img src="picture/<?php echo $picture[$i]['3'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['4']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['4'] ?>"><img src="picture/<?php echo $picture[$i]['4'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php } ?>
						</div>
						<div class="column_row">
							<?php if(@$picture[$i]['5']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['5'] ?>"><img src="picture/<?php echo $picture[$i]['5'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['6']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['6'] ?>"><img src="picture/<?php echo $picture[$i]['6'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['7']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['7'] ?>"><img src="picture/<?php echo $picture[$i]['7'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['8']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['8'] ?>"><img src="picture/<?php echo $picture[$i]['8'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['9']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['9'] ?>"><img src="picture/<?php echo $picture[$i]['9'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php } ?>
						</div>
						<div class="column_row">
							<?php if(@$picture[$i]['10']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['10'] ?>"><img src="picture/<?php echo $picture[$i]['10'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['11']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['11'] ?>"><img src="picture/<?php echo $picture[$i]['11'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['12']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['12'] ?>"><img src="picture/<?php echo $picture[$i]['12'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['13']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['13'] ?>"><img src="picture/<?php echo $picture[$i]['13'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['14']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['14'] ?>"><img src="picture/<?php echo $picture[$i]['14'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php } ?>
						</div>
						<div class="column_row">
							<?php if(@$picture[$i]['15']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['15'] ?>"><img src="picture/<?php echo $picture[$i]['15'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['16']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['16'] ?>"><img src="picture/<?php echo $picture[$i]['16'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['17']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['17'] ?>"><img src="picture/<?php echo $picture[$i]['17'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['18']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['18'] ?>"><img src="picture/<?php echo $picture[$i]['18'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture[$i]['19']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture[$i]['19'] ?>"><img src="picture/<?php echo $picture[$i]['19'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
	<?php $z++; } ?>
<?php } ?>
	</div>
</div>
<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : true,
				arrows    : true,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});
		});
</script>
</body>
</html>