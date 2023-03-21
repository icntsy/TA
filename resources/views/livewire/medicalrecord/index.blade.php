@section('meta_title', 'Mediical Record')
@section('page_title', 'DATA MEDICAL RECORD')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-notes-medical"></i>
@endsection
<div class="row">
    <div class="col-12">
        <div class="mb-3 card">
                <livewire:medical-record.table/>
        </div>
    </div>
</div>
