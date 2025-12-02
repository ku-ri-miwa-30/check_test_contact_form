<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login</h1>
    <form action="/login" method="post">
        @csrf
        <table>
            <tr>メールアドレス</tr>
            <td><input type="email" name="email" value="ko@gmail"></td>
            <td>パスワード</td>
            <td><input type="password" name="password" value="kofko"></td>
        </table>
        <button type="submit">ログイン</button>
    </form>
</body>
</html>