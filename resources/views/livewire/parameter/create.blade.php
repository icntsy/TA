@section('meta_title', 'Parameter')
@section('page_title', 'TAMBAH DATA PARAMETER')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">
                
                <div class="card-body row">
                    <div class='form-group col-md-6'>
                        <label for='name' class='control-label'> {{ __('Nama') }}</label>
                        <input type='text' wire:model.lazy='name'
                               class="form-control @error('name') is-invalid @enderror" id='name' autofocus placeholder="Nama">
                        @error('name')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='is_required' class='control-label'> {{ __('Wajib') }}</label>
                        <input type='text' wire:model.lazy='is_required'
                               class="form-control @error('is_required') is-invalid @enderror" id='is_required' autofocus placeholder="Wajib">
                        @error('is_required')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='type' class='control-label'> {{ __('Type') }}</label>
                        <input type='text' wire:model.lazy='type'
                               class="form-control @error('type') is-invalid @enderror" id='type' autofocus placeholder="Type">
                        @error('type')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='description' class='control-label'> {{ __('Keterangan') }}</label>
                        <input type='text' wire:model.lazy='description'
                               class="form-control @error('description') is-invalid @enderror" id='description' autofocus placeholder="Keterangan">
                        @error('description')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                   
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-info">{{ __('Simpan Data') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
