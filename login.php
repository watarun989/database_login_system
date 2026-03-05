<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインページ</title>
</head>
<body>
    <div class="container">
        <h1>ログイン</h1>
        <form action="compare.php" method="POST"> 
            <div class="form-group">
                <label for="user_id">ユーザーID</label>
                <input type="text" name="user_id" id="user_id">
            </div>

            <div class="form-group">
                <label for="pass">パスワード</label>
                <input type="text" name="pass" id="pass">
            </div> 

            <input type="submit" value="ログイン">
        </form>
    </div>
</body>
</html>