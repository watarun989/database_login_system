<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class = "wrapper">
        <?php
            $user_id=$_POST["user_id"]; 
            $username=$_POST["username"]; 
            $pass=$_POST["pass"]; 
            $age=$_POST["age"];
            $gender=$_POST["gender"]; 
            $tell=$_POST["tell"];
            $address=$_POST["address"];
            echo "<h2> Personal Information Vertification </h2>"; 
            echo "UserID: ".$user_id."<br>";
            echo "Username: ".$username."<br>";
            echo "Password: ".$pass."<br>";
            echo "age: ".$age."<br>";
            echo "gender: ".$gender."<br>";
            echo "tell: ".$tell."<br>";
            echo "address: ".$address."<br>";
        ?>
    </div>
    

    <form action="record.php" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
        <input type="hidden" name="username" value="<?php echo $username ?>">
        <input type="hidden" name="pass" value="<?php echo $pass ?>">
        <input type="hidden" name="age" value="<?php echo $age ?>">
        <input type="hidden" name="gender" value="<?php echo $gender ?>">
        <input type="hidden" name="tell" value="<?php echo $tell ?>">
        <input type="hidden" name="address" value="<?php echo $address ?>">
        <input type="submit" value="登録">
    </form>
</body>
</html>