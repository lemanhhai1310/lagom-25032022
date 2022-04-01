<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php $bg = 'images/BG.png' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__section1 uk-section">
    <div class="uk-container uk-container-large uk-container-expand-right">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-auto@m">
                <div class="home__section1__boxLeft">
                    <div class="home__section1__boxLeft__item">
                        <div class="home__section1__boxLeft__title">Lagom Studio</div>
                        <div class="home__section1__boxLeft__txt1">Architecture & Interior</div>
                    </div>
                    <div class="home__section1__boxLeft__item">
                        <div class="home__section1__boxLeft__txt2">Lagom là một trong những đơn vị uy tín hoạt động trong lĩnh vực tư vấn thiết kế, sản xuất và thi công nội ngoại thất. Luôn lấy sự hài lòng của khách hàng và chất lượng các công trình là mục tiêu hướng tới.</div>
                    </div>
                    <div class="home__section1__boxLeft__item">
                        <a href="" class="home__section1__boxLeft__btnMore uk-button uk-button-default"><span>Xem thêm</span></a>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="home__section1__video uk-cover-container home__section1__radius" uk-toggle="cls: uk-border-pill; mode: media; media: @m">
                    <canvas width="1920" height="1080"></canvas>
                    <video uk-toggle="cls: uk-border-pill; mode: media; media: @m" class="home__section1__radius uk-position-center block-video_video" autoplay="" loop="" muted="" playsinline="" poster="">
                        <source src="videos/spark_vision_video_2018052113.webm" type="video/webm">
                        <source src="videos/spark_vision_video_2018052113.mp4" type="video/mp4">
                    </video>
                    <div uk-toggle="cls: uk-border-pill; mode: media; media: @m" class="home__section1__radius home__section1__overlay uk-overlay uk-overlay-primary uk-position-cover"></div>
                    <a href="#modal-media-youtube" uk-toggle class="uk-position-center home__section1__btnPlay" data-src="images/btn-play.png" uk-img></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-media-youtube" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA" width="1920" height="1080" uk-video uk-responsive></iframe>
    </div>
</div>
<div class="uk-section home__section2">
    <div class="uk-container uk-container-large uk-container-expand-right">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-auto@m">
                <div class="home__section2__boxLeft">
                    <div class="home__section2__item">
                        <div class="home__section2__boxLeft__title1">Hơn 100 dự án</div>
                        <div class="home__section2__boxLeft__title2">100+ projects</div>
                    </div>
                    <div class="home__section2__item">
                        <div class="home__section1__boxLeft__txt2 line-clamp-4">Với nhiều năm kinh nghiệm làm việc trong ngành, Lagom đã hoàn thiện cho hàng trăm dự án khác nhau trên toàn quốc. Những công trình của... chúng tôi đều mang phong cách hiện đại, tinh tế và luôn là phương án tối ưu nhất theo mong muốn của khách hàng.
                            Các dự án cam kết được đảm bảo chất lượng, bàn giao và nghiệm thu đúng thời hạn nhằm đáp ứng kịp nhu cầu sử dụng của khách hàng. Vì thế Lagom không ngừng mở rộng các dự án và nhận được sự hài lòng - tín nhiệm của bất cứ khách hàng nào khi lựa chọn chúng tôi.
                        </div>
                    </div>
                    <div class="home__section2__item">
                        <a href="" class="home__section1__boxLeft__btnMore uk-button uk-button-default"><span>Xem thêm</span></a>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="home__section2__slider" uk-slider="autoplay: true">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-auto@s">
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/project11.png" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/project1.png" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/project2.png" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/slider1.jpeg" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/slider2.jpeg" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/slider3.jpeg" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/slider4.jpeg" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/slider5.jpeg" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/slider1.jpeg" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/slider2.jpeg" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/slider3.jpeg" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/slider4.jpeg" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                            <li>
                                <div class="uk-cover-container">
                                    <img src="images/slider5.jpeg" alt="" uk-cover="">
                                    <canvas width="357" height="476"></canvas>
                                </div>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                </div>
            </div>
        </div>
    </div>
</div>
<div uk-parallax="bgy: -50" class="home__section3 uk-overflow-hidden uk-light uk-section uk-background-center-center uk-background-norepeat uk-background-cover" data-src="images/bg1.png" uk-img>
    <div class="uk-container">
        <div uk-parallax="y: 50,0" class="uk-text-center home__section3__txt">
            Thổi hồn cho sự tinh tế <br class="uk-visible@m">
            vào bên trong những thiết kế
        </div>
    </div>
</div>
<!--Quy trình làm việc-->
<div class="uk-section">
    <div class="home__section6__txt1 uk-text-center">Quy trình làm việc</div>
    <div class="home__section6__txt2 uk-text-center">Our work process</div>

</div>
<!--/Quy trình làm việc-->

<!--Đăng ký để nhận tư vấn-->
<div class="uk-section home__section4">
    <div class="uk-container">
        <div class="home__section4__item">
            <div class="uk-text-center uk-text-uppercase home__section4__title">Đăng ký để nhận tư vấn</div>
        </div>
        <div class="home__section4__item">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-1-3@s">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon home__section4__icon" data-src="images/User-icon.png" uk-img uk-icon="icon: user"></span>
                        <input class="uk-input home__section4__input" type="text" placeholder="Họ và Tên">
                    </div>
                </div>
                <div class="uk-width-1-3@s">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon home__section4__icon" data-src="images/Phone-icon.png" uk-img uk-icon="icon: receiver"></span>
                        <input class="uk-input home__section4__input" type="text" placeholder="Số điện thoại">
                    </div>
                </div>
                <div class="uk-width-1-3@s">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon home__section4__icon" data-src="images/Email-icon.png" uk-img uk-icon="icon: mail"></span>
                        <input class="uk-input home__section4__input" type="text" placeholder="Email">
                    </div>
                </div>
            </div>
        </div>
        <div class="home__section4__item">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-1-1">
                    <input class="uk-input home__section4__input uk-padding-remove-left uk-padding-remove-right" type="text" placeholder="Nhập nội dung cần tư vấn">
                </div>
            </div>
        </div>
        <div class="home__section4__item uk-text-center">
            <button class="uk-button uk-button-default home__section4__btn"><span>Gửi</span></button>
        </div>
    </div>
