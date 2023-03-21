<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->role }}</td>
    <td>
        @if ($user->role != 'admin')
            <button wire:click.prevent="delete" class="btn text-danger">
                <i class="fa fa-trash fa-1x"></i>
            </button>
        @endif
        <a href="{{ route('user.update', ['user' => $user->id]) }}" class="btn text-warning">
            <i class="fa fa-edit fa-1x"></i>
        </a>
    </td>
</tr>
