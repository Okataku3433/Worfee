<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();
$params = $user->index();
$cafes_sub = $user->cafeSub();
?>


<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/css/table.css" rel="stylesheet">
    <link href="/css/header.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>

    $(function(){
    $(".delete").on("click", function(){
      //listBの高さを取得
      alert("削除してもよろしいですか？")
    });
    });

</script>



    <title>ユーザ一覧</title>
  </head>

  <?php include('header2.php'); ?>

  <body id="all">

    <div class="yu-za">
      <h1>ユーザ一覧</h1>
    </div>


  <table class="table table2">

      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">ユーザー名</th>
          <th scope="col">Eメールアドレス</th>
          <th scope="col"></th>
        </tr>
      </thead>

      <?php foreach($params['users'] as $userPrams):?>
      <tbody>
        <tr>
          <th scope="row"><?=$userPrams['id']?></th>
          <td><?=$userPrams['name']?></td>
          <td><?=$userPrams['email']?></td>
          <td><a href="acount_edit2.php?id=<?=$userPrams['id']?>">編集</a></td>
        </tr>
      </tbody>
<?php endforeach; ?>
</table>

    <div class="yu-za">
      <h1>カフェ一覧</h1>
      <a href="add_cafe.php" class="addcafe">カフェを追加する</a>
    </div>

  <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">カフェ名</th>
          <th scope="col">住所</th>
          <th scope="col">営業時間</th>
          <th scope="col">席数</th>
          <th scope="col">エリア</th>
          <th scope="col">特徴</th>
          <th scope="col">アクセス</th>
          <th scope="col">HP</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>

      <?php foreach($cafes_sub as $cafePrams):?>
      <tbody>
        <tr>
          <th scope="row"><?=$cafePrams['shop_id']?></th>
          <td><?=$cafePrams['shop']?></td>
          <td><?=$cafePrams['address']?></td>
          <td><?=$cafePrams['hour']?></td>
          <td><?=$cafePrams['seat']?></td>
          <td><?=$cafePrams['areas_id']?></td>
          <td><?=$cafePrams['features']?></td>
          <td><?=$cafePrams['access']?></td>
          <td><?=$cafePrams['hp']?></td>
          <td><a href="edit_cafe.php?id=<?=$cafePrams['shop_id']?>">編集</a></td>
          <td><a href="delete_cafe.php?id=<?=$cafePrams['shop_id']?>"class="delete">削除</a></td>
        </tr>
      </tbody>
      <?php endforeach; ?>

  </table>

  <a href="main.php" class="btn_center"><button class="btn-lg btn2" type="submit">メインメニュー</button></a>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>

  <?php include('footer.php'); ?>

  

</html>