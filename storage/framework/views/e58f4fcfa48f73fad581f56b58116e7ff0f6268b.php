<!DOCTYPE html>
<html>

<!-- Mirrored from creativelayers.net/themes/jobhunt-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jun 2023 05:37:28 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="CreativeLayers">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('home/css/bootstrap-grid.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('home/css/icons.css')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('home/css/animate.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('home/css/style.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('home/css/responsive.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('home/css/chosen.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('home/css/colors/colors.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('home/css/bootstrap.css')); ?>" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('company/css.css')); ?>" />
    <link rel="stylesheet"
        href="<?php echo e(asset('home/maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css')); ?>" />
    <script>
        window.Laravel = <?php echo json_encode(
            [
                'csrfToken' => csrf_token(),
                'baseUrl' => url('/'),
            ],
            JSON_UNESCAPED_UNICODE,
        ); ?>;
    </script>

</head>

<body id="app">

    <div class="page-loading">
        <img src="<?php echo e(asset('home/images/loader.gif')); ?>" alt="" />
    </div>

    <div class="theme-layout" id="scrollup">

        
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(session()->get('Message.flash')): ?>
            <notyf :data="<?php echo e(json_encode(session()->get('Message.flash')[0])); ?>"></notyf>
        <?php endif; ?>
        <?php
            session()->forget('Message.flash');
        ?>
        <?php echo $__env->yieldContent('home'); ?>

        
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <script src="<?php echo e(asset('js/user.js')); ?>?t=<?php echo e(time()); ?>" defer></script>
    <script src="<?php echo e(asset('home/js/jquery.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('home/js/modernizr.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('home/js/script.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('home/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('home/js/wow.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('home/js/slick.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('home/js/parallax.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('home/js/select-chosen.js')); ?>" type="text/javascript"></script>

</body>

<!-- Mirrored from creativelayers.net/themes/jobhunt-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jun 2023 05:37:35 GMT -->

</html>
<?php /**PATH C:\Users\Hoa Tran\DATN\jobs\resources\views/layouts/index.blade.php ENDPATH**/ ?>