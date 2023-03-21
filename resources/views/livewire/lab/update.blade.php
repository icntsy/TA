@section('meta_title', 'OBAT')
@section('page_title', 'EDIT DATA LAB')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-file-medical-alt"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Tambah Data Lab
            </div>
            <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class='form-group col-md-6'>
                        <label for='nama' class='control-label'> {{ __('Nama Lab') }}</label>
                        <input type='text' wire:model.lazy='nama'
                               class="form-control @error('nama') is-invalid @enderror" id='nama' placeholder="Nama Pemeriksaan Lab">
                        @error('nama')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='satuan' class='control-label'> {{ __('Satuan Lab') }}</label>
                        <input type='text' wire:model.lazy='satuan'
                               class="form-control @error('satuan') is-invalid @enderror" id='satuan' placeholder="Satuan">
                        @error('satuan')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-12'>
                        <label for='harga' class='control-label'> {{ __('Harga Lab') }}</label>
                        <input type='number' wire:model.lazy='harga'
                               placeholder="Harga" class="form-control @error('harga') is-invalid @enderror" id='harga'>
                        @error('harga')
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