</div>
<!--/Đăng ký để nhận tư vấn-->
<div uk-parallax="bgy: -10" class="uk-section uk-overflow-hidden home__section5 uk-flex uk-flex-middle uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/bg2.png" uk-img>
    <div class="uk-width-1-1">
        <div class="uk-container uk-container-small">
            <div uk-parallax="y: 50,0" class="home__section5__title">
                Nội thất <br>
                sang trọng
            </div>
        </div>
    </div>
</div>
<div class="uk-section-large home__section6">
    <div class="home__section6__item">
        <div class="uk-container uk-container-large uk-container-expand-left">
            <div uk-grid>
                <div class="uk-width-auto@m uk-flex-last@m">
                    <div class="home__section6__txt1">Sản phẩm <br>
                        bán chạy</div>
                    <div class="home__section6__txt2">Best sale products</div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                        <div class="uk-width-2-5@s uk-width-1-2">
                            <div class="home__section6__box1 uk-cover-container uk-box-shadow-large">
                                <img src="images/s1.png" alt="" uk-cover="">
                                <canvas width="489" height="479"></canvas>
                                <div class="home__section6__box1__body uk-padding-small uk-position-bottom">
                                    <div class="uk-flex-bottom" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="home__section6__box1__body__rotate">
                                                <div class="home__section6__box1__body__txt2">A Swivel office chair</div>
                                                <div class="home__section6__box1__body__txt1">Dante</div>
                                            </div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <div class="home__section6__box1__body__price">600.000 VND</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__section6__box1 uk-cover-container uk-box-shadow-large">
                                <img src="images/ix1.png" alt="" uk-cover="">
                                <canvas width="714" height="479"></canvas>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="uk-width-3-5@s uk-width-1-2">
                            <div class="home__section6__box1 uk-cover-container uk-box-shadow-large">
                                <img src="images/ix2.png" alt="" uk-cover="">
                                <canvas width="714" height="479"></canvas>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__section6__box1 uk-cover-container uk-box-shadow-large">
                                <img src="images/s2.png" alt="" uk-cover="">
                                <canvas width="489" height="479"></canvas>
                                <div class="home__section6__box1__body uk-padding-small uk-position-bottom">
                                    <div class="uk-flex-bottom" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="home__section6__box1__body__rotate">
                                                <div class="home__section6__box1__body__txt2">A Swivel office chair</div>
                                                <div class="home__section6__box1__body__txt1">Dante</div>
                                            </div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <div class="home__section6__box1__body__price">600.000 VND</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home__section6__item">
        <div class="home__section6__txt1 uk-text-center">Sản phẩm mới</div>
        <div class="home__section6__txt2 uk-text-center">New products</div>
    </div>
    <div class="home__section6__item">
        <div uk-slider="center: true">

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light uk-slider-container-offset">
                    <ul class="uk-slider-items uk-grid-30-m uk-grid-small" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'images/sp2.png',
                                'txt1' => 'Kitsch',
                                'txt2' => 'A dining chair',
                                'price' => '',
                            ),
                            array(
                                'src' => 'images/sp3.png',
                                'txt1' => 'Lars',
                                'txt2' => 'A dining chair',
                                'price' => '',
                            ),
                            array(
                                'src' => 'images/sp4.png',
                                'txt1' => 'Elona',
                                'txt2' => 'A mid boy',
                                'price' => '',
                            ),
                            array(
                                'src' => 'images/slider1.jpeg',
                                'txt1' => 'Elona',
                                'txt2' => 'A mid boy',
                                'price' => '',
                            ),
                            array(
                                'src' => 'images/slider2.jpeg',
                                'txt1' => 'Elona',
                                'txt2' => 'A mid boy',
                                'price' => '',
                            ),
                            array(
                                'src' => 'images/slider3.jpeg',
                                'txt1' => 'Elona',
                                'txt2' => 'A mid boy',
                                'price' => '',
                            ),
                            array(
                                'src' => 'images/slider4.jpeg',
                                'txt1' => 'Elona',
                                'txt2' => 'A mid boy',
                                'price' => '',
                            ),
                            array(
                                'src' => 'images/slider5.jpeg',
                                'txt1' => 'Elona',
                                'txt2' => 'A mid boy',
                                'price' => '',
                            ),
                        );
                        foreach ($data as $k=>$v): ?>
                        <li class="uk-width-auto@m uk-width-4-5">
                            <div class="home__section6__box1 uk-cover-container uk-box-shadow-large">
                                <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                <canvas width="451" height="583"></canvas>
                                <div class="home__section6__box1__body uk-padding-small uk-position-bottom">
                                    <div class="uk-flex-bottom" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="home__section6__box1__body__rotate">
                                                <div class="home__section6__box1__body__txt2"><?= $v['txt2'] ?></div>
                                                <div class="home__section6__box1__body__txt1"><?= $v['txt1'] ?></div>
                                            </div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <div class="home__section6__box1__body__price">600.000 VND</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>