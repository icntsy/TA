@section('meta_title', 'MEDICAL RECORD')
@section('page_title', 'PROCESS  PENYIAPAN OBAT')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-list"></i>
@endsection

<div class="row">
    <div class="card col-md-12">
        <div class="card-header">
            <div class="btn-actions-pane-right text-capitalize">
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
                                    <td style="font-weight: bold;" width="35%">TTL</td>
                                    <td>:</td>
                                    <td>{{$queue->patient->birth_date}}</td>
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
                                    <td>{{$queue->created_at}}</td>
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
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Obat</th>
                                        <th>Harga Satuan</th>
                                        <th>Qty</th>
                                        <th>Aturan Pakai</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($queue->medicalrecord->drugs as $drug)
                                        <tr>
                                            <td>{{$drug->id}}</td>
                                            <td>{{$drug->nama}}</td>
                                            <td>{{$drug->harga}}</td>
                                            <td>{{$drug->pivot->quantity}}</td>
                                            <td>{{$drug->pivot->instruction}}</td>
                                            <td>{{$drug->harga * $drug->pivot->quantity}}</td>
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
