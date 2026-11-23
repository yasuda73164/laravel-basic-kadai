<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿一覧</title>
</head>
<body>
    <h1>投稿一覧</h1>
    
    <table>
        <thead>
            <tr>
                <th>タイトル</th>
                <th>本文</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->タイトル }}</td>
                    <td>{{ $post->本文 }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>