<tr>
    <td>{{ $diagnosis->category }}</td>
    <td>{{ $diagnosis->subcategory }}</td>
    <td>{{ $diagnosis->english_name }}</td>
    <td>{{ $diagnosis->indonesian_name }}</td>
    <td>
        <button wire:click="select" class="btn btn-primary btn-sm">Pilih</button>
    </td>
</tr>
