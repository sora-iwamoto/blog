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
                    <form action="/posts" method="POST">
                        @csrf
                        <input type="text"  name="post[title]" value="{{ old('post.title') }}"/>
                        <p>{{$errors->first('post.title') }}</p>
                        <br/>
                        <textarea  name="post[body]" >{{ old('post.title') }}</textarea>
                        <p>{{$errors->first('post.body') }}</p>
                        <br/>
                        <div>
                        <p>カテゴリー</p>
                        <select name="post[category_id]">
                            @foreach($categories as $category)
                                <option value="{{$category ->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                        <input type="submit" value="保存"/>
                    </form>
                    
                </div>
                <div>
                    <a href="/">戻る</a>
                </div>
        </div>
    </body>
</html>
