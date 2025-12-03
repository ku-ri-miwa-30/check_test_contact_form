<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
</head>

<body>
    <h1>FashionablyLate</h1>
    <h2>Contact</h2>
    <form action="/confirm" method="post">お名前
        @csrf
        <input type="text" name='first_name' placeholder="例:山田" required>
        <input type="text" name="last_name" placeholder="例:太郎" required>
        <br>性別
        <input type="radio" name="gender" value='1' required>男性
        <input type="radio" name="gender" value='2' required>女性
        <input type="radio" name="gender" value='3' required>その他
        <br>メールアドレス※<input type="email" name="email" placeholder="例；" required>
        <br>電話番号<input type="tel" name="tel1" required>- <input type="tel" name="tel2" required> - <input type="tel" name="tel3" required>
        <br>住所<input type="text" name="address" placeholder="例：住所" required>
        <br>建物名<input type="text" name="building" placeholder="マンション">
        <br><label for="form_type">お問い合わせの種類</label>
        <select name="category_type" id="form_type" required>
            <option value="選択してください" name="what_type">選択してください</option>
            <option value="1.商品のお届けについて">1.商品のお届けについて</option>
            <option value="2.商品の交換について">2.商品の交換について</option>
            <option value="3.商品トラブル">3.商品トラブル</option>
            <option value="4.ショップへのお問い合わせ">4.ショップへのお問い合わせ</option>
            <option value="5.その他">5.その他</option>
        </select>
        <br>お問い合わせの内容※<input type="text" name="detail" placeholder="お問い合わせ内容を入力してください" required>
        <br><button type="submit">確認画面</button>
    </form>
</body>

</html>