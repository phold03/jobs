
    <style>
        .name {
            font-size: 22px;
            font-weight: bold
        }

        .idd {
            font-size: 14px;
            font-weight: 600
        }

        .idd1 {
            font-size: 12px
        }

        .number {
            font-size: 22px;
        }

        .follow {
            font-size: 12px;
            font-weight: 500;
        }

        .btn1 {
            height: 40px;
            width: 150px;
           
        }

        .text span {
            font-size: 13px;
            font-weight: 500
        }

        .icons i {
            font-size: 19px
        }

        hr .new1 {
            border: 1px solid
        }

    </style>
<<<<<<< HEAD
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Thông tin cá nhân</h5>
            <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                <div class="card p-4">
                    <div class="  align-items-center"> <button
                            class="btn btn-secondary"> <img src="{{ Auth::guard('user')->user()->images }}" height="100"
                                width="100" /></button>
                        <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span
                                class="number">{{ $countJob }} <span class="follow">Bài
                                    đăng</span></span> </div>
                        <div class=" d-flex mt-2"> <a href=""><i class="fas fa-edit"></i></a> </div>
                        <div class="text mt-3 text-center">
                            
                        </div>
=======
    <div class="custom-card">
    <div class="custom-card-body">
        <h5 class="custom-card-title fw-semibold mb-4">Thông tin cá nhân</h5>
        <div class="custom-container mt-4 mb-4 p-3 d-flex justify-content-center">
            <div class="custom-card p-4">
                <div class="custom-image d-flex flex-column justify-content-center align-items-center">
                    <button class="btn btn-secondary">
                        <img src="{{ Auth::guard('user')->user()->images }}" height="100" width="100" />
                    </button>
                    <span class="custom-name mt-3">{{ Auth::guard('user')->user()->name }}</span>
                    <span class="custom-idd">@{{ Auth::guard('user')->user()->slug }}</span>
                    <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                        <span class="custom-number">{{ $countJob }} <span class="follow">Bài đăng</span></span>
                    </div>
                    <div class="custom-d-flex mt-2">
                        <a href=""><i class="fas fa-edit"></i></a>
                    </div>
                    <div class="custom-text mt-3 text-center">
                        <span>Cảm ơn bạn đã tin tưởng và sử dụng ứng dụng của chúng tôi<br><br>
                            Chúng tôi luôn luôn năng cấp hệ thống thường xuyên để giúp người dùng có trải nghiệm tốt
                            nhất</span>
>>>>>>> 1da27c73eba5581f0ab28d598716af6b2cd65587
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD

=======
</div>

@endsection
>>>>>>> 1da27c73eba5581f0ab28d598716af6b2cd65587
