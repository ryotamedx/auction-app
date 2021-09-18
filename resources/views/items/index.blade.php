<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>出品商品一覧</h1>
    <ul>
        @foreach ($items as $item)
            <a href="/items/{{ $item->id }}">
                <li>{{ $item->name }}</li>
            </a>
        @endforeach
    </ul>
    <a href="/items/create">出品する</a>
</body>
</html>