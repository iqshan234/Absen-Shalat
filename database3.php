<?php
    session_start();
    $server = "localhost";
    $username="root";
    $password="";
    $dbname="upload_file";

    $conn = new mysqli($server,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection failed" .$conn->connect_error);
    }

    if(isset($_POST['uuid'])){
        
        $text =$_POST['uuid'];
		$date = date('Y-m-d');
		date_default_timezone_set('Asia/Jakarta');
		$time = date('H:i:s');

		$sql ="SELECT * FROM scan WHERE uuid='$text' AND LOGDATE='$date' AND STATUS='Invalid'";
		$query=$conn->query($sql);
		if($query->num_rows>0){
			$sql = "UPDATE scan SET TIMEOUT='$time', STATUS='Valid' WHERE uuid='$text' AND LOGDATE='$date'";
			$query=$conn->query($sql);
			$_SESSION['success'] = 'Scan QR Code Berhasil';
		}else{
			$sql = "INSERT INTO scan(uuid,time_scan,LOGDATE,STATUS) VALUES('$text','$time','$date','Invalid')";
			if($conn->query($sql) ===TRUE){
			 $_SESSION['success'] = 'Scan QR Code Berhasil';
			 }else{
			  $_SESSION['error'] = $conn->error;
		   }	
		}
		  
	}else{
		$_SESSION['error'] = 'Silahkan Scan UUID QR CODE Dengan Benar';
	}
    header("location: scanner_pro1.php");
	   
    $conn->close();
?>