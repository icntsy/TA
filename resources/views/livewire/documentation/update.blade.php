@section('meta_title', 'Dokumentasi')
@section('page_title', 'TAMBAH DATA DOKUMENTASI')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

                <div class="card-body row">
                    <div class='form-group col-md-6'>
                        <label for='title' class='control-label'> {{ __('Nama') }}</label>
                        <input type='text' wire:model.lazy='title'
                               class="form-control @error('title') is-invalid @enderror" id='title' autofocus placeholder="Nama">
                        @error('title')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='description' class='control-label'> {{ __('Ringkasan') }}</label>
                        <input type='text' wire:model.lazy='description'
                               class="form-control @error('description') is-invalid @enderror" id='description' autofocus placeholder="Ringkasan">
                        @error('description')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='url' class='control-label'> {{ __('URL') }}</label>
                        <input type='text' wire:model.lazy='url'
                               class="form-control @error('url') is-invalid @enderror" id='url' autofocus placeholder="URL">
                        @error('url')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='method' class='control-label'> {{ __('Method') }}</label>
                        <input type='text' wire:model.lazy='method'
                               class="form-control @error('method') is-invalid @enderror" id='method' autofocus placeholder="method">
                        @error('method')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='parameter_id' class='control-label'> {{ __('Parameter') }}</label>
                        <input type='text' wire:model.lazy='parameter_id'
                               class="form-control @error('parameter_id') is-invalid @enderror" id='parameter_id' autofocus placeholder="Parameter">
                        @error('parameter_id')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='response_id' class='control-label'> {{ __('Response') }}</label>
                        <input type='text' wire:model.lazy='response_id'
                               class="form-control @error('response_id') is-invalid @enderror" id='response_id' autofocus placeholder="Response">
                        @error('response_id')
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
