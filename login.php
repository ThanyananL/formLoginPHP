<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <!--การสร้างแบบฟอร์ม-->
        <div class="title">Login</div>
        <!--หัวข้อเรื่อง-->
        <form action="register.php" method="POST">
            <!--ฟอร์ม-->
            <div class="user-details">
                <!--สร้างกล่องเก็บการใส่ข้อมูล-->
                <!---form login--->
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
            </div>
            <!---การสร้างปุ่ม--->
            <div class="button row justify-content-around">
                <div class="col-4"><a href="index.php"><input type="submit" value="Register"></a></div>
                <div class="col-4"><a href="login.php"><input type="button" value="Login"></a></div>
            </div>
            <!-- <div class="button">
                <a href="login.php"><input type="button" value="Login"></a>
            </div> -->
        </form>
    </div>
</body>

</html>