<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion bg-info" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center bg-info justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            {{-- <img src="img/logo/logo2.png"> --}}
        </div>
        <div class="sidebar-brand-text  mx-3">Parqueaderos 4 ruedas</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Gestion</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion</h6>
                <a class="collapse-item" href="{{route('propietarios.index')}}">Propietarios</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('vehiculos.index')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>vehiculos</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('test')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Logica</span>
        </a>
    </li>


    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
<!-- Sidebar -->