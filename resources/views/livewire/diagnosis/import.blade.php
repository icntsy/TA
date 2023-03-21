<div wire:ignore.self class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Import Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="file" >Pilih File</label>
                    <input type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" wire:model="file" id="file" class="form-control-file @error('file')
                        is-invalid
@enderror">
                    @error('file')
                    <div class='invalid-feedback'>{{ $message }}</div> @enderror

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click="saveData" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
