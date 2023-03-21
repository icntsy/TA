<tr>
    <td>{{ $lab->nama }}</td>
    <td>@rupiah( $lab->harga )</td>
    <td>{{ $lab->satuan }}</td>
    <td>
        <button wire:click.prevent="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </button>
        <a href="{{route('lab.update', ['lab' => $lab->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
    </td>
</tr>
