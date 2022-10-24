<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration แบบฟอร์มลงทะเบียน</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container"> <!--การสร้างแบบฟอร์ม-->
        <div class="title">Registration</div> <!--หัวข้อเรื่อง-->
        <form action="register.php" method="POST"> <!--ฟอร์ม-->
            <div class="user-details"> <!--สร้างกล่องเก็บการใส่ข้อมูล-->
                 <!---การสร้างฟอร์มลงทะเบียน--->
                <div class="input-box">
                    <span class="details">Full name</span>
                    <input type="text" name="fullname" placeholder="Enter your first name and last name" required autofocus>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Enter your username" required>
                </div>  
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>  
                <div class="input-box">
                    <span class="details">Phone</span>
                    <input type="text" name="phone" placeholder="Enter your number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm password</span>
                    <input type="password" name="passwordConfirm" placeholder="Confirm your password" required>
                </div>
            </div>
             <!---การสร้างฟอร์มเลือกเพศ--->
            <div class="gender-details">
                <input type="radio" name="gender" value="Male" id="dot-1">
                <input type="radio" name="gender" value="Female" id="dot-2">
                <input type="radio" name="gender" value="Prefer not to say" id="dot-3">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Prefer not to say</span>
                    </label>
                </div>
            </div>
             <!---การสร้างปุ่ม--->
            <div class="button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>