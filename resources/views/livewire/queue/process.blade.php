@section('meta_title', 'MEDICAL RECORD')
@section('page_title', 'PROCESS CHECKUP MEDICAL RECORD')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-list"></i>
@endsection
@section('modal')
<livewire:component.modal-diagnosa :id="$queue->id"/>
    <livewire:component.modal-lab/>
    <livewire:component.modal-drug/>
@endsection
<div class="row">
    <div class="card col-md-12">
        <div class="card-header">
            <div class="btn-actions-pane-right text-capitalize">
                {{-- <button  wire:click="update" class="btn-wide btn-outline-2x mr-md-2 btn btn-secondary"><i class="fa
                    fa-edit"></i> Simpan
                </button> --}}
                <button  wire:click="save" class="btn-wide btn-outline-2x mr-md-2 btn btn-primary"><i class="fa
                    fa-check"></i> Selesai
                </button>
            </div>
        </div>
        <div class="card-body row">
            <div class="col-md-12">
                <div class="main-card">
                    <div class="card-header">
                        Data Pasien
                    </div>
                    <div class="card-body row">
                        <div class="col-md-6">
                            <table width="100%">
                                <tbody><tr>
                                    <td style="font-weight: bold;" width="35%">Nama Lenkap</td>
                                    <td width="1%">:</td>
                                    <td>
                                        {{$queue->patient->name}}                               </td>
                                </tr>

                                <tr>
                                    <td style="font-weight: bold;" width="35%">No Antrian</td>
                                    <td>:</td>
                                    <td>{{$queue->queue_number}}</td>
                                </tr>

                                <tr>
                                    <td style="font-weight: bold;" width="35%">Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{\Carbon\Carbon::parse($queue->patient->birth_date)->isoFormat('D MMMM Y')}}</td>
                                </tr>

                                <tr>
                                    <td style="font-weight: bold;" width="35%">Sex / Umur</td>
                                    <td>:</td>
                                    <td>{{$queue->patient->gender}} / {{\Carbon\Carbon::parse($queue->patient->birth_date)
                        ->diffInYears
                        ()}}
                                        Thn</td>
                                </tr>
                                </tbody></table>
                        </div>
                        <div class="col-md-6">
                            <table width="100%">
                                <tbody><tr>
                                    <td style="font-weight: bold;" width="35%">Waktu Kunjungan</td>
                                    <td width="1%">:</td>
                                    <td>{{\Carbon\Carbon::parse($queue->created_at)->isoFormat('hh:mm, D MMMM Y')}}</td>
                                </tr>


                                <tr>
                                    <td style="font-weight: bold;" width="35%">Jenis Pasien</td>
                                    <td>:</td>
                                    <td>Umum </td>
                                </tr>

                                <tr>
                                    <td style="font-weight: bold;" width="35%">Layanan </td>
                                    <td>:</td>
                                    <td>{{$queue->service->name}}</td>
                                </tr>

                                <tr>
                                    <td style="font-weight: bold;" width="35%">Dokter Pemeriksa</td>
                                    <td>:</td>
                                    <td>{{$queue->doctor->name}}</td>
                                </tr>
                                </tbody></table>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="main-card">
                    <div class="card-header">
                        Data Anamnesa Dan Pemeriksaan Fisik
                    </div>
                    <div class="card-body row">
                        <div class='form-group col-md-6'>
                            <label for='alerggy' class='control-label'> {{ __('Riwayat Alergi') }}</label>
                           <textarea wire:model="allergy" class="form-control @error('alerggy') is-invalid
@enderror">{{$queue->patient->allergy ?? ""}}</textarea>
                            @error('alerggy')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                        <div class='form-group col-md-6'>
                            <label for='main_complaint' class='control-label'> {{ __('Keluhan Utama') }}</label>
                            <textarea wire:model="main_complaint" class="form-control @error('main_complaint') is-invalid
