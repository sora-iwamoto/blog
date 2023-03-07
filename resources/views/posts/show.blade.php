<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
                <div class='post'>
                    <h2 class='title'>{{ $posts->title }}</h2>
                    <p class='body'>{{ $posts->body }}</p>
                </div>
        </div>
        <a href="/">戻る</a>
    </body>
</html>
