<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mypage</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
        <!-- phpでデータベースからデータ取得 -->
        <?php
            session_start(); 
            $user_id = $_SESSION['user_id']; 
            require 'db_connect.php';
            $sql="SELECT * FROM User WHERE `user_id` = '".$user_id."'"; 
            $stmt=$pdo->prepare($sql); 
            $stmt->execute(); 
            $result=$stmt->fetch(PDO::FETCH_ASSOC); 
        ?>

        <div class="wrapper">
            <h1 class="mypage-header">Home Page</h1>
            <div class="mypage-container">
                <p class="label">user_id</p>
                <p><?php echo $result['user_id']; ?></p>
                <p class="label">username</p>
                <p><?php echo $result['name']; ?></p>
                <p class="label">pass</p>
                <p><?php echo $result['pass']; ?></p>
                <p class="label">age</p>
                <p><?php echo $result['age']; ?></p>
                <p class="label">gender</p>
                <p><?php echo $result['gender']; ?></p>
                <p class="label">address</p>
                <p><?php echo $result['address']; ?></p>
                <p class="label">tell</p>
                <p><?php echo $result['tell']; ?></p>
            </div>
            <a href="login.php">To Login</a>
        </div>
        

</body>
</html>