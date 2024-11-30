<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Valorant Setups</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="../../css/view.css">
    </head>
    <body>
        <h1>Valorant Setups</h1>
        <div class='create'>
            <a href='/posts/create'>投稿する</a>
        </div>
        <div class='Agents'>
        <h2>エージェント一覧</h2>
            <table border="1">
            @foreach ($agents as $agent)
            <div class='Agent'>
                <p class='Name'>
                    @if ($agent->name == "ブリーチ")
                    <tr>
                        <td><a href="/posts/{{ $agent->name }}">{{ $agent->name }}</a></td>
                    @elseif ($agent->name == "ヴァイス")
                        <td><a href="/posts/{{ $agent->name }}">{{ $agent->name }}</a></td></tr>
                    @else
                        <td><a href="/posts/{{ $agent->name }}">{{ $agent->name }}</a></td>
                    @endif
                </p>
            </div>
            @endforeach
            </table>
        </div>
    </body>
</html>