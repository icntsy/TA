<tr>
    <td>{{$room->name}}</td>
    <td>@rupiah($room->price)</td>
    <td>
        <span  class="badge @if($room->status =="available") badge-primary @else badge-danger @endif">{{$room->status}}</span>
    </td>
    <td>
        <button wire:click.prevent="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </button>
        <a href="{{route('room.update', ['room' => $room->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
    </td>
</tr>
