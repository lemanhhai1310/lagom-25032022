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
                <div class="uk-border-pill uk-cover-container home__section1__radius">
                    <canvas width="1920" height="1080"></canvas>
                    <video class="uk-border-pill home__section1__radius uk-position-center block-video_video" autoplay="" loop="" muted="" playsinline="" poster="images/bg-video.png">
                        <source src="videos/spark_vision_video_2018052113.webm" type="video/webm">
                        <source src="videos/spark_vision_video_2018052113.mp4" type="video/mp4">
                    </video>
                    <div class="uk-border-pill home__section1__radius home__section1__overlay uk-overlay uk-overlay-primary uk-position-cover"></div>
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
<?php require "template-parts/layouts/footer.php"; ?>