
<?php $__env->startSection('main-seeker'); ?>
    <div class="card">
        <div class="card-body row">
            <h5 class="card-title fw-semibold mb-4">CV đã tải lên</h5>
            <?php $__currentLoopData = $cv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="box-cv col-sm-6">
                    <div class="img">
                        <img src="https://dxwd4tssreb4w.cloudfront.net/image/3c049c5a64e59f365cd7ca1724a326b6" alt="">
                    </div>
                    <div class="box-info">
                        <h4 class="title-cv mt-2"><a href="/<?php echo e($item->file_cv); ?>" target="_blank"><?php echo e($item->title); ?></a>
                        </h4>
                        <ul class="action d-flex">
                            <li><a href="" class="btn btn-sm btn-primary bold tcv-tooltip"><i
                                        class="fa-solid fa-turn-up"></i> Tải xuống</a></li>
                            <li><a href="<?php echo e(route('users.file.destroy', $item->id)); ?>"><i
                                        class="fas fa-trash-alt icon-delete-cv"></i></a></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if(count($cv) < 2): ?>
                <a href="<?php echo e(route('users.file.create')); ?>">
                    <div class="plus-box col-sm-6 mt-4 ml-5">
                        <span class="plus-sign" style="font-weight: bold; margin-top: -20px">+</span>
                    </div>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="card">
        <div class="card-body row">
            <h5 class="card-title fw-semibold mb-4">Tạo cv theo mẫu của mặc định</h5>
            <?php if(!$profileCv): ?>
                <a href="<?php echo e(route('users.file.createCv')); ?>">
                    <div class="plus-box col-sm-6 mt-4 ml-5">
                        <span class="plus-sign" style="font-weight: bold; margin-top: -20px">+</span>
                    </div>
                </a>
            <?php else: ?>
                <div class="box-cv col-sm-6">
                    <div class="img">
                        <img src="https://dxwd4tssreb4w.cloudfront.net/image/3c049c5a64e59f365cd7ca1724a326b6"
                            alt="">
                    </div>
                    <div class="box-info">
                        <h4 class="title-cv mt-2"><a href="<?php echo e(route('users.file.createCv')); ?>"><?php echo e($profileCv->title); ?></a>
                        </h4>
                        <ul class="action d-flex">
                            <li><a href="<?php echo e(route('users.file.createCv')); ?>"><i class="far fa-edit icon-delete-cv"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('seeker.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hoa Tran\DATN\jobs\resources\views/seeker/cv/index.blade.php ENDPATH**/ ?>