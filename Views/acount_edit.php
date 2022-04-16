<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();
$cafes_sub = $user->cafeSub();
$params = $user->index();
$view = $user->view();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $errors = [];
  $pattern = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/uiD';
  if(empty($_POST['name'])) {
      $errors['name'] = '*氏名は必須入力です。';
  }elseif(preg_match('/\A[[:^cntrl:]]{1,10}\z/u', $_POST['name']) == 0) {   
      $errors['name'] = '*10文字以内でご入力ください。';
  }
  if (empty($_POST['email'])) {
    $errors['email'] = '*メールアドレスを入力してください。';
  } elseif (!preg_match($pattern, $_POST['email'])) {    
      $errors['email'] = '*メールアドレスは正しくご入力ください。';
  } else {
          //重複チェック
      foreach($params['users'] as $user) {
        if(($view['user']['email'] !== $_POST['email']) && ($user['email'] == $_POST['email'])) {
          $errors['email'] = "このメールアドレスはすでに登録されています。";
      }
  }
}

      
  if(count($errors) === 0){
      //編集
      $user = new UserController();
      $contact = $user->edit();
      $url = "http://localhost/mypage.php?id=" . $view['user']['id'];
      header("Location: " . $url);
      exit();
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
    <title>ユーザー情報編集</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="/css/header.css" rel="stylesheet">
<link href="/css/footer.css" rel="stylesheet">
<link href="/css/acount_edit.css" rel="stylesheet">

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
    <link href="acount_edit.css" rel="stylesheet">
  </head>
  <body class="all">

  <?php include('header2.php'); ?>

    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>ユーザー情報編集</h2>
    </div>

    <div class="row g-5 all3433">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">ユーザー情報</h4>
        <form class="needs-validation" action="" method="post">
        <input type="hidden" id="" name="id" value="<?php echo $view['user']['id'] ?>">

          <div class="row g-3">

            <div class="col-12">
              <label for="username" class="form-label">ユーザー名</label>

            <dd>
                <p class="" style="color:red">
                    <?php if (isset($errors['name'])) {
                        echo $errors['name'];
                    }?>
                </p>
                <input type="text" id="" name="name" value="<?php if(!empty($_POST['name'])) { //編集後の出力
                    echo $_POST['name'];
                } else { //編集前の出力
                    echo $view['user']['name'];    
                }?>">
            </dd>
            </div>


            <div class="col-12">
              <label for="email" class="form-label">Eメールアドレス</label>

            <dd>
                <p class="" style="color:red">
                    <?php if (isset($errors['email'])) {
                        echo $errors['email'];
                    }?>
                </p>
                <input type="text" id="" name="email" value="<?php if(!empty($_POST['email'])) { //編集後の出力
                    echo $_POST['email'];
                } else { //編集前の出力
                    echo $view['user']['email'];    
                }?>">
            </dd>
            </div>

          <hr class="my-4">


        <div id="btn_all">
          <button class="w-100 btn2 btn-primary2 btn-lg" type="submit">完了</button>
          <button class="w-100 btn2 btn-primary2 btn-lg"><a href="mypage.php?id=<?php echo $view['user']['id'] ?>">戻る</a></button>
        </div>
        </form>
      </div>
    </div>
  </main>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>


      <?php include('footer.php'); ?>

  </body>
</html>