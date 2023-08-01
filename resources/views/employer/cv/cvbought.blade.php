<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .card-box {
            padding: 20px;
            border-radius: 3px;
        }

        .social-links li a {
            border-radius: 50%;
            color: rgba(121, 121, 121, .8);
            display: inline-block;
            height: 30px;
            line-height: 27px;
            justify-content: center;
        }

        .social-links li a:hover {
            color: #797979;
        }

        .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        .text-pink {
            color: #ff679b !important;
        }
       
    </style>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Danh sách hồ sơ đã mua</h5>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="member-card pt-2 pb-2">
                                    <div class="">
                                        <p class="text-muted"> </span><span><a
                                                    href="{{ route('employer.search.show', $item->id) }}"
                                                    class="text-pink"></a></span></p>
                                    </div>
                                    <a href="{{ route('employer.search.show', $item->profileCv->id) }}"
                                        class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Xem chi
                                        tiết</a>
                                </div>
                            </div>
                        </div>
                    <!-- end col -->
                </div>
            </div>
            <!-- container -->
        </div>
    </div>
