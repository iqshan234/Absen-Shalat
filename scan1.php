<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iqshan</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="website icon" type="png" href="mg.png">
    <style>
        .uuid-column {
            display: inline-block;
            vertical-align: top;
            margin-right: 10px;
        }
    </style>
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

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}
</style>
</head>
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
			  </li>
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
<br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-20" style="padding:10px;background:#F5F5F5;border-radius: 5px;">
            <img src="logo-minigold-small.png"> 
                <center> 
                    <a href="scanner_gold1.php"><button class="button button2" style="resize:none;width:500px;height:100px;">Scanner QR Code & Menampilkan Data Baru</button></a><br>
                    <a href="scanner_gold2.php"><button class="button button1" style="resize:none;width:500px;height:100px;">Scanner QR Code & Menampilkan Semua Data</button></a>
                </center><br><br>
</div>
</div>

</body>
</html>