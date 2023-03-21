<tr>
    <td>{{$service->name}}</td>
    <td>
        <button wire:click.prevent="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </button>
        <a href="{{route('service.update', ['service' => $service->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
    </td>
</tr>
