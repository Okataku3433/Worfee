<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();
$products = $user->more();
$cafe_detail = $products['cafe'];
$test = array();




if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];
    if (empty($_POST['hour'])) {
        $errors['hour'] = '*営業時間を入力してください。';
    } 
    if (empty($_POST['shop'])) {
      $errors['shop'] = '*カフェの名前を入力してください。';
    } 
    if (empty($_POST['features'])) {
      $errors['features'] = '*カフェの特徴を入力してください。';
    } 
    if (empty($_POST['address'])) {
      $errors['address'] = '*カフェの住所を入力してください。';
    } 
    if (empty($_POST['access'])) {
      $errors['access'] = '*アクセスを入力してください。';
    } 
    if (empty($_POST['seat'])) {
      $errors['seat'] = '*席数を数字で入力してください。';
    } 
    if (empty($_POST['hp'])) {
      $errors['hp'] = '*カフェのHPを入力してください。';
    } 

  if(count($errors) === 0){
      // もしエラーがなかったらreset_subとsub2を適用
      $user = new UserController();
      $reset_sub = $user->reset_sub();
      $reset_sub2 = $user->reset_sub2();    
      header('Location:table.php');
  }
}


?>

<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom styles for this template -->
    <link href="/css/add_cafe.css" rel="stylesheet">
    <link href="/css/header.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>カフェ編集画面</title>
  </head>


  <body>

  <?php include('header2.php'); ?>



  <div class="bd-example">

  <legend>カフェ編集画面</legend>

  <form method="post" action="">
  <input type="hidden" name="shop_id" class="form-control2" id="shop_id" value="<?=$cafe_detail['0']['shop_id']?>">


  <?php if(!empty($errors['shop'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['shop'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-34">
    <label for="exampleInputEmail1" class="form-label">店名</label>
    <input type="text" name="shop" class="form-control2" id="exampleInputEmail1" value="<?=$cafe_detail['0']['shop']?>">
  </div>

  <?php if(!empty($errors['hour'])): ?>
                  <div class="card-header2 py-3" style="color:red">
                    <p><?= $errors['hour'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-34">
    <label for="exampleInputPassword1" class="form-label">営業時間</label>
    <input type="text" name="hour" class="form-control2" id="exampleInputPassword1" value="<?=$cafe_detail['0']['hour']?>">
  </div>

  <?php if(!empty($errors['features'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['features'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-34">
    <label for="exampleInputPassword1" class="form-label">カフェの特徴</label>
    <input type="text" name="features" class="form-control2" id="exampleInputPassword1" value="<?=$cafe_detail['0']['features']?>">
  </div>

  <?php if(!empty($errors['address'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['address'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-34">
    <label for="exampleInputPassword1" class="form-label">住所</label>
    <input type="text" name="address" class="form-control2" id="exampleInputPassword1" value="<?=$cafe_detail['0']['address']?>">
  </div>

  <?php if(!empty($errors['seat'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['seat'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-34">
    <label for="exampleInputPassword1" class="form-label">席数</label>
    <input type="text" name="seat" class="form-control2" id="exampleInputPassword1" value="<?=$cafe_detail['0']['seat']?>">
  </div>

  <?php if(!empty($errors['access'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['access'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-34">
    <label for="exampleInputPassword1" class="form-label">アクセス</label>
    <input type="text" name="access" class="form-control2" id="exampleInputPassword1" value="<?=$cafe_detail['0']['access']?>">
  </div>

  <?php if(!empty($errors['hp'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['hp'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-3433">
    <label for="exampleInputPassword1" class="form-label">カフェHP</label>
    <input type="text" name="hp" class="form-control2" id="exampleInputPassword1" value="<?=$cafe_detail['0']['hp']?>">
  </div>


  <div class="mb-3456">
    <button type="submit" class="btn2 btn-primary2">編集</button>
    <button type="submit" class="btn2 btn-primary3">戻る</button>
  </div>

</form>

</div>

<?php include('footer.php'); ?>

    



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
  const n = 0;
  // alert(n);
// function confirmChecked()
// {
    // チェックボックス要素をすべて取得する
    // var boxes = document.getElementsByName("fruit");
    // var boxes = 2;

  
    // チェックを入れる
    document.getElementById("inlineCheckbox<?=$cafe_detail['0']['areas_id']?>").checked = true;
</script>

</html>