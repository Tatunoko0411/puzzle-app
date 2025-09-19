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
<table>
    <thead>
    <tr>

        <th scope="col">ID</th>
        <th scope="col">ユーザID</th>
        <th scope="col">ステージ名</th>
        <th scope="col">初期ポイント</th>
        <th scope="col">プレイされた回数</th>
        <th scope="col">クリアされた回数</th>

    </tr>
    @foreach($stages as $stage)
        <tr>
            <td><a href={{url('stages/config')}}?id={{$stage->id}}>{{$stage->id}}</a></td>
            <td>{{$stage->user_id}}</td>
            <td>{{$stage->name}}</td>
            <td>{{$stage->point}}</td>
            <td>{{$stage->play_time}}</td>
            <td>{{$stage->clear_time}}</td>
            <td>
                <a href={{url('stages/delete')}}?id={{$stage->id}}>削除</a>
            </td>
        </tr>
    @endforeach
</table>

<a href={{url('main')}}>メインメニューへ
</a>
