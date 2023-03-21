@section('meta_title', 'Ibu Hamil')
@section('page_title', 'SHOW IBU HAMIL')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-body row">
                    <div class="card-body row">
                        <div class="card-body row">
                            <div class='form-group col-md-6'>
                                <label for='name' class='control-label'> {{ __('Nama Lengkap') }}</label>
                                <input type='text' wire:model.lazy='name' disabled value=""
                                       class="form-control @error('name') is-invalid @enderror" id='name' autofocus placeholder="Nama Lengkap Pasien">
                                @error('name')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='age' class='control-label'> {{ __('Usia') }}</label>
                                <input type='text' wire:model.lazy='age' disabled value=""
                                       class="form-control @error('age') is-invalid @enderror" id='age' autofocus placeholder="Usia">
                                @error('age')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='address' class='control-label'> {{ __('Alamat') }}</label>
                                <input type='text' wire:model.lazy='address' disabled value=""
                                       class="form-control @error('address') is-invalid @enderror" id='address' autofocus placeholder="Alamat lengkap">
                                @error('address')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='anak_ke' class='control-label'> {{ __('Hamil Anak ke') }}</label>
                                <input type='text' wire:model.lazy='anak_ke' disabled value=""
                                       class="form-control @error('anak_ke') is-invalid @enderror" id='anak_ke' autofocus placeholder="Alamat lengkap">
                                @error('anak_ke')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='hpht' class='control-label'> {{ __('HPHT') }}</label>
                                <input type='text' wire:model.lazy='hpht' disabled value=""
                                       class="form-control @error('hpht') is-invalid @enderror" id='hpht' autofocus placeholder="Alamat lengkap">
                                @error('hpht')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='hpl' class='control-label'> {{ __('HPL') }}</label>
                                <input type='text' wire:model.lazy='hpl' disabled value=""
                                       class="form-control @error('hpl') is-invalid @enderror" id='hpl' autofocus placeholder="Alamat lengkap">
                                @error('hpl')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='pregnant_age' class='control-label'> {{ __('Usia Kehamilan') }}</label>
                                <input type='text' wire:model.lazy='pregnant_age' disabled value=""
                                       class="form-control @error('pregnant_age') is-invalid @enderror" id='pregnant_age' autofocus placeholder="Alamat lengkap">
                                @error('pregnant_age')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='lila' class='control-label'> {{ __('Lingkar Lengan Atas') }}</label>
                                <input type='text' wire:model.lazy='lila' disabled value=""
                                       class="form-control @error('lila') is-invalid @enderror" id='lila' autofocus placeholder="Alamat lengkap">
                                @error('lila')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='weight' class='control-label'> {{ __('Berat Badan') }}</label>
                                <input type='text' wire:model.lazy='weight' disabled value=""
                                       class="form-control @error('weight') is-invalid @enderror" id='weight' autofocus placeholder="Alamat lengkap">
                                @error('weight')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='blood_pressure' class='control-label'> {{ __('Tekanan Darah') }}</label>
                                <input type='text' wire:model.lazy='blood_pressure' disabled value=""
                                       class="form-control @error('blood_pressure') is-invalid @enderror" id='blood_pressure' autofocus placeholder="Alamat lengkap">
                                @error('blood_pressure')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='tfu' class='control-label'> {{ __('Tinggi Fudus Uteri') }}</label>
                                <input type='text' wire:model.lazy='tfu' disabled value=""
                                       class="form-control @error('tfu') is-invalid @enderror" id='tfu' autofocus placeholder="Alamat lengkap">
                                @error('tfu')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='djj' class='control-label'> {{ __('Denyut Jantung Janin') }}</label>
                                <input type='text' wire:model.lazy='djj' disabled value=""
                                       class="form-control @error('djj') is-invalid @enderror" id='djj' autofocus placeholder="Alamat lengkap">
                                @error('djj')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='immunization_tt' class='control-label'> {{ __('Imunisasi TT') }}</label>
                                <input type='text' wire:model.lazy='immunization_tt' disabled value=""
                                       class="form-control @error('immunization_tt') is-invalid @enderror" id='immunization_tt' autofocus placeholder="Alamat lengkap">
                                @error('immunization_tt')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-6'>
                                <label for='description' class='control-label'> {{ __('Keterangan Obat') }}</label>
                                <input type='text' wire:model.lazy='description' disabled value=""
                                       class="form-control @error('description') is-invalid @enderror" id='description' autofocus placeholder="Alamat lengkap">
                                @error('description')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
                            <div class='form-group col-md-12'>
                                <label for='complaint' class='control-label'> {{ __('Keluhan') }}</label>
                                <input type='text' wire:model.lazy='complaint' disabled value=""
                                       class="form-control @error('complaint') is-invalid @enderror" id='complaint' autofocus placeholder="Alamat lengkap">
                                @error('complaint')
                                <div class='invalid-feedback'>{{ $message }}</div> @enderror
                            </div>
        
        </div>
    </div>
</div>
