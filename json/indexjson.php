<?php

$jsonfile = file_get_contents("https://baguspradika.000webhostapp.com/indexserver.php/data/");
$data = json_decode($jsonfile, true);

$data = $data["data"];
	
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Tutorial CRUD  JSON DATA</title>
 
 <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
		#customers {
		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 50%;
		  margin-left: 25%;
		}

		#customers td, #customers th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #16a085;
		  color: white;
		}
		.tbedit {
		    background-color: #5ec3cc; /* Blue */
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
  <br>
<div class="container">
 <div class="btn-toolbar">
  <a class="tbadd" href="Tambahdata.php"> Insert Data</a>
  <div class="btn-group"> </div>
 </div>
</div>
<br>
<br>
<div class="container">
 <div class ="row">
  <div class="col-md-9">
   <table id="customers">
    <tr>
     <th>id</th>
     <th>Nama warung</th>
     <th>Nama Penjual</th>
     <th>Action</th>
     
     
    </tr>  

    <?php 
    foreach ($data as $row) :   ?>
    <tr>
     
     <td><?=$row["id_penjual"]; ?></td>
     <td><?=$row["nama_warung"]; ?></td>
     <td><?=$row["nama_penjual"]; ?></td>
    
    

     
     <td>
      <form method="post" action="update.php">
        <input type="hidden" name="id_penjual" value="<?=$row['id_penjual']?>">      
        <button class="tbedit" type="submit">Edit</button>
      </form>
      <form method="post" action="delete.php">
        <input type="hidden" name="id_penjual" value="<?=$row['id_penjual']?>">        
        <button class="tbhapus" type="submit">Delete</button>
      </form>
     </td>
    </tr>
    <?php endforeach; ?>
   </table>
  </div> 
 </div>
</div>
</body>
</html>

