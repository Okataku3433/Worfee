<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();
$products = $user->cafe();
$view = $user->view();
$checks = $user->accountLike();
?>

<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>マイページ</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="/css/mypage.css" rel="stylesheet">
<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="pricing.css" rel="stylesheet">
<link href="/css/header.css" rel="stylesheet">
<link href="/css/footer.css" rel="stylesheet">

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
        <div class="mypage_top">
            <h3>My page</h3>
        </div>

        <div class="pricing-header  pb-md-4 mx-auto text-center">
          <h5 class="text-muted2 yu-za-title"><small class="text-muted fw-light">user name</small></h5>
              <h3><?=$view['user']['name']?></h3>
          <p class="fs-5 text-muted3"><small class="text-muted fw-light2">mail address</small></p>
              <h3><?=$view['user']['email']?></h3>
          <button class="w-3434 btn2_sub btn-primary2 btn-lg" type="submit"><a href="acount_edit.php?id=<?=$view['user']['id']?>">ユーザー情報を編集する</a></button>
        </div>
    </div>
  </header>

  <main>

  <h2 class="favorite">お気に入り一覧</h2>


    <div class="text-center_sub">

        <div class="col">
          <?php if($checks): ?>
          <div class="col_sub">
          <?php foreach($checks as $check): ?>
              <a href="detail.php?id=<?=$check['shop_id'];?>" class="overall34">
                <div class="card24 mb-404 rounded-3 shadow-sm">
                  <div class="card-header2 py-3 text-white">
                    <h4 class="my-0 fw-normal"><?=$check['shop'];?></h4>
                  </div>
                  <div class="card-body2sub">
                  <img src="/img/cafe17.jpg"  height="170px" class="pic_cafe">
                    <ul class="list-unstyled34 mtsub mb-401">
                      <li><?=$check['features'];?></li>
                    </ul>
                  </div>
                </div>
              </a>
          <?php endforeach;?>
          </div>
          <?php else :?>
                <p>お気に入りの登録がありません。</p>
          <?php endif; ?>
        </div>


        <div class="margin_123">
          <a href="main.php" class="btn_center"><button class="w-3433 btn2 btn-primary2 btn-lg" type="submit">トップに戻る</button></a>
          <a href="taikai.php?id=<?= $_SESSION['id'] ?>" class="btn_center2"><button class="w-3433 btn2 btn-primary2 btn-lg" type="submit">退会する</button></a>
        </div>

    </div>



  <?php include('footer.php'); ?>

</div>


    
  </body>
</html>