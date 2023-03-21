<div wire:ignore.self class="modal fade bd-example-modal-lg" id="selectPatient" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

                <div class="card">
                    <div class="card-header">
                        PILIH PASIEN
                        <div class="btn-actions-pane-right text-capitalize">
                            <div class="input-group">
                                <input type="text" class="form-control form-control" wire:model.lazy="search"
                                       placeholder="{{ __('Cari Pasien') }}"
                                       value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">
                                        <a wire:target="search" wire:loading.remove><i class="fa fa-search"></i></a>
                                        <a wire:loading wire:target="search"><i class="fas fa-spinner fa-spin"></i></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="mb-0 table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama Pasien</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($patients as $patient)
                                        <livewire:queue.patient-single :patient="$patient" :key="time().$patient->id"/>
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
</div>
