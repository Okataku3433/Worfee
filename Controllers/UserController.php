<?php
require_once(ROOT_PATH .'/Models/user.php');
class UserController{
    private $request; //リクエストパラメータ(GET,POST)
    private $user; //userモデル
    public function __construct(){
        //リクエストパラメータの取得
        $this->request['get'] = $_GET;
        $this->request['post'] = $_POST;
        //モデルオブジェクトの生成
        $this->user = new user();
        // 別モデルとの連携
        $dbh = $this->user->get_db_handler();
    }
    public function index(){
        $users = $this->user->findAll();
        $params = [
            'users' => $users
        ];
        return $params;
    }
    //idデータの取得
    public function view() {
        //画面エラーを避けるためのエラー処理
        if (empty($this->request['get']['id'])) {
            echo '指定のパラメータが不正です。このページを表示できません。';
            exit;
        }
        $user = $this->user->findById($this->request['get']['id']);
        $params = [
            'user' => $user
        ];
        return $params;
    }

    public function edit() {
        //画面エラーを避けるためのエラー処理
        if (empty($this->request['get']['id'])) {
            echo '指定のパラメータが不正です。このページを表示できません。';
            exit;
        }
        $user = $this->user->edit($this->request['get']['id']);
        $params = [
            'user' => $user
        ];
        return $params;
    }

    public function more() {
        //画面エラーを避けるためのエラー処理
        if (empty($this->request['get']['id'])) {
            echo '指定のパラメータが不正です。このページを表示できません。';
            exit;
        }
        $cafe = $this->user->cafeById($this->request['get']['id']);
        $products = [
            'cafe' => $cafe
        ];
        return $products;
    }
    //新規登録
    public function signUp(){
        $signUp = $this->user->signUp();
        return $signUp;
    }
    //ログイン
    public function logIn(){
        $logIn = $this->user->logIn();
        return $logIn;
    }
    //パスワード再設定
    public function reset(){
        $reset = $this->user->reset();
        return $reset;
    }
    //退会
    public function delete() {
        $delete = $this->user->delete();
        return $delete;
    }
    public function cafe() {
        $cafe = $this->user->cafe();
        return $cafe;
    }
    public function cafeSub() {
        $cafe = $this->user->cafeSub();
        return $cafe;
    }

    public function findById() {
        $users = $this->user->findById();
        return $users;
    }


    public function add() {
        $add = $this->user->add();
        return $add;
    }

    public function add_sub() {
        $add_sub = $this->user->add_sub();
        return $add_sub;
    }


    public function reset_sub() {
        $reset_sub = $this->user->reset_sub();
        return $reset_sub;
    }

    public function reset_sub2() {
        $reset_sub2 = $this->user->reset_sub2();
        return $reset_sub;
    }

    public function delete_sub() {
        $delete_sub = $this->user->delete_sub();
        return $delete_sub;
    }
    

    public function delete_sub2() {
        $delete_sub2 = $this->user->delete_sub2();
        return $delete_sub2;
    }

    //いいね履歴
    public function accountLike() {
        $accountLike = $this->user->accountLike();
        return $accountLike;
    } 
    


    
    //検索
    public function search(){
        $search = $this->user->search();
        return $search;
    }
    
    
}
?>