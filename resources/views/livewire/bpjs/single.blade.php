<tr>
    <td>{{$bpjs->id ?? "-"}}</td>
    <td>{{$bpjs->name}}</td>
    <td><img src="{{ asset('storage') }}/{{ $bpjs->identity_card }}" width="100" alt=""></td>
    <td><img src="{{ asset('storage') }}/{{ $bpjs->family_card }}" width="100" alt=""></td>
    <td><img src="{{ asset('storage') }}/{{ $bpjs->bpjs_card }}" width="100" alt=""></td>
    <td>
        <a wire:click="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </a>
        <a href="{{route('bpjs.update', ['bpjs' => $bpjs->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
    </td>
</tr>
@push("js")

@endpush