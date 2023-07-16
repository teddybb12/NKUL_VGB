<!-- Sidebar -->
<div class="sidebar">
    <img src="{{asset('img/logo_rita.jpeg')}}" alt="logo" class="logo-2">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="user-data">
            <div class="image float-left">
                <i class="fa fa-user fa-lg"></i>
            </div>
            <div class="info float-left">
                <a href="{{ route('profile_admin') }}" class="d-block" style="font-weight:bold">{{ Auth::User()->nom }}
                    {{ Auth::User()->prenom }}</a>
            </div>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item 
            <?= (str_contains($_SERVER['REQUEST_URI'], "gestion_enquete")) ? 'menu-is-opening menu-open' : ''  ?>
            <?= (str_contains($_SERVER['REQUEST_URI'], "print_info")) ? 'menu-is-opening menu-open' : ''  ?>">
                <a href="#" class="nav-link">
                    <i class="fa fa-shopping-bag"></i>
                    <p>Enquetes<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('gestion_enquete.create') }}" class="nav-link <?= (str_contains($_SERVER['REQUEST_URI'], "gestion_enquete/create")) ? 'active' : ''  ?>">
                            <i class="far fa-plus nav-icon"></i>
                            <p>Ajouter Enquetes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gestion_enquete.index') }}" class="nav-link">
                            <i class="far fa-list nav-icon"></i>
                            <p>Liste des Enquetes</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-warning"></i>
                    <p>Alertes<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-eye nav-icon"></i>
                            <p>Gestion des alertes</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?= (str_contains($_SERVER['REQUEST_URI'], "gestion_users")) ? 'menu-is-opening menu-open' : ''  ?>">
                <a href="#" class="nav-link">
                    <i class="fa fa-users"></i>
                    <p>Utilisateurs<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('gestion_users.create') }}" class="nav-link <?= (str_contains($_SERVER['REQUEST_URI'], "gestion_users/create")) ? 'active' : ''  ?>">
                            <i class="far fa-plus nav-icon"></i>
                            <p>Ajouter utilisateur</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gestion_users.index') }}" class="nav-link <?= (!str_contains($_SERVER['REQUEST_URI'], "gestion_users")) ? 'active' : ''  ?>">
                            <i class="far fa-list nav-icon"></i>
                            <p>Liste des utilisateurs</p>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- <li class="nav-header">SUPLEMENTAIRES</li>
            <li class="nav-item">
                <a href="{{ route('profile_admin') }}" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Profile</p>
                </a>
            </li> -->
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->