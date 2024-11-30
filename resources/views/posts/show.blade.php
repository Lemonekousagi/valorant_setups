<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="../../css/view.css">
    </head>
    <body>
        @foreach($posts as $post)
            <h1 class="title">
                {{ $post->title }}
            </h1>
            <div class="content">
                <div class="content_post_box">
                    <div class="content_post">
                        <h3>{{ $post->agent->name }}</h3>
                    </div>
                        <p>{{ $post->body }}</p>    
                    <div class="img">
                        <img src="{{ $post->image_pass }}" alt="画像が読み込めません。">
                    </div>
                </div>
            </div>
        @endforeach
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>