
<?php $__env->startSection('main-seeker'); ?>
    <div class="card">
        <div class="card-body row">
            <h5 class="card-title fw-semibold mb-4">Việc làm đã lưu</h5>
            <?php $__currentLoopData = $love; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="lists">
                    <link rel="stylesheet"
                        href="https://static.topcv.vn/v4/css/components/desktop/jobs/job-list-default.de7103438670751b.css">
                    <div class="job-list-default job-list-saved">
                        <div class="job-item-default job-ta">
                            <div class="avatar">
                                <a target="_blank"
                                    href="https://www.topcv.vn/viec-lam/thuc-tap-sinh-lap-trinh-website-php-wordpress/853861.html">
                                    <img src="<?php echo e($item->logo); ?>" class="w-100">
                                </a>
                            </div>
                            <div class="body">
                                <div class="title-block">
                                    <h3 class="title">
                                        <a target="_blank" href="<?php echo e(route('client.detail', [$item->slug, $item->id])); ?>">
                                            <span data-toggle="tooltip" title="" data-placement="top"
                                                data-container="body"
                                                data-original-title="Thực Tập Sinh Lập Trình Website (PHP/Wordpress)"><?php echo e($item->title); ?></span>
                                            <span class="icon-verified-employer level-five">
                                                <i class="fa-solid fa-circle-check"></i></span>
                                        </a>
                                    </h3>
                                    <label class="title-salary">
                                        <?php echo e($item->namewage); ?>

                                    </label>
                                </div>
                                <a class="company"
                                    href="https://www.topcv.vn/cong-ty/cong-ty-co-phan-global-online-branding/14299.html"
                                    target="_blank"><?php echo e($item->nameCompany); ?></a>
                                <label class="time_save_job"><?php echo e($item->created_at); ?></label>
                                <div class="info">
                                    <div class="label-content">
                                        <label class="address"><?php echo e($item->nameLocation); ?></label>
                                    </div>
                                    <div class="icon">
                                        <a href="<?php echo e(route('client.detail', [$item->slug, $item->id])); ?>"
                                            class="btn btn-apply-now">
                                            <span>Ứng tuyển</span>
                                        </a>
                                        <div id="box-save-job-853861" class="box-save-job is-page-job-save">
                                            <a href="javascript:void(0)"
                                                onclick="deleteLOveCv(JSON.parse('<?php echo e($item); ?>'))"
                                                class="btn-unsave unsave text-red">
                                                <span id="save-job-loading" style="display: none;">
                                                    <img src="https://www.topcv.vn/v3/images/ap-loading.gif" alt=""
                                                        style="width: 20px">
                                                </span>
                                                <i class="fas fa-trash"></i> Bỏ lưu
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <script>
        function deleteLOveCv(id) {
            axios.post('/viec-lam/favourite/' + id.id).then(function(res) {
                location.reload();
            }).catch(() => {
                location.reload();
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('seeker.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hoa Tran\DATN\jobs\resources\views/seeker/love/index.blade.php ENDPATH**/ ?>