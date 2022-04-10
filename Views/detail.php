<?php
session_start();
require_once(ROOT_PATH . 'Controllers/UserController.php');
$user = new UserController();
$products = $user->more();
?>


<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="/css/detail.css" rel="stylesheet">
    <link href="/css/header.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jquery raty -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="jquery.raty.js"></script>

    <title>カフェ詳細画面</title>
  </head>

  <body id="all">

  <?php include('header2.php'); ?>

<div>
    <section>
        <div class="title">
            <h2><?=$products['cafe'][0]['shop']?></h2>
        </div>
    </section>

    <section>
        <nav></nav>

        <div　class="inner_all">
            <div id="shop-content">
                <!-- カフェ内の写真 -->
                <h3>お店の雰囲気(商品)</h3>
                <div class="inner">
                    <div class="shop-images">
                        <img src="/img/cafe24.jpg" alt="カフェ１" width="500px">
                        <img src="/img/cafesub20.jpg" alt="カフェ２" width="500px">
                    </div>
                </div>
                <!-- カフェ内の写真 -->

　　　　　　　　　　　　<!-- カフェ紹介文 -->
                <dl id="recommend">
                    <dt><h4>紹介文</h4></dt>
                    <dd><p><?=$products['cafe']['0']['features']?><p></dd>
                </dl>
                <!-- カフェ紹介文 -->
            </div>

            <div id="shop-content" class="inner34">
                <h3>設備情報</h3>
                    <div class="inner clearfix">
                        <div class="equipment"><!-- 設備 -->
                            <ul>
                            <?php 
                                if(count($products['cafe'])==1){
                                    if($products['cafe']['0']['facility_id']=='1'){
                                        echo "<li class=list_color1>Wi-Fiあり</li>";
                                    }else{
                                        echo "<li>Wi-Fiあり</li>";
                                    }
                                
                                    if($products['cafe']['0']['facility_id']=='2'){
                                        echo "<li class=list_color1>Wi-Fiあり</li>";
                                    }else{
                                        echo "<li>充電可</li>";
                                    }

                                    if($products['cafe']['0']['facility_id']=='3'){
                                        echo "<li class=list_color1>Wi-Fiあり</li>";
                                    }else{
                                        echo "<li>キャッシュレス可</li>";
                                    }

                                    if($products['cafe']['0']['facility_id']=='4'){
                                        echo "<li class=list_color1>Wi-Fiあり</li>";
                                    }else{
                                        echo "<li>BGMなし</li>";
                                    }

                                    if($products['cafe']['0']['facility_id']=='5'){
                                        echo "<li class=list_color1>Wi-Fiあり</li>";
                                    }else{
                                        echo "<li>30席以上</li>";
                                    }

                                    if($products['cafe']['0']['facility_id']=='6'){
                                        echo "<li class=list_color1>Wi-Fiあり</li>";
                                    }else{
                                        echo "<li>予約可</li>";
                                    }

                                    if($products['cafe']['0']['facility_id']=='7'){
                                        echo "<li class=list_color1>Wi-Fiあり</li>";
                                    }else{
                                        echo "<li>個室あり</li>";
                                    }
                                }

                            ?>
                            <?php
                                if(count($products['cafe'])==2){
                            
                                    if($products['cafe']['0']['facility_id']=='1'){
                                        echo "<li class=list_color1>Wi-Fiあり</li>";
                                    }elseif($products['cafe']['1']['facility_id']=='1'){
                                        echo "<li class=list_color1>Wi-Fiあり</li>";
                                    }else{
                                        echo "<li>Wi-Fiあり</li>";}?>
                            <?php
                                    if($products['cafe']['0']['facility_id']=='2'){
                                        echo "<li class=list_color2>充電可</li>";
                                    }elseif($products['cafe']['1']['facility_id']=='2'){
                                        echo "<li class=list_color2>充電可</li>";
                                    }else{
                                        echo "<li>充電可</li>";}
                            ?>
                            <?php
                                    if($products['cafe']['0']['facility_id']=='3'){
                                        echo "<li class=list_color3>キャッシュレス可</li>";
                                    }elseif($products['cafe']['1']['facility_id']=='3'){
                                        echo "<li class=list_color3>キャッシュレス可</li>";
                                    }else{
                                        echo "<li>キャッシュレス可</li>";}
                            ?>
                            <?php
                                    if($products['cafe']['0']['facility_id']=='4'){
                                        echo "<li class=list_color4>BGMなし</li>";
                                    }elseif($products['cafe']['1']['facility_id']=='4'){
                                        echo "<li class=list_color4>BGMなし</li>";
                                    }else{
                                        echo "<li>BGMなし</li>";}
                            ?>
                            <?php
                                    if($products['cafe']['0']['facility_id']=='5'){
                                        echo "<li class=list_color5>30席以上</li>";
                                    }elseif($products['cafe']['1']['facility_id']=='5'){
                                        echo "<li class=list_color5>30席以上</li>";
                                    }else{
                                        echo "<li>30席以上</li>";}
                            ?>
                            <?php
                                    if($products['cafe']['0']['facility_id']=='6'){
                                        echo "<li class=list_color6>予約可</li>";
                                    }elseif($products['cafe']['1']['facility_id']=='6'){
                                        echo "<li class=list_color6>予約可</li>";
                                    }else{
                                        echo "<li>予約可</li>";}
                            ?>
                            <?php
                                    if($products['cafe']['0']['facility_id']=='7'){
                                        echo "<li class=list_color7>個室あり</li>";
                                    }elseif($products['cafe']['1']['facility_id']=='7'){
                                        echo "<li class=list_color7>個室あり</li>";
                                    }else{
                                        echo "<li>個室あり</li>";}
                                }
                            ?>
                            </ul>
                        </div>
                    </div>
            </div>

            <div class="content-under inner34" id="shop-content">
                <h3>基本情報</h3>
                    <div class="inner clearfix">
                        <div class="basic-info">
                            <table>
                                    <tr>
                                        <th>店名</th>
                                        <td><?=$products['cafe']['0']['shop']?></td>
                                    </tr>
                                    <tr>
                                        <th>住所</th>
                                        <td><?=$products['cafe']['0']['address']?></td>
                                    </tr>
                                    <tr>
                                        <th>アクセス</th>
                                        <td><?=$products['cafe']['0']['access']?></td>
                                    </tr>
                                    <tr>
                                        <th>営業時間</th>
                                        <td><?=$products['cafe']['0']['hour']?></td>
                                    </tr>
                                    <tr>
                                        <th>席数</th>
                                        <td><?=$products['cafe']['0']['seat']?></td>
                                    </tr>
                                    <tr>
                                        <th>カフェURL</th>
                                        <td><a href="#"><?=$products['cafe']['0']['hp']?> </a></td>
                                    </tr>
                            </table>
                        </div>
                    </div>
            </div>

            <button class="btn3 btn-primary2 btn-lg" type="submit"><a href="main.php">ホームに戻る</a></button>

        </div>
    </section>

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <?php include('footer.php'); ?>


  </body>
  
</html>