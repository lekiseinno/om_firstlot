 <!DOCTYPE html>
<html>
<head>
	<title>OM FIRST LOT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/glyphicon.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="asset/dist/font/font-fileuploader.css" rel="stylesheet">
        
    <!-- styles -->
    <link href="asset/dist/jquery.fileuploader.min.css" media="all" rel="stylesheet">

    <!-- fancybox css -->
    <link rel="stylesheet" type="text/css" href="asset/fancybox-2.1.7/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="asset/fancybox-2.1.7/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />

    <!-- datepicker css -->
    <link rel="stylesheet" type="text/css" href="asset/datepicker/css/bootstrap-datepicker3.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- script $post -->
    <script src="asset/js/jquery-3.3.1.min.js" crossorigin="anonymous"></script>

    <!-- fancybox script -->
    <!-- Add jQuery library -->
    <script type="text/javascript" src="asset/fancybox-2.1.7/lib/jquery-1.10.2.min.js"></script>
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="asset/fancybox-2.1.7/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="asset/fancybox-2.1.7/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <!-- Add Thumb -->
    <script type="text/javascript" src="asset/fancybox-2.1.7/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- js -->
    <script src="asset/dist/jquery.fileuploader.min.js" type="text/javascript"></script>
    <!-- <script src="asset/dist/custom.js" type="text/javascript"></script> -->

    <!-- datepicker js -->
    <script src="asset/datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="asset/datepicker/js/bootstrap-datepicker.th.js" type="text/javascript"></script>

    <?php 
    session_start();
    if(@$_SESSION['emp_code'] == ""){?>
        <script>    
        window.location="login_om_first_lot.html";
        </script>
    <?exit();}
    ?>
</head>