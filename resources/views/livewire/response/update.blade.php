@section('meta_title', 'Response')
@section('page_title', 'TAMBAH DATA RESPONSE')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

                <div class="card-body row">
                    <div class='form-group col-md-6'>
                        <label for='success' class='control-label'> {{ __('Sukses') }}</label>
                        <input type='text' wire:model.lazy='success'
                               class="form-control @error('success') is-invalid @enderror" id='success' autofocus placeholder="Sukses">
                        @error('success')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='failed' class='control-label'> {{ __('Gagal') }}</label>
                        <input type='text' wire:model.lazy='failed'
                               class="form-control @error('failed') is-invalid @enderror" id='failed' autofocus placeholder="Gagal">
                        @error('failed')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='description' class='control-label'> {{ __('Keterangan') }}</label>
                        <input description='text' wire:model.lazy='description'
                               class="form-control @error('description') is-invalid @enderror" id='description' autofocus placeholder="Keterangan">
                        @error('type')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror

                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-info">{{ __('Simpan Data') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
