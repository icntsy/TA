<tr>
    <td>{{$queue->patient->name}}</td>
    <td>{{$queue->queue_number}}</td>
    <td>{{$queue->has_check ? "Selesai" : "Belum"}}</td>
    <td>{{$queue->has_drug ? "Selesai" : "Belum"}}</td>
    <td>{{$queue->doctor->name}}</td>
    <td>{{$queue->service->name}}</td>
    <td>
        @role('admin')
        <a wire:click="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </a>
        {{-- <a href="{{route('queue.update', ['queue' => $queue->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a> --}}
        @elserole('dokter')
        <button class="btn btn-sm btn-primary" wire:click="processCheckup">Proses</button>
        @elserole('staff')
        <button class="btn btn-sm btn-primary" wire:click="processCheckup">Proses</button>
        @endrole
    </td>
</tr>
