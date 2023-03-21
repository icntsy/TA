@section('meta_title', 'Keluarga Berencana')
@section('page_title', 'MASTER DATA KELUARGA BERENCANA')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
<div class="row">
    <div class="col-12">
        <div class="mb-3 card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <a href="{{ route('familyplanning.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                            Tambah Data</a>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control form-control" wire:model.lazy="search"
                                placeholder="{{ __('Cari Pasien') }}" value="{{ request('search') }}">
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
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Alamat</th>
                                    <th>Berat Badan</th>
                                    <th>Golongan Darah</th>
                                    <th>Keterangan</th> 
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($familyplannings as $familyplanning)
                                    <livewire:familyplanning.single :familyplanning="$familyplanning" :key="time().$familyplanning->id" />
                                @empty
                                    @include('layouts.empty', ['colspan' => 7])
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="m-auto pt-3 pr-3">
                    {{ $familyplannings->appends(request()->query())->links() }}
                </div>
                <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>
            </div>
        </div>
    </div>
</div>
