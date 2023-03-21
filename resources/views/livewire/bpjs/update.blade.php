@section('meta_title', 'Pasien')
@section('page_title', 'UPDATE DATA PASIEN')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class='form-group col-md-6'>
                        <label for='name' class='control-label'> {{ __('Nama Lengkap') }}</label>
                        <input type='text' wire:model.lazy='name'
                               class="form-control @error('name') is-invalid @enderror" id='name' autofocus placeholder="Nama Lengkap Pasien">
                        @error('name')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>

                    <div class='form-group col-md-6'>
                        <label for='identity_card' class='control-label'> {{ __('Foto KTP') }}</label>
                        <input type='file' wire:model.lazy='identity_card'
                               class="form-control @error('identity_card') is-invalid @enderror" id='identity_card' autofocus placeholder="Foto KTP">
                        @error('identity_card')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>

                    <div class='form-group col-md-6'>
                        <label for='family_card' class='control-label'> {{ __('Foto KK') }}</label>
                        <input type='file' wire:model.lazy='family_card'
                               class="form-control @error('family_card') is-invalid @enderror" id='family_card' autofocus placeholder="Foto KTP">
                        @error('family_card')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>

                    <div class='form-group col-md-6'>
                        <label for='bpjs_card' class='control-label'> {{ __('Foto BPJS') }}</label>
                        <input type='file' wire:model.lazy='bpjs_card'
                               class="form-control @error('bpjs_card') is-invalid @enderror" id='bpjs_card' autofocus placeholder="Foto KTP">
                        @error('bpjs_card')
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
