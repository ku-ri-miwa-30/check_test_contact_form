<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>confirm</h1>
    <form action="/thanks" method="post">
        @csrf
        <table>
            <tr>
                <td>お名前</td>
                <td><input type="text" name="full_name" value="{{$contact['first_name']}} {{$contact['last_name']}}" readonly></td>
                <td><input type="hidden" name="first_name" value="{{$contact['first_name']}} " ></td>
                <td><input type="hidden" name="last_name" value="{{$contact['last_name']}} " ></td>
            </tr>
            <tr>
                <td>性別</td>
                <td><input type="text" name="gender" value="{{$contact['gender']}}" readonly></td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td><input type="text" name="email" value="{{$contact['email']}}" readonly></td>
            </tr>
            <tr>
                <td>電話番号</td>
                <td><input type="text" name="tel" value="{{$contact['tel1']}}{{$contact['tel2']}}{{$contact['tel3']}}" readonly></td>
            <tr><td>住所</td>
                <td><input type="text" name="address" value="{{$contact['address']}}" readonly></td>
            <tr><td>建物名</td>
            <td><input type="text" name="building" value="{{$contact['building']}}" readonly></td>
            <tr><td>お問い合わせの種類</td>
            <td><input type="text" name="category_type" value="{{$contact['category_type']}}" readonly></td>
            <tr><td>お問い合わせの内容</td>
            <td><input type="text" name="detail" value="{{$contact['detail']}}" readonly></td>
        </table>

        <br><button type='submit' >送信</button>
    </form>
    <form action="/" method="get">
        @csrf
        <button type="submit">修正</button>
    </form>
</body>
</html>