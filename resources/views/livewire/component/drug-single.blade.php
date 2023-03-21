<tr>
    <td>{{$drug->nama}}</td>
    <td>{{$drug->dosis}}</td>
    <td>{{$drug->harga}}</td>
    <td>
        <button wire:click="select" class="btn btn-sm btn-primary">
            Pilih
        </button>
    </td>
</tr>
