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
                    <form action="posts/" method="POST">
                        @csrf
                        <input type="text"  name="post[title]"/>
                        <br/>
                        <textarea  name="post[name]"></textarea>
                        <br/>
                        <input type="submit" value="保存"/>
                    </form>
                </div>
                <div>
                    <a href="/">戻る</a>
                </div>
        </div>
    </body>
</html>
