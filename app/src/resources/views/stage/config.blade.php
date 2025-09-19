<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f4f6f8;
        margin: 30px;
        color: #333;
    }

    h1, h2 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .stage-info {
        width: 60%;
        margin: 0 auto 30px auto;
        background-color: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .stage-info table {
        width: 100%;
        border-collapse: collapse;
    }

    .stage-info td {
        padding: 10px;
        font-weight: bold;
        border-bottom: 1px solid #eee;
    }

    table {
        width: 80%;
        margin: 0 auto 40px auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        border-radius: 6px;
        overflow: hidden;
    }

    th, td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #ecf0f1;
        font-weight: bold;
    }

    tr:hover {
        background-color: #f9f9f9;
    }

    a {
        display: block;
        text-align: center;
        margin-top: 20px;
        font-weight: bold;
        color: #3498db;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
<h1>ステージ詳細</h1>

<table>ステージID　{{$stage->id}}</table>
<table>ステージ名　{{$stage->name}}</table>

<h2>オブジェクト情報</h2>
<table>
    <tr>
        <td>セルID</td>
        <td>X座標</td>
        <td>Y座標</td>
        <td>オブジェクトタイプ</td>
    </tr>
    @foreach($stage->objects as $object)
        <tr>
            <td>{{$object->id}}</td>
            <td>{{$object->x}}</td>
            <td>{{$object->y}}</td>
            <td>{{$object->object_id}}</td>
            <td>

                </form>
            </td>
        </tr>
    @endforeach
</table>

<h2>ボタン情報</h2>
<table>
    <tr>
        <td>ID</td>
        <td>オブジェクトタイプ</td>
    </tr>
    @foreach($stage->buttons as $button)
        <tr>
            <td>{{$button->id}}</td>
            <td>{{$button->object_id}}</td>
            <td>

                </form>
            </td>
        </tr>
    @endforeach
</table>


<a href={{url('stages/index')}}>
    戻る
</a>
