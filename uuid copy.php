<!DOCTYPE html>
<html>
<head>
    <title>UUID Generator & QR Code</title>
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
</head>
<body>
    <h1>Silahkan Melakukan Generate QR Code UUID</h1>

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

            // Generate multiple QR codes and store their URLs
            for ($i = 0; $i < $columns * $rows; $i++) {
              $uuid = generateUUID();

                // Store UUID in the database
                $stmt = $kon->prepare("INSERT INTO qr_codes (uuid, produk) VALUES (?, ?)");
                $stmt->bind_param("ss", $uuid, $produk);
                $stmt->execute();

                // Generate QR code URL using api.qrserver
                $qrCodeURLs[] = "https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=" . urlencode(json_encode(["uuid" => $uuid, "produk" => $produk]));
            
              }

            // Display multiple QR codes in grid
            foreach ($qrCodeURLs as $qrCodeURL) {
                echo '<div class="qr-code"><img src="' . $qrCodeURL . '" alt="QR Code"></div>';
            }
            
            // Store QR code URLs for creating RAR later
            $qrCodeURLs = array_merge($qrCodeURLs, $qrCodeURLs);
        }
        
        ?>
    </div>

    <form method="post">
        <label for="produk">Produk:</label>
        <input type="text"  style="resize:none;width:300px;height:33px;" id="produk" name="produk" required>
       
        <label for="columns">Columns:</label>
        <input type="number" style="resize:none;width:300px;height:33px;" id="columns" name="columns" value="" min="1" required>
      
        <label for="rows">Rows:</label>
        <input type="number" style="resize:none;width:300px;height:33px;" id="rows" name="rows" value="" min="1" required>
        <br><br>
        <button type="submit" name="generate">Generate QR Codes</button> <button onclick="downloadRAR()">Download QR Codes as RAR</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/file-saver@2.0.5/dist/FileSaver.min.js"></script>
    <script>
        const qrCodeURLs = <?php echo json_encode($qrCodeURLs); ?>;

        function downloadRAR() {
            const zip = new JSZip();
            const qrCodeFolder = zip.folder("QR_Codes");

            qrCodeURLs.forEach((qrCodeURL, $uuid) => {
                const qrCodeFilename = "qr_code_" + $uuid + ".png";
                qrCodeFolder.file(qrCodeFilename, fetch(qrCodeURL).then(response => response.blob()));
            });

            zip.generateAsync({ type: "blob" }).then(content => {
                saveAs(content, "QR_CODE.rar");
            });
        }
    </script>

    
</body>
</html>
