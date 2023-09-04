<!DOCTYPE html>
<html>
<head>
<title>Iqshan</title>
<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="website" type="png" href="mg.png">
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
			
			  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-download-alt"></span> Export Data Export <span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="export.php"><span class="glyphicon glyphicon-download"></span> Export Data Table Scan UUID QR Code Mini Gold</a></li>
				  <li><a href="export_produksi.php"><span class="glyphicon glyphicon-download"></span> Export Data Table Scan UUID QR Code Produksi</a></li>
				</ul>
			  </li>
			  <li><a href="export.php"><span class="glyphicon glyphicon-align-justify"></span> Export Data Table Scan UUID QR Code</a></li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Scanner QR Code <span class="caret"></span></a>
				<ul class="dropdown-menu">
                <li><a href="scan1.php"><span class="glyphicon glyphicon-qrcode"></span> Scan QR Code Mini Gold</a></li>
                <li><a href="scan2.php"><span class="glyphicon glyphicon-qrcode"></span> Scan QR Code Produksi</a></li>
				</ul>
              <li><a href="uuid.php"><span class="glyphicon glyphicon-list-alt"></span> Generate UUID QR Code</a></li>
              <li><a href="attendance.php"><span class="glyphicon glyphicon-calendar"></span> Data Table UUID QR Code</a></li>
			</ul>
		  </div>
		</nav>
    <div style="padding-left:16px">
        <center>
        </center>
        <br><br>
                    <div class="row">
                      <div class="col-md-16" style="padding:10px;background:#FFFF;border-radius: 5px;" >
                              <h4>Silahkan Melakukan Generate QR Code UUID Ekstrim Series 0.101</h4>
                              <hr>
    <form action="" method="post">
        <input type="number" style="resize:none;width:300px;height:33px;"name="columns" placeholder="Number of Columns">
        <input type="number"style="resize:none;width:300px;height:33px;" name="rows" placeholder="Number of Rows">
        <input type="submit" name="generate" class="btn btn-danger" value="Generate UUIDs and QR Codes">
        <input type="submit" name="downloadAll" class="btn btn-primary" value="Download All QR Codes">
    </form>
    <br><br><br>
    
    <?php
    require 'database.php';
    if (isset($_POST['generate'])) {
        if (isset($_POST['columns']) && isset($_POST['rows'])) {
            $columns = $_POST['columns'];
            $rows = $_POST['rows'];
            $zip = new ZipArchive();
            $zipFilename = 'qrcodes.zip';
            $zip->open($zipFilename, ZipArchive::CREATE);
        
            for ($row = 1; $row <= $rows; $row++) {
                echo '<div class="uuid-row">';
            
                for ($col = 1; $col <= $columns; $col++) {
                    $uuid = generateUUID();
                    $stmt = $kon->prepare("INSERT INTO qr_codes (uuid, produk) VALUES(?,?)");
                    $stmt->bind_param("ss", $uuid, $produk);
                    $produk = "Ekstrim Series 0.101 gr";
                    $data = '{"uuid":"' . $uuid . '", "produk":"' . $produk . '"}';
                    $njay = ' ';
                    $c = 0; // Cyan
                    $m = 0;   // Magenta
                    $y = 0;   // Yellow
                    $k = 100;   // Black
                    $qrCodeUrl = 'https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=' . urlencode($data) . "&c=$c&m=$m&y=$y&k=$k";
                                
                    echo '<div class="uuid-column">';
                    echo '<h3>UUID ' . (($row - 1) * $columns + $col) . '</h3>';
                    echo '<img src="' . $qrCodeUrl . '" alt="QR Code">';
                    echo '<p>UUID: ' . $uuid . '</p>';
                    echo '<p>Produk: ' . $produk . '</p>';
                    echo '<p>' . $njay . '</p>';
                    echo '<a href="' . $qrCodeUrl . '" download="qr_code_' . $uuid . '">Download QR Code</a>';
                    echo '</div>';
                    $stmt->execute();
                    $qrCodeContent = file_get_contents($qrCodeUrl);
                    $zip->addFromString("qr_code_$uuid.tif", $qrCodeContent);
                }
            
                echo '</div>';
            }
        
            $zip->close();
        }
    } elseif (isset($_POST['downloadAll'])) {
        if (file_exists('qrcodes.zip')) {
            header("Content-type: application/zip");
            header("Content-Disposition: attachment; filename=qrcodes.zip");
            readfile('qrcodes.zip');
            unlink('qrcodes.zip');
        } else {
            echo "No QR codes to download.";
        }
    }
    
    function generateUUID() {
        $data = random_bytes(16);
        assert(strlen($data) == 16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 4
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
    ?></div>
</body>
</html>