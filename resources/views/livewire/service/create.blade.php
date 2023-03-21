@section('meta_title', 'Lab')
@section('page_title', 'TAMBAH DATA LAYANAN')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-list"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Tambah Data Layanan
            </div>
            <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class='form-group col-md-12'>
                        <label for='name' class='control-label'> {{ __('Nama Layanan') }}</label>
                        <input type='text' wire:model.lazy='name'
                               class="form-control @error('name') is-invalid @enderror" id='name'
                               placeholder="Contoh : Poliklinik">
                        @error('name')
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
