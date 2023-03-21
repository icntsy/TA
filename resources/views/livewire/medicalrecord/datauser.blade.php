<div class="row">
<div class="col-md-12">
    <div class="mb-3 card">
        <div class="card-header">
            PILIH PASIEN
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="input-group">
                        <input type="text" class="form-control form-control" wire:model.lazy="search"
                               placeholder="{{ __('Cari Pasien') }}"
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
                    <table class="mb-0 table table-sm table-bordered">
                        <thead>
                        <tr>
                            <th>No RM</th>
                            <th>Nama Lengkap</th>
                            <th>Usia</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patients as $patient)
                            <livewire:patient.single :patient="$patient" :key="time().$patient->id"/>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $patients->appends(request()->query())->links() }}
            </div>
            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>
        </div>
    </div>
</div>
</div>
