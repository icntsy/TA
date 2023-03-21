<tr>
    <td>{{$patient->nik ?? "-"}}</td>
    <td>{{$patient->name}}</td>
    <td>{{$patient->birth_date}}</td>
    <td>{{$patient->address}}</td>
    <td>
        <button wire:click="select" class="btn btn-primary btn-sm">Pilih</button>
    </td>
</tr>
