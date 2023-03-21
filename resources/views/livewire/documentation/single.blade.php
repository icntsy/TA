<tr>
    <td>{{ $documentation->id }}</td>
    <td>{{ $documentation->title ?? '-' }}</td>
    <td>{{ $documentation->description }}</td>
    <td>{{ $documentation->url }}</td>
    <td>{{ $documentation->method }}</td>
    <td>
        @foreach ($documentation->parameters as $item)
            <span class="badge badge-primary">{{ $item->name }}</span>
        @endforeach
    </td>
    <td>
        {{ $documentation->response->success }}
        <br>
        {{ $documentation->response->failed }}
        <br>
        {{ $documentation->response->description }}
    </td>

    <td>
    <a wire:click="delete" class="btn text-danger">
        <i class="fa fa-trash fa-1x"></i>
    </a>
    <a href="{{ route('documentation.update', ['documentation' => $documentation->id]) }}" class="btn text-warning">
        <i class="fa fa-edit fa-1x"></i>
    </a>
     <a href="{{ route('doc.add-param', ['doc' => $documentation->id]) }}" class="btn text-success">
        <i class="fa fa-eye fa-1x"></i>
    </td>
</tr>
