
<?php $__env->startSection('main-seeker'); ?>
    <div class="row">
        <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Sales Overview</h5>
                        </div>
                        <div>
                            <select class="form-select">
                                <option value="1">March 2023</option>
                                <option value="2">April 2023</option>
                                <option value="3">May 2023</option>
                                <option value="4">June 2023</option>
                            </select>
                        </div>
                    </div>
                    <div id="chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Yearly Breakup -->
                    <div class="card overflow-hidden">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-9 fw-semibold">Thông tin cá nhân</h5>
                            <div class="row align-items-center">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-avatar">
                                            <img src="<?php echo e(asset(Auth::guard('user')->user()->images)); ?>" alt=""
                                                style=" border-radius: 50%;
                                                height: 83px;
                                                max-width: 150px;
                                                width: 83px;">
                                        </div>
                                        <div class="text-center">
                                            <input type="file" name="avatar" style="display: none;" id="img-avatar">
                                            <a href="javascript:void(0)"
                                                style="font-size: 11px; padding: 3px 5px;margin: 6px 0px; color: #777; font-style: italic;"
                                                data-target="#upload-profile-avatar" data-toggle="modal"
                                                id="btn-upload-avatar">
                                                Cập nhật ảnh
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>Chào bạn trở lại,</div>
                                        <h4 class="profile-fullname"
                                            style="-webkit-line-clamp: 2;
                                        -webkit-box-orient: vertical;
                                        color: #212f3f;
                                        font-size: 20px;
                                        font-weight: 700;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        overflow: hidden;
                                        overflow-wrap: break-word;
                                        position: relative;
                                        text-overflow: ellipsis;">
                                            <?php echo e(Auth::guard('user')->user()->name); ?></h4>
                                        <div class="account-type vip">
                                            <span
                                                style="background-color: gray;    border-radius: 2px;
                                            color: #fff;
                                            display: inline-block;
                                            font-size: 12px;
                                            padding: 3px 7px;">
                                                Tài khoản đã xác thực
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <btn-toggle
                                        :data="<?php echo e(json_encode([
                                            'profileCv' => $profileCv,
                                            'experience' => $experience,
                                            'wage' => $wage,
                                            'skill' => $skill,
                                            'majors' => $majors,
                                            'location' => $location,
                                            'jobSeeker' => $jobSeeker,
                                            'skillSeeker' => $skillSeeker,
                                        ])); ?>">
                                    </btn-toggle>
                                    <span class="job-waiting-status-text job-off-show ml-2">
                                        <strong class="text-red">Trạng thái tìm việc</strong>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Monthly Earnings -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row alig n-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-9 fw-semibold">Số lượng nhà tuyển dụng xem hồ sơ </h5>
                                    <h4 class="fw-semibold mb-3">$6,820</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="mb-4">
                        <h5 class="card-title fw-semibold">Lịch sử tìm kiếm</h5>
                    </div>
                    <?php if($keySearch): ?>
                        <ul class="timeline-widget mb-0 position-relative mb-n5">
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-desc fs-3 text-dark mt-n1 p-2">
                                    <?php $__currentLoopData = $keySearch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(route('home.search')); ?>?key=<?php echo e($item->key); ?>" class="border"
                                            style="margin-left: 10px"><?php echo e($item->key); ?>(<?php echo e($item->count); ?>)</a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </li>
                        </ul>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Công việc đã ứng tuyển</h5>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">#</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Công việc</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Địa chỉ</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Trạng thái</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"></h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $apply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">1</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?php echo e($item->title); ?></h6>
                                            <span class="fw-normal"><?php echo e($item->getMajors->name); ?></span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal"><?php echo e($item->getlocation->name); ?></p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <?php if($item->status == 0): ?>
                                                    <span class="badge bg-danger rounded-3 fw-semibold"
                                                        style="font-size: 12px">chưa xem</span>
                                                <?php endif; ?>
                                                <?php if($item->status == 1): ?>
                                                    <span class="badge bg-primary rounded-3 fw-semibold"
                                                        style="font-size: 12px">đã xem</span>
                                                <?php endif; ?>
                                                <?php if($item->status == 2): ?>
                                                    <span class="badge bg-dark rounded-3 fw-semibold mb-2"
                                                        style="font-size: 12px;">bị hủy</span>
                                                    <br>
                                                    <a href="#"
                                                        onclick="Reason(JSON.parse('<?php echo e($item); ?>'))">Lý
                                                        do từ chối</a>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <a href="<?php echo e(route('client.detail', [$item->slug, $item->id])); ?>"
                                                class="fw-semibold mb-0"><i class="fas fa-eye"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalReasonCv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lý do
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="title">
                        <span id="dataReasonCv"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        async function Reason(id) {
            const url = '/employers/new/get-data-reason/' + id.id;
            await axios.get(url).then(function(res) {
                $('#dataReasonCv').text(res.data.data.content);
            })
            $('#modalReasonCv').modal('show');
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('seeker.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hoa Tran\DATN\jobs\resources\views/seeker/index.blade.php ENDPATH**/ ?>