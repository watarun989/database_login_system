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
        $user_id=$_POST["user_id"]; 
        $username=$_POST["username"]; 
        $pass=$_POST["pass"]; 
        $age=$_POST["age"];
        $gender=$_POST["gender"]; 
        $tell=$_POST["tell"];
        $address=$_POST["address"];
        echo "<h2>  </h2>"; 
        echo "UserID: ".$user_id."<br>";
        echo "Username: ".$username."<br>";
        echo "Password: ".$pass."<br>";
        echo "age: ".$age."<br>";
        echo "gender: ".$gender."<br>";
        echo "tell: ".$tell."<br>";
        echo "address: ".$address."<br>";

        $dsn="mysql:localhost;3port=8889;dbname=practice1;charset=utf8mb4"; 
        $user="root";
        $password="root";
        try {
            $pdo = new PDO($dsn, $user, $password);
            // PDOエラー時に例外を投げる
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'データベース接続失敗: ' . $e->getMessage();
            exit;
        }

        // //データベースからの選択
        // $sql="SELECT * FROM `User`"; 
        // $stmt=$pdo->prepare($sql); 
        // $stmt->execute(); 

        // foreach($stmt as $row){
        //     echo $row['user_id']."<br>"; 
        //     echo $row['pass']."<br>"; 
        //     echo $row['name']."<br>"; 
        //     echo $row['age']."<br>"; 
        //     echo $row['gender']."<br>"; 
        //     echo $row['tell']."<br>"; 
        //     echo $row['address']."<br>"; 
        // }

        //データベースへの登録
        $sql="INSERT INTO `User`(`user_id`, `pass`, `name`, `age`, `gender`, `tell`, `address`) VALUES ('".$user_id."','".$pass."','".$username."','".$age."','".$gender."','".$tell."','".$address."')"; 
        $stmt=$pdo->prepare($sql); 
        $stmt->execute(); 
    ?>
</body>
</html>