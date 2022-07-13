<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content=""/>
  <meta property="og:description" content=""/>
  <meta property="og:type" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:locale" content=""/>
  <meta name="keywords" content=""/>
  <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header>
    <div class="sp">
      <div class="ham_btn">
        <div class="top_line"></div>
        <div class="mdl_line1"></div>
        <div class="mdl_line2"></div>
        <div class="btm_line"></div>
      </div>
      <nav>
        <ul class="slide_nav">
          <li><a href="#top"><img src="<?php echo esc_url(get_template_directory_uri()).'/assets/images/logo_sp.svg';?>" alt=""></a></li>
          <li><a href="#about">Nakanoya<span class="hira">吉兵衛</span>について</a></li>
          <li><a href="#info">インフォメーション</a></li>
          <li><a href="#access">アクセス</a></li>
          <li><a href="#contact">お問い合わせ</a></li>
          <li><a href="#reserve" class="reserve">ご予約</a></li>
          <small class="copy_right">© Nakanoya-Kitibe . All RightsReserved.</small>
        </ul>
      </nav>
    </div>

    <div class="pc">
      <div class="header_nav">
        <a class="logo" href="#top">
          <img src="assets/images/pc_logo.svg" alt="">
        </a>
        <ul class="nav_lists">
          <li><a href="#about">Nakanoya<span class="hira">吉兵衛</span>について</a></li>
          <li><a href="#info">インフォメーション</a></li>
          <li><a href="#access">アクセス</a></li>
          <li><a href="#contact">お問い合わせ</a></li>
          <li><a href="#reserve" class="reserve">ご予約</a></li>
        </ul>
      </div>
    </div>
  </header>