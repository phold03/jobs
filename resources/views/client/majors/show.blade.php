
    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    
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
                            <span>Tìm thấy 1 công việc</span>
                        </div><!-- Heading -->
                        <div class="job-listings-sec" id="paginated-list">
                                <div class="job-listing render-job-search">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="{{ asset($item->logo) }}" alt="" />
                                        </div>
                                        <h3><a href="{{ route('client.detail', [$item->slug, $item->id]) }}"
                                                title=""></a></h3>
                                        <span></span>
                                    </div>
                                    <span class="job-lctn"><i class="la la-map-marker"></i></span>
                                    <span class="fav-job"><span>
                                    <span class="job-is ft"></span>
                                </div><!-- Job -->
                        
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
