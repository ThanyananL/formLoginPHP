<?php
    require "connnectdb.php";
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["passwordConfirm"];
    $gender = $_POST["gender"];

    // บันทึกข้อมูลลงตัวแปรเก็บไว้ก่อนนะ
    $sql = "INSERT INTO login_tb(login_fullname ,login_username ,login_email ,login_phone ,login_password ,login_gender ) 
    VALUES('$fullname','$username','$email','$phone','$password','$gender')";

    //ลงฐานข้อมูลจริงๆละ
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "บันทึกข้อมูลสำเร็จ";
    }else{
        echo mysqli_error($connect);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <a href="index.php">กลับหน้าแรก</a>
</body>
</html>