<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();
$products = $user->cafe();
?>

<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Worfee</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/sign-in/">
    

    <!--  CSS -->
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/header.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>




  <body id="all01">

  <?php include('header2.php'); ?>
    
  <section id="back_image">

      <div class="main">
          <img src="/img/Worfee_logo.png"  height="130px" class="logo">
          <h2 class="title-txt">すぐに見つかる<br/>あなたにぴったりのカフェ</h2>
          <p class="txt">worfee（ワーフィー）は“今すぐ作業ができるカフェ“が探せるカフェ検索ホームページ。 充電できるカフェを探している、オシャレなカフェで本を読みたい、ご希望に沿ったエリアや設備のカフェをご紹介。</p>
      </div>

      <section id="btn_sp34">
          <a href="search.php" class="btn_09"><span>エリア・設備から<br/>カフェを探す</span></a>
      </section>

  </section>


  <div id="article">
      <section class="topic01">
        <h3>
          人気ランキング
        </h3>

    <div class="inner">
          <div class="col">
              <a href="detail.php?id=<?=$products['5']['shop_id']?>" class="overall34">
                <div class="card mb-404 rounded-3 shadow-sm height">
                  <div class="card-header2 py-3 text-white">
                    <h4 class="my-0 fw-normal"><?=$products['5']['shop']?></h4>
                  </div>
                  <div class="card-body">
                  <img src="/img/cafe1.jpg"  height="170px">
                    <ul class="list-unstyled mtsub mb-4">
                      <li><?=$products['5']['features']?></li>
                    </ul>
                  </div>
                </div>
              </a>
          </div>

          <div class="col">
              <a href="detail.php?id=<?=$products['28']['shop_id']?>" class="overall34">
                <div class="card mb-404 rounded-3 shadow-sm height">
                  <div class="card-header2 py-3 text-white">
                    <h4 class="my-0 fw-normal"><?=$products['28']['shop']?></h4>
                  </div>
                  <div class="card-body">
                  <img src="/img/cafe2.jpg"  height="170px">
                    <ul class="list-unstyled mtsub mb-4">
                      <li><?=$products['28']['features']?></li>
                    </ul>
                  </div>
                </div>
              </a>
          </div>

          <div class="col">
              <a href="detail.php?id=<?=$products['20']['shop_id']?>" class="overall34">
                <div class="card mb-404 rounded-3 shadow-sm height">
                  <div class="card-header2 py-3 text-white">
                    <h4 class="my-0 fw-normal"><?=$products['20']['shop']?></h4>
                  </div>
                  <div class="card-body">
                  <img src="/img/cafe10.jpg"  height="170px">
                    <ul class="list-unstyled mtsub mb-4">
                      <li><?=$products['20']['features']?></li>
                    </ul>
                  </div>
                </div>
              </a>
          </div>

    </div>
      </section>
  </div>




  
  <div class="recommendall">

      <h3><i class="fa fa-lightbulb-o fa-lg"></i>Pick UP</h3>


      <div class="width">
        <div class="card mb-404 rounded-3 shadow-sm">
          <div class="card-header2 py-3 text-white2">
            <h4 class="my-0 fw-normal34"><?=$products['0']['shop']?></h4>
          </div>
          <a href="detail.php?id=<?=$products['0']['shop_id']?>" class="overall34"><div class="card-body2">
            <img src="/img/cafe4.jpg"  class="pic_cafe">
            <ul class="list-unstyled mt-3 mb-4">
              <li><?=$products['0']['features']?></li>
            </ul>
            </div></a>
        </div>
      </div>

      <div class="width">
        <div class="card mb-404 rounded-3 shadow-sm">
          <div class="card-header2 py-3 text-white2">
            <h4 class="my-0 fw-normal34"><?=$products['5']['shop']?></h4>
          </div>
          <a href="detail.php?id=<?=$products['5']['shop_id']?>" class="overall34"><div class="card-body2">
            <img src="/img/cafe1.jpg"  class="pic_cafe">
            <ul class="list-unstyled mt-3 mb-4">
              <li><?=$products['5']['features']?></li>
            </ul>
            </div></a>
        </div>
      </div>

      <div class="width">
        <div class="card mb-404 rounded-3 shadow-sm">
          <div class="card-header2 py-3 text-white2">
            <h4 class="my-0 fw-normal34"><?=$products['10']['shop']?></h4>
          </div>
          <a href="detail.php?id=<?=$products['10']['shop_id']?>" class="overall34"><div class="card-body2">
            <img src="/img/cafe7.jpg"  class="pic_cafe">
            <ul class="list-unstyled mt-3 mb-4">
              <li><?=$products['10']['features']?></li>
            </ul>
            </div></a>
        </div>
      </div>

      <div class="width">
        <div class="card mb-404 rounded-3 shadow-sm">
          <div class="card-header2 py-3 text-white2">
            <h4 class="my-0 fw-normal34"><?=$products['12']['shop']?></h4>
          </div>
          <a href="detail.php?id=<?=$products['12']['shop_id']?>" class="overall34"><div class="card-body2">
            <img src="/img/cafe8.jpg"  class="pic_cafe">
            <ul class="list-unstyled mt-3 mb-4">
              <li><?=$products['12']['features']?></li>
            </ul>
            </div></a>
        </div>
      </div>

      <div class="width">
        <div class="card mb-404 rounded-3 shadow-sm">
          <div class="card-header2 py-3 text-white2">
            <h4 class="my-0 fw-normal34"><?=$products['20']['shop']?></h4>
          </div>
          <a href="detail.php?id=<?=$products['20']['shop_id']?>" class="overall34"><div class="card-body2">
            <img src="/img/cafe10.jpg"  class="pic_cafe">
            <ul class="list-unstyled mt-3 mb-4">
              <li><?=$products['20']['features']?></li>
            </ul>
            </div></a>
        </div>
      </div>

      <div class="width">
        <div class="card mb-404 rounded-3 shadow-sm">
          <div class="card-header2 py-3 text-white2">
            <h4 class="my-0 fw-normal34"><?=$products['28']['shop']?></h4>
          </div>
          <a href="detail.php?id=<?=$products['28']['shop_id']?>" class="overall34"><div class="card-body2">
            <img src="/img/cafe2.jpg"  class="pic_cafe">
            <ul class="list-unstyled mt-3 mb-4">
              <li><?=$products['28']['features']?></li>
            </ul>
            </div></a>
        </div>
      </div>


  </div>

  
</main>

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php include('footer.php'); ?>
      
  </body>
</html>