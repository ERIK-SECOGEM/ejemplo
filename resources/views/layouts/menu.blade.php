<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/ejemplo/public/home">
        <i class=" fas fa-building"></i><span>Home</span>
    </a>
    @can('ver-usuario')
        <a class="nav-link" href="{{route('usuarios.index')}}">
            <i class=" fas fa-users"></i><span>Usuarios</span>
        </a>
    @endcan
    @can('ver-rol')
        <a class="nav-link" href="{{route('roles.index')}}">
            <i class=" fas fa-user-lock"></i><span>Roles</span>
        </a>
    @endcan
    @can('ver-trabajador')
        <a class="nav-link" href="{{route('trabajadores.index')}}">
            <i class=" fas fa-laptop-house"></i><span>Trabajadores</span>
        </a>
    @endcan
</li>
