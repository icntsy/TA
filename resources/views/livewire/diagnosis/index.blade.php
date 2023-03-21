@section('meta_title', 'OBAT')
@section('page_title', 'MASTER DATA DIAGNOSIS')

@section('page_title_icon')
    <i class="metismenu-icon fa fa-file-alt"></i>
@endsection

@section('modal')
    <livewire:diagnosis.import />
@endsection
<div class="row">
    <div class="col-12">
        <div class="mb-3 card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <a href="{{ route('diagnosis.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                            Tambah
                            Data</a>
                        <button class="btn btn-secondary" wire:click="importData"><i class="fa fa-file-import"></i>
                            Import
                            Excel</button>
                        <button class="btn btn-secondary" wire:click="exportData"><i class="fa fa-file-import"></i>
                            Export
                            Excel</button>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control form-control" wire:model.lazy="search"
                                placeholder="{{ __('Cari Diagnosa') }}" value="{{ request('search') }}">
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
                                    <th>Kode Diagnosa</th>
                                    <th style="cursor: pointer" wire:click="sort('type')">
                                        <i class='fa @if ($sortType == ' desc' and
                                            $sortColumn=='type' ) fa-sort-amount-down
                                        ml-2 @elseif($sortType == 'asc' and $sortColumn == 'type') fa-sort-amount-up
                                            ml-2
                                            @endif'></i>
                                        Jenis Kode
                                    </th>
                                    <th>Diagnosa</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($diagnoses as $diagnosis)
                                    <livewire:diagnosis.single :diagnosis="$diagnosis" :key="time().$diagnosis->id" />
                                @empty
                                    @include('layouts.empty', ['colspan' => 7])
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="m-auto pt-3 pr-3">
                    {{ $diagnoses->appends(request()->query())->links() }}
                </div>
                <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>
            </div>
        </div>
    </div>
</div>
