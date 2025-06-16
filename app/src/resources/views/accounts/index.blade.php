<html lang=“ja”>
<body>
<h1>■{{$title}}</h1>

<form method="post" action={{url('index')}}>
    @csrf
    <input type="text" name="name" placeholder="名前を入力">
    <input type="submit" value="検索">
</form>

<table>
    <thead>
    <tr>

        <th scope="col">ID</th>
        <th scope="col">名前</th>
        <th scope="col">レベル</th>
        <th scope="col">経験値</th>
    </tr>
    </thead>
    @foreach($users as $user)
        <thead>
        <tr>

            <td>{{$user->id}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['level']}}</td>
            <td>{{$user['EXP']}}</td>
        </tr>
        </thead>

    @endforeach
</table>

<form method="post" action={{url('items')}}>
    @csrf
    <input type="submit" value="アイテム一覧へ">
</form>
<form method="post" action={{url('userItems')}}>
    @csrf
    <input type="submit" value="所持アイテム一覧へ">
</form>
<form method="post" action={{url('logout')}}>
    @csrf
    <input type="submit" value="ログアウト">
</form>
</body>
</html>

