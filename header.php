<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="アキヒトのportfolioです。" />
  <!-- フォントファミリー -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=PT+Serif:wght@400;700&family=Ephesis&display=swap" rel="stylesheet">
  <!-- フォントアイコン -->
  <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
<?php if( is_front_page() ): ?>
  <header>
    <span class="nav_toggle">
      <i></i>
      <i></i>
    </span>
    <nav class="header-nav">
      <ul class="nav-list">
        <li class="item"><a href="#" class="nav-service link">Service</a></li>
        <li class="item"><a href="#" class="nav-works link">Works</a></li>
        <li class="item"><a href="#" class="nav-about link">About Me</a></li>
        <li class="item"><a href="#" class="nav-contact link">Contact</a></li>
      </ul>
    </nav>
    <nav class="click-nav">
      <ul class="click-list">
        <li class="item"><a href="#" class="click-service link">Service</a></li>
        <li class="item"><a href="#" class="click-works link">Works</a></li>
        <li class="item"><a href="#" class="click-about link">About Me</a></li>
        <li class="item"><a href="#" class="click-contact link">Contact</a></li>
      </ul>
    </nav>
  </header>
<?php endif; ?>