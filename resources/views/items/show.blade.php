<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        <b>商品名:{{ $item->name }}</b>
    </p>
    <p>
        <b>商品詳細:{{ $item->description }}</b>
    </p>
    <p>
        <b>価格:{{ $item->price }}</b>
    </p>
    <p>
        <b>出品者:{{ $item->seller }}</b>
    </p>
    <p>
        <b>電子メール:{{ $item->email }}</b>
    </p>
    <p>
        <img src="{{ $item->image_url }}" alt="">
    </p>
    {{-- <a href="/items/{{ $item->id }}/edit">編集する</a> --}}
    <button type="button" onclick="location.href='/items/{{ $item->id }}/edit'">編集する</button>
    <form action="/items/{{ $item->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if (!confirm('本当に削除しますか？')){return false}">
    </form>
</body>
</html>