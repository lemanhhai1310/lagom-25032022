<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lagom - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.5/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.5/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= (isset($body))?$body:'' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-background-norepeat uk-background-top-center uk-offcanvas-content uk-overflow-hidden uk-position-relative" data-src="<?= (isset($bg))?$bg:'' ?>" uk-img>
<div class="header" uk-sticky>
    <div class="uk-container uk-container-large uk-padding-remove">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle uk-hidden@m header__menu" href="#">
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                </a>
                <a href="" class="uk-navbar-item uk-logo header__logo uk-visible@m"><img src="images/logo-thiet-ke.png" alt=""></a>
            </div>
            <div class="uk-navbar-center">
                <a href="" class="uk-navbar-item uk-logo header__logo uk-hidden@m"><img src="images/logo-thiet-ke.png" alt=""></a>
                <ul class="uk-navbar-nav uk-visible@m">
                    <li class="uk-active"><a href="#">Trang chủ</a></li>
                    <li><a href="#">Về chúng tôi</a></li>
                    <li><a href="#">Dự án</a></li>
                    <li><a href="#">Cửa hàng</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <div class="uk-navbar-item">
                    <div uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="1">VN</option>
                            <option value="2">EN</option>
                        </select>
                        <span class="uk-link header__lang">
                            <span></span>
                            <span uk-icon="icon: chevron-down"></span>
                        </span>
                    </div>
                </div>
                <a href="" class="uk-navbar-item">
                    <div class="uk-position-relative">
                        <div class="uk-cover-container header__bag" data-src="images/bag.png" uk-img>
                            <canvas width="29" height="35"></canvas>
                        </div>
                        <span class="header__bag__txt uk-badge uk-position-bottom-right">0</span>
                    </div>
                </a>
            </div>
        </nav>
    </div>
</div>