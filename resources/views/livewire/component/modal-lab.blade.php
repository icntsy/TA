<div wire:ignore.self class="modal fade bd-example-modal-lg" id="lab" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="card">
                <div class="card-header">
                    PILIH LAB
                    <div class="btn-actions-pane-right text-capitalize">
                        <div class="input-group">
                            <input type="text" class="form-control form-control" wire:model.lazy="search"
                                   placeholder="{{ __('Cari lab') }}"
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
                                    <th>Nama lab</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($labs as $lab)
                                    <livewire:component.lab-single :lab="$lab" :key="time().$lab->id"/>
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
</div>
