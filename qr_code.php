<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-100">
     <title>iqshan</title>
     <link href="style.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <script src="bootstrap/js/bootstrap.min.js"></script>
     <script src="js/jquery-3.4.1.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <style>
          .button {
               background-color: #4CAF50;
               /* Green */
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

          .button2 {
               background-color: #008CBA;
          }

          /* Blue */
          .button3 {
               background-color: #f44336;
          }

          /* Red */
          .button4 {
               background-color: #e7e7e7;
               color: black;
          }

          /* Gray */
          .button5 {
               background-color: #555555;
          }

          /* Black */
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
          body {
               margin: 0;
               font-family: Arial, Helvetica, sans-serif;
          }

          .topnav {
               overflow: hidden;
               background-color: #333;
          }

          .topnav a {
               float: left;
               color: #f2f2f2;
               text-align: center;
               padding: 14px 16px;
               text-decoration: none;
               font-size: 17px;
          }

          .topnav a:hover {
               background-color: #ddd;
               color: black;
          }

          .topnav a.active {
               background-color: #04AA6D;
               color: white;
          }
     </style>
</head>

<body>

     <body>
          <div class="topnav">
               <a href="semple.php">Upload Semple Desain</a>
               <a href="index.php">Upload Desain </a>
               <a href="template.php">Upload Final Desain</a>
               <a href="qr.php">Upload QR</a>
               <a href="qr_code.php">QR Code Generator</a>
               <a href="uuid.php">UUID</a>
               <a href="scanner.php">Scanner</a>
               <a href="merge5.php"> Merge</a>
               <a href="merge6.php">Merge2</a>
          </div>

          <div style="padding-left:16px">

               <br>
               <center>
                    <h1>Halaman Membuat QR Code Generator</h1>
                    </a></h1>
               </center>
               <p>
               <form method="post" action="">
                    <fieldset>
                         <p>
                         <div class="col-12">
                              <label for="qr_code_data">
                                   <h4>Silahkan Masukkan Link Konten Atau Text Data QRcode</h4>
                              </label>
                              <textarea class="form-control" rows="3" name="qr_code_data" class="form-control" multipleminlength="4" required value="<?php $val = isset($_POST['generate']) ? $_POST['qr_code_data'] : "";
                                                                                                                                                      echo $val; ?>"> </textarea>
                              </p>
                              <p>
                                   <input type="submit" class="button button2" name="generate" id="btn_submit" value="Generate QRCode">
                              </p>
                    </fieldset>
               </form>
               </p>
               <p>
                    <?php
                    if (isset($_POST['generate'])) {
                         include "php-qrcode-library/qrlib.php";
                         /*create folder*/
                         $tempdir = "img-qrcode/";
                         if (!file_exists($tempdir))
                              mkdir($tempdir, 0755);
                         $file_name = date("Ymd") . rand() . ".jpg";
                         $file_path = $tempdir . $file_name;

                         QRcode::png($_POST['qr_code_data'], $file_path, "H", 10, 1);
                         /* param (1)qrcontent,(2)filename,(3)errorcorrectionlevel,(4)pixelwidth,(5)margin */

                         echo "<p class='result'>Hasil QR Code :</p>";
                         echo "<p><img src='" . $file_path . "' /></p>";
                    }
                    ?>
     </body>
</html>