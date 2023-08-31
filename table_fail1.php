<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Iqshan</title>
    <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

		<script type="text/javascript" src="js/instascan.min.js"></script>
		<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
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
     <style>
     * {
          box-sizing: border-box;
     }

     .row {
          margin-left: -5px;
          margin-right: -5px;
     }

     .column {
          float: left;
          width: 50%;
          padding: 5px;
     }

     /* Clearfix (clear floats) */
     .row::after {
          content: "";
          clear: both;
          display: table;
     }

     table {
          border-collapse: collapse;
          border-spacing: 0;
          width: 100%;
          border: 1px solid #ddd;
     }

     th,
     td {
          text-align: left;
          padding: 16px;
     }

     tr:nth-child(even) {
          background-color: #f2f2f2;
     }
     </style>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {background-color: #008CBA;} /* Blue */
</style>
</head>
<body>
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
              <li><a href="uuid.php"><span class="glyphicon glyphicon-list-alt"></span> Generate UUID QR Code</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-tasks"></span> Data Table UUID QR Code<span class="caret"></span></a>
				<ul class="dropdown-menu">
                <li><a href="table_mg.php"><span class="glyphicon glyphicon-folder-open"></span> Data Scan QR Code UUID Mini Gold</a></li>
                <li><a href="table_pro.php"><span class="glyphicon glyphicon-folder-open"></span> Data Scan QR Code UUID Produksi</a></li>
				</ul>
			</ul>
		  </div>
		</nav>
        <div class="col-md-12">
				<div style="border-radius: 5px;padding:10px;background:#fff;" id="divvideo">
               <p>Data Scan UUID QR Code Fail</p>
                  <table id="example1" class="table table-bordered">
                    <thead>
                        <tr>
                            
                            <td><center>ID</center></td>
                            <td><center>UUID</center></td></td>
                            <td><center>Keterangan</center></td>
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
                           $sql ="SELECT * FROM fail";
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['uuid'];?></td>
                                <td><?php echo $row['keterangan'];?></td>
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

</body>
</html>