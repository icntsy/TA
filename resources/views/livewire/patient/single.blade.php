<tr>
    <td>{{$patient->nik ?? "-"}}</td>
    <td>{{$patient->name}}</td>
    <td>{{$patient->birth_date}}</td>
    <td>{{$patient->gender}}</td>
    <td>{{$patient->address}}</td>
    <td>{{$patient->phone_number}}</td>
    <td>
        <a wire:click="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </a>
        <a href="{{route('patient.update', ['patient' => $patient->id])}}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
    </td>
</tr>
@push("js")
<script>
    var years = moment().diff($patient->birth_date, 'years');
    console.log(years)
</script>
@endpush