@enderror">{{$queue->patient->main_complaint ?? ""}}</textarea>
                            @error('main_complaint')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                        <div class='form-group col-md-6'>
                            <label for='history_disease' class='control-label'> {{ __('Riwayat Penyakit') }}</label>
                           <textarea wire:model="history_disease" class="form-control @error('history_disease') is-invalid
@enderror">{{$queue->patient->history_disease ?? ""}}</textarea>
                            @error('history_disease')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                        <div class='form-group col-md-3'>
                            <label for='height' class='control-label'> {{ __('Tinggi Badan (CM)') }}</label>
                            <input type='number' autofocus wire:model.lazy='height' placeholder="Tinggi Badan"
                                   class="form-control @error('height') is-invalid @enderror" id='height'>
                            @error('height')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>

                        <div class='form-group col-md-3'>
                            <label for='weight' class='control-label'> {{ __('Berat Badan (KG)') }}</label>
                            <input type='number' autofocus wire:model.lazy='weight' placeholder="Berat Badan"
                                   class="form-control @error('weight') is-invalid @enderror" id='weight'>
                            @error('weight')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                        <div class='form-group col-md-3'>
                            <label for='blood_pressure' class='control-label'> {{ __('Tekanan Darah (mmHg)') }}</label>
                            <input type='number' autofocus wire:model.lazy='blood_pressure' placeholder="Tekanan Darah"
                                   class="form-control @error('blood_pressure') is-invalid @enderror"
                                   id='blood_pressure'>
                            @error('blood_pressure')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                        <div class='form-group col-md-3'>
                            <label for='color_blind' class='control-label'> {{ __('Buta Warna') }}</label>
                            <select  wire:model.lazy='color_blind'
                                   class="form-control @error('color_blind') is-invalid @enderror" id='color_blind'>
                                <option value="" >---Buta Warna--</option>
                                <option value="1" >Ya</option>
                                <option value="0" >Tidak</option>
                            </select>
                            @error('color_blind')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                        <div class='form-group col-md-3'>
                            <label for='blood' class='control-label'> {{ __('Golongan Darah') }}</label>
                            <select  wire:model.lazy='blood'
                                     class="form-control @error('blood') is-invalid @enderror" id='blood'>
                                <option value="" >---Golongan Darah--</option>
                                <option value="A" >A</option>
                                <option value="B" >B</option>
                                <option value="AB" >AB</option>
                                <option value="O" >O</option>
                            </select>
                            @error('blood')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                        <div class='form-group col-md-3'>
                            <label for='respiration' class='control-label'> {{ __('Respirasi (X/Menit)') }}</label>
                            <input type='number' autofocus wire:model.lazy='respiration' placeholder="Respirasi"
                                   class="form-control @error('respiration') is-invalid @enderror"
                                   id='respiration'>
                            @error('respiration')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                        <div class='form-group col-md-3'>
                            <label for='pulse' class='control-label'> {{ __('Nadi (X/Menit)') }}</label>
                            <input type='number' autofocus wire:model.lazy='pulse' placeholder="Nadi"
                                   class="form-control @error('pulse') is-invalid @enderror"
                                   id='pulse'>
                            @error('pulse')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                        <div class='form-group col-md-3'>
                            <label for='disability' class='control-label'> {{ __('Cacat Badan') }}</label>
                            <select  wire:model.lazy='disability'
                                     class="form-control @error('disability') is-invalid @enderror" id='disability'>
                                <option value="" >---Cacat Badan--</option>
                                <option value="1" >Ya</option>
                                <option value="0" >Tidak</option>
                            </select>
                            @error('disability')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                        <div class='form-group col-md-3'>
                            <label for='temperature' class='control-label'> {{ __('Suhu (C)') }}</label>
                            <input type='number' autofocus wire:model.lazy='temperature' placeholder="Suhu"
                                   class="form-control @error('temperature') is-invalid @enderror"
                                   id='temperature'>
                            @error('temperature')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                        <div class=" form-group col-md-12">
                            <label for='anamnesis' class='control-label'> {{ __('Anamnesa') }}</label>
                            <textarea  wire:model.lazy='anamnesis' placeholder="Anamnesa"
                                   class="form-control @error('anamnesis') is-invalid @enderror"
                                       id='anamnesis'> </textarea>
                            @error('anamnesis')
                            <div class='invalid-feedback'>{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="main-card">
                    <div class="card-header">
                        Data Diagnosa, Laboratorium Dan Obat
                    </div>
                    <div class="card-body row">
                        <div class="col-md-12">
                            <div class="card-main">
                                <div class="card-header">
                                    Data Labs
                                    <div class="btn-actions-pane-right text-capitalize">
                                        <button  wire:click="addLab" class="btn-wide btn-outline-2x mr-md-2 btn
                                        btn-primary btn-sm"><i class="fa
                    fa-plus-circle"></i> Tambah Lab
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Nama Lab</th>
                                            <th>Satuan</th>
                                            <th>Hasil</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($listLab as $index => $lab)
                                            <tr>
                                                <td>{{$lab["lab"]["nama"]}}</td>
                                                <td>{{$lab["lab"]["satuan"]}}</td>
                                                <td>
                                                    <input type="text" name="listLab[{{$index}}][quantity]"
                                                           class="form-control" wire:model="listLab.{{$index}}.result">
                                                </td>
                                                <td>
                                                    <button wire:click="deleteLab({{$index}})" class="btn-sm btn-danger">
                                                        Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-main">
                                <div class="card-header">
                                    Data Diagnosa
                                    <div class="btn-actions-pane-right text-capitalize">
                                        <button  wire:click="addDiagnosa" class="btn-wide btn-outline-2x mr-md-2 btn
                                        btn-primary btn-sm"><i class="fa
                    fa-plus-circle"></i> Tambah Diagnosa
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Kode Diagnosa</th>
                                            <th>Kode ICD</th>
                                            <th>Diagnosa</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($listDiagnosa as $index => $diagnosa)
                                                <tr>
                                                    <td>{{$diagnosa["diagnosa"]["code"]}}</td>
                                                    <td>{{$diagnosa["diagnosa"]["icc_code"]}}</td>
                                                    <td>{{$diagnosa["diagnosa"]["diagnosis"]}}</td>
                                                    <td>
                                                        <input type="text" class="form-control" wire:model="listDiagnosa.{{$index}}.description"/>
                                                    </td>
                                                    <td>
                                                        <button wire:click="deleteDiagnosa({{$index}})" class="btn btn-sm
                                                        btn-danger">Hapus</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-main">
                                <div class="card-header">
                                    Data Obat
                                    <div class="btn-actions-pane-right text-capitalize">
                                        <button  wire:click="addDrug" class="btn-wide btn-outline-2x mr-md-2 btn
                                        btn-primary btn-sm"><i class="fa
                    fa-plus-circle"></i> Tambah Obat
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Nama Obat</th>
                                            <th>Qty</th>
                                            <th>Aturan Pakai</th>
                                            {{-- <th>Harga Satuan</th> --}}
                                            {{-- <th>Harga Total</th> --}}
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($listDrug as $index => $drug)
                                            <tr>
                                                <td>{{$drug["drug"]["nama"]}}</td>
                                                <td> <input type="number"
                                                            min="0"
                                                            max="{{$drug["drug"]["stok"]}}"
                                                            class="form-control"
                                                            wire:model="listDrug.{{$index}}.quantity"/>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                           wire:model="listDrug.{{$index}}.instruction"
                                                           placeholder="Aturan Pakai"/>
                                                </td>
                                                {{-- <td>{{$drug["drug"]["harga"]}}</td> --}}

                                                {{-- <td>{{(int)($listDrug[$index]["quantity"]) * $drug["drug"]["harga"] }}</td> --}}
                                                <td>
                                                    <button wire:click="deleteDrug({{$index}})" class="btn btn-sm
                                                        btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
