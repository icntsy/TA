@section('page_title_icon')
    <i class="metismenu-icon fa fa-portrait"></i>
@endsection
@section('modal')
    <livewire:component.response-modal :doc="$doc->id" />
    <livewire:component.parameter-modal :doc="$doc->id" />
@endsection
        <div class="card ">
            <div class="card-header">
                Data Documentation
            </div>
            <div class="card-body">
                <table width="100%" class="table">
                    <tbody>
                        <tr>
                            <td style="width: 30%">Title:</td>
                            <td>{{ $doc->title }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Method:</td>
                            <td>{{ $doc->method }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Url:</td>
                            <td>{{ $doc->url }}</td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Description</td>
                            <td>{{ $doc->description }}</td>
                        </tr>

                    </tbody>
                </table>
                <div class="card mt-3">
                    <div class="card-header">
                        List Parameter
                        <div class="btn-actions-pane-right text-capitalize">
                            <button wire:click="addParam" class="btn-wide btn-outline-2x mr-md-2 btn btn-primary btn-sm"><i
                                    class="fa
                            fa-plus-circle"></i> Tambah Data Parameter
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Wajib</th>
                                    <th>Tipe</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($doc->parameters as $parameter)
                                    <livewire:parameter.single :parameter="$parameter" :key="time() . $parameter->id" />
                                @empty
                                    @include('layouts.empty', ['colspan' => 5])
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        Data Response
                    @empty($response_data)
                        <div class="btn-actions-pane-right text-capitalize">
                            <button wire:click="addResponse" class="btn-wide btn-outline-2x mr-md-2 btn btn-primary btn-sm"><i
                                    class="fa
                            fa-plus-circle"></i> Tambah Data Response</button>
                        </div>
                    @endempty
        </div>
        <div class="card-body">
        @isset($response_data)
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Success</th>
                            <th>Failed</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <livewire:response.single :response="$response_data" :key="time()" />
                    </tbody>
                </table>
            @else
                <div class="alert alert-info">
                    <i class="fa fa-info-circle"></i> Data Response Belum Ada
                </div>
            @endisset
        </div>
    </div>
</div>

</div>
