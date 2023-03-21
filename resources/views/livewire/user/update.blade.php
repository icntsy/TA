@section('meta_title', 'USER')
@section('page_title', 'EDIT DATA USER')
@section('page_title_icon')
    <i class="metismenu-icon fa fa-user"></i>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class='form-group col-md-12'>
                        <label for='name' class='control-label'> {{ __('Nama Lengkap') }}</label>
                        <input type='text' autofocus wire:model.lazy='name' placeholder="Nama Lengkap"
                               class="form-control @error('name') is-invalid @enderror" id='name'>
                        @error('name')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='email' class='control-label'> {{ __('Email') }}</label>
                        <input type='email'  wire:model.lazy='email' placeholder="Email"
                               class="form-control @error('email') is-invalid @enderror" id='email'>
                        @error('email')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='col-md-6 form-group'>

                        <label for='study' class='control-label'> {{ __('Type user') }}</label>
                        <select  id="gender" class="form-control custom-select" wire:model="role" name="role">
                            <option selected="selected" value="">--Pilih Type User--</option>
                            <option value="admin">Admin</option>
                            <option value="dokter">Dokter</option>
                            <option value="staff">Staff</option>
                            <option value="apoteker">Apoteker</option>
                        </select>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='password' class='control-label'> {{ __('Password') }}</label>
                        <input type='password'  wire:model.lazy='password' placeholder="Masukan password"
                               class="form-control @error('password') is-invalid @enderror" id='password'>
                        @error('password')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='password_confirmation' class='control-label'> {{ __('Password Confirmation') }}</label>
                        <input type='password'  wire:model.lazy='password_confirmation' placeholder="Ulangi Password"
                               class="form-control @error('password_confirmation') is-invalid @enderror" id='password_confirmation'>
                        @error('password_confirmation')
                        <div class='invalid-feedback'>{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">{{ __('Simpan Data') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
