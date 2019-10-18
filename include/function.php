<?php 
function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		ImageJPEG($image, $destination_url, $quality);
		return $destination_url;
}
function line_notify($Token, $message) {
            $lineapi = $Token; // ใส่ token key ที่ได้มา
            $mms =  trim($message); // ข้อความที่ต้องการส่ง
            date_default_timezone_set("Asia/Bangkok");
            $chOne = curl_init(); 
            curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
            // SSL USE 
            curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
            curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
            //POST 
            curl_setopt( $chOne, CURLOPT_POST, 1); 
            curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms"); 
            curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 
            $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', );
                curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
            curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
            $result = curl_exec( $chOne ); 
            //Check error 
            if(curl_error($chOne)) 
            { 
                   echo 'error:' . curl_error($chOne); 
            } 
            else { 
            $result_ = json_decode($result, true); 
               #echo "status : ".$result_['status']; echo "message : ". $result_['message'];
            } 
            curl_close( $chOne );   
}

        header('Content-Type: application/json');
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  

        $Test_Line_Group = '6UIU5k5bmUyHjv30kziw1EQhS4EJNlBB2BqCptBO1Am';
        $Token = '9kx5PTrtqipSJNOfzxiJTomsXmevkBr50RTg3lKB6aS';
?>