<?php $__env->startSection('maincontent'); ?>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <h3>Bienvenu sur votre espace de travail</h3>
        </div>

        <div class="row">
            <img src="<?php echo e(asset('img/logo_rita.jpeg')); ?>" alt="logo" style="width: 100%">
        </div>

    </div><!-- /.container-fluid -->
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamgafrank/Documents/projects/NKUL_VGB/resources/views/home2.blade.php ENDPATH**/ ?>