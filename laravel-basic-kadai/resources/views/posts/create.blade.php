<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel基礎</title>
</head>

<body>
    <h1>投稿作成</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <table>
            <tr>
                <th>タイトル</th>
                <td><input type="text" name="title" value="{{ old('title') }}"></td>
            </tr>
            <tr>
                <th>本文</th>
                <td><textarea name="content" cols="30" rows="10">{{ old('content') }}</textarea></td>
            </tr>
        </table>
        <button type="submit">投稿</button>
    </form>

</body>

</html>