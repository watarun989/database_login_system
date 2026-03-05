<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>入力フォームページ</h1>
    <p>ここに新規登録の情報を入力してください</p>

    <form action="confirm.php" method="post">
    <div>
    <label for="user_id">ユーザーID</label>
    <input type="text" name="user_id" id="user_id">
    </div>

    <div>
    <label for="pass">パスワード</label>
    <input type="text" name="pass" id="pass">
    </div>

    <div>
    <label for="username">お名前</label>
    <input type="text" name="username" id="username">
    </div>

    <div>
    <label for="age">ご年齢</label>
    <input type="text" name="age" id="age">
    </div>

    <div>
    <h2>性別</h2>

    <label for="men">男</label>
    <input type="radio" name="gender" id="men" value="men">

    <label for="women">女</label>
    <input type="radio" name="gender" id="women" value="women">
    </div>

    <div>
    <label for="tell">電話番号</label>
    <input type="text" name="tell" id="tell">
    </div>

    <div>
    <label for="address">住所</label>
    <input type="text" name="address" id="address">
    </div>

    <input type="submit" value="登録">

    <div>
    <a href="login.php">To Login Page</a>
    </div>
    </form>

</body>
</html>