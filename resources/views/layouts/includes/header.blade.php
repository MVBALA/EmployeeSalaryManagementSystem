<nav class="main-header navbar navbar-expand navbar-primary navbar-dark bg-info ">
    <h3><b>ABC Company</b></h3>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            @role(['admin','superadmin'])
            <div class="navbar-search-block" id="navbar-search3">
                <form class="form-inline" method="GET" action="{{ route('employee.search') }}">
                    @csrf
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search"
                               aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            @endrole
        </li>
    </ul>
</nav>
