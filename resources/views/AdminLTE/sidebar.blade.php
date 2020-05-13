<ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-legacy text-sm nav-compact" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item">
        <a href="{{ route('tienda') }}" class="nav-link">
        <i class="nav-icon fa fa-tachometer-alt"></i>
        <p>Dashboard</p>
        </a>
    </li>

    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fa fa-shopping-cart"></i>
            <p> Productos <i class="right fas fa-angle-left"></i> </p>
        </a>

        <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="{{ route('productos.index') }}" class="nav-link">
                <i class="fa fa-clipboard-list nav-icon"></i>
                <p>Lista de productos</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('productos.create') }}" class="nav-link">
                <i class="fa fa-plus nav-icon"></i>
                <p>Registrar producto</p>
                </a>
            </li>

        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ route('info.edit') }}" class="nav-link">
        <i class="nav-icon fa fa-address-book"></i>
        <p>Información de la página</p>
        </a>
    </li>

    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fa fa-trash"></i>
            <p>Papelera de reciclaje<i class="right fas fa-angle-left"></i> </p>
        </a>

        <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="{{ route('productos.eliminados') }}" class="nav-link">
                    <i class="fa fa-clipboard-list nav-icon"></i>
                    <p>Productos eliminados</p>
                </a>
            </li>

        </ul>
    </li>


</ul>
