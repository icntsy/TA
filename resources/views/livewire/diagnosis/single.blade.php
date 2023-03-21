<tr>
    <td>{{ $diagnosis->category }}</td>
    <td>{{ $diagnosis->subcategory }}</td>
    <td>{{ $diagnosis->english_name }}</td>
    <td>{{ $diagnosis->indonesian_name }}</td>
    <td>
        <button wire:click.prevent="delete" class="btn text-danger">
            <i class="fa fa-trash fa-1x"></i>
        </button>
        <a href="{{ route('diagnosis.update', ['diagnosis' => $diagnosis->id]) }}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
    </td>
</tr>
