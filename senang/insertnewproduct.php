<?php
include_once("dbconnect.php");

//if (isset($_COOKIE["timer"])){

//get data first
$name = $_POST['name'];
$email = $_POST['email']; 
$phone = $_POST['phone'];
$prname = $_POST['prname'];
$prprice = $_POST['prprice'];
$prdesc = $_POST['prdesc'];
$prtype = $_POST['prtype'];
$prloc = $_POST['prloc'];
$imagename = generateRandomString();
$mypass = generateRandomString();
$shmypass = sha1($mypass);

 if(!empty($_FILES['uploaded_file'])){
    $path = "products/";
    $path = $path .$imagename.'.jpg';
     if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)){
        try {
             $stmt = $conn->prepare("INSERT INTO products (prname,prprice,prdescription,primage,prtype,prlocation,name,phone,email,password) 
             VALUES (:prname, :prprice, :prdescription,:primage,:prtype,:prlocation,:name,:phone,:email,:password)");
            
            $stmt->bindParam(':prname', $prname);
            $stmt->bindParam(':prprice', $prprice);
            $stmt->bindParam(':prdescription', $prdesc);
            $stmt->bindParam(':primage', $imagename);
            $stmt->bindParam(':prtype', $prtype);
            $stmt->bindParam(':prlocation', $prloc);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $shmypass);
            
  
            //$sql = "INSERT INTO products(prname,prprice,prdescription,primage,prtype,prlocation,name,phone,email,password)
            //VALUES ('$prname', '$prprice', '$prdesc','$imagename','$prtype', '$prloc', '$name','$phone', '$email','$shmypass')";
            // use exec() because no results are returned
            //$conn->exec($sql);
             $stmt->execute();
             
            echo "<script> alert('Success')</script>";
            echo "<script> window.location.replace('index.php') </script>;";
        } catch(PDOException $e) {
            echo "<script> alert('Failed!!!')</script>";
            echo "<script> window.location.replace('newproduct.html') </script>;";
        }
        $conn = null;
     
     }else{
          echo "<script> alert('Image upload error')</script>";
          echo "<script> window.location.replace('newproduct.html') </script>;";
     }
 }

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

?>