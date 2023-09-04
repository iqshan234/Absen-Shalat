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
    <link rel="website icon" type="png" href="mg.png">
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
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .qr-code {
            margin: 10px;
        }
    </style>
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
  
        <br><br>
                    <div class="row">
                      <div class="col-md-20" style="padding:10px;background:#FFFF;border-radius: 5px;" >
    <h1>Silahkan Melakukan Generate QR Code UUID & Produk</h1>
    <h5>Pada halaman ini anda bisa melakukan qr code generate semua produk sesuai keinginan anda</h5><br>

    <div class="container">
        <?php
        require 'database.php'; // Load database connection

        function generateUUID() {
            $data = random_bytes(16);
            assert(strlen($data) == 16);
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 4
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }

        if (isset($_POST['generate'])) {
            $produk = $_POST['produk'];
            $columns = $_POST['columns'];
            $rows = $_POST['rows'];

            $qrCodeURLs = [];
            $uuids = [];

            // Generate multiple QR codes and store their URLs and UUIDs
            for ($i = 0; $i < $columns * $rows; $i++) {
                $uuid = generateUUID();
                $uuids[] = $uuid; // Simpan UUID

                // Store UUID in the database
                $stmt = $kon->prepare("INSERT INTO qr_codes (uuid, produk) VALUES (?, ?)");
                $stmt->bind_param("ss", $uuid, $produk);
                $stmt->execute();
                $c = 0; // Cyan
                $m = 0;   // Magenta
                $y = 0;   // Yellow
                $k = 100;   // Black
                // Generate QR code URL using api.qrserver
                $qrCodeURLs[] = "https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=" . urlencode(json_encode(["uuid" => $uuid, "produk" => $produk]). "&c=$c&m=$m&y=$y&k=$k");
            }

            // Display multiple QR codes in grid
            foreach ($qrCodeURLs as $qrCodeURL) {
                echo '<div class="qr-code"><img src="' . $qrCodeURL . '" alt="QR Code"></div>';
            }

            // Store QR code URLs and UUIDs for creating RAR later
            $qrCodeURLs = array_merge($qrCodeURLs, $qrCodeURLs);
            $uuids = array_merge($uuids, $uuids);
        }
        ?>
    </div>

    <form method="post">
        <label for="produk">Produk:</label>
        <input type="text" style="resize:none;width:300px;height:33px;" id="produk" name="produk" required>

        <label for="columns">Columns:</label>
        <input type="number" style="resize:none;width:300px;height:33px;" id="columns" name="columns" value="" min="1" required>

        <label for="rows">Rows:</label>
        <input type="number" style="resize:none;width:300px;height:33px;" id="rows" name="rows" value="" min="1" required>
        <br><br>
        <button type="submit"  class="button button2" name="generate">Generate QR Codes</button> <button onclick="downloadRAR()" class="button button5">Download QR Codes as RAR</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/file-saver@2.0.5/dist/FileSaver.min.js"></script>
    <script>
        const qrCodeURLs = <?php echo json_encode($qrCodeURLs); ?>;
        const uuids = <?php echo json_encode($uuids); ?>;

        function downloadRAR() {
            const zip = new JSZip();
            const qrCodeFolder = zip.folder("QR_Codes");

            qrCodeURLs.forEach((qrCodeURL, index) => {
                const uuid = uuids[index]; // Get the UUID corresponding to the QR code URL
                const qrCodeFilename = "qr_code_" + uuid + ".tif"; // Use UUID for the file name
                qrCodeFolder.file(qrCodeFilename, fetch(qrCodeURL).then(response => response.blob()));
            });

            zip.generateAsync({ type: "blob" }).then(content => {
                saveAs(content, "qr_codes.rar");
            });
        }
    </script>
</body>
</html>
