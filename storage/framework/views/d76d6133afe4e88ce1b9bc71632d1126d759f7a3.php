
<?php $__env->startSection('home'); ?>
    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-featured-sec">
                            <div class="new-slide">
                                <img src="<?php echo e(asset('home/images/resource/vector-1.png')); ?>">
                            </div>
                            <div class="job-search-sec">
                                <div class="job-search">
                                    <h3>The Easiest Way to Get Your New Job</h3>
                                    <span>Find Jobs, Employment & Career Opportunities</span>
                                    <form action="<?php echo e(route('home.search')); ?>">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <input type="text" name="key" class="form-control"
                                                        placeholder="Job title, keywords or company name" />
                                                    <i class="la la-keyboard-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <select class="form-control" name="location" style="height: 62px;">
                                                        <option value="">....Chọn địa chỉ....</option>
                                                        <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <i class="la la-map-marker"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                                <button type="submit"><i class="la la-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="scroll-to">
                                <a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section id="scroll-here">
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Việc làm nổi bật</h2>
                            <span>Các nhà tuyển dụng hàng đầu đã sử dụng công việc và nhân tài.</span>
                        </div><!-- Heading -->
                        <div class="job-listings-sec" id="paginated-list">
                            <?php $__currentLoopData = $job; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="job-listing render-job-search">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="<?php echo e(asset($item->logo)); ?>" alt="" />
                                        </div>
                                        <h3><a href="<?php echo e(route('client.detail', [$item->slug, $item->id])); ?>"
                                                title=""><?php echo e($item->title); ?></a></h3>
                                        <span><a
                                                href="<?php echo e(route('company.detail', $item->idCompany)); ?>"><?php echo e($item->nameCompany); ?></a></span>
                                    </div>
                                    <span class="job-lctn"><i
                                            class="la la-map-marker"></i><?php echo e($item->getlocation->name); ?></span>
                                    <span class="fav-job"><?php echo e($item->end_job_time); ?></span>
                                    <span class="job-is ft"><?php echo e($item->getTime_work->name); ?></span>
                                </div><!-- Job -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 job-list browse-all-cat">
                                <span class="text-center p-3 ">
                                    <div id="pagination-numbers" style="margin-bottom: 20px">
                                    </div>
                                </span>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="block double-gap-top double-gap-bottom">
            <div data-velocity="-.1"
                style="background: url(<?php echo e(asset('home/images/resource/parallax1.jpg')); ?>) repeat scroll 50% 422.28px transparent;"
                class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text-block">
                            <h3>Make a Difference with Your Online Resume!</h3>
                            <span>Your resume in minutes with JobHunt resume assistant is ready!</span>
                            <a href="" title="">Create an Account</a>
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
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Ngành nghề trọng điểm</h2>
                            <span><?php echo e($countJob); ?> Việc làm hiện có</span>
                        </div><!-- Heading -->
                        <div class="cat-sec">

                            <div class="row no-gape">
                                <?php $__currentLoopData = $majors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="p-category">
                                            <a href="<?php echo e(route('client.nganh-nghe.show', $value->id)); ?>" title="">
                                                <i class="<?php echo e($value->image_majors); ?>"></i>
                                                <span><?php echo e($value->name); ?></span>
                                                <p>(<?php echo e(count($value->majors)); ?> Việc làm)</p>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="scroll-here">
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Việc làm hấp dẫn</h2>
                            <span>Các nhà tuyển dụng hàng đầu đã sử dụng công việc và nhân tài.</span>
                        </div><!-- Heading -->
                        <div class="job-listings-sec">
                            <?php $__currentLoopData = $jobAttractive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="<?php echo e(asset($item->logo)); ?>" alt="" />
                                        </div>
                                        <h3><a href="<?php echo e(route('client.detail', [$item->slug, $item->id])); ?>"
                                                title=""><?php echo e($item->title); ?></a></h3>
                                        <span style="margin-left: 1px !important"><a
                                                href="<?php echo e(route('company.detail', $item->idCompany)); ?>"><?php echo e($item->nameCompany); ?></a></span>
                                    </div>
                                    <span class="job-lctn"><i
                                            class="la la-map-marker"></i><?php echo e($item->getlocation->name); ?></span>
                                    <span class="fav-job"><?php echo e($item->end_job_time); ?></span>
                                    <span class="job-is ft"><?php echo e($item->getTime_work->name); ?></span>
                                </div><!-- Job -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="box-next-index text-center mt-5">
                    <a href="<?php echo e(route('home.search')); ?>" class="btn btn-primary">Xem tất cả</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="block">
            <div data-velocity="-.1"
                style="background: url(<?php echo e(asset('home/images/resource/parallax3.jpg')); ?>) repeat scroll 50% 422.28px transparent;"
                class="parallax scrolly-invisible no-parallax"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Tin tức</h2>
                        </div><!-- Heading -->
                        <div class="blog-sec">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="" title=""><img
                                                    src="<?php echo e(asset('home/images/resource/b1.jpg')); ?>"
                                                    alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="" title="">March 29, 2017</a>
                                                <a href="" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="" title="">Attract More Attention Sales And
                                                    Profits</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an
                                                employee, volunteering, </p>
                                            <a href="" title="">Read More <i
                                                    class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="" title=""><img
                                                    src="<?php echo e(asset('home/images/resource/b2.jpg')); ?>"
                                                    alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="" title="">March 29, 2017</a>
                                                <a href="" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="" title="">11 Tips to Help You Get New
                                                    Clients</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an
                                                employee, volunteering, </p>
                                            <a href="" title="">Read More <i
                                                    class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="" title=""><img
                                                    src="<?php echo e(asset('home/images/resource/b3.jpg')); ?>"
                                                    alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="" title="">March 29, 2017</a>
                                                <a href="" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="" title="">An Overworked Newspaper
                                                    Editor</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an
                                                employee, volunteering, </p>
                                            <a href="" title="">Read More <i
                                                    class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text">
                            <h3>Liên hệ với chúng tôi</h3>
                            <span>Chúng tôi ở đây để giúp đỡ. Kiểm tra Câu hỏi thường gặp của chúng tôi, gửi email cho chúng
                                tôi hoặc gọi cho chúng tôi theo số 1 (800) 555-5555</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hoa Tran\DATN\jobs\resources\views/index.blade.php ENDPATH**/ ?>