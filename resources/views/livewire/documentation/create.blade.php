@section('meta_description', 'Dokumentasi')
@section('page_title', 'TAMBAH DATA DOKUMENTASI')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
@section('modal')
    <livewire:component.response-modal/>
    <livewire:component.parameter-modal/>
@endsection

<div class="row">
    <div class="card col-md-12">
        <div class="card-header">
            TAMBAH DOKUMENTASI
        </div>
        <div class="card-body row">

            <div class='form-group col-md-12'>
                <label for='title' class='control-label'> {{ __('Nama') }}</label>
                <input type='text' wire:model.lazy='title'
                class="form-control @error('title') is-invalid @enderror" id='title' autofocus placeholder="Nama">
                @error('title')
                <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <div class='form-group col-md-12'>
                <label for='url' class='control-label'> {{ __('URL') }}</label>
                <input type='text' wire:model.lazy='url'
                class="form-control @error('url') is-invalid @enderror" id='url' autofocus placeholder="url">
                @error('url')
                <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <div class='form-group col-md-12'>
                <label for='method' class='control-label'> {{ __('Method') }}</label>
                <input type='text' wire:model.lazy='method'
                class="form-control @error('method') is-invalid @enderror" id='method' autofocus placeholder="method">
                @error('method')
                <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <div class='form-group col-md-12'>
                <label for='description' class='control-label'> {{ __('Deskripsi') }}</label>
                <textarea wire:model.lazy='description' class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10"></textarea>
                @error('description')
                <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" wire:click="create">Save</button>
        </div>
    </div>
</div>
