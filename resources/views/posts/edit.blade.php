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
                    <form action="/posts/{{$posts->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text"  name="post[title]" value="{{ $posts->title }}"/>
                        <p>{{$errors->first('post.title') }}</p>
                        <br/>
                        <textarea  name="post[body]" >"{{ $posts->body }}"</textarea>
                        <p>{{$errors->first('post.body') }}</p>
                        <br/>
                        <input type="submit" value="保存"/>
                    </form>
                </div>
                <div>
                    <a href="/posts/{{$posts->id}}">戻る</a>
                </div>
        </div>
    </body>
</html>
