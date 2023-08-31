<!DOCTYPE html>
<html>

<head>
     <title>iqshan</title>
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

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}
.button4 {
  background-color: white; 
  color: black; 
  border: 2px solid #FFD700;
}
.button5 {
  background-color: white; 
  color: black; 
  border: 2px solid #FF69B4;
}
.button6 {
  background-color: white; 
  color: black; 
  border: 2px solid #D2B48C;
}
.button7 {
  background-color: white; 
  color: black; 
  border: 2px solid #FF8C00;
}
.button8 {
  background-color: white; 
  color: black; 
  border: 2px solid #000000;
}
.button9 {
  background-color: white; 
  color: black; 
  border: 2px solid #A52A2A;
}
.button10 {
  background-color: white; 
  color: black; 
  border: 2px solid #0000FF;
}
.button11 {
  background-color: white; 
  color: black; 
  border: 2px solid #00FF00;
}

</style>
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
</li>
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
                <li><a href="uuid8.php"><span class="glyphicon glyphicon-qrcode"></span> Qr Code Generate Silverium</a></li>
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

          <div style="padding-left:16px">
               <center>
                   
                    </a></h1>
               </center>
              
       <section id="Bride_Groom">
    <div class="container">

      <div class="row" style="padding:5px;background:#FFFF;border-radius: 5px;">
      <img src="logo-minigold-small.png"> <div class="section-header">
       
        </div>
        <hr>
        <div id="content-15" data-section="content-15" class="data-section">
          <div class="col-md-4">

            <a href="uuid.php"> <img src="scan_ger.jpeg" alt="bride" class="img-middle" /></a>
            <div class="align-center">
              <h4><b>QR Generate UUID BS 0.25 GR</b></h4>
              <h6>Halaman QR Code Generate UUID Black Series 0.25 GR</h6>
              <a href="uuid.php"> <button class="button button1" style="resize:none;width:225px;height:50px;"> Open </button></a>
            </div>
          </div>
          <div class="col-md-4">
          <a href="uuid1.php"><img src="scan_ger.jpeg" alt="bride" class="img-middle" /></a>
          <div class="align-center">
            <h4><b>QR Generate UUID BS 0.05 GR</b></h4>
            <h6>Halaman QR Code Generate UUID Black Series 0.05 GR</h6>
            <a href="uuid1.php"><button class="button button4" style="resize:none;width:225px;height:50px;">Open </button></a>
          </div>
        </div>
        <div class="col-md-4">
          <a href="uuid2.php"><img src="scan_ger.jpeg" alt="bride" class="img-middle"></a>
        <div class="align-center">
          <h4><b>QR Generate UUID BS 0.1 GR</b></h4>
          <h6>Halaman QR Code Generate UUID Black Series 0.1 GR</h6>
          <a href="uuid2.php"><button class="button button5" style="resize:none;width:225px;height:50px;">Open</button></a>
        </div>
        </div>
        </div>
        <div class="col-md-4">
          <a href="uuid3.php"> <img src="scan_ger.jpeg" alt="bridge" class="img-middle"></a>
          <div class="align-center">
            <h4><b>QR Generate UUID BS 0.025 GR</b></h4>
              <h6>Halaman QR Code Generate UUID Black Series 0.025 GR</h6>
              <a href="uuid3.php"><button class="button button6" style="resize:none;width:225px;height:50px;">Open</button></a>
          </div>
        </div>
      <div class="col-md-4">
        <a href="uuid4.php"><img src="scan_ger.jpeg" alt="bridge" class="img-middle"></a>
        <div class="align-center">
          <h4><b>QR Generate UUID BS 0.5 GR</b></h4>
          <h6>Halaman QR Code Generate UUID Black Series 0.5 GR</h6>
          <a href="uuid4.php"><button class="button button7" style="resize:none;width:225px;height:50px">Open</buttonc></a>
        </div>
      </div>
      <div class="col-md-4">
        <a href="uuid5.php"> <img src="scan_ger.jpeg" alt="bridge" class="img-middle"></a>
        <div class="align-center">
          <h4><b>QR Generate UUID BS 1 GR</b></h4>
          <h6>Halaman QR Code Generate UUID Black Series 1 GR</h6>
          <a href="uuid5.php"><button class="button button8" style="resize:none;width:225px;height:50px">Open</button></a>
        </div>
      </div>
      <div class="col-md-4">
        <a href="uuid6.php"><img src="scan_ger.jpeg" alt="bridge" class="img-middle"></a>
        <div class="align-center">
          <h4><b>QR Generate UUID BS 1.5 GR</b></h4>
          <h6>Halaman QR Code Generate UUID Black Series 1.5 GR</h6>
          <a href="uuid6.php"><button class="button button9" style="resize:none;width:225px;height:50px">Open</button></a>
        </div>
      </div>
      <div class="col-md-4">
        <a href="uuid7.php"><img src="scan_ger.jpeg" alt="bridge" class="img-middle"></a>
        <div class="align-center">
          <h4><b>QR Generate UUID Ekstrim 0.101</b></h4>
          <h6>Halaman QR Code Generate UUID Ekstrim Series 0.101 GR</h6>
          <a href="uuid7.php"><button class="button button10" style="resize:none;width:225px;height:50px">Open</button></a>
        </div>
      </div>
      <div class="col-md-4">
        <a href="uuid8.php"><img src="scan_ger.jpeg" alt="bridge" class="img-middle"></a>
      <div class="align-center">
        <h4><b>QR Generate UUID Silverium</b></h4>
        <h6>Halaman QR Code Generate UUID Silverium</h6>
        <a href="uuid8.php"><button class="button button11" style="resize:none;width:225px;height:50px;">Open</button></a>
      </div>
      </div>
        <div class="col-md-4">
          <a href="scan1.php"><img src="scan_her.png" alt="bride" class="img-middle" /></a>
          <div class="align-center">
            <h4><b>Scan QR Code Mini Gold</b></h4>
            <h6>Halaman Scanner QR Code Mini Gold</h6>
            <a href="scan1.php"><button class="button button2" style="resize:none;width:225px;height:50px;">Open </button></a>
          </div>
        </div>

        <div class="col-md-4">
          <a href="scan2.php"><img src="scan_her.png" alt="bride" class="img-middle" /></a>
          <div class="align-center">
            <h4>Scanner QR Code Produksi</h4>
            <p>Halaman Scan QR Code Produksi</p>
            <a href="scan2.php"><button class="button button3" style="resize:none;width:225px;height:50px;">Open</button></a>
          <br><br>
          </div>
        </div>
     <br><br> 
     </div>
     <br><br>
    </div>
    </div>
  </section>         
     </body>
</html>