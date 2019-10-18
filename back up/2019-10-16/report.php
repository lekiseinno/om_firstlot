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

	h1{
		color:#000000;
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

</style>
<body>
<?php 
include("class/connect.php");
			$class_con_125 = new Sqlsrv();
            $class_con_125->getConnect();
            // Select
            $query=$class_con_125->getQuery("
                SELECT * FROM first_lot_list
            ");
            $a=0;
            while($result=$class_con_125->getResult($query)){
            	$ID[] = $result['ID'];
            	$Prod_order_no[$a] = $result['Prod_order_no'];
            	$Layout_no[$a] = $result['Layout_no'];
            	$Remark[$a] = $result['Remark'];
            	$picture_test[$a][] = $result['Pic_1'];
            	$picture_test[$a][] = $result['Pic_2'];
            	$picture_test[$a][] = $result['Pic_3'];
            	$picture_test[$a][] = $result['Pic_4'];
            	$picture_test[$a][] = $result['Pic_5'];
            	$picture_test[$a][] = $result['Pic_6'];
            	$picture_test[$a][] = $result['Pic_7'];
            	$picture_test[$a][] = $result['Pic_8'];
            	$picture_test[$a][] = $result['Pic_9'];
            	$picture_test[$a][] = $result['Pic_10'];
            	$picture_test[$a][] = $result['Pic_11'];
            	$picture_test[$a][] = $result['Pic_12'];
            	$picture_test[$a][] = $result['Pic_13'];
            	$picture_test[$a][] = $result['Pic_14'];
            	$picture_test[$a][] = $result['Pic_15'];
            	$picture_test[$a][] = $result['Pic_16'];
            	$picture_test[$a][] = $result['Pic_17'];
            	$picture_test[$a][] = $result['Pic_18'];
            	$picture_test[$a][] = $result['Pic_19'];
            	$picture_test[$a][] = $result['Pic_20'];
            	$User_upload[$a] = $result['User_upload'];
            	$Date_upload[$a] = $result['Date_upload'];
            $a++; }
// $data = array("1","2","3","4","5");	
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
	<?php $z=1; ?>
	<?php for ($i=0;$i<count($ID);$i++) { ?>
			<div class="col-lg-12" style="display: inline-flex;margin-bottom: 1%;">
				<div class="col-md-6">
					<h3>Detail</h3>
					<div class="column_div">
						<div class="col-md-6">
							<div class="col-sm-6">
								No:
								<span><?php echo $z; ?></span>
							</div>
							<div class="col-sm-6">
								Layout No: 
								<font><?php echo $Layout_no[$i]; ?></font>
							</div>
							<div class="col-sm-6">
								User Upload: 
								<font><?php echo $User_upload[$i]; ?></font>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-sm-6">
								PDR No: 
								<font><?php echo $Prod_order_no[$i]; ?></font>
							</div>
							<div class="col-sm-6">
								Remark: <?php echo $Remark[$i]; ?>
							</div>
							<div class="col-sm-6">
								Date Upload: 
								<font><?php echo $Date_upload[$i]; ?></font>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h3>Picture</h3>
					<div class="column_div">
						<div class="column_row">
							<?php if(@$picture_test[$i]['0']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['0'] ?>"><img src="picture/<?php echo $picture_test[$i]['0'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['1']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['1'] ?>"><img src="picture/<?php echo $picture_test[$i]['1'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['2']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['2'] ?>"><img src="picture/<?php echo $picture_test[$i]['2'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['3']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['3'] ?>"><img src="picture/<?php echo $picture_test[$i]['3'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['4']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['4'] ?>"><img src="picture/<?php echo $picture_test[$i]['4'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php } ?>
						</div>
						<div class="column_row">
							<?php if(@$picture_test[$i]['5']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['5'] ?>"><img src="picture/<?php echo $picture_test[$i]['5'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['6']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['6'] ?>"><img src="picture/<?php echo $picture_test[$i]['6'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['7']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['7'] ?>"><img src="picture/<?php echo $picture_test[$i]['7'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['8']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['8'] ?>"><img src="picture/<?php echo $picture_test[$i]['8'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['9']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['9'] ?>"><img src="picture/<?php echo $picture_test[$i]['9'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php } ?>
						</div>
						<div class="column_row">
							<?php if(@$picture_test[$i]['10']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['10'] ?>"><img src="picture/<?php echo $picture_test[$i]['10'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['11']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['11'] ?>"><img src="picture/<?php echo $picture_test[$i]['11'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['12']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['12'] ?>"><img src="picture/<?php echo $picture_test[$i]['12'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['13']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['13'] ?>"><img src="picture/<?php echo $picture_test[$i]['13'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['14']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['14'] ?>"><img src="picture/<?php echo $picture_test[$i]['14'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php } ?>
						</div>
						<div class="column_row">
							<?php if(@$picture_test[$i]['15']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['15'] ?>"><img src="picture/<?php echo $picture_test[$i]['15'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['16']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['16'] ?>"><img src="picture/<?php echo $picture_test[$i]['16'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['17']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['17'] ?>"><img src="picture/<?php echo $picture_test[$i]['17'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['18']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['18'] ?>"><img src="picture/<?php echo $picture_test[$i]['18'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php }if(@$picture_test[$i]['19']!=""){ ?>
							<div class="column_picture">
								<a class="fancybox-thumbs" data-fancybox-group="thumb<?php echo $i ?>" href="picture/<?php echo $picture_test[$i]['19'] ?>"><img src="picture/<?php echo $picture_test[$i]['19'] ?>" title="คลิกเพื่อดูภาพขนาดเต็ม"></a>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
	<?php $z++; } ?>
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