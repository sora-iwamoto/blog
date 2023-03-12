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
            <p>{{Auth::user()->name}}</p>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    <p class='body'>{{ $post->body }}</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div>
            {{$posts->links()}}
        </div>
         <div>
            <a href = "/posts/create">新規作成</a>
        </div>
        <div>
        @foreach($questions as $question)
           <div>
                <a href="https://teratail.com/questions/{{ $question['id'] }}">
                    {{ $question['title'] }}
                </a>
            </div>
        @endforeach
        </div>
    </body>
</html>

<script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
