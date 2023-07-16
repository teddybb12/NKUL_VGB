<?php $__env->startSection('maincontent'); ?>
    <div class="col-md-12">
        <a href="<?php echo e(route('export_data')); ?>">Export data to excel</a>
        <br><br>
        <?php $__currentLoopData = $enquettes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquette): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <div class="card card-primary">
                <div class="card-body box-profile">

                    <div class="d-flex justify-content-center">
                        <p>
                            RITA<?php echo e(date('Y')); ?>/<?php echo e($enquette->pays); ?>/<?php echo e($enquette->user->association); ?>/00<?php echo e($enquette->id); ?>

                        </p>
                    </div>
                    <p class="mt-2 text-center">
                            Code unique : <?php echo e($enquette->code_unique); ?>

                    </p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Date incident</b> <a class="float-right"><?php echo e($enquette->date_couverture); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Pays</b> <a class="float-right"><?php echo e($enquette->pays); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Type violence</b> <a class="float-right"><?php echo e($enquette->type_violence_violation); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Nature violence</b> <a class="float-right"><?php echo e($enquette->nature_violence); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Identité genre</b> <a class="float-right"><?php echo e($enquette->identite_genre); ?></a>
                        </li>
                    </ul>
                    <div class="d-flex" style="justify-content: space-between">
                        <a class="btn btn-primary" href="<?php echo e(url('print_info', [$enquette->id])); ?>">document</a>
                        <a class="btn btn-primary" href="<?php echo e(url('print_info2', [$enquette->id])); ?>">suivi</a>
                        <a class="btn btn-danger" onClick="return confirm('You sure??');" href="<?php echo e(url('destroyInfo/' . $enquette->id)); ?>">X</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamgafrank/Documents/projects/NKUL_VGB/resources/views/enquettes/list.blade.php ENDPATH**/ ?>