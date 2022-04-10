<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
?>


<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/search.css" rel="stylesheet">
    <link href="/css/header.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link href="/css/add_cafe.css" rel="stylesheet">

    <title>検索画面</title>
  </head>

  <?php include('header2.php'); ?>

  <body class="all">
    <div class="article">
      <section class="search_by_area col980">
        <form action="search_cafe.php" method="post">
          <!-- エリア -->
          <h3>エリア・設備から探す</h3>
          <div class="area-select-btn open">地域を選択する</div>
            <div class="accordion_all2">
              <!-- 東京 -->
              <div class="accordion-item34">
                <h2 class="accordion-header2" id="flush-headingOne">
                  <button class="accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    東京
                  </button>
                </h2>
                <div class="form-check form-check-inline form-left">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type[]" value="1">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">新宿</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="type[]" value="2">
                  <label class="form-check-label font-weight" for="inlineCheckbox2">渋谷</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type[]" value="3">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">丸の内</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type[]" value="4">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">銀座</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type[]" value="5">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">六本木</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type[]" value="6">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">池袋</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type[]" value="7">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">原宿</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="type[]" value="8">
                  <label class="form-check-label font-weight" for="inlineCheckbox2">表参道</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type[]" value="9">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">秋葉原</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type[]" value="10">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">恵比寿</label>
                </div>
              </div>
              <!-- 神奈川 -->
              <div class="accordion-item34">
                <h2 class="accordion-header2" id="flush-headingOne">
                  <button class="accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    神奈川
                  </button>
                </h2>
                <div class="form-check form-check-inline form-left">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type[]" value="11">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">横浜</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="type[]" value="12">
                  <label class="form-check-label font-weight" for="inlineCheckbox2">川崎</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type[]" value="13">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">武蔵小杉</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type[]" value="14">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">みなとみらい</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type[]" value="15">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">関内</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type[]" value="16">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">元町・中華街</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type[]" value="17">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">高島町</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="type[]" value="18">
                  <label class="form-check-label font-weight" for="inlineCheckbox2">藤沢</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type[]" value="19">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">鎌倉</label>
                </div>
                <div class="form-check form-check-inline margin_sp">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type[]" value="20">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">江ノ島</label>
                </div>
              </div>
              <!-- 埼玉 -->
              <div class="accordion-item34">
                <h2 class="accordion-header2" id="flush-headingOne">
                  <button class="accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    埼玉
                  </button>
                </h2>
                <div class="form-check form-check-inline form-left">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type[]" value="21">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">武蔵浦和</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="type[]" value="22">
                  <label class="form-check-label font-weight" for="inlineCheckbox2">さいたま新都心</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type[]" value="23">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">所沢</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type[]" value="24">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">秩父</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type[]" value="25">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">大宮</label>
                </div>
              </div>

              <!-- 千葉 -->
              <div class="accordion-item34">
                <h2 class="accordion-header2" id="flush-headingOne">
                  <button class="accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    千葉
                  </button>
                </h2>
                <div class="form-check form-check-inline form-left">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type[]" value="26">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">船橋</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="type[]" value="27">
                  <label class="form-check-label font-weight" for="inlineCheckbox2">松戸</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type[]" value="28">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">柏</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type[]" value="29">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">市川</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type[]" value="30">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">浦安</label>
                </div>
              </div>
            </div>

            <!-- 設備 -->
            <div id="shop-content">
              <h3>設備選択</h3>
              <div class="accordion-item35">
                <div class="form-check form-check-inline border-sub">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="prepare[]" value="1">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">Wi-Fi有り</label>
                </div>
                <div class="form-check form-check-inline border-sub">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="prepare[]" value="2">
                  <label class="form-check-label font-weight" for="inlineCheckbox2">充電可</label>
                </div>
                <div class="form-check form-check-inline border-sub">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="prepare[]" value="3">
                  <label class="form-check-label font-weight" for="inlineCheckbox3">キャッシュレス可</label>
                </div>
                <div class="form-check form-check-inline border-sub">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="prepare[]" value="4">
                  <label class="form-check-label" for="inlineCheckbox1">BGMなし</label>
                </div>
                <div class="form-check form-check-inline border-sub">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="prepare[]" value="5">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">30席以上</label>
                </div>
                <div class="form-check form-check-inline border-sub">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="prepare[]" value="6">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">予約可</label>
                </div>
                <div class="form-check form-check-inline border-sub">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="prepare[]" value="7">
                  <label class="form-check-label font-weight" for="inlineCheckbox1">個室有り</label>
                </div>
            </div>
          </div>

          <div class="mb-3456">
              <button type="submit" class="btn2 btn-primary24">探す</button>
              <a href="main.php"><button type="submit" class="btn2 btn-primary3">ホームに戻る</button></a>
          </div>

        </form>
      </section>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
  </body>

  <?php include('footer.php'); ?>

</html>
