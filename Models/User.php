<?php
require_once(ROOT_PATH .'/Models/Db.php');

class User extends Db{
    public function __construct($dbh = null){
        parent::__construct($dbh);
    }
    // usersテーブルから全てのデータを取得
    public function findAll():Array {
        $sql = 'SELECT * FROM users';
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    // ユーザデータを取得
    public function findById($id = 0) {
        $sql = 'SELECT * FROM users';
        $sql .= ' WHERE id = :id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    //cafesテーブルから全てのデータを取得
    public function cafe(){
        $sql = 'SELECT * FROM cafes';
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function cafeSub(){
        $sql = 'SELECT * FROM cafes_sub';
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    //cafesデータを取得
    public function cafeById($id = 0):Array {
        $sql = 'SELECT * FROM cafes';
        $sql .= ' WHERE shop_id = :id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    //新規登録
    public function signUp() {
        try {
            $hash_pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (name,email,password) VALUES (:name,:email,:password)";
            $this->dbh->beginTransaction();
            $sth = $this->dbh->prepare($sql);
            $sth->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
            $sth->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
            $sth->bindParam(':password', $hash_pass, PDO::PARAM_STR);
            $sth->execute();
            $this->dbh->commit();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch(PDOException $e) {
            echo $e->getMessage();
            $this->dbh->rollBack();
            exit();
        }
    }
    //ログイン
    public function logIn(){
        $sql = "SELECT * FROM users WHERE email = :email";
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC); 

        if (empty($result)) {
            $result = "error100";
            return $result;
        } else {
            //password_verify: 第一引数には認証する文字列を指定、第二引数では暗号化済みの文字列を指定
            if (password_verify($_POST['password'],$result[0]['password'])) {
                $_SESSION['id'] = $result[0]['id'];
                $login = array($result[0]['email'],$result[0]['id']);
                return $login;
            } else {
                // エラーの非表示
                error_reporting(0);
                $result = "error100";
                return $result;
            }
        }
    }
    //パスワード再設定
    public function reset(){
        $hash_pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $sql = 'UPDATE users SET password = :password WHERE email = :email';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':password', $hash_pass, PDO::PARAM_STR);
        $sth->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // ユーザーデータ編集
    public function edit($id = 0){
        $sql = 'UPDATE users SET name = :name,email = :email WHERE id = :id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
        $sth->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $sth->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $sth->execute();
        // $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        // return $result;
    }


    //カフェ追加
    public function add(){
        $sql = "INSERT INTO cafes (shop,address,facility_id,shop_id,hour,seat,features,access,hp,areas_id) 
                VALUES (:shop,:address,:facility_id,:shop_id,:hour,:seat,:features,:access,:hp,:areas_id)";
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':shop', $_POST['shop'], PDO::PARAM_STR);
        $sth->bindParam(':address', $_POST['address'], PDO::PARAM_STR);
        $sth->bindParam(':facility_id', $_POST['facility_id'], PDO::PARAM_INT);
        $sth->bindParam(':shop_id', $_POST['shop_id'], PDO::PARAM_INT);
        $sth->bindParam(':hour', $_POST['hour'], PDO::PARAM_STR);
        $sth->bindParam(':seat', $_POST['seat'], PDO::PARAM_INT);
        $sth->bindParam(':features', $_POST['features'], PDO::PARAM_STR);
        $sth->bindParam(':access', $_POST['access'], PDO::PARAM_STR);
        $sth->bindParam(':hp', $_POST['hp'], PDO::PARAM_STR);
        $sth->bindParam(':areas_id', $_POST['areas_id'], PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //カフェ追加2
    public function add_sub(){
        $sql = "INSERT INTO cafes_sub (shop,address,facility_id,areas_id,hour,seat,features,access,hp) 
                VALUES (:shop,:address,:facility_id,:areas_id,:hour,:seat,:features,:access,:hp)";
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':shop', $_POST['shop'], PDO::PARAM_STR);
        $sth->bindParam(':address', $_POST['address'], PDO::PARAM_STR);
        $sth->bindParam(':facility_id', $_POST['facility_id'], PDO::PARAM_INT);
        $sth->bindParam(':areas_id', $_POST['areas_id'], PDO::PARAM_STR);
        $sth->bindParam(':hour', $_POST['hour'], PDO::PARAM_STR);
        $sth->bindParam(':seat', $_POST['seat'], PDO::PARAM_STR);
        $sth->bindParam(':features', $_POST['features'], PDO::PARAM_STR);
        $sth->bindParam(':access', $_POST['access'], PDO::PARAM_STR);
        $sth->bindParam(':hp', $_POST['hp'], PDO::PARAM_STR);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // //カフェ編集
    public function reset_sub(){
        $sql = 'UPDATE cafes SET shop = :shop,address = :address,hour = :hour,seat = :seat,features = :features,access = :access,hp = :hp WHERE shop_id = :shop_id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':shop', $_POST['shop'], PDO::PARAM_STR);
        $sth->bindValue(':address', $_POST['address'], PDO::PARAM_STR);
        $sth->bindValue(':hour', $_POST['hour'], PDO::PARAM_STR);
        $sth->bindValue(':seat', $_POST['seat'], PDO::PARAM_STR);
        $sth->bindValue(':features', $_POST['features'], PDO::PARAM_STR);
        $sth->bindValue(':access', $_POST['access'], PDO::PARAM_STR);
        $sth->bindValue(':hp', $_POST['hp'], PDO::PARAM_STR);
        $sth->bindValue(':shop_id', $_POST['shop_id'], PDO::PARAM_STR);
        $sth->execute();
        // $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        // return $result;
    }

    // //カフェ編集2
    public function reset_sub2(){
        $sql = 'UPDATE cafes_sub SET shop = :shop,address = :address,hour = :hour,seat = :seat,features = :features,access = :access,hp = :hp WHERE shop_id = :shop_id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':shop_id', $_POST['shop_id'], PDO::PARAM_STR);
        $sth->bindParam(':shop', $_POST['shop'], PDO::PARAM_STR);
        $sth->bindParam(':address', $_POST['address'], PDO::PARAM_STR);
        $sth->bindParam(':hour', $_POST['hour'], PDO::PARAM_STR);
        $sth->bindParam(':seat', $_POST['seat'], PDO::PARAM_STR);
        $sth->bindParam(':features', $_POST['features'], PDO::PARAM_STR);
        $sth->bindParam(':access', $_POST['access'], PDO::PARAM_STR);
        $sth->bindParam(':hp', $_POST['hp'], PDO::PARAM_STR);
        $sth->execute();
    //     // $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    //     // return $result;
    }

    //カフェ削除
    public function delete_sub() {
        $sql = 'DELETE FROM cafes WHERE shop_id = :shop_id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':shop_id', $_GET['id'], PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    //カフェ削除
    public function delete_sub2() {
        $sql = 'DELETE FROM cafes_sub WHERE shop_id = :shop_id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':shop_id', $_GET['id'], PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    


    // 検索
    public function search(){
        try {
            $sql = "SELECT * FROM cafes";
            // $sql2 = "SELECT * FROM cafes_sub";
            $where = ""; //?
            $initFlag = false; //whereがつかない

            if (isset($_POST['prepare'])){
                $test2 = $_POST['prepare'];
                $imp2 = implode(",",$test2);

                if (!$initFlag) {
                    $sql .= " WHERE facility_id IN ({$imp2})";
                    $initFlag = true;
                }
            }

            if (isset($_POST['type'])){
                $test1 = $_POST['type'];
                $imp1 = implode(",",$test1);

                if (!$initFlag) {
                    $sql .= "_sub WHERE areas_id IN ({$imp1})";
                    $initFlag = true;
                } else {
                    $sql .= " AND areas_id IN ({$imp1})";
                }
            }

            
            $sth = $this->dbh->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch(PDOException $e) {
            echo $e->getMessage();
            $this->dbh->rollBack();
            exit();
        }
    }

   
      
    //退会
    public function delete() {
        $sql = 'DELETE FROM users WHERE id = :id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //いいね
    public function checkLike($shop_id) {
        try {
            $sql = 'SELECT * FROM goods WHERE user_id = :u_id AND shop_id = :shop_id';
            $sth = $this->dbh->prepare($sql);
            $sth->bindParam(':u_id', $_SESSION['id'], PDO::PARAM_INT);
            $sth->bindParam(':shop_id', $shop_id, PDO::PARAM_INT);
            $sth->execute();
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            // レコードが1件でもある場合
            if(!empty($result)){
                // レコードを削除する
                $sql = 'DELETE FROM goods WHERE user_id = :u_id AND shop_id = :shop_id';
                $sth = $this->dbh->prepare($sql);
                $sth->bindParam(':u_id', $_SESSION['id'], PDO::PARAM_INT);
                $sth->bindParam(':shop_id', $shop_id, PDO::PARAM_INT);
                $sth->execute();
                $result = $sth->fetch(PDO::FETCH_ASSOC);
            }else{
                // レコードを挿入する
                $sql = 'INSERT INTO goods (user_id, shop_id) VALUES (:u_id, :shop_id)';
                $sth = $this->dbh->prepare($sql);
                $sth->bindParam(':u_id', $_SESSION['id'], PDO::PARAM_INT);
                $sth->bindParam(':shop_id', $shop_id, PDO::PARAM_INT);
                $sth->execute();
                $result = $sth->fetch(PDO::FETCH_ASSOC);
            }
        }catch(PDOException $e){
                echo $e->getMessage();
                $this->dbh->rollBack();
                exit();
        }
    }

    // いいね履歴を取得
    public function accountLike():Array {
        $sql = 'SELECT *
                FROM goods g
                JOIN cafes_sub c ON g.shop_id = c.shop_id 
                WHERE user_id = :u_id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':u_id', $_SESSION['id'], PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
}
?>