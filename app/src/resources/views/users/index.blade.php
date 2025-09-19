@extends('layouts.app')
@section('styles')

@endsection
@section('title','ユーザ一覧')
@section('body')
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            margin: 20px;
        }

        form {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        table {
            width: 80%;
            margin: 0 auto 30px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

    <form method="post" action={{url('users/index')}}>
        @csrf
        <input type="text" name="name" placeholder="名前を入力">
        <input type="submit" value="検索">
    </form>

    <table>
        <thead>
        <tr>

            <th scope="col">ID</th>
            <th scope="col">名前</th>
            <th scope="col">プレイ回数</th>
            <th scope="col">クリア回数</th>
            <th scope="col">ステージ制作数</th>

        </tr>
        </thead>
        @foreach($users as $user)

            <thead>
            <tr>

                <td>{{$user->id}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user->play_time}}</td>
                <td>{{$user->clear_time}}</td>
                <td>{{$user->create_stage}}</td>
            </tr>
            </thead>

        @endforeach
    </table>

    <a href={{url('main')}}>
        メインメニューへ
    </a>

@endsection



