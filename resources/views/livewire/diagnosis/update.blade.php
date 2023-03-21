@section('meta_title', 'DIAGNOSA')
@section('page_title', 'UPDATE DATA DIAGNOSA')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-file-alt"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class='form-group col-md-6'>
                        <label for='nama' class='control-label'> {{ __('Kode Diagnosa') }}</label>
                        <input type='text' autofocus wire:model.lazy='code' placeholder="CONTOH: 813.16"
                               class="form-control @error('code') is-invalid @enderror" id='code'>
                        @error('code')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='type' class='control-label'> {{ __('Jenis Kode') }}</label>
                        <input type='text' wire:model.lazy='type'
                               class="form-control @error('type') is-invalid @enderror" id='type'
                               placeholder="CONTOH: ICD9CM_2005">
                        @error('type')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-12'>
                        <label for='description' class='control-label'> {{ __('Diagnosa') }}</label>
                        <textarea wire:model="description" class="form-control @error('description') is-invalid
@enderror">{{$description}}</textarea>
                        @error('description')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">{{ __('Simpan Data') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
