<!-- Sidebar -->
<div class="sidebar" style="background: #f0d39c;">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <i class="fa fa-user fa-lg"></i>
        </div>
        <div class="info">
            <a href="#" class="d-block" style="font-weight:bold"><?php echo e(Auth::User()->nom); ?>

                <?php echo e(Auth::User()->prenom); ?></a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-shopping-bag"></i>
                    <p>Enquetes<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('gestion_enquete.create')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ajouter Enquetes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('gestion_enquete.index')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Liste des Enquetes</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-folder-open"></i>
                    <p>Allerts<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Gestion des allerts</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-users"></i>
                    <p>Utilisateurs<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('gestion_users.create')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ajouter utilisateur</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('gestion_users.index')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Liste des utilisateurs</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-header">SUPLEMENTAIRES</li>
            <li class="nav-item">
                <a href="<?php echo e(route('profile_admin')); ?>" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Profile</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
<?php /**PATH /Users/kamgafrank/Documents/projects/NKUL_VGB/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>