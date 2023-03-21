<div class="app-container">
    <div class="h-100 bg-white bg-animation">
        <div class="d-flex h-100 justify-content-center align-items-center">
            <div class="mx-auto app-login-box col-md-8">
                <div class="modal-dialog w-100 mx-auto">
                    <form class="" method="post" wire:submit.prevent="login">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="h5 modal-title text-center">
                                <h4 class="mt-2">
                                    <img src="{{asset('assets/images/logo.png')}}" alt="">
                                    <div class="mt-3">Selamat Datang</div>
                                </h4>
                            </div>

                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="control-label">Alamat Email</label>
                                            <input wire:model="email" name="email" id="exampleEmail"
                                                   placeholder="Masukan Email" type="email" autofocus
                                                   class="form-control @error('email') is-invalid @enderror">
                                            @error('email')
                                            <div class='invalid-feedback'>{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword" class="control-label">Password</label>
                                            <input wire:model="password" name="password" id="examplePassword"
                                                   placeholder="Masukan Password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror">
                                            @error('password')
                                            <div class='invalid-feedback'>{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-check">
                                    <input name="check" wire:model="keeplogin" id="exampleCheck" type="checkbox"
                                           class="form-check-input">
                                    <label for="exampleCheck" class="form-check-label">Keep me logged in</label>
                                </div>
                        </div>
                        <div class="modal-footer clearfix">
                            <div class="float-left">
                                <a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a>
                            </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary btn-lg">Login to
                                    Dashboard
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
