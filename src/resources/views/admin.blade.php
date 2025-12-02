<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <h1>admin</h1>
    @if (Auth::check())
    <li class="header-nav__item">
        <a class="header-nav__link" href="/mypage">マイページ</a>
    </li>
    <li class="header-nav__item">
        <form action="/logout" method="post">
        @csrf
        <button class="header-nav__button">ログアウト</button>
        </form>
        @endif
    </li>
</body>
</html>