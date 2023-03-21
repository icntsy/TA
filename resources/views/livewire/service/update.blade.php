@section('meta_title', 'Poliklinik')
@section('page_title', 'EDIT DATA Poliklinik')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-prescription-bottle-alt"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class='form-group col-md-12'>
                        <label for='name' class='control-label'> {{ __('Nama Poliklinik') }}</label>
                        <input type='text' autofocus wire:model.lazy='name' placeholder="Nama Poliklinik"
                               class="form-control @error('name') is-invalid @enderror" id='name'>
                        @error('name')
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
