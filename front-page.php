
<?php get_header();?>

<main>

  <div class="top ">
  <div class="inner wow animate__animated animate__zoomIn" data-wow-duration="3s" data-wow-delay=".3s">
    <div class="top-title">
      <h1 class="main-title">AKIHITO FUKUDA's Portfolio</h1>
      <p class="sub-title">- Web Engineer -</p>
    </div>
  </div>
  </div>

  <section class="cmn-section service">
    <div class="inner">
      <div class="service-list-wrapper">
        <h2 class="cmn-title service-title">Service</h2>
        <ul class="service-list">
          <li class="item wow animate__animated animate__fadeInDown" data-wow-duration="2s" data-wow-delay=".3s">
            <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/desktop.jpg')); ?>" alt="desktop" class="img"></div>
            <div class="text">
              <h3 class="title">コーディング</h3>
              <p class="desc">LPやコーポレートサイトなど目的に応じた適切なコーディングを行います。また、軽微なコードの修正などにも対応しています。</p>
            </div>
          </li>
          <li class="item wow animate__animated animate__fadeInDown" data-wow-duration="2s" data-wow-delay=".5s">
            <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/wordpress2.jpg')); ?>" alt="wordpress" class="img"></div>
            <div class="text">
              <h3 class="title">Wordpress</h3>
              <p class="desc">WordPressサイトの構築や既存静的サイトのWordPress移行を行います。</p>
            </div>
          </li>
          <li class="item wow animate__animated animate__fadeInDown" data-wow-duration="2s" data-wow-delay=".7s">
            <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/support.png')); ?>" alt="smartphone" class="img smartphone-img"></div>
            <div class="text">
              <h3 class="title">サポート対応</h3>
              <p class="desc">不明点・不安点などはいつでもご相談ください。お客様が納得感を持つまでサポートいたします。また、納品してから１ヵ月間は無償で対応いたします。</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="cmn-section works">
    <div class="inner">
      <h2 class="cmn-title works-title">Works</h2>
      <ul class="works-list">
        <li class="item wow animate__animated animate__fadeIn" data-wow-duration="2s" data-wow-delay=".3s">
          <div class="img-wrapper"><a href="" class="img-wrapper-link"><img src="<?php echo esc_url(get_theme_file_uri('/image/screenshot.png')); ?>" alt="" class="img"></a></div>
          <div class="text">
            <h3 class="title "  data-txt="My portfolio">My portfolio</h3>
            <p class="desc">【Skill】<br class="sp">HTML / CSS / JQuery / Wordpress<br><br>
              【description】<br class="sp">オリジナル作品 <br></p>
          </div>
        </li>
        <li class="item wow animate__animated animate__fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
          <div class="img-wrapper"><a href="https://portfolio.akihitonoblog.com/" target="_blank" rel="noopener noreferrer" class="img-wrapper-link"><img src="<?php echo esc_url(get_theme_file_uri('/image/my_portfolio1.png')); ?>" alt="Gokurakutei" class="img"></a></div>
          <div class="text">
            <h3 class="title"  data-txt="架空の温泉旅館">架空の温泉旅館</h3>
            <p class="desc">【Skill】<br class="sp">HTML / CSS / JQuery / Wordpress<br><br>
              【description】<br class="sp">デザインカンプからのコーディング</p>
          </div>
        </li>
        <li class="item wow animate__animated animate__fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
          <div class="img-wrapper"><a href="https://portfolio2.akihitonoblog.com/" target="_blank" rel="noopener noreferrer" class="img-wrapper-link"><img src="<?php echo esc_url(get_theme_file_uri('/image/my_portfolio2.png')); ?>" alt="Design for smile" class="img"></a></div>
          <div class="text">
            <h3 class="title" data-txt="Design for smile">Design for smile</h3>
            <p class="desc">【Skill】<br class="sp">HTML / CSS / JQuery <br><br>
              【description】<br class="sp">デザインカンプからのコーディング</p>
          </div>
        </li>
        <li class="item wow animate__animated animate__fadeIn" data-wow-duration="2s" data-wow-delay=".6s">
          <div class="img-wrapper"><a href="https://portfolio3.akihitonoblog.com/" target="_blank" rel="noopener noreferrer" class="img-wrapper-link"><img src="<?php echo esc_url(get_theme_file_uri('/image/my_portfolio3.png')); ?>" alt="Design for smile" class="img"></a></div>
          <div class="text">
            <h3 class="title" data-txt="Design for smile"> Design for smile</h3>
            <p class="desc">【Skill】<br class="sp">HTML / CSS / JQuery <br><br>
              【description】<br class="sp">デザインカンプからのコーディング</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="cmn-section price">
    <div class="inner">
    <h2 class="cmn-title price-title">価格表</h2>
    <div class="price-list-wrapper">
      <dl class="price-list">
        <dt class="term">コーポレートサイト（トップ）</dt>
        <dd class="desc">¥15,000~/1p</dd>
      </dl>
      <dl class="price-list">
        <dt class="term">コーポレートサイト（下層）</dt>
        <dd class="desc">¥3,500~/1p</dd>
      </dl>
      <dl class="price-list">
        <dt class="term">ランディングページ</dt>
        <dd class="desc">¥15,000~/1p</dd>
      </dl>
      <dl class="price-list">
        <dt class="term">レスポンシブ化 （1ブレイク）</dt>
        <dd class="desc">¥3500~/1p</dd>
      </dl>
      <dl class="price-list">
        <dt class="term">コード修正（一か所）</dt>
        <dd class="desc">¥700~</dd>
      </dl>
      <dl class="price-list">
        <dt class="term">流し込みページ</dt>
        <dd class="desc">¥700~/1p</dd>
      </dl>
      <dl class="price-list">
        <dt class="term">Wordpress移行</dt>
        <dd class="desc">¥75,000~</dd>
      </dl>
      <dl class="price-list">
        <dt class="term">Wordpress制作</dt>
        <dd class="desc">¥150,000~</dd>
      </dl>
      <p class="price-estimate">※正式なお見積もりは別途ご相談させていただきます</p>
    </div>
    </div>
  </section>

  <section class="cmn-section about">
    <div class="inner">
      <h2 class="cmn-title about-title">About Me</h2>
      <div class="about-wrapper wow animate__animated animate__fadeIn" data-wow-duration="2s" data-wow-delay=".3s">
        <div class="about-img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/IMG_9808.jpg')); ?>" alt="my_picture" class="about-img"></div>
        <div class="about-text">
          <div class="introduction-text">
            <h3 class="introduction-title">Introduction</h3>
            <p class="introduction-desc">
              初めまして。Webエンジニアの福田亮史（フクダアキヒト）と申します。<br>
              クライアント様にとって最高のwebサイトをご提供できるよう、常にクライアント様に寄り添って考えていき、全力を尽くして作成いたします。
              また開発を進めていく上で、ご連絡やご相談は迅速に対応いたします。
            </p>
          </div>
          <div class="education-text">
            <h3 class="education-title">Educartions</h3>
            <p class="education-desc">
              1998年：大阪府に生まれる<br><br>
              2016年：門真なみはや高校卒業<br><br>
              2021年(現在)：関西大学に在学中<br><br>
              趣味：釣り/バトミントン/ボーリング
            </p>
          </div>
        </div>
      </div>
      <div class="about-catchcopy">
        <span>T</span>
        <span>r</span>
        <span>u</span>
        <span>s</span>
        <span>t</span>
        <span>&nbsp;</span>
        <span>C</span>
        <span>o</span>
        <span>m</span>
        <span>e</span>
        <span>s</span>
        <span>&nbsp;</span>
        <span>F</span>
        <span>i</span>
        <span>r</span>
        <span>s</span>
        <span>t</span>
      </div>
    </div>
  </section>

  <section class="cmn-section contact">
    <div class="inner">
      <h2 class="cmn-title contact-title">Contact</h2>
      <?php echo do_shortcode('[mwform_formkey key="13"]'); ?>
    </div>
  </section>


</main>


<?php get_footer(); ?>
