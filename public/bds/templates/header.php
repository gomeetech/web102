<?php
$style = isset($header_type) && $header_type?$header_type:1;
?>
<header id="header-container" <?php if($style == 2): ?> class="header head-tr" <?php endif; ?>>
    <!-- Header -->
    <div id="header"<?php if($style == 2): ?>  class="head-tr bottom" <?php endif; ?>>
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="index.php">
                        <?php if($style == 2): ?>
                            <img src="images/logo_white.png" data-sticky-logo="images/logo_orange.png" alt="">
                        <?php else: ?>
                            <img src="images/logo_orange.png" alt="">
                        <?php endif; ?>
                    </a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 <?php if($style == 2): ?> head-tr <?php endif; ?> ">
                    <ul id="responsive">
                        <li>
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li>
                            <a href="gioi-thieu.php">Giới thiệu</a>
                        </li>
                        
                        <!-- <li><a href="#">Danh mục</a>
                            <ul>
                                <li><a href="#">Đang rao bán</a>
                                    <ul>
                                        <li><a href="rao-ban.php">Danh mục 1</a></li>
                                        <li><a href="rao-ban.php">Danh mục 2</a></li>
                                        <li><a href="rao-ban.php">Danh mục 3</a></li>
                                        <li><a href="rao-ban.php">Danh mục 4</a></li>
                                        <li><a href="rao-ban.php">Danh mục 5</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">Cho Thuê</a>
                                    <ul>
                                        <li><a href="cho-thue.php">Cho Thuê 1</a></li>
                                        <li><a href="cho-thue.php">Cho Thuê 2</a></li>
                                        <li><a href="cho-thue.php">Cho Thuê 3</a></li>
                                        <li><a href="cho-thue.php">Cho Thuê 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="tin-tuc.php">Blog</a>
                        </li>
                        <li><a href="lien-he.php">Liên Hệ</a></li>
                        <!-- <li class="d-none d-xl-none d-block d-lg-block"><a href="login.php">Đăng nhập</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="register.php">Đăng Ký</a></li> -->
                        <!-- <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="#" class="button border btn-lg btn-block text-center">Đề xuất Hợp tác<i class="fas fa-laptop-house ml-2"></i></a></li> -->
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->
            <!-- Right Side Content / End -->
            <div class="header-user-menu user-menu add">
                <div class="header-user-name">
                    <!-- <span><img src="images/testimonials/ts-1.jpg" alt=""></span>  -->
                    <i class="fa fa-user account-icon"></i> 
                    <i class="d-none text-name">Đăng nhập</i>
                </div>
                <ul>
                    <li><a href="#"> Cập nhật thông tin</a></li>
                    <!-- <li><a href="#"> Đăng bán / cho thuê</a></li> -->
                    <!-- <li><a href="#"> Đổi mật khẩu</a></li> -->
                    <li><a href="#">Đăng Xuất</a></li>
                </ul>
            </div>
            <!-- Right Side Content / End -->

            <!-- Right Side Content / End -->

            <!-- <div class="right-side d-none d-none d-lg-none d-xl-flex"> -->
                <!-- Header Widget -->
                <!-- <div class="header-widget"> -->
                    <!-- <a href="#" class="button border">Đăng ký<i class="fas fa-laptop-house ml-2"></i></a> -->
                <!-- </div> -->
                <!-- Header Widget / End -->
            <!-- </div> -->
            <!-- Right Side Content / End -->

            <!-- <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0"> -->
                <!-- Header Widget -->
                <!-- <div class="header-widget sign-in"> -->
                    <!-- <div class="show-reg-form modal-open"><a href="#">Đăng nhập</a></div> -->
                <!-- </div> -->
                <!-- Header Widget / End -->
            <!-- </div> -->
            <!-- Right Side Content / End -->

            <!-- lang-wrap-->
            <!-- <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                <div class="lang-wrap">
                    <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>ENG</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                    <ul class="lang-tooltip lang-action no-list-style">
                        <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                        <li><a href="#" data-lantext="Fr">Francais</a></li>
                        <li><a href="#" data-lantext="Es">Espanol</a></li>
                        <li><a href="#" data-lantext="De">Deutsch</a></li>
                    </ul>
                </div>
            </div> -->
            <!-- lang-wrap end-->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>