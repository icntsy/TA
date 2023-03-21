@section('meta_title', 'OBAT')
@section('page_title', 'TAMBAH DATA MEDICAL RECORD')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-briefcase-medical"></i>
@endsection
@section('modal')
    <div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
<div class="row">
    <div class="col-md-12">
        <button type="button" wire:click="showModal" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>
    </div>
    <div>
        <h1>Laravel Livewire Select2 Example - ItSolutionStuff.com</h1>
        <strong>Select2 Dropdown: {{ $selCity ?? '' }}</strong>
        <div wire:ignore>
            <select class="multiselect-dropdown form-control" id="select2" >
                <option value="">-- Select City --</option>
                @foreach(["Lama", "CEPAT", "ANJAY"] as $city)
                    <option value="{{ $city }}">{{ $city }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
@push("js")
    <script !src="">
        $(document).ready(function() {
            $('#select2').select2({
                theme: "bootstrap4",
            });
            $('#select2').on('change', function (e) {
                var data = $('#select2').select2("val");
                @this.set('selCity', data);
            });
        });
    </script>
@endpush
