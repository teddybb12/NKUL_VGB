<?php $__env->startSection('maincontent'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body table-responsive p-3" style="height: 300px;">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Supp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->nom); ?></td>
                                    <td><?php echo e($user->prenom); ?></td>
                                    <td><?php echo e($user->telephone); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><a onClick="return confirm('You sure??');" href="<?php echo e(url ('destroyUser/'.$user->id)); ?>"><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamgafrank/Documents/projects/NKUL_VGB/resources/views/users/list.blade.php ENDPATH**/ ?>