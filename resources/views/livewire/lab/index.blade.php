@section('meta_title', 'LAB')
@section('page_title', 'MASTER DATA LAB')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-file-medical-alt"></i>
@endsection
<div class="row">
    <div class="col-12">
        <div class="mb-3 card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <a href="{{route('lab.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control form-control" wire:model.lazy="search"
                                   placeholder="{{ __('Cari Lab') }}"
                                   value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-default">
                                    <a wire:target="search" wire:loading.remove><i class="fa fa-search"></i></a>
                                    <a wire:loading wire:target="search"><i class="fas fa-spinner fa-spin"></i></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <table class="mb-0 table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Nama Lab</th>
                                <th>Harga</th>
                                <th>Satuan</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($labs as $lab)
                                <livewire:lab.single :lab="$lab" :key="time().$lab->id"/>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="m-auto pt-3 pr-3">
                    {{ $labs->appends(request()->query())->links() }}
                </div>
                <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>
            </div>
        </div>
    </div>
</div>
