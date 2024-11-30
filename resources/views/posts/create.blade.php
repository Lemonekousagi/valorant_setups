<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>投稿</title>
        <link rel="stylesheet" href="../../css/view.css">
    </head>
    <body>
        <h1>投稿</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h3>タイトル</h3>
                <input type="text" name="post[title]" class="title_box" placeholder="タイトル"/>
            </div>
            <div class="image">
                <input type="file" name="image_pass">
            </div>
            <div>
                <select name="post[agent_id]" class="select">
                    @foreach ($agents as $agent)
                        <option value=" {{ $agent->id }} ">{{ $agent->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select name="post[map_id]" class="select">
                    @foreach ($maps as $map)
                        <option value=" {{ $map->id }} ">{{ $map->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select name="post[side_id]" class="select">
                    @foreach ($sides as $side)
                        <option value=" {{ $side->id }} ">{{ $side->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="body">
                <h3>コメント</h3>
                <textarea name="post[body]" class="comment_box" placeholder="コメント"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>