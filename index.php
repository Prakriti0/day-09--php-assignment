<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
<h1>HAMRO GALLERY</h1>
<div class="container">
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="gallerydb";
    $conn=new mysqli($servername,$username,$password,$database);
    $sql = "SELECT * FROM images";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while( $row= $result->fetch_assoc()){
             ?>
              
             <div class="box">
             <div class="innerbox">
             <div class="id">
                     <?php  echo $row['id']; ?>
                 </div>
                 <div class="image">
                    <img src="<?php  echo $row['iamge_url']; ?>" alt=""> 
                 </div> 
                 <div class="title"><br> <br>
                     <?php  echo $row['title']; ?>
                 </div>
                 <br> <br><div class="rem"> 
                     <?php  echo $row['remarks']; ?>
                 </div>
             </div>
             </div>
             <?php
        }}
        $conn->close();
    ?>
    </div>
    <footer>&copy; <b> PRAKRITI LIMBU</b></footer>
    </div>
</body>
</html>