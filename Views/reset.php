<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();
$userPrams = $user->index();
// バリデーション
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];
    if (empty($_POST['email'])) {
        $errors['email'] = '*メールアドレスを入力してください。';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = '*パスワードを入力してください。';
    } elseif (!preg_match('/\A(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)[a-zA-Z\d]{8,30}+\z/',$_POST['password'])) {
        $errors['password'] = '*8文字以上で半角英小文字大文字数字を含んで入力してください';
    }
    if (empty($_POST['checkpassword'])) {
        $errors['checkpassword'] = '*確認用パスワードを入力してください。';
    } elseif (!preg_match('/\A(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)[a-zA-Z\d]{8,30}+\z/',$_POST['checkpassword'])) {
        $errors['checkpassword'] = '*8文字以上で半角英小文字大文字数字を含んで入力してください';
    }
    if (!$_POST['password'] == $_POST['checkpassword']) {
        $errors['checkpassword'] = '*パスワードが一致しません。';
    }
    if(count($errors) === 0){
        //パスワード再設定
        $user->reset();
        $hash_pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
        header('Location: main.php');
    }
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
    <title>リセット画面</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="/css/header.css" rel="stylesheet">
<link href="/css/footer.css" rel="stylesheet">
<link href="/css/signup.css" rel="stylesheet">



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

    
    <!-- Custom styles for this template -->
    <link href="signup.css" rel="stylesheet">
  </head>
  <body class="text-center">


  <?php include('header.php'); ?>

    
<main class="form-signup">
  <form action="reset.php" method="post">
    <h1 class="h3 mb-3 fw-normal">パスワード再設定</h1>

    <?php if(!empty($errors['email'])): ?>
                <div class="card-header2" style="color:red">
                  <p><?= $errors['email'];?></p>
                </div>
    <?php endif; ?>
    <?php if(!empty($errors['password'])): ?>
                <div class="card-header2" style="color:red">
                  <p><?= $errors['password'];?></p>
                </div>
    <?php endif; ?>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Eメールアドレス</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">新規パスワード</label>
    </div>

    <?php if(!empty($errors['checkpassword'])): ?>
                <div class="card-header2" style="color:red">
                  <p><?= $errors['checkpassword'];?></p>
                </div>
    <?php endif; ?>

    <div class="form-floating">
      <input type="password" name="checkpassword" class="form-control" id="floatingPassword" placeholder="確認用Password">
      <label for="floatingPassword">確認用パスワード</label>
    </div>

    <button class="w-100 btn2 btn-lg btn-primary2" type="submit">リセット</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
  </form>
</main>

<?php include('footer.php'); ?>

    </body>
    </html>