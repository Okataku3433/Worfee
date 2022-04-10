<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userPrams = $user->search();
  }
?>

<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>検索結果</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="/css/search_cafe.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/header.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="pricing.css" rel="stylesheet">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
  <body>

  <?php include('header2.php'); ?>

    <div class="back_color">
        <div class="pricing-header  pb-md-4 mx-auto text-center">
          <h1 class="fw-normal text-muted2 yu-za-title">検索結果</h1>
        </div>
    </div>
  </header> <!-- ? -->

  <main>
    <div class="recommendall_sub">
        <h3><i class="fa fa-lightbulb-o fa-lg"></i>Pick UP</h3>
        <div class="width card3411 mb-404">
                  <?php if($userPrams): ?>
                  <?php foreach($userPrams as $userPram):?>
              <div class="all_sub34">
                <div class="text-white2">
                    <div class="card-header2">
                        <h4 class="my-0 fw-normal34"><?=$userPram['shop']?></h4>
                          <!-- いいね機能 -->
                            <form class="post" name="form_favorite" action="#" method="post" data-shop_id="<?=$userPram['shop_id']?>">
                                <div class="btn-good <?php if($_SESSION['id'] && $_POST['shop_id']) echo 'active'; ?>">
                                    <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
                                    <i class="fa-heart fa-lg px-16
                                    <?php
                                    if($_SESSION['id'] && $_POST['shop_id']){ //いいね押したらハートが塗りつぶされる
                                        echo ' active fas';
                                    }else{ //いいねを取り消したらハートのスタイルが取り消される
                                        echo ' far';
                                    }; ?>"></i>
                                </div>
                            </form>
                          <!-- いいね機能 -->
                    </div>
                  <a href="detail.php?id=<?=$userPram['shop_id']?>" class="overall35">
                    <div class="card-body2sub">
                        <img src= "/img/cafe14.jpg"  class="pic_cafe">
                        <ul class="list-unstyled mt-3 mb-4">
                          <li><?=$userPram['features']?></li>
                        </ul>
                    </div>
                  </a>
                </div>
              </div>

                <?php endforeach; ?>
                <div class="padding"></div>
                <?php endif; ?>
        </div>

      <div class="margin_sp">
        <a href="search.php"><button class="w-3433 btn2 btn-primary2 btn-lg" type="submit">他地域を検索</button></a>
        <a href="main.php"><button class="w-3433 btn2 btn-primary2 btn-lg" type="submit">トップに戻る</button></a>
      </div>
    </div>
  </main>

  <?php include('footer.php'); ?>

  <script type="text/javascript" src="/js/like.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>



  </body>
</html>
