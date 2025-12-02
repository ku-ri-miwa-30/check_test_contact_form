<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>register</h1>
    <div>
        <form action="/register" method="post">
        @csrf
            <div>お名前</div><br>
            <input type="text" name="name" placefolder="山田t郎" value="山田t郎">
            <div>メールアドレス</div><br>
            <input type="email" name="email" placefolder="例" value="ko@gmail">
            <div>パスワード</div>
            <input type="password" name="password" placefolder="kofko" value="kofko">
            <button type="submit">登録</button>
        </form>


    </div>
</body>
</html>