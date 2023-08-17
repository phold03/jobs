
<?php $__env->startSection('main-seeker'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('asset/formCv/style.css')); ?>">
    <create-form-cv
        :model="<?php echo e(json_encode([
            'urlStore' => route('users.file.createFormCv'),
            'skill' => $skill,
            'project' => $project,
            'user' => $user,
            'user_name' => $user_name,
            'level' => $level,
            'app' => $app,
        ])); ?>">
    </create-form-cv>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('seeker.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hoa Tran\DATN\jobs\resources\views/seeker/cv/createFormCv.blade.php ENDPATH**/ ?>