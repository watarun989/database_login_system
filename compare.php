<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //データの受け取り
        session_start(); 
        $user_id=$_POST["user_id"]; 
        $pass=$_POST["pass"];
        require 'db_connect.php';
        $sql="SELECT `pass` FROM User WHERE `user_id` = '".$user_id."'"; 
        $stmt=$pdo->prepare($sql); 
        $stmt->execute(); 
        $result=$stmt->fetch(PDO::FETCH_ASSOC); 
        if($pass == $result['pass']){
          $_SESSION['user_id'] = $user_id; 
            echo "Password confirmed"; 
            header('Location: mypage.php'); 
            exit(); 
        }else{
            echo "Password not found";
            echo "<br>"; 
            echo "<a href='login.php'>return</a>"; 
        }
    ?>
    
</body>
</html>