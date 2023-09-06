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
$filename = 'Absen Shalat Dzuhur Karyawan Mini Gold-'.date('Y-m-d').'.csv';

$query = "SELECT * FROM dzuhur";
$result = mysqli_query($conn,$query);

$array = array();

$file = fopen($filename,"w");
$array = array("Nama","Absen Shalat","Absen Selesai Shalat","Tanggal Shalat","Shalat","Status");
fputcsv($file,$array);
while($row = mysqli_fetch_array($result)){
    $STUDENTID =$row['nama'];
    $TIMEIN =$row['time_scan'];
    $TIMEOUT =$row['TIMEOUT'];
    $LOGDATE =$row['LOGDATE'];
    $shalat =$row['shalat'];
    $STATUS =$row['STATUS'];

    $array = array($STUDENTID,$TIMEIN,$TIMEOUT,$LOGDATE,$shalat,$STATUS);
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