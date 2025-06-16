<html lang=“ja”>
<body>
<h1>■アイテム一覧</h1>
<form method="post" action={{url('userItems')}}>
    @csrf
    <input type="text" name="name" placeholder="名前を入力">
    <input type="submit" value="検索">
</form>
<table>
    <thead>
    <tr>

        <th scope="col">ID</th>
        <th scope="col">ユーザー名</th>
        <th scope="col">アイテム名</th>
        <th scope="col">個数</th>
    </tr>
    </thead>
    @foreach($userItems as $userItem)
        <thead>
        <tr>

            <td>{{$userItem->id}}</td>
            <td>{{$userItem->user_name}}</td>
            <td>{{$userItem->item_name}}</td>
            <td>{{$userItem->amount}}</td>
        </tr>
        </thead>

    @endforeach
</table>

<form method="post" action={{url('index')}}>
    @csrf
    <input type="submit" value="ユーザー一覧へ">
</form>
<form method="post" action={{url('items')}}>
    @csrf
    <input type="submit" value="アイテム一覧へ">
</form>
<form method="post" action={{url('logout')}}>
    @csrf
    <input type="submit" value="ログアウト">
</form>
</body>
</html>
