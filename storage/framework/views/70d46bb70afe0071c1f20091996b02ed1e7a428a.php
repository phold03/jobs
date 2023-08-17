
<?php $__env->startSection('home'); ?>
    <section class="overlape">
        <div class="block no-padding">
            <div data-velocity="-.1"
                style="background: url(<?php echo e(asset('home/images/resource/mslider1.jpg')); ?>) repeat scroll 50% 422.28px transparent;"
                class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3><?php echo e($job->title); ?></h3>
                            <div class="job-statistic">
                                <span><?php echo e($job->getTime_work->name); ?></span>
                                <p><i class="la la-map-marker"></i> <?php echo e($job->getlocation->name); ?></p>
                                <p><i class="la la-calendar-o"></i><?php echo e($job->getExperience->name); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 column">
                        <div class="job-single-sec">
                            <div class="job-single-head">
                                <div class="job-thumb"> <img src="<?php echo e(asset($job->logo)); ?>" alt="" /> </div>
                                <div class="job-head-info">
                                    <h4><?php echo e($job->title); ?></h4>
                                    <span><a
                                            href="<?php echo e(route('company.detail', $job->idCompany)); ?>"><?php echo e($job->nameCompany); ?></a></span>
                                    <p><i class="la la-envelope-o"></i> <?php echo e($job->emailCompany); ?></p>
                                </div>
                            </div><!-- Job Head -->
                            <div class="job-details">
                                <h3>Mô tả công việc</h3>
                                <p><?php echo $job->describe; ?></p>
                                <h3>Kiến thức, kỹ năng và khả năng cần thiết</h3>
                                <p><?php echo $job->candidate_requirements; ?></p>
                                <h3>Phúc lợi</h3>
                                <p><?php echo $job->benefit; ?></p>
                            </div>
                            <div class="share-bar">
                                <span>Share</span><a href="#" title="" class="share-fb"><i
                                        class="fa fa-facebook"></i></a><a href="#" title=""
                                    class="share-twitter"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="recent-jobs">
                                <h3>Công việc liên quan</h3>
                                <div class="job-list-modern">
                                    <div class="job-listings-sec no-border">
                                        <?php $__currentLoopData = $rules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="job-listing wtabs">
                                                <div class="job-title-sec">
                                                    <div class="c-logo"> <img src="<?php echo e(asset($rule->logo)); ?>"
                                                            alt="" />
                                                    </div>
                                                    <h3><a href="<?php echo e(route('client.detail', [$rule->slug, $rule->id])); ?>"
                                                            title=""><?php echo e($rule->title); ?></a></h3>
                                                    <div class="job-lctn"><i
                                                            class="la la-map-marker"></i><?php echo e($rule->address); ?>

                                                    </div>
                                                </div>
                                                <div class="job-style-bx">
                                                    <span class="job-is ft"><?php echo e($rule->getTime_work->name); ?></span>
                                                    <i><?php echo e($rule->end_job_time); ?></i>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="apply-job-for-checker">
                            <?php if(Auth::guard('user')->check()): ?>
                                <?php if($checkJobTrue == 1): ?>
                                    <a class="apply-thisjob" href="#" style="background: #8b91dd; color: #fff"><i
                                            class="la la-paper-plane"></i>Đã ứng tuyển</a>
                                <?php else: ?>
                                    <a class="apply-thisjob" href="#" data-toggle="modal"
                                        data-target="#exampleModal"><i class="la la-paper-plane"></i>Nộp đơn</a>
                                <?php endif; ?>
                                <div class="apply-alternative btn-like" style="cursor: pointer">
                                    <span><i class="fa fa-heart icon-save-cv"
                                            id="<?php echo e($job->id . ',' . $checklove); ?>"></i>Lưu</span>
                                <?php else: ?>
                                    <a class="apply-thisjob" href="#"><i class="la la-paper-plane"></i>Nộp đơn</a>
                            <?php endif; ?>
                        </div>
                        <div class="job-overview">
                            <h3>Tổng quan về công việc</h3>
                            <ul>
                                <li><i class="la la-money"></i>
                                    <h3>Mức lương đề xuất</h3><span><?php echo e($job->getWage->name); ?></span>
                                </li>
                                <li><i class="la la-mars-double"></i>
                                    <h3>Giới tính</h3>
                                    <?php if($job->sex == 0): ?>
                                        <span>Tất cả</span>
                                    <?php else: ?>
                                        <span><?php echo e($job->sex); ?></span>
                                    <?php endif; ?>
                                </li>
                                <li><i class="la la-puzzle-piece"></i>
                                    <h3>Hình thức làm việc</h3><span><?php echo e($job->getwk_form->name); ?></span>
                                </li>
                                <li><i class="la la-shield"></i>
                                    <h3>Kinh nghiệm</h3><span><?php echo e($job->getExperience->name); ?></span>
                                </li>
                                <li><i class="la la-line-chart "></i>
                                    <h3>Trình độ học vẫn</h3><span><?php echo e($job->getLevel->name); ?></span>
                                </li>
                                <li><i class="la la-calendar-o"></i>
                                    <h3>Hạn nộp hồ sơ</h3><span><?php echo e($job->end_job_time); ?></span>
                                </li>
                            </ul>
                        </div><!-- Job Overview -->
                        <div class="job-location">
                            <h3>Nơi làm việc</h3>
                            <div class="job-lctn-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d926917.0482572999!2d-104.57738594649922!3d40.26036964524562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2s!4v1513784737244"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ứng tuyền <?php echo e($job->title); ?></h5>
                </div>
                <div class="modal-body">
                    <up-cv
                        :data="<?php echo e(json_encode([
                            'cv' => $cv,
                            'urlStore' => route('client.upcv'),
                            'jobId' => $job->id,
                        ])); ?>">
                    </up-cv>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hoa Tran\DATN\jobs\resources\views/jobDetail.blade.php ENDPATH**/ ?>