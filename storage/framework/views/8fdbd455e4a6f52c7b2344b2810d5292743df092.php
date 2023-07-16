<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .note-editable {
            height: 270px;
        }

        .navbar-light {
            background: #ffc107 !important;
        }

        .page-link {
            color: rgb(0, 149, 52) !important;
        }

        .layout-navbar-fixed .wrapper .main-header {
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 1037;
        }
        .select2 {
            height: 100%;
            border: none;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed" style="font-family: 'calibri';">
    <div class="wrapper">
        <!-- Navbar -->
        <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar main-sidebar-custom sidebar-light-dark elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?php echo e(asset('img/logo_rita.jpeg')); ?>" alt="Mokutech Logo" class="brand-image elevation-3">
                <span class="brand-text font-weight-light">Nkul VGB</span>
            </a>

            <?php echo $__env->make('layouts.sidebar2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="sidebar-custom">
                <a href="<?php echo e(route('home2')); ?>" class="btn btn-link"><i class="fas fa-cogs text-dark"></i></a>
                <a href="<?php echo e(route('home2')); ?>" class="btn btn-dark hide-on-collapse pos-right">Dashboard</a>
            </div>
            <!-- /.sidebar-custom -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background: #f0d39c;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?php echo e($title ?? ''); ?></h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('maincontent'); ?>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer" style="background: rgb(207, 123, 123);">
            <strong class="text-light">Copyright &copy; <?php echo e(date('Y')); ?> RITAC</strong>
            <div class="float-right d-none d-sm-inline-block text-light">
                <b>Version</b> 1.0.0
            </div>
        </footer>
    </div>
<?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /Users/kamgafrank/Documents/projects/NKUL_VGB/resources/views/layouts/mainlayout2.blade.php ENDPATH**/ ?>