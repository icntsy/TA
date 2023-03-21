@extends('layouts.admin.app')
@section('meta_title', 'Lab')
@section('page_title', 'STATISTIK')
@section('page_title_icon')
<i class="metismenu-icon fa fa-chart-bar"></i>
@endsection

@section('content')
@role('admin')
<div class="row">
    <div class="col-md-3">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Pasien</div>
                        <div class="widget-subheading">Jumlah Pasien</div>
                        <div class="widget-numbers">{{\App\Models\Patient::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-success">
                            <i class="fa fa-3x fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Dokter</div>
                        <div class="widget-subheading">Jumlah Dokter</div>
                        <div class="widget-numbers">{{\App\Models\User::where('role', 'dokter')->count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-warning">
                            <i class="fa fa-3x fa-medkit"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Obat</div>
                        <div class="widget-subheading">Jumlah obat</div>
                        <div class="widget-numbers">{{\App\Models\Drug::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-primary">
                            <i class="fa fa-3x fa-prescription-bottle-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Fasilitas Lab</div>
                        <div class="widget-subheading">Jumlah Fasilitas Lab</div>
                        <div class="widget-numbers">{{\App\Models\Lab::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-primary">
                            <i class="fa fa-3x fa-file-medical-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elserole('staff')
<div class="row">
    <div class="col-md-3">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Pasien</div>
                        <div class="widget-subheading">Jumlah Pasien</div>
                        <div class="widget-numbers">{{\App\Models\Patient::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-success">
                            <i class="fa fa-3x fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Dokter</div>
                        <div class="widget-subheading">Jumlah Dokter</div>
                        <div class="widget-numbers">{{\App\Models\User::where('role', 'dokter')->count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-warning">
                            <i class="fa fa-3x fa-medkit"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Obat</div>
                        <div class="widget-subheading">Jumlah obat</div>
                        <div class="widget-numbers">{{\App\Models\Drug::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-primary">
                            <i class="fa fa-3x fa-prescription-bottle-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Fasilitas Lab</div>
                        <div class="widget-subheading">Jumlah Fasilitas Lab</div>
                        <div class="widget-numbers">{{\App\Models\Lab::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-primary">
                            <i class="fa fa-3x fa-file-medical-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elserole('dokter')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">List Antrian Hari Ini</div>
                        <div class="widget-subheading">Jumlah Pasien</div>
                        <div class="widget-numbers">{{\App\Models\Patient::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-success">
                            <i class="fa fa-3x fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Dokter</div>
                        <div class="widget-subheading">Jumlah Dokter</div>
                        <div class="widget-numbers">{{\App\Models\User::where('role', 'dokter')->count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-warning">
                            <i class="fa fa-3x fa-medkit"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elserole('bidan')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Ibu Hamil</div>
                        <div class="widget-subheading">Jumlah Ibu Hamil</div>
                        <div class="widget-numbers">{{\App\Models\pregnantmom::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-success">
                            <i class="fa fa-3x fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data KB</div>
                        <div class="widget-subheading">Jumlah Data KB</div>
                        <div class="widget-numbers">{{\App\Models\familyplanning::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-warning">
                            <i class="fa fa-3x fa-file-medical-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Imunisasi</div>
                        <div class="widget-subheading">Jumlah Data Imunisasi</div>
                        <div class="widget-numbers">{{\App\Models\immunization::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-primary">
                            <i class="fa fa-3x fa-file-medical"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data BPJS</div>
                        <div class="widget-subheading">Jumlah Data BPJS</div>
                        <div class="widget-numbers">{{\App\Models\bpjs::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-success">
                            <i class="fa fa-3x fa-medkit"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elserole('dokumentasi')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Dokumentasi</div>
                        <div class="widget-subheading">Jumlah Dokumentasi</div>
                        <div class="widget-numbers">{{\App\Models\Documentation::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-primary">
                            <i class="fa fa-3x fa-file-medical"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Parameter</div>
                        <div class="widget-subheading">Jumlah Parameter</div>
                        <div class="widget-numbers">{{\App\Models\Parameter::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-danger">
                            <i class="fa fa-3x fa-file-medical"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Data Response</div>
                        <div class="widget-subheading">Jumlah Response</div>
                        <div class="widget-numbers">{{\App\Models\Response::count()}}</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="text-success">
                            <i class="fa fa-3x fa-file-medical-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>@endrole
@endsection
