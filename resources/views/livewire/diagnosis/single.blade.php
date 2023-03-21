<tr>
    <td>{{$diagnosis->code}}</td>
    <td>{{$diagnosis->icc_code}}</td>
    <td>{{$diagnosis->diagnosis }}</td>
    <td>
        <a wire:click="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </a>
        <a href="{{route('diagnosis.update', ['diagnosis' => $diagnosis->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
    </td>
</tr>
