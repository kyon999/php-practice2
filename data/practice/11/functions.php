<?php
function html_escape($word){
    return htmlspecialchars($word, ENT_QUOTES, 'UTF-8');
}
function get_post($key){
    if(isset($_POST[$key])){
        $var = trim($_POST[$key]);
        return $var;
    }
}
function check_words($word, $lencth){
    if(mb_strlen($word) === 0){
        return FALSE;
    }elseif(mb_strlen($word) > $length){
        return FALSE;
    }else{
        return TRUE;
    }
}
function get_db_Conect(){
    $dsn = 'mysql:dbname=sample;host=db;charset=utf8';
    $user = 'user';
    $password = 'userpass';

    try{

        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        echo '接続に成功しました';

    }catch (PDOException $e){
        print($e->getMessage());
        die();

    }
}