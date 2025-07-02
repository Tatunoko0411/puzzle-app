<table>
    @foreach($stages as $stage)
        <tr>
            <td>{{$stage->id}}</td>
            <td><a href={{url('stages/config')}}?id={{$stage->id}}>{{$stage->name}}</a></td>
            <td>{{$stage->cells->count()}}</td>
        </tr>
    @endforeach
</table>

