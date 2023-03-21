<div class="app-header-right">
    <div class="header-btn-lg pr-0">
        <div class="widget-content p-0">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="btn-group">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                            <img width="42" class="rounded-circle" src="{{ asset('assets/images/avatars/1.jpg') }}"
                                alt="">
                            {{ Auth::user()->name . ' (' . Auth::user()->role . ')' }}
                            <i class="fa fa-angle-down ml-2 opacity-8"></i>

                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                            <button wire:click="logout" type="button" tabindex="0" class="dropdown-item">Logout</button>
                        </div>
                    </div>
                </div>
                <div class="widget-content-left  ml-3 header-user-info">
                    <div class="widget-heading">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="widget-subheading">
                        {{ Auth::user()->role }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
