 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .card-box {
            padding: 20px;
            border-radius: 3px;
            margin-bottom: 30px;
            align-items: center;
            justify-content: center;
            background-color: #fff;
        }

        .social-links li a {
            border-radius: 50%;
            display: inline-block;
            height: 30px;
            line-height: 27px;
            border: 2px solid rgba(121, 121, 121, .5);
        }

        .social-links li a:hover {
            color: #797979;
        }

        .thumb-lg {
            height: 88px;
            width: 88px;
        }
        .btn-rounded {
            border-radius: 2em;
        }

        .text-muted {
            color: #98a6ad !important;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Danh sách ứng viên</h5>
        </div>
        <div class="form-search-cv">
        </div>
        <div class="content">
            <div class="container">
                <div class="row"> 
                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="member-card pt-2 pb-2">
                                    <div class="thumb-lg member-thumb mx-auto" style="width: 200px;">
                                        <img src="{{ asset($item->images) }}" class="rounded-circle img-thumbnail"
                                            alt="profile-image">
                                    </div>
                                    <div class="mt-2">
                                        <h4>Name</h4>
                                        <p class="text-muted"> </span><span><a
                                                    href="{{ route('employer.search.show', $item->id) }}"
                                                    class="text-pink">Major</a></span></p>
                                    </div>
                                    <a href="{{ route('employer.search.show', $item->id) }}"
                                        class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light mb-4">Xem chi
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