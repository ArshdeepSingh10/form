<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 echo "REGISTERED SUCCESSFULL"."<br>";
 $name = $_POST['name'];
 $Dateofbirth = $_POST['Dateofbirth'];
 $email = $_POST['email'];
 $gender = $_POST['radio'];
 
 $address = $_POST['address'];
 $qulification = $_POST['qulification'];
   echo "Name : ".$name."<br>";
   echo "D.O.B : ".$Dateofbirth."<br>";
   echo "E-mail : ".$email."<br>";
   echo "Gender : ".$gender."<br>";
   echo "qulification : ".$qulification."<br>";
   echo "Address : ".$address;
   
    ?>
</body>
</html>