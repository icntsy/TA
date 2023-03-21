<tr>
    <td>{{$record->id}}</td>
    <td>{{$record->patient->name}}</td>
    <td>{{$record->created_at}}</td>
    <td>{{$record->main_complaint}}</td>
    <td>
        <ul>
        @foreach($record->labs as $lab)
        <li>{{$lab->nama}} ({{$lab->pivot->result ?? "-"}} {{$lab->satuan}})</li>
        @endforeach
        </ul>
    </td>
    <td><ul>
            @foreach($record->diagnoses as $diagnosis)
                <li>{{$diagnosis->diagnosis}}</li>
            @endforeach
        </ul></td>
    <td>
        <ul>
            @foreach($record->drugs as $drug)
                <li>{{$drug->nama}}</li>
            @endforeach
        </ul>
    </td>
</tr>
