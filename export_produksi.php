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
$filename = 'Record Scan QR Code UUID Produksi-'.date('Y-m-d').'.csv';

$query = "SELECT * FROM scan";
$result = mysqli_query($conn,$query);

$array = array();

$file = fopen($filename,"w");
$array = array("UUID","Waktu Scanner","Waktu Verifikasi Scanner","Tanggal Scanner","Status");
fputcsv($file,$array);

while($row = mysqli_fetch_array($result)){
    $STUDENTID =$row['uuid'];
    $TIMEIN =$row['time_scan'];
    $TIMEOUT =$row['TIMEOUT'];
    $LOGDATE =$row['LOGDATE'];
    $STATUS =$row['STATUS'];

    $array = array($STUDENTID,$TIMEIN,$TIMEOUT,$LOGDATE,$STATUS);
    fputcsv($file,$array);
}
fclose($file);

header("Content-Description: File Transfer");
header("Content-Disposition: Attachment; filename=$filename");
header("Content-type: application/csv;");
readfile($filename);
unlink($filename);
exit();

?>