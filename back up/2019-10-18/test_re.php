<?
$images = "PDR1905-0744_2019-10-18_1571362203_2070671340_.png";
$new_images = "image/new_pic.png";
// copy($_FILES["pic_first"]["tmp_name"],"../../pic/pic/".$_FILES["pic_first"]["name"]);
$width=1000; //*** Fix Width & Heigh (Autu caculate) ***//
$size=GetimageSize($images);
$height=round($width*$size[1]/$size[0]);
if($size[2] == 1) {
$images_orig = imagecreatefromgif($images); //resize รูปประเภท GIF
} else if($size[2] == 2) {
$images_orig = imagecreatefromjpeg($images); //resize รูปประเภท JPEG
}else if($size[2] == 3) {
$images_orig = imagecreatefrompng($images); //resize รูปประเภท PNG
}
$photoX = ImagesX($images_orig);
$photoY = ImagesY($images_orig);
$images_fin = ImageCreateTrueColor($width, $height);
ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
ImageJPEG($images_fin,$new_images);
ImageDestroy($images_orig);
ImageDestroy($images_fin)
?>
<b>Original Size</b><br>
<img src="<?=$images;?>">
<hr>
<b>New Resize</b><br>
<img src="<?=$new_images;?>">
<?php
 // $name = ''; $type = ''; $size = ''; $error = '';
 // function compress_image($source_url, $destination_url, $quality) {

 //  $info = getimagesize($source_url);

 //      if ($info['mime'] == 'image/jpeg')
 //           $image = imagecreatefromjpeg($source_url);

 //      elseif ($info['mime'] == 'image/gif')
 //           $image = imagecreatefromgif($source_url);

 //     elseif ($info['mime'] == 'image/png')
 //           $image = imagecreatefrompng($source_url);

 //      imagejpeg($image, $destination_url, $quality);
 //  return $destination_url;
 // }

 // if ($_POST) {

 //      if ($_FILES["files"]["error"] > 0) {
 //           $error = $_FILES["files"]["error"];
 //      } 
 //      else if (($_FILES["files"]["type"] == "image/gif") || 
 //   ($_FILES["files"]["type"] == "image/jpeg") || 
 //   ($_FILES["files"]["type"] == "image/png") || 
 //   ($_FILES["files"]["type"] == "image/pjpeg")) {

 //           $url = 'destination.jpg';

 //           $filename = compress_image($_FILES["files"]["tmp_name"], $url, 75);

 //      }else {
 //           $error = "Uploaded image should be jpg or gif or png";
 //      }
 // }
?>