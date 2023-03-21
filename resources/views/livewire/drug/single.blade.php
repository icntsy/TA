<tr>
    <td>{{$drug->nama}}</td>
    {{-- <td>{{$drug->keterangan }}</td> --}}
    <td>@rupiah($drug->harga)</td>
    <td>
        <span class="badge @if($available) badge-primary @else badge-danger @endif">
            {{$drug->stok}} {{$available ? "Tersedia" : "Hampir Habis"}}
        </span>
    </td>
    <td>
        <a wire:click="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </a>
        <a href="{{route('drug.update', ['drug' => $drug->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
    </td>
</tr>
