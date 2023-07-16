<?php $__env->startSection('maincontent'); ?>
    <div class="row">
        <div class="col-md-12">
            <!-- Profile Image -->
            <div class="card card-primary">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="<?php echo e(asset('img/logo_rita.jpeg')); ?>"
                            alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center"><?php echo e(Auth::User()->nom); ?>

                        <?php echo e(Auth::User()->prenom); ?></h3>
                    <p class="text-muted text-center"><?php echo e(Auth::User()->role->label); ?></p>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Contact</b> <a class="float-right"><?php echo e(Auth::User()->telephone); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Pays</b> <a class="float-right"><?php echo e(Auth::User()->pays); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>ville</b> <a class="float-right"><?php echo e(Auth::User()->ville); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Association/leaderE Trans</b> <a class="float-right"><?php echo e(Auth::User()->association); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b> <a class="float-right"><?php echo e(Auth::User()->email); ?></a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal"
                        data-target="#viewventemodal"><b>Changer le mot de passe</b></a>
                    <div class="modal fade bd-example-modal-lg" id="viewventemodal" role="dialog">
                        <div class="modal-dialog modal-lg modal-content">
                            <div class="modal-header bg-light">
                                <h5 class="modal-title" id="exampleModalLabel">Changer le mot de passe</h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="row mb-2">
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-dark" href="">Modifier</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kamgafrank/Documents/projects/NKUL_VGB/resources/views/users/profile.blade.php ENDPATH**/ ?>