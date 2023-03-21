<tr>
    <td>{{$parameter->id }}</td>
    <td>{{$parameter->name ?? "-"}}</td>
    <td>{{$parameter->is_required}}</td>
    <td>{{$parameter->type}}</td>
    <td>{{$parameter->description}}</td>

    <td>
        <a wire:click="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </a>
        <a href="{{route('parameter.update', ['parameter' => $parameter->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
    </td>
</tr>
