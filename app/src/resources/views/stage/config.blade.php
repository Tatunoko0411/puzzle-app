<h1>ステージ詳細</h1>

<table>ステージID　{{$stage->id}}</table>
<table>ステージ名　{{$stage->name}}</table>

<table>
    <tr>
        <td>セルID</td>
        <td>X座標</td>
        <td>Y座標</td>
        <td>オブジェクトタイプ</td>
    </tr>
    @foreach($stage->cells as $cell)
        <tr>
            <td>{{$cell->pivot->id}}</td>
            <td>{{$cell->pivot->x}}</td>
            <td>{{$cell->pivot->y}}</td>
            <td>{{$cell->name}}</td>
            <td>
                <form method="post" action={{url('stages/update')}}?id={{$cell->id}}>
                    @csrf
                    <input type="submit" value="編集">
                </form>
            </td>
        </tr>
    @endforeach
</table>

<form method="post" action={{url('stages/add')}}?id={{$stage->id}}>
    @csrf
    <input type="submit" value="追加">
</form>
