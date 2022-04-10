<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Worfee</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/headers/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- Bootstrap core CSS -->
<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom styles for this template -->
<link href="header.css" rel="stylesheet">



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

      <script>

      $(function(){
      $(".alert3433").on("click", function(){
        //listBの高さを取得
        alert("ログアウトしてもよろしいですか？")
      });
      });

      </script>


  </head>


<header class="p-3  text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="main.php" class="nav-link2 px-2 text-second">ホーム</a></li>
          <li><a href="search.php" class="text-second nav-link2 px-2 ">カフェを探す</a></li>
        </ul>

        <div class="text-end">
        <button type="button" class="btn_head"><a href="mypage.php?id=<?= $_SESSION['id']?>">マイページ</a></button>
          <button type="button" class="btn_head2"><a href="logout.php" class="alert3433">ログアウト</a></button>
        </div>
      </div>
    </div>

  </header>

  </html>


