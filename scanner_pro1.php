<?php session_start();?>
<html>
    <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title>Iqshan</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">

		<script type="text/javascript" src="js/instascan.min.js"></script>
		<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="website icon" type="png" href="mg.png">
		<style>
		#divvideo{
			 box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
		}
		</style>
    </head>
    <style>
    body {
		background-image: url(32.gif);
      background-size: cover;
      background-attachment: fixed;
    }

    p {
      color: black
    }

    h4 {
      color: black
    }
  </style>
    
    <body >
       <nav class="navbar" style="background:#EEE8AA">
		  <div class="container-fluid">
			<div class="navbar-header">
			<div class="brand logo">
      <a href="index.php" title="Home" rel="home" class="site-branding__logo">
        <img src="logo-minigold-small.png" alt="Home">
      </a>
    </div>
			</div>
            
			<ul class="nav navbar-nav navbar-right">
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-download-alt"></span> Export Data Excel <span class="caret"></span></a>
				<ul class="dropdown-menu">
                <li><a href="export.php"><span class="glyphicon glyphicon-download"></span> Export Data Table Scan UUID QR Code Mini Gold</a></li>
                <li><a href="export_produksi.php"><span class="glyphicon glyphicon-download"></span> Export Data Table Scan UUID QR Code Mini Gold</a></li>
				</ul>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Scanner QR Code <span class="caret"></span></a>
				<ul class="dropdown-menu">
                <li><a href="scan1.php"><span class="glyphicon glyphicon-qrcode"></span> Scan QR Code Mini Gold</a></li>
                <li><a href="scan2.php"><span class="glyphicon glyphicon-qrcode"></span> Scan QR Code Produksi</a></li>
				</ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-list-alt"></span> Generate UUID QR Code Black Series <span class="caret"></span></a>
				<ul class="dropdown-menu">
                <li><a href="uuid.php"><span class="glyphicon glyphicon-qrcode"></span> QR Code Generate Black Series 0.25 GR</a></li>
                <li><a href="uuid1.php"><span class="glyphicon glyphicon-qrcode"></span> QR Code Generate Black Series 0.05 GR</a></li>
                <li><a href="uuid2.php"><span class="glyphicon glyphicon-qrcode"></span> QR Code Generate Black Series 0.1 GR</a></li>
                <li><a href="uuid3.php"><span class="glyphicon glyphicon-qrcode"> </span> QR Code Generate Black Series 0.025 GR</a></li>
                <li><a href="uuid4.php"><span class="glyphicon glyphicon-qrcode"></span> QR Code Generate Black Series 0.5 GR</a></li>
                <li><a href="uuid5.php"><span class="glyphicon glyphicon-qrcode"></span> QR Code Generate Black Series 1 GR</a></li>
                <li><a href="uuid6.php"> <span class="glyphicon glyphicon-qrcode"></span> QR Code Generate Black Series 1.5 GR</a></li>
                <li><a href="uuid7.php"><span class="glyphicon glyphicon-qrcode"></span> Qr Code Generate Extream Series 0.101 GR</a></li>
                <li><a href="uuid8.php"><span class="glyphicon glyphicon-qrcode"></span> Qr Code Generate Silverium </a></li>
				</ul>
        </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-tasks"></span> Data Table UUID QR Code<span class="caret"></span></a>
				<ul class="dropdown-menu">
                <li><a href="table_mg.php"><span class="glyphicon glyphicon-folder-open"></span> Data Scan QR Code UUID Mini Gold</a></li>
                <li><a href="table_pro.php"><span class="glyphicon glyphicon-folder-open"></span> Data Scan QR Code UUID Produksi</a></li>
				</ul>
			</ul>
		  </div>
		</nav>
       <br><br>
       <div class="container">
            <div class="row">
                <div class="col-md-4" style="padding:10px;background:#fff;border-radius: 5px;" id="divvideo">
					<center><p class="login-box-msg"> <i class="glyphicon glyphicon-camera"></i> TAP HERE</p></center>
                    <video id="preview" width="100%" style="border-radius:10px;"></video>
					<br>
					<br>
					<?php
					if(isset($_SESSION['error'])){
					  echo "
						<div class='alert alert-danger alert-dismissible' style='background:red;color:#fff'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <a href=\"fail2.php\"> <button type='button' class='button button1' data-dismiss='alert' aria-hidden='true'>&times;</button>
						  <h4><i class='icon fa fa-warning'></i> Error!</h4>
						  ".$_SESSION['error']."
						</div>
					  ";
					  unset($_SESSION['error']);
					}
					if(isset($_SESSION['success'])){
					  echo "
						<div class='alert alert-success alert-dismissible' style='background:green;color:#fff'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <a href=\"fail2.php\"> <button type='button' class='button button1' data-dismiss='alert' aria-hidden='true'>&times;</button>
						  <h4><i class='icon fa fa-check'></i> Success!</h4>
              
						  ".$_SESSION['success']."
						</div>
					  ";
            echo '<a href="' . $qrCodeUrl . '" download="qr_code_' . $uuid . '">Download QR Code</a>';
					  unset($_SESSION['success']);
					}
				  ?>

                </div>
				
                <div class="col-md-8">
                <form action="database3.php" method="post" class="form-horizontal" style="border-radius: 5px;padding:10px;background:#fff;" id="divvideo">
                     <i class="glyphicon glyphicon-qrcode"></i> <label>SCAN QR CODE UUID Produksi</label> <p id="time"></p>
                    <input type="text" name="uuid" id="text" placeholder="scan qrcode" class="form-control" autofocus>
                </form>
				<div style="border-radius: 5px;padding:10px;background:#fff;" id="divvideo">
                <P>Data Scan QR Code Produksi</P> 
				<table id="example1" class="table table-bordered">
                    <thead>
                        <tr>
                           
                            <td>UUID</td>
                            <td>Waktu Scanner</td>
                            <td>Waktu Verifikasi Scanner</td>
                            <td>Tanggal Scanner</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $server = "localhost";
                        $username="root";
                        $password="";
                        $dbname="upload_file";
                    
                        $conn = new mysqli($server,$username,$password,$dbname);
						$date = date('Y-m-d');
                        if($conn->connect_error){
                            die("Connection failed" .$conn->connect_error);
                        }
                           $sql ="SELECT * FROM scan WHERE DATE(LOGDATE)=CURDATE()";
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){
                        ?>
                            <tr>
                               
                                <td><?php echo $row['uuid'];?></td>
                                <td><?php echo $row['time_scan'];?></td>
                                <td><?php echo $row['TIMEOUT'];?></td>
                                <td><?php echo $row['LOGDATE'];?></td>
                                <td><?php echo $row['STATUS'];?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                  </table>
				  
                </div>
				
                </div>
				
            </div>
						
        </div>
		<script>
			function Export()
			{
				var conf = confirm("Please confirm if you wish to proceed in exporting the attendance in to Excel File");
				if(conf == true)
				{
					window.open("export.php",'blank');
				}
			}
		</script>				
        <script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               document.getElementById('text').value=c;
               const obj = JSON.parse(c);
               alert(obj.uuid);
               console.log(obj.uuid);
               document.getElementById('text').value=obj.uuid;
               document.forms[0].submit();
           });
        </script>
		<script type="text/javascript">
		var timestamp = '<?=time();?>';
		function updateTime(){
		  $('#time').html(Date(timestamp));
		  timestamp++;
		}
		$(function(){
		  setInterval(updateTime, 1000);
		});
		</script>
		<script src="plugins/jquery/jquery.min.js"></script>
		<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

		<script>
		  $(function () {
			$("#example1").DataTable({
			  "responsive": true,
			  "autoWidth": false,
			});
			$('#example2').DataTable({
			  "paging": true,
			  "lengthChange": false,
			  "searching": false,
			  "ordering": true,
			  "info": true,
			  "autoWidth": false,
			  "responsive": true,
			});
		  });
		</script>
		
    </body>
</html>