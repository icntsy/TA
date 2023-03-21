@section('meta_title', 'Keluarga Berencana')
@section('page_title', 'TAMBAH DATA KELUARGA BERENCANA')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">
                
                <div class="card-body row">
                    <div class='form-group col-md-6'>
                        <label for='name' class='control-label'> {{ __('Nama Lengkap') }}</label>
                        <input type='text' wire:model.lazy='name'
                               class="form-control @error('name') is-invalid @enderror" id='name' autofocus placeholder="Nama Lengkap Pasien">
                        @error('name')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>

                    <div class='form-group col-md-6'>
                        <label for='age' class='control-label'> {{ __('Usia') }}</label>
                        <input type='text' wire:model.lazy='age'
                               class="form-control @error('age') is-invalid @enderror" id='age' autofocus placeholder="Usia">
                        @error('age')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>

                    <div class='form-group col-md-6'>
                        <label for='address' class='control-label'> {{ __('Alamat') }}</label>
                        <input type='text' wire:model.lazy='address'
                               class="form-control @error('address') is-invalid @enderror" id='address' autofocus placeholder="Alamat lengkap">
                        @error('address')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>

                    <div class='form-group col-md-6'>
                        <label for='weight' class='control-label'> {{ __('Berat Badan') }}</label>
                        <input type='text' wire:model.lazy='weight'
                               class="form-control @error('weight') is-invalid @enderror" id='weight' autofocus placeholder="Berat badan">
                        @error('weight')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>

                    <div class='form-group col-md-6'>
                        <label for='blood_pressure' class='control-label'> {{ __('Golongan Darah') }}</label>
                        <input type='text' wire:model.lazy='blood_pressure'
                               class="form-control @error('blood_pressure') is-invalid @enderror" id='blood_pressure' autofocus placeholder="Golongan Darah">
                        @error('blood_pressure')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>


                    <div class='form-group col-md-12'>
                    {{--<label for='address' class='control-label'> {{ __('Alamat Lengkap') }}</label>--}}
                        <textarea class="form-control" wire:model="description" placeholder="Keterangan"></textarea>
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
