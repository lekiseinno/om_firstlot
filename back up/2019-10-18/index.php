<?php include("include/head.php"); ?>
<style>
	body {
		font-family: 'Roboto', sans-serif;
		font-size: 14px;
              line-height: normal;
		background-color: #fff;

		margin: 0;
		padding: 20px;
		color: #FFFFFF;
	}

	h1{
		color:#000000;
	}

	label{
		color:#000000;
		float: right;
	}
            
    .fileuploader {
        max-width: 600px;
    }

    .content-area {
    	background-color: #FFF;
    	border-radius: 10px 10px 10px 10px;
    	box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    	vertical-align: middle;
    	box-sizing: inherit;
	    padding: 30px 25px !important;
	    max-width: 1240px;
	    min-height: 500px;
	    margin: 0 auto;
	    padding: 0 20px;
	}

	.img-temp {
	  background-color: #fff;
	  max-width: 100%;
	  height: auto;
	}

	@media screen and (max-width: 900px) {
	 	#save{
	  		padding: 0px 0px 0px 0px !important;
	  		text-align: center !important;
	  	}
	  	label{
	  		float: left;
	  	}
	}
	@media only screen and (max-width: 768px) {
	  	#save{
	  		padding: 0px 0px 0px 0px !important;
	  		text-align: center !important;
	  	}
	  	label{
	  		float: left;
	  	}
	}
	@media only screen and (max-width: 667px) {
	  	#save{
	  		padding: 0px 0px 0px 0px !important;
	  		text-align: center !important;
	  	}
	  	label{
	  		float: left;
	  	}
	}
	/* Extra small devices (phones, 600px and down) */
	@media only screen and (max-width: 600px) {
	  #save{
	  		padding: 0px 0px 0px 0px !important;
	  		text-align: center !important;
	  	}
	  	label{
	  		float: left;
	  	}
	}
	@media only screen and (max-width: 568px) {
	  	#save{
	  		padding: 0px 0px 0px 0px !important;
	  		text-align: center !important;
	  	}
	  	label{
	  		float: left;
	  	}
	}
</style>
<body>
<?php
	if(isset($_REQUEST['success'])){
		if($_REQUEST['success']=="1"){
			echo "<script type=\"text/javascript\">";
			echo "alert(\"Save Successfully!<<\");";
			echo "window.location.href='index.php'";
			echo "</script>";
		}else{
			echo "<script type=\"text/javascript\">";
			echo "alert(\"Record already exist!".'\n'."Please enter again.\");";
			echo "window.location.href='index.php'";
			echo "</script>";
		}
	}
?>
<div class="container-fluid">
	<div class="content-area">
	<h1 align="center">OM FIRST LOT : IMPORT</h1>
		<form action="process/upload_data.php" method="post" enctype="multipart/form-data" onsubmit="return confirm('คุณต้องการบันทึกข้อมูล?')">
			<div class="">
				<div class="row" >
					<div class="col-md-2" style="padding: 10px 0px 0px 0px;text-align: left">
						<label for="machine">MACHINE: </label>
					</div>
					<div class="col-md-10" style="margin-bottom: 1%;">
						<?php $arr_machine = array('WING','S and S','SUNRISE','LANGTON','ROTARY','SLEEVE','รอยต่อ','CENTURY','New Flexo Machine'); ?>
						<select class="select2_machine form-control" id="machine" name="machine">
		                     <?php foreach ($arr_machine as $key => $value) {?>
		                     <option value="<?php echo $value ?>"><?php echo $value ?></option>
		                     <?php } ?>
		                 </select>
					</div>
				</div>
				<div class="row" >
					<div class="col-md-2" style="padding: 10px 0px 0px 0px;text-align: left">
						<label for="pdr_no">PDR NO: </label>
					</div>
					<div class="col-md-10" style="margin-bottom: 1%;">
						<input type="text" name="pdr_no" id="pdr_no" class="form-control" placeholder="PDR NO" style="text-transform: uppercase;" required>
					</div>
				</div>
				<div class="row" >
					<div class="col-md-2" style="padding: 10px 0px 0px 0px;text-align: left">
						<label for="drawing_no">DRAWING NO: </label>
					</div>
					<div class="col-md-10" style="margin-bottom: 1%;">
						<input type="text" name="drawing_no" id="drawing_no" class="form-control" placeholder="DRAWING NO" required>
					</div>
				</div>
				<div class="row" >
					<div class="col-md-2" style="padding: 10px 0px 0px 0px;text-align: left">
						<label for="remark">Remark: </label>
					</div>
					<div class="col-md-10" style="margin-bottom: 1%;">
						<textarea name="remark" id="remark" class="form-control" placeholder="Remark" required></textarea>
					</div>
				</div>
	            <div class="row" >
		            	<div class="col-md-2" style="padding: 45px 0px 0px 0px;">
		            		<label for="files">Upload Files: </label>
		            	</div>
		            	<div class="col-md-6" style="margin-bottom: 1%;">
		            		<label for="description-files" style="color: red;">อัพโหลดได้ไม่เกิน 20 ไฟล์/ไฟล์ห้ามซ้ำ/และ อัพโหลดได้เฉพาะไฟล์นามสกุล .jpg, .png </label>
							<input type="file" name="files" id="files" data-fileuploader-limit="20" data-fileuploader-maxSize="null" data-fileuploader-fileMaxSize="null" data-fileuploader-extensions="jpg, png" data-fileuploader-theme="default" data-fileuploader-editor-quality="75" required>
						</div>
						<div class="col-md-4" style="padding: 45px 0px 0px 0px;" id="save">
		            		<button type="submit" class="btn btn-success" ><i class="fas fa-download"></i> SAVE</button>
		            	</div>
		            	<div id="result"></div>
				</div>
			</div>
		</form>
	</div>
</div>
		<script>
            $(document).ready(function(){
            	$("#pdr_no").focus();
                $('.date').datepicker({
                    format: 'yyyy-m-d',
                    language: "th",
                }).datepicker('show');
            });
		    $(document).ready(function() {
		        $('#files').fileuploader({
		        	addMore: true,
		        });
		    });
        </script>
        <script type="text/javascript">
		   function handleFileSelect() {

		    var files = event.target.files; //FileList object

		    setTimeout(function(){
		     $('.column-thumbnail').each(function(index,item){
		      	 var content = $(this);
		         var file = files[index];

		               var picReader = new FileReader();
		               picReader.addEventListener("load", function (event) {
		                
		                   var picFile = event.target;

		                   content.html("<img class='img-temp' src='" + picFile.result + "'" + "title='" + picFile.name + "'/>"); 
		               });
		               //Read the image
		               picReader.readAsDataURL(file);
		     });
		    },500);
		      
		  }

		  document.getElementById('files').addEventListener('change', handleFileSelect, false);
  </script>
</body>
</html>