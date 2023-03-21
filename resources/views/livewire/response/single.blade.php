<tr>
    <td>{{$response->id }}</td>
    <td>{{$response->success ?? "-"}}</td>
    <td>{{$response->failed}}</td>
    <td>{{$response->description}}</td>

    <td>
        <a wire:click="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </a>
        <a href="{{route('response.update', ['response' => $response->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
        {{-- <a href="{{route('response.show', ['response' => $response->id])}}" class="btn text-success">
            <i class="fa fa-eye fa-1x"></i>
        </a> --}}
    </td>
</tr>
