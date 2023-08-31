<?php
    session_start();
      $host="localhost";
    $user="root";
    $password="";
    $db="upload_file";
    
    $kon = mysqli_connect($host,$user,$password,$db);
    if (!$kon){
          die("Koneksi gagal:".mysqli_connect_error());
    }

    if(isset($_POST['uuid'])){
        
        $text =$_POST['uuid'];
		$date = date('Y-m-d');
		date_default_timezone_set('Asia/Jakarta');
		$time = date('H:i:s');
		$sql ="SELECT * FROM table_attendance WHERE uuid='$text' AND LOGDATE='$date' AND STATUS='Invalid'";
		$query=$kon->query($sql);
		if($query->num_rows>0){
			$sql = "UPDATE table_attendance SET TIMEOUT='$time', STATUS='Valid' WHERE uuid='$text' AND LOGDATE='$date'";
			$query=$kon->query($sql);
			$_SESSION['success'] = 'Scan QR Code Berhasil';
		}else{
			$sql = "INSERT INTO table_attendance(uuid,time_scan,LOGDATE,STATUS) VALUES('$text','$time','$date','Invalid')";
			if($kon->query($sql) ===TRUE){
			 $_SESSION['success'] = 'Scan QR Code Berhasil';
			 }else{
			  $_SESSION['error'] = $kon->error;
		   }	
		}
		  
	}else{
		$_SESSION['error'] = 'Silahkan Scan UUID QR CODE';
	}
    header("location: scanner_gold1.php");
	   
    $kon->close();
?>