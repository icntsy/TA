<div wire:ignore.self class="modal fade bd-example-modal-lg" id="parameter-modal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    {{-- CREATE PRAMETER {{ $doc->id }} --}}
                    CREATE PRAMETER
                </div>
                <div class="card-body row">
                    <div class='form-group col-md-6'>
                        <label for='name' class='control-label'> {{ __('Nama') }}</label>
                        <input type='text' wire:model.lazy='name'
                        class="form-control @error('name') is-invalid @enderror" id='name' autofocus placeholder="Nama">
                        @error('name')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='type' class='control-label'> {{ __('Tipe') }}</label>
                        <select  id="type" class="form-control custom-select" wire:model="type" name="type">
                            <option selected="selected" value="">--Pilih Tipe--</option>
                            <option value="string">String</option>
                            <option value="text">Text</option>
                            <option value="integer">Integer</option>
                            <option value="char">Char</option>
                        </select>
                    </div>
                    <div class='form-group col-md-12'>
                        <label for='is_required' class='control-label'> {{ __('Wajib') }}</label>
                        <select  id="is_required" class="form-control custom-select" wire:model="is_required" name="is_required">
                            <option selected="selected" value="">--Pilih Wajib--</option>
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class='form-group col-md-12'>
                        <label for='description' class='control-label'> {{ __('Deskripsi') }}</label>
                        <textarea class="form-control @error('description') is-invalid @enderror " wire:model="description" placeholder="Deskripsi" rows="4"> </textarea> @error('description')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-primary" wire:click="save">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
