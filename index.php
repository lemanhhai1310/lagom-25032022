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
                    <video uk-toggle="cls: uk-border-pill; mode: media; media: @m" class="home__section1__radius uk-position-center block-video_video" autoplay="" loop="" muted="" playsinline="" poster="images/bg-video.png">
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
                <div uk-slider>

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-auto@s">
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
<?php require "template-parts/layouts/footer.php"; ?>