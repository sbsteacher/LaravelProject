<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', '프로젝트1')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('res/css/common.css') }}">
    @stack('css')
</head>
<body>
<div class="container">
    <div class="header">
        <ul class="topMenu">
            <li>게시판</li>
            <li><a href="/board/create">글쓰기</a></li>
            <li>로그인</li>
        </ul>
    </div>
    <div class="body">@yield('body', View::make('500'))</div>
    <div class="footer">
        footer
    </div>
    @stack('js')
</div>
</body>
</html>
