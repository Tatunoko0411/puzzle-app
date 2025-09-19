<html lang="ja">
<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f0f2f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .login-container {
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 320px;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    input[type="text"],
    input[type="password"] {
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    input[type="submit"] {
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    p, ul {
        color: #d9534f;
        font-size: 14px;
        margin-bottom: 10px;
    }

    ul {
        padding-left: 20px;
    }
</style>


<body>
<h1>ログイン画面</h1>
@if(!empty($error_id))
    <p>{{$error_id}}</p>
@endif
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="{{url('login')}}">
    @csrf
    <input type="text" name="name">名前
    <input type="text" name="password">パスワード
    <input type="submit" value="ログインする">
</form>
</body>
</html>
