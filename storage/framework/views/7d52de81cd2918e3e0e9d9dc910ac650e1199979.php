<?php $__env->startSection('maincontent'); ?>
    <!-- SELECT2 EXAMPLE -->
    <form action="<?php echo e(route('gestion_users.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Prenom</label>
                            <input type="text" name="prenom" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="number" name="telephone" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Role</label>
                            <select name="role_id" class="form-control select" style="width: 100%;" required>
                                <?php $__currentLoopData = App\Models\role::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->label); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pays</label>
                            <input type="text" name="pays" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ville</label>
                            <input type="text" name="ville" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Association / leaderE Trans</label>
                            <input type="text" name="association" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-3">
                <button onClick="return confirm('You sure??');" class="btn btn-dark" type="submit">Enregistrer</button>
                <button class="btn btn-danger" type="reset">Annuler</button>
            </div>
        </div>
    </form>
    <!-- /.card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamgafrank/Documents/projects/NKUL_VGB/resources/views/users/form.blade.php ENDPATH**/ ?>