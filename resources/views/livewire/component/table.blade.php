<div class="row">
    <div class="col-md-12">
        <div class="mb-3 card">
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            @foreach($header as $head)
                                <th>$head</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        {{ $slot }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
