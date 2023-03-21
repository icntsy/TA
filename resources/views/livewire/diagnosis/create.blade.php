@section('meta_title', 'DIAGNOSA')
@section('page_title', 'TAMBAH DATA DIAGNOSA')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-file-alt"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class='form-group col-md-6'>
                        <label for='category' class='control-label'> {{ __('Category') }}</label>
                        <input type='text' autofocus wire:model.lazy='category' placeholder="CONTOH: 813.16"
                            class="form-control @error('category') is-invalid @enderror" id='category'>
                        @error('category')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='subcategory' class='control-label'> {{ __('Subcategory') }}</label>
                        <input type='text' wire:model.lazy='subcategory'
                            class="form-control @error('subcategory') is-invalid @enderror" id='subcategory'
                            placeholder="CONTOH: ICD9CM_2005">
                        @error('subcategory')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class='form-group col-md-12'>
                        <label for='english_name' class='control-label'> {{ __('English Name') }}</label>
                        <textarea wire:model="english_name" class="form-control @error('english_name') is-invalid
@enderror"></textarea>
                        @error('english_name')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class='form-group col-md-12'>
                        <label for='indonesian_name' class='control-label'> {{ __('Indonesian Name') }}</label>
                        <textarea wire:model="indonesian_name" class="form-control @error('indonesian_name') is-invalid
@enderror"></textarea>
                        @error('indonesian_name')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">{{ __('Simpan Data') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
