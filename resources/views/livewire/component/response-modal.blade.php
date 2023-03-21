<div wire:ignore.self class="modal fade bd-example-modal-lg" id="response-modal" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    CREATE RESPONSE
                </div>
                <div class="card-body row">
                    <div class='form-group col-md-12'>
                        <label for='description' class='control-label'> {{ __('Deskripsi Response') }}</label>
                        <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                            cols="30" rows="10"></textarea>
                        @error('description')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class='form-group col-md-12'>
                        <label for='success' class='control-label'> {{ __('Success Response') }}</label>
                        <textarea wire:model="success" class="form-control @error('success') is-invalid @enderror" name="success" id="success" cols="30"
                            rows="10"></textarea>
                        @error('success')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class='form-group col-md-12'>
                        <label for='failed' class='control-label'> {{ __('Failed Response') }}</label>
                        <textarea wire:model="failed" class="form-control @error('failed') is-invalid @enderror" name="success" id="success" cols="30"
                            rows="10"></textarea>
                        @error('failed')
                            <div class='invalid-feedback'>{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" wire:click="save">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
