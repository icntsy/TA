@section('meta_title', 'OBAT')
@section('page_title', 'TAMBAH DATA OBAT')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-prescription-bottle-alt"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class='form-group col-md-12'>
                        <label for='nama' class='control-label'> {{ __('Nama Obat') }}</label>
                        <input type='text' autofocus wire:model.lazy='nama' placeholder="Nama Obat"
                               class="form-control @error('nama') is-invalid @enderror" id='nama'>
                        @error('nama')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>

                    {{-- <div class='form-group col-md-4'>
                        <label for='dosis' class='control-label'> {{ __('Satuan Dosis Obat') }}</label>
                        <input type='text' wire:model.lazy='dosis' placeholder="Dosis Obat"
                               class="form-control @error('dosis') is-invalid @enderror" id='dosis'>
                        @error('dosis')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div> --}}


                    <div class='form-group col-md-4'>
                        <label for='harga' class='control-label'> {{ __('Harga Obat') }}</label>
                        <input type='number' wire:model.lazy='harga' placeholder="Harga Obat"
                               class="form-control @error('harga') is-invalid @enderror" id='harga'>
                        @error('harga')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-4'>
                        <label for='stok' class='control-label'> {{ __('Stock Obat') }}</label>
                        <input type='number' wire:model.lazy='stok' placeholder="Jumlah Obat"
                               class="form-control @error('stok') is-invalid @enderror" id='stok'>
                        @error('stok')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-4'>
                        <label for='min_stok' class='control-label'> {{ __('Minimal Stock Obat') }}</label>
                        <input type='number' wire:model.lazy='min_stok' placeholder="Minimal Jumlah Obat"
                               class="form-control @error('min_stok') is-invalid @enderror" id='min_stok'>
                        @error('min_stok')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    {{-- <div class='form-group col-md-12'>
                        <label for='keterangan' class='control-label'> {{ __('Keterangan') }}</label>
                        <textarea class="form-control @error('keterangan')
                            is-invalid @enderror " wire:model="keterangan"
                                  placeholder="Keterangan" rows="4">
                        </textarea>
                        @error('keterangan')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div> --}}
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">{{ __('Simpan Data') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
