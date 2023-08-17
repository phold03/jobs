<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('employer/images/logos/favicon.png')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('employer/css/styles.min.css')); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="<?php echo e(asset('asset/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="<?php echo e(asset('js/user.js')); ?>?t=<?php echo e(time()); ?>" defer></script>


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
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <?php echo $__env->make('seeker.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <?php echo $__env->make('seeker.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--  Header End -->
            <div class="container-fluid">
                <?php if(session()->get('Message.flash')): ?>
                    <notyf :data="<?php echo e(json_encode(session()->get('Message.flash')[0])); ?>"></notyf>
                <?php endif; ?>
                <?php
                    session()->forget('Message.flash');
                ?>
                <!--  Row 1 -->
                <?php echo $__env->yieldContent('main-seeker'); ?>
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                            class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a
                            href="https://themewagon.com">ThemeWagon</a>
                    </p>
                </div>
                <div class="loading-div hidden">
                    <div class="loader-img"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('employer/libs/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('employer/libs/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('employer/js/sidebarmenu.js')); ?>"></script>
    <script src="<?php echo e(asset('employer/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(asset('employer/libs/apexcharts/dist/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('employer/libs/simplebar/dist/simplebar.js')); ?>"></script>
    <script src="<?php echo e(asset('employer/js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo e(asset('asset/js/demo/datatables-demo.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\Hoa Tran\DATN\jobs\resources\views/seeker/layout/index.blade.php ENDPATH**/ ?>