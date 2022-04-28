<!DOCTYPE html>
<html lang="zxx">


<head>
    <?php include 'templates/head.php' ?>

    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/search.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

</head>

<body class="inner-pages st-1 agents hp-6 full hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <?php include 'templates/header.php'; ?>
        <!-- Header Container / End -->
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-list featured portfolio blog">
            <div class="container-fluid">
                <section class="headings-2 pt-0 pb-0">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p><a href="index.php">Home </a> &nbsp;/&nbsp; <span>Danh Sách</span></p>
                                </div>
                                <h3>Danh sách BDS</h3>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Search Form -->
                <div class="col-12 px-0 parallax-searchs">
                    <div class="banner-search-wrap">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs_1">
                                <div class="rld-main-search">
                                    <div class="row">
                                        <div class="rld-single-input">
                                            <input type="text" name="keyword" placeholder="Nhập từ khóa...">
                                        </div>
                                        <div class="rld-single-select ml-22">
                                            <select class="select single-select">
                                            <option value="">Loại dự án</option>
                                                <option value="2">Chung cư</option>
                                                <option value="3">Shophouse</option>
                                                <option value="4">Villa / Resort</option>
                                                <option value="4">Biệt thự</option>
                                                <option value="4">Khác</option>
                                            </select>
                                        </div>
                                        <div class="rld-single-select">
                                            <select class="select single-select mr-0">
                                            <option value="">Khu vực</option>
                                                <option value="2">Hà Nội</option>
                                                <option value="3">Tp. HCM</option>
                                                <option value="3">Quảng Ninh</option>
                                                <option value="3">Thanh Hóa</option>
                                                <option value="3">Đà Nẵng</option>
                                                <option value="3">Bình Dương</option>
                                            </select>
                                        </div>
                                        <div class="dropdown-filter"><span>Nâng cao</span></div>
                                        <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                            <a class="btn btn-yellow" href="tim-kiem.php">Tìm kiếm</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="search-advance">
                                    <div class="explore__form-checkbox-list full-filter">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                <!-- Form Property Status -->
                                                <div class="form-group categories">
                                                    <div class="nice-select form-control wide" tabindex="0">
                                                        <span class="current"><i class="fa fa-home"></i>Hình thức</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected ">Bán Đứt</li>
                                                            <li data-value="2" class="option">Cho thuê</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ End Form Property Status -->
                                            </div>
                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                <!-- Form Bedrooms -->
                                                <div class="form-group beds">
                                                    <div class="nice-select form-control wide" tabindex="0">
                                                        <span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Phòng ngủ</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected">1</li>
                                                            <li data-value="2" class="option">2</li>
                                                            <li data-value="3" class="option">3</li>
                                                            <li data-value="3" class="option">4</li>
                                                            <li data-value="3" class="option">5</li>
                                                            <li data-value="3" class="option">6</li>
                                                            <li data-value="3" class="option">7</li>
                                                            <li data-value="3" class="option">8</li>
                                                            <li data-value="3" class="option">9</li>
                                                            <li data-value="3" class="option">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ End Form Bedrooms -->
                                            </div>
                                            <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                <!-- Form Bathrooms -->
                                                <div class="form-group bath">
                                                    <div class="nice-select form-control wide" tabindex="0">
                                                        <span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Phòng tắm / vệ sinh</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected">1</li>
                                                            <li data-value="2" class="option">2</li>
                                                            <li data-value="3" class="option">3</li>
                                                            <li data-value="3" class="option">4</li>
                                                            <li data-value="3" class="option">5</li>
                                                            <li data-value="3" class="option">6</li>
                                                            <li data-value="3" class="option">7</li>
                                                            <li data-value="3" class="option">8</li>
                                                            <li data-value="3" class="option">9</li>
                                                            <li data-value="3" class="option">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ End Form Bathrooms -->
                                            </div>
                                            <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                <!-- Price Fields -->
                                                <div class="main-search-field-2">
                                                    <!-- Area Range -->
                                                    <div class="range-slider">
                                                        <label>Diện tích</label>
                                                        <div id="area-range2" class="gomee-range-slider" data-min="0" data-max="1300" data-unit="m2"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <br>
                                                    <!-- Price Range -->
                                                    <div class="range-slider">
                                                        <label>Khoảng giá</label>
                                                        <div id="price-range1" class="gomee-range-slider" data-min="100000000" data-max="6000000000" data-unit="VNĐ" data-unit-pos="right" data-space="true"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                <!-- Checkboxes -->
                                                <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                    <input id="check-2" type="checkbox" name="check">
                                                    <label for="check-2">Điều Hòa</label>
                                                    <input id="check-3" type="checkbox" name="check">
                                                    <label for="check-3">Bể bơi</label>
                                                    <input id="check-5" type="checkbox" name="check">
                                                    <label for="check-5">Giặt là</label>
                                                    <input id="check-6" type="checkbox" name="check">
                                                    <label for="check-6">Gym</label>
                                                    <input id="check-7" type="checkbox" name="check">
                                                    <label for="check-7">Báo động</label>
                                                    <input id="check-8" type="checkbox" name="check">
                                                    <label for="check-8">Rèm cửa</label>
                                                </div>
                                                <!-- Checkboxes / End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                <!-- Checkboxes -->
                                                <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                    <input id="check-9" type="checkbox" name="check">
                                                    <label for="check-9">WiFi</label>
                                                    <input id="check-10" type="checkbox" name="check">
                                                    <label for="check-10">TV Cable</label>
                                                    <input id="check-11" type="checkbox" name="check">
                                                    <label for="check-11">Máy sấy</label>
                                                    <input id="check-12" type="checkbox" name="check">
                                                    <label for="check-12">Lò vi sóng</label>
                                                    <input id="check-13" type="checkbox" name="check">
                                                    <label for="check-13">Máy giặt</label>
                                                    <input id="check-14" type="checkbox" name="check">
                                                    <label for="check-14">Tủ lạnh</label>
                                                </div>
                                                <!-- Checkboxes / End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/ End Search Form -->
                <section class="headings-2 pt-0">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p class="font-weight-bold mb-0 mt-3">154 kết quả</p>
                                </div>
                            </div>
                        </div>
                        <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center">
                            <div class="input-group border rounded input-group-lg w-auto mr-4">
                                <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sắp xếp: </label>
                                <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01" name="sortby">
                                    <option selected>Top mua nhiều</option>
                                    <option value="1">Xem nhiều</option>
                                    <option value="2">Giá (từ thấp đến cao)</option>
                                    <option value="3">Giá (từ cao xuống thấp)</option>
                                </select>
                            </div>
                            <div class="sorting-options">
                                <a href="properties-full-list-1.html" class="change-view-btn lde"><i class="fa fa-th-list"></i></a>
                                <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Block heading end -->
                <div class="row featured portfolio-items">
                    <div class="item col-xxl-3 col-lg-4 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="chi-tiet-bds.php">Xem chi tiết</a><span class="category">Bất động sản</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="chi-tiet-bds.php" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button alt sale">Rao bán</div>
                                        <div class="homes-price">Hộ gia đình</div>
                                        <img src="images/feature-properties/fp-1.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="chi-tiet-bds.php" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0Gn-BILnYgo" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="chi-tiet-bds.php">Vinhomes Smart City</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="chi-tiet-bds.php">
                                        <i class="fa fa-map-marker"></i><span>Trung tâm mới phía Tây Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 P. Ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 P. Tắm</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>120 m2</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="chi-tiet-bds.php">7,24 tỷ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="footer">
                                    <a href="agent-details.html">
                                        <i class="fa fa-user"></i> Jhon Doe
                                    </a>
                                    <span>
                                        <i class="fa fa-calendar"></i> 2 months ago
                                    </span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="item col-xxl-3 col-lg-4 col-md-6 col-xs-12 people rent">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="chi-tiet-bds.php">Xem chi tiết</a><span class="category">Bất động sản</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="chi-tiet-bds.php" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button sale rent">Cho thuê</div>
                                        <div class="homes-price">Hộ gia đình</div>
                                        <img src="images/feature-properties/fp-2.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="chi-tiet-bds.php" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0Gn-BILnYgo" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="chi-tiet-bds.php">Vinhomes Smart City</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="chi-tiet-bds.php">
                                        <i class="fa fa-map-marker"></i><span>Trung tâm mới phía Tây Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 P. Ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 P. Tắm</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>120 m2</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="chi-tiet-bds.php">7,24 tỷ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xxl-3 col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="properties-details.html">Xem chi tiết</a><span class="category">Bất động sản</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="chi-tiet-bds.php" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button alt sale">Rao bán</div>
                                        <div class="homes-price">Hộ gia đình</div>
                                        <img src="images/feature-properties/fp-3.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="chi-tiet-bds.php" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0Gn-BILnYgo" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="chi-tiet-bds.php">Vinhomes Smart City</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="chi-tiet-bds.php">
                                        <i class="fa fa-map-marker"></i><span>Trung tâm mới phía Tây Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 P. Ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 P. Tắm</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>120 m2</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="chi-tiet-bds.php">7,24 tỷ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xxl-3 col-lg-4 col-md-6 col-xs-12 people landscapes rent">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="chi-tiet-bds.php">Xem chi tiết</a><span class="category">Bất động sản</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="chi-tiet-bds.php" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button sale rent">Cho thuê</div>
                                        <div class="homes-price">Hộ gia đình</div>
                                        <img src="images/feature-properties/fp-4.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="chi-tiet-bds.php" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0Gn-BILnYgo" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="chi-tiet-bds.php">Vinhomes Smart City</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i><span>Trung tâm mới phía Tây Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 P. Ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 P. Tắm</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>120 m2</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="chi-tiet-bds.php">7,24 tỷ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xxl-3 col-lg-4 col-md-6 col-xs-12 people sale">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="chi-tiet-bds.php">Xem chi tiết</a><span class="category">Bất động sản</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="chi-tiet-bds.php" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button alt sale">Rao bán</div>
                                        <div class="homes-price">Hộ gia đình</div>
                                        <img src="images/feature-properties/fp-7.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="chi-tiet-bds.php" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0Gn-BILnYgo" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="chi-tiet-bds.php">Vinhomes Smart City</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="chi-tiet-bds.php">
                                        <i class="fa fa-map-marker"></i><span>Trung tâm mới phía Tây Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 P. Ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 P. Tắm</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>120 m2</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="properties-details.html">7,24 tỷ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xxl-3 col-lg-4 col-md-6 col-xs-12 it2 web rent">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="chi-tiet-bds.php">Xem chi tiết</a><span class="category">Bất động sản</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="chi-tiet-bds.php" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button sale rent">Cho thuê</div>
                                        <div class="homes-price">Hộ gia đình</div>
                                        <img src="images/feature-properties/fp-6.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="chi-tiet-bds.php" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0Gn-BILnYgo" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="chi-tiet-bds.php">Vinhomes Smart City</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="chi-tiet-bds.php">
                                        <i class="fa fa-map-marker"></i><span>Trung tâm mới phía Tây Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 P. Ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 P. Tắm</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>120 m2</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="chi-tiet-bds.php">7,24 tỷ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xxl-3 col-lg-4 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="chi-tiet-bds.php">Xem chi tiết</a><span class="category">Bất động sản</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="chi-tiet-bds.php" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button sale rent">Cho thuê</div>
                                        <div class="homes-price">Hộ gia đình</div>
                                        <img src="images/feature-properties/fp-7.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="chi-tiet-bds.php" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0Gn-BILnYgo" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="chi-tiet-bds.php">Vinhomes Smart City</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="chi-tiet-bds.php">
                                        <i class="fa fa-map-marker"></i><span>Trung tâm mới phía Tây Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 P. Ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 P. Tắm</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>120 m2</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="chi-tiet-bds.php">7,24 tỷ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xxl-3 col-lg-4 col-md-6 col-xs-12 people rent">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="chi-tiet-bds.php">Xem chi tiết</a><span class="category">Bất động sản</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="chi-tiet-bds.php" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button sale rent">Cho thuê</div>
                                        <div class="homes-price">Hộ gia đình</div>
                                        <img src="images/feature-properties/fp-8.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="chi-tiet-bds.php" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0Gn-BILnYgo" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="chi-tiet-bds.php">Vinhomes Smart City</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="chi-tiet-bds.php">
                                        <i class="fa fa-map-marker"></i><span>Trung tâm mới phía Tây Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 P. Ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 P. Tắm</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>120 m2</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="chi-tiet-bds.php">7,24 tỷ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xxl-3 col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                        <div class="project-single no-mb" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="chi-tiet-bds.php">Xem chi tiết</a><span class="category">Bất động sản</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="chi-tiet-bds.php" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button sale rent">Cho thuê</div>
                                        <div class="homes-price">Hộ gia đình</div>
                                        <img src="images/feature-properties/fp-9.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="chi-tiet-bds.php" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0Gn-BILnYgo" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="chi-tiet-bds.php">Vinhomes Smart City</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="chi-tiet-bds.php">
                                        <i class="fa fa-map-marker"></i><span>Trung tâm mới phía Tây Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 P. Ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 P. Tắm</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>120 m2</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="chi-tiet-bds.php">7,24 tỷ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item col-xxl-3 col-lg-4 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="chi-tiet-bds.php">Xem chi tiết</a><span class="category">Bất động sản</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="chi-tiet-bds.php" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button sale rent">Cho thuê</div>
                                        <div class="homes-price">Hộ gia đình</div>
                                        <img src="images/feature-properties/fp-7.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="chi-tiet-bds.php" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0Gn-BILnYgo" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="chi-tiet-bds.php">Vinhomes Smart City</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="chi-tiet-bds.php">
                                        <i class="fa fa-map-marker"></i><span>Trung tâm mới phía Tây Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 P. Ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 P. Tắm</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>120 m2</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="chi-tiet-bds.php">7,24 tỷ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xxl-3 col-lg-4 col-md-6 col-xs-12 people rent">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="chi-tiet-bds.php">Xem chi tiết</a><span class="category">Bất động sản</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="chi-tiet-bds.php" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button sale rent">Cho thuê</div>
                                        <div class="homes-price">Hộ gia đình</div>
                                        <img src="images/feature-properties/fp-8.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="chi-tiet-bds.php" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0Gn-BILnYgo" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="chi-tiet-bds.php">Vinhomes Smart City</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="chi-tiet-bds.php">
                                        <i class="fa fa-map-marker"></i><span>Trung tâm mới phía Tây Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 P. Ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 P. Tắm</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>120 m2</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="chi-tiet-bds.php">7,24 tỷ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xxl-3 col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                        <div class="project-single no-mb" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="chi-tiet-bds.php">Xem chi tiết</a><span class="category">Bất động sản</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="chi-tiet-bds.php" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button sale rent">Cho thuê</div>
                                        <div class="homes-price">Hộ gia đình</div>
                                        <img src="images/feature-properties/fp-9.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="chi-tiet-bds.php" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0Gn-BILnYgo" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="chi-tiet-bds.php">Vinhomes Smart City</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="chi-tiet-bds.php">
                                        <i class="fa fa-map-marker"></i><span>Trung tâm mới phía Tây Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 P. Ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 P. Tắm</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>120 m2</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="chi-tiet-bds.php">7,24 tỷ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="..." class="pt-3">
                    <ul class="pagination grid-3">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Trước</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Sau</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->

        <!-- START FOOTER -->
        <?php include 'templates/footer.php'; ?>
        <!-- END FOOTER -->

        <!--register form -->
        <?php include 'templates/components/home/login-and-register-form.php'; ?>
        <!--register form end -->

        <!-- START PRELOADER -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div> -->
        <!-- END PRELOADER -->

        <?php include 'templates/js.php'; ?>

        <!-- ARCHIVES JS -->
        <script src="js/rangeSlider.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/aos2.js"></script>
        <script src="js/lightcase.js"></script>
        <script src="js/search.js"></script>
        <script src="js/light.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/searched.js"></script>

        <script src="js/range.js"></script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });
        </script>

    </div>
    <!-- Wrapper / End -->
</body>



</html>