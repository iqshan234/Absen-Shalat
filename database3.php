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

    if(isset($_POST['nama'])){
        
        $text =$_POST['nama'];
		$date = date('Y-m-d');
		date_default_timezone_set('Asia/Jakarta');
		$time = date('H:i:s');
		$sql ="SELECT * FROM ashar WHERE nama='$text' AND LOGDATE='$date' AND shalat='Ashar' AND STATUS='Sedang Shalat'";
		$query=$kon->query($sql);
		if($query->num_rows>0){
			$sql = "UPDATE ashar SET TIMEOUT='$time', STATUS='Sudah Shalat' WHERE nama='$text' AND LOGDATE='$date'";
			$query=$kon->query($sql);
			$_SESSION['success'] = 'Scan QR Code Berhasil';
		}else{
			$sql = "INSERT INTO ashar(nama,time_scan,LOGDATE,shalat,STATUS) VALUES('$text','$time','$date','Ashar','Sedang Shalat')";
			if($kon->query($sql) ===TRUE){
			 $_SESSION['success'] = 'Scan QR Code Berhasil';
			 }else{
			  $_SESSION['error'] = $kon->error;
		   }	
		}
		  
	}else{
		$_SESSION['error'] = 'Silahkan Scan nama QR CODE';
	}
    header("location: ashar.php");
	   
    $kon->close();
?>