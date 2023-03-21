@section('meta_title', 'Lab')
@section('page_title', 'TAMBAH DATA ANTRIAN')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-list"></i>
@endsection
@section('modal')
    <livewire:queue.select-patient/>
    <livewire:queue.create-patient/>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Tambah Antrian
                <div class="btn-actions-pane-right text-capitalize">
                    <button  wire:click="newPatient" class="btn-wide btn-outline-2x mr-md-2 btn btn-primary btn-sm"><i class="fa
                    fa-plus-circle"></i> Pasien
                        Baru
                    </button>
                    <button wire:click="selectPatient" class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus
                    btn-sm">
                        <i class="fa fa-search-plus"></i> Pilih Pasien
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6" style="border-right:solid 1px #ddd;">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td style="font-weight: bold;" width="20%">NIK</td>
                                <td width="1%">:</td>
                                <td>{{$patient->nik ?? "-"}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Nama</td>
                                <td width="1%">:</td>
                                <td>{{$patient->name ?? "-"}}</td>
                            </tr>

                            <tr>
                                <td style="font-weight: bold;">Tanggal Lahir</td>
                                <td width="1%">:</td>
                                <td>{{$patient->birth_date ?? "-"}}</td>
                            </tr>

                            <tr>
                                <td style="font-weight: bold;">Sex/Umur</td>
                                <td width="1%">:</td>
                                <td>{{$patient->gender ?? "-"}} / {{$patient ? \Carbon\Carbon::parse
                                ($patient->birth_date)->diffInYears(): "-"}}</td>
                            </tr>

                            <tr>
                                <td style="font-weight: bold;">Alamat</td>
                                <td width="1%">:</td>
                                <td>{{$patient->address ?? "-"}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group" wire:ignore>
                            <div class="input-group-prepend">
                                <button class="btn"> Layanan&nbsp;&nbsp;:</button>
                            </div>
                            <select id="service" class="multiselect-dropdown form-control @error('service_id')
                                is-invalid @enderror">
                            </select>
                        </div>
                        <div class="input-group mt-2" wire:ignore>
                            <div class="input-group-prepend">
                                <button class="btn">Dokter&nbsp; &nbsp;&nbsp; :</button>
                            </div>
                            <select id="doctor" class="multiselect-dropdown form-control @error('doctor_id')
                                is-invalid @enderror " >
                            </select>
                            @error('doctor_id')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                        <div class='form-group mt-2'>
                            {{--                        --}}{{--                        <label for='address' class='control-label'> {{ __('Alamat Lengkap') }}</label>--}}
                            <textarea class="form-control @error('main_complaint')
                                is-invalid @enderror " wire:model="main_complaint"
                                      placeholder="Keluhan Saat Datang" rows="4">
                            </textarea>
                            @error('main_complaint')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" wire:click="create" class="btn btn-info">{{ __('Simpan Data') }}</button>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        $(document).ready(function (){
            $("#service").select2({
                theme: "bootstrap4",

                placeholder: 'Pilih Layanan',
                ajax: {
                    url: '{{route('select.service')}}',
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
                var data = $('#service').select2("val")
                @this.set('service_id', data)
            });


            $("#doctor").select2({
                theme: "bootstrap4",

                placeholder: 'Pilih Dokter',

                ajax: {

                    url: '{{route('select.doctor')}}',
                    dataType: 'json',

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

            }).on("change", function (e){
                var data = $('#doctor').select2("val")
                @this.set('doctor_id', data)
            })
        })
    </script>
@endpush
