<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();
$test = array();

// バリデーション
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $errors = [];
  if (empty($_POST['shop'])) {
    $errors['shop'] = '*氏名を入力してください。';
  }
  if (empty($_POST['areas_id'])) {
    $errors['areas_id'] = '*エリアを選択してください。';
  }
  if (empty($_POST['facility_id'])) {
    $errors['facility_id'] = '*設備を選択してください。';
  }
  if (empty($_POST['hour'])) {
      $errors['hour'] = '*営業時間を入力してください。';
  } 
  if (empty($_POST['features'])) {
    $errors['features'] = '*カフェの特徴を入力してください。';
  } 
  if (empty($_POST['address'])) {
    $errors['address'] = '*カフェの住所を入力してください。';
  } 
  if (empty($_POST['seat'])) {
    $errors['seat'] = '*カフェの席数を数字で入力してください。';
  } 
  if (empty($_POST['access'])) {
    $errors['access'] = '*アクセスを入力してください。';
  } 
  if (empty($_POST['hp'])) {
    $errors['hp'] = '*カフェのHPを入力してください。';
  } 


  if(count($errors) == 0){
      // もしエラーがなかったらadd()を適用
      $user = new UserController();
      $add = $user->add();
      $add_sub = $user->add_sub();
      header('Location:table.php');
      var_dump($add_sub);
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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>cafe追加画面</title>
  </head>


  <body>

  <?php include('header2.php'); ?>



  <div class="bd-example">

  <legend>カフェ追加画面</legend>

  <form method="post" action="add_cafe.php">


  <?php if(!empty($errors['areas_id'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['areas_id'];?></p>
                  </div>
  <?php endif; ?>

  <h3 class="area-title">エリア</h3>
  <!-- アコーディオン -->
  <div class="accordion_all">
      <div class="accordion-item34">
        <h2 class="accordion-header2" id="flush-headingOne">
          <button class="accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            東京
          </button>
        </h2>
  <div class="form-check form-check-inline form-left">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="areas_id" value="1">
    <label class="form-check-label font-weight" for="inlineCheckbox1">新宿</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="areas_id" value="2">
    <label class="form-check-label font-weight" for="inlineCheckbox2">渋谷</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="areas_id" value="3">
    <label class="form-check-label font-weight" for="inlineCheckbox3">丸の内</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="areas_id" value="4">
    <label class="form-check-label font-weight" for="inlineCheckbox1">銀座</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="areas_id" value="5">
    <label class="form-check-label font-weight" for="inlineCheckbox3">六本木</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="areas_id" value="6">
    <label class="form-check-label font-weight" for="inlineCheckbox1">池袋</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="areas_id" value="7">
    <label class="form-check-label font-weight" for="inlineCheckbox1">原宿</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="areas_id" value="8">
    <label class="form-check-label font-weight" for="inlineCheckbox2">表参道</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="areas_id" value="9">
    <label class="form-check-label font-weight" for="inlineCheckbox3">秋葉原</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="areas_id" value="10">
    <label class="form-check-label font-weight" for="inlineCheckbox3">恵比寿</label>
  </div>
  </div>

  <div class="accordion-item34">
        <h2 class="accordion-header2" id="flush-headingOne">
          <button class="accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            神奈川
          </button>
        </h2>
  <div class="form-check form-check-inline form-left">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="areas_id" value="11">
    <label class="form-check-label font-weight" for="inlineCheckbox1">横浜</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="areas_id" value="12">
    <label class="form-check-label font-weight" for="inlineCheckbox2">川崎</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="areas_id" value="13">
    <label class="form-check-label font-weight" for="inlineCheckbox3">武蔵小杉</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="areas_id" value="14">
    <label class="form-check-label font-weight" for="inlineCheckbox1">みなとみらい</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="areas_id" value="15">
    <label class="form-check-label font-weight" for="inlineCheckbox3">関内</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="areas_id" value="16">
    <label class="form-check-label font-weight" for="inlineCheckbox1">元町・中華街</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="areas_id" value="17">
    <label class="form-check-label font-weight" for="inlineCheckbox1">高島町</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="areas_id" value="18">
    <label class="form-check-label font-weight" for="inlineCheckbox2">藤沢</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="areas_id" value="19">
    <label class="form-check-label font-weight" for="inlineCheckbox3">鎌倉</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="areas_id" value="20">
    <label class="form-check-label font-weight" for="inlineCheckbox3">江ノ島</label>
  </div>
  </div>

  <div class="accordion-item34">
        <h2 class="accordion-header2" id="flush-headingOne">
          <button class="accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            埼玉
          </button>
        </h2>
  <div class="form-check form-check-inline form-left">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="areas_id" value="21">
    <label class="form-check-label font-weight" for="inlineCheckbox1">武蔵浦和</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="areas_id" value="22">
    <label class="form-check-label font-weight" for="inlineCheckbox2">さいたま新都心</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="areas_id" value="23">
    <label class="form-check-label font-weight" for="inlineCheckbox3">所沢</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="areas_id" value="24">
    <label class="form-check-label font-weight" for="inlineCheckbox1">秩父</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="areas_id" value="25">
    <label class="form-check-label font-weight" for="inlineCheckbox3">大宮</label>
  </div>
  </div>

  <div class="accordion-item34">
        <h2 class="accordion-header2" id="flush-headingOne">
          <button class="accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            千葉
          </button>
        </h2>
  <div class="form-check form-check-inline form-left">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="areas_id" value="26">
    <label class="form-check-label font-weight" for="inlineCheckbox1">船橋</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="areas_id" value="27">
    <label class="form-check-label font-weight" for="inlineCheckbox2">松戸</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="areas_id" value="28">
    <label class="form-check-label font-weight" for="inlineCheckbox3">柏</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="areas_id" value="29">
    <label class="form-check-label font-weight" for="inlineCheckbox1">市川</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="areas_id" value="30">
    <label class="form-check-label font-weight" for="inlineCheckbox3">浦安</label>
  </div>
  </div>

  </div>


  <?php if(!empty($errors['facility_id'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['facility_id'];?></p>
                  </div>
  <?php endif; ?>

  <h3 class="area-title">設備</h3>

  <div class="accordion-item35">
<div class="form-check form-check-inline border-sub">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="facility_id" value="1">
    <label class="form-check-label font-weight" for="inlineCheckbox1">Wi-Fi有り</label>
  </div>
  <div class="form-check form-check-inline border-sub">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="facility_id" value="2">
    <label class="form-check-label font-weight" for="inlineCheckbox2">充電可</label>
  </div>
  <div class="form-check form-check-inline border-sub">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="facility_id" value="3">
    <label class="form-check-label font-weight" for="inlineCheckbox3">キャッシュレス可</label>
  </div>
  <div class="form-check form-check-inline border-sub">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="facility_id" value="4">
    <label class="form-check-label" for="inlineCheckbox1">BGMなし</label>
  </div>
  <div class="form-check form-check-inline border-sub">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="facility_id" value="5">
    <label class="form-check-label font-weight" for="inlineCheckbox1">30席以上</label>
  </div>
  <div class="form-check form-check-inline border-sub">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="facility_id" value="6">
    <label class="form-check-label font-weight" for="inlineCheckbox1">予約可</label>
  </div>
  <div class="form-check form-check-inline border-sub">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="facility_id" value="7">
    <label class="form-check-label font-weight" for="inlineCheckbox1">個室有り</label>
  </div>

  </div>

<?php if(!empty($errors['shop'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['shop'];?></p>
                  </div>
<?php endif; ?>

  <div class="mb-34">
    <label for="exampleInputEmail1" class="form-label">店名</label>
    <input type="text" name="shop" class="form-control2" id="exampleInputEmail1">
  </div>

  <?php if(!empty($errors['hour'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['hour'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-34">
    <label for="exampleInputPassword1" class="form-label">営業時間</label>
    <input type="text" name="hour" class="form-control2" id="exampleInputPassword1">
  </div>

  <?php if(!empty($errors['features'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['features'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-34">
    <label for="exampleInputPassword1" class="form-label">カフェの特徴</label>
    <input type="text" name="features" class="form-control2" id="exampleInputPassword1">
  </div>

  <?php if(!empty($errors['address'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['address'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-34">
    <label for="exampleInputPassword1" class="form-label">住所</label>
    <input type="text" name="address" class="form-control2" id="exampleInputPassword1">
  </div>

  <?php if(!empty($errors['seat'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['seat'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-34">
    <label for="exampleInputPassword1" class="form-label">席数</label>
    <input type="text" name="seat" class="form-control2" id="exampleInputPassword1">
  </div>

  <?php if(!empty($errors['access'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['access'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-34">
    <label for="exampleInputPassword1" class="form-label">アクセス</label>
    <input type="text" name="access" class="form-control2" id="exampleInputPassword1">
  </div>

  <?php if(!empty($errors['hp'])): ?>
                  <div class="card-header2" style="color:red">
                    <p><?= $errors['hp'];?></p>
                  </div>
  <?php endif; ?>

  <div class="mb-3433">
    <label for="exampleInputPassword1" class="form-label">カフェHP</label>
    <input type="text" name="hp" class="form-control2" id="exampleInputPassword1">
  </div>


  <div class="mb-3456">
    <button type="submit" class="btn2 btn-primary2">追加</button>
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
</html>