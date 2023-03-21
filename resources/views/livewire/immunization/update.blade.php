@section('meta_title', 'Imunisasi')
@section('page_title', 'UPDATE DATA IMUNISASI')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class="card-body row">
                        <div class='form-group col-md-6'>
                            <label for='name' class='control-label'> {{ __('Nama Lengkap') }}</label>
                            <input type='text' wire:model.lazy='name'
                                   class="form-control @error('name') is-invalid @enderror" id='name' autofocus placeholder="Nama Lengkap pasien">
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
                                   class="form-control @error('address') is-invalid @enderror" id='address' autofocus placeholder="Alamat Lengkap">
                            @error('address')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
    
                        <div class='form-group col-md-6'>
                            <label for='birth_place' class='control-label'> {{ __('Tempat Lahir') }}</label>
                            <input type='text' wire:model.lazy='birth_place'
                                   class="form-control @error('birth_place') is-invalid @enderror" id='birth_place' autofocus placeholder="Tempat Lahir">
                            @error('birth_place')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
    
                        <div class='form-group col-md-6'>
                            <label for='birth_date' class='control-label'> {{ __('Tanggal Lahir') }}</label>
                            <input type='text' wire:model.lazy='birth_date'
                                   class="form-control @error('birth_date') is-invalid @enderror" id='birth_date' autofocus placeholder="Tanggal Lahir">
                            @error('birth_date')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
    
                        <div class='form-group col-md-6'>
                            <label for='weight' class='control-label'> {{ __('Berat Badan') }}</label>
                            <input type='text' wire:model.lazy='weight'
                                   class="form-control @error('weight') is-invalid @enderror" id='weight' autofocus placeholder="Berat Badan">
                            @error('weight')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
    
                        <div class='form-group col-md-6'>
                            <label for='temperature' class='control-label'> {{ __('Suhu Tubuh') }}</label>
                            <input type='text' wire:model.lazy='temperature' 
                                   class="form-control @error('temperature') is-invalid @enderror" id='temperature' autofocus placeholder="Suhu Tubuh">
                            @error('temperature')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
    
                        <div class='form-group col-md-12'>
                        <label for='description' class='control-label'> {{ __('Keterangan') }}</label>
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
