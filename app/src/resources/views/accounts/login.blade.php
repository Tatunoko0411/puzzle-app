<html lang="ja">
<body>
<h1>ログイン画面</h1>
@if(!empty($error_id))
    <p>{{$error_id}}</p>
@endif
<form method="post" action="{{url('dologin')}}">
    @csrf
    <input type="text" name="name">名前
    <input type="text" name="pass">パスワード
    <input type="submit" value="ログインする">
</form>
</body>
</html>
