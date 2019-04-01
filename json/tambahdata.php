<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://baguspradika.000webhostapp.com/indexserver.php/data/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 807ca504-8fb3-201b-9060-fa566bf4e473"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

$jsonfile = file_get_contents("https://baguspradika.000webhostapp.com/indexserver.php/");
$data = json_decode($jsonfile, true);

$data = $data["data"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <title>Tutorial CRUD  JSON DATA</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <style type="text/css">
 .navbar-default {
  background-color: #3b5998;
  font-size:18px;
  color:#ffffff;
 }
 .tbhapus {
		    background-color: #bf3b3b; /* Red */
		    border: none;
		    color: white;
		    padding: 5px 15px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 13px;
		    margin: 4px 2px;
		    cursor: pointer;
		    
		}

		.tbadd {
		    background-color: #16a085; /* Red */
		    border: none;
		    color: white;
		    padding: 10px 20px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 15px;
		    margin: 4px 2px;
		    cursor: pointer;
		    
		}
 </style>
</head>
<body>
<nav style="background-color:#16a085;" class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <h4>CACASTIE</h4>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    </div>

</nav>
<a  href="indexjson.php"><button class="tbhapus">Back</button></a>
<br>
<div class="container">
    <div class="row">
  <div class="col-sm-5 col-sm-offset-3"><h3>Create a User</h3>
        <form method="POST" action="">

  
   <div class="form-group">
    <label for="inputFName">Nama warung</label>
    <input type="text" class="form-control" required="required" id="inputFName" name="nama_warung" placeholder="First Name">
    <span class="help-block"></span>
   </div>
   
   <div class="form-group ">
    <label for="inputLName">nama penjual</label>
    <input type="text" class="form-control" required="required" id="inputLName" name="nama_penjual" placeholder="Alamat">
          <span class="help-block"></span>
   </div>
  
    
   <div class="form-actions">
     <button type="submit" name="submit" class="tbadd">Create</button>
  <?php
    if(isset($_POST['submit'])) {  
      $nama_warung = $_POST['nama_warung'];
      $nama_penjual =  $_POST['nama_penjual'];

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://baguspradika.000webhostapp.com/indexserver.php/create",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "nama_warung=$nama_warung&nama_penjual=$nama_penjual",
        CURLOPT_HTTPHEADER => array(
          "cache-control: no-cache",
          "content-type: application/x-www-form-urlencoded",
          "postman-token: 10321e1b-e4bd-45b7-a3b4-376cc9383635"
        ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        echo $response;
      }
}
  ?>
     
   </div>



  </form>
        </div>
      </div>        
</div>
</body>
</html>
