@section('meta_title', 'Dokumentasi')
@section('page_title', 'TAMBAH DATA DOKUMENTASI')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
@section('modal')
    <livewire:documentation.create-response/>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    Tambah data
                    {{-- <div class="btn-actions-pane-right text-capitalize">
                        <button  wire:click="/" class="btn-wide btn-outline-2x mr-md-2 btn btn-primary btn-sm"> Parameter
                        </button>
                        <button  wire:click="newResponse" class="btn-wide btn-outline-2x mr-md-2 btn btn-primary btn-sm"> Response
                        </button>
                    </div> --}}
                </div>
            <form class="form-horizontal" wire:submit.prevent="create_document" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class='form-group col-md-6'>
                        <label for='title' class='control-label'> {{ __('Nama') }}</label>
                        <input type='text' wire:model.lazy='title'
                        class="form-control @error('title') is-invalid @enderror" id='title' autofocus placeholder="Nama">
                        @error('title')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group col-md-6" wire:ignore>
                        <div class="input-group-prepend">
                        <button class="btn"> Response&nbsp;&nbsp;:</button>
                        </div>
                        <select id="response" class="multiselect-dropdown form-control @error('response_id')
                        is-invalid @enderror">
                        </select>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='url' class='control-label'> {{ __('URL') }}</label>
                        <input type='text' wire:model.lazy='url'
                        class="form-control @error('url') is-invalid @enderror" id='url' autofocus placeholder="URL">
                        @error('url')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group col-md-6" wire:ignore>
                        <div class="input-group-prepend">
                            <button class="btn"> Parameter&nbsp;&nbsp;:</button>
                        </div>
                        <select id="parameter" class="multiselect-dropdown form-control @error('parameter_id')
                        is-invalid @enderror">
                        </select>
                    </div>
                    <div class='form-group col-md-12'>
                        <label for='description' class='control-label'> {{ __('Deskripsi') }}</label>
                        <textarea class="form-control @error('description') is-invalid @enderror " wire:model="description" placeholder="Deskripsi" rows="4"> </textarea> @error('description')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                </div>
            </form>
                <div class="card-header">
                    Parameter
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-info">{{ __('Simpan Data') }}</button>
                    </div>
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
                            <option value="yes">Ya</option>
                            <option value="not">Tidak</option>
                        </select>
                    </div>
                    <div class='form-group col-md-12'>
                        <label for='description' class='control-label'> {{ __('Deskripsi') }}</label>
                        <textarea class="form-control @error('description') is-invalid @enderror " wire:model="description" placeholder="Deskripsi" rows="4"> </textarea> @error('description')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="card-header">
                    Response
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-info">{{ __('Simpan Data') }}</button>
                    </div>
                </div>
                <div class="card-body row">
                    <div class='form-group col-md-6'>
                        <label for='success' class='control-label'> {{ __('Sukses') }}</label>
                        <textarea class="form-control @error('success') is-invalid @enderror " wire:model="success" placeholder="Respon Sukses" rows="4"> </textarea> @error('success')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='failed' class='control-label'> {{ __('Gagal') }}</label>
                        <textarea class="form-control @error('failed') is-invalid @enderror " wire:model="failed" placeholder="Respon Gagal" rows="4"> </textarea> @error('failed')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-12'>
                        <label for='description' class='control-label'> {{ __('Deskripsi') }}</label>
                        <textarea class="form-control @error('description') is-invalid @enderror " wire:model="description" placeholder="Deskripsi" rows="4"> </textarea> @error('description')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-info">{{ __('Simpan Data') }}</button>
                </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        $(document).ready(function (){
            $("#parameter").select2({
                theme: "bootstrap4",

                placeholder: 'Pilih Parameter',
                ajax: {
                    url: '{{route('select.parameter')}}',
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {

                        return {

                            results:  $.map(data, function (item) {

                                return {

                                    text: item.name,

                                    id: item.id

                                }

                            })

                        };

                    },

                    cache: true

                }

            }).on('change', function (e){
                var data = $('#parameter').select2("val")
                @this.set('parameter_id', data)
            });

            $("#response").select2({
                theme: "bootstrap4",

                placeholder: 'Pilih Response',
                ajax: {
                    url: '{{route('select.response')}}',
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {

                        return {

                            results:  $.map(data, function (item) {

                                return {

                                    text: item.success,

                                    id: item.id

                                }

                            })

                        };

                    },

                    cache: true

                }

            }).on('change', function (e){
                var data = $('#response').select2("val")
                @this.set('response_id', data)
            });

            })
    </script>
@endpush
