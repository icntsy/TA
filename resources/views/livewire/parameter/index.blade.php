@section('meta_title', 'Parameter')
@section('page_title', 'MASTER DATA PARAMETER')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
<div class="row">
    <div class="col-12">
        <div class="mb-3 card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <a href="{{ route('parameter.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                            Tambah Data</a>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control form-control" wire:model.lazy="search"
                                placeholder="{{ __('Cari Data') }}" value="{{ request('search') }}">
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
                        <table class="mb-0 table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Wajib</th>
                                    <th>Tipe</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($parameters as $parameter)
                                    <livewire:parameter.single :parameter="$parameter" :key="time().$parameter->id" />
                                @empty
                                    @include('layouts.empty', ['colspan' => 7])
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="m-auto pt-3 pr-3">
                    {{ $parameters->appends(request()->query())->links() }}
                </div>
                <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>
            </div>
        </div>
    </div>
</div>
