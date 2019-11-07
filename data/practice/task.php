<?php
$login_id = $_POST['id'];
$login_pass = $_POST['pass'];

$user = array(
    0 => array(
        'id' => '1',
        'name' => '社長',
        'team' => '社長',
        'pass' => '1234'
    ),
    1 => array(
        'id' => '2',
        'name' => '鈴木さん',
        'team' => '営業チーム',
        'pass' => '1111'
    ),
    2 => array(
        'id' => '3',
        'name' => '高橋さん',
        'team' => '経理チーム',
        'pass' => '2222'
    ),
    3 => array(
        'id' => '4',
        'name' => '山田さん',
        'team' => '営業チーム',
        'pass' => '3333'
    ),
    4 => array(
        'id' => '5',
        'name' => '中村さん',
        'team' => '経理チーム',
        'pass' => '4444'
    ),
    5 => array(
        'id' => '6',
        'name' => '山田さん',
        'team' => '総務チーム',
        'pass' => '5555'
    )   
);
$task = array(
    0 => array(
        'task_name' => '鈴木さん',
        'task1' => 'A社訪問',
        'task2' => 'B社資料送付'
    ),
    1 => array(
        'task_name' => '高橋さん',
        'task1' => '帳簿処理',
        'task2' => '請求書発行'
    ),
    2 => array(
        'task_name' => '山田さん',
        'task1' => 'C社訪問',
        'task2' => 'D社資料送付',
        'task3' => 'E社資料送付'
    ),
    3 => array(
        'task_name' => '中村さん',
        'task1' => '請求書発行',
        'task2' => '先月の締め'
    ),
    4 => array(
        'task_name' => '山田さん',
        'task1' => '求人開始',
        'task2' => '退職予定者の処理作業'
    )
    
);
?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <h1>タスクページ</h1>
    <?php
    foreach($user as $var){
        if($var['id'] === $login_id){
            if($var['pass'] === $login_pass){ ?>
                <p><?php echo 'あなたの名前は'.$var['name']; ?></p>
                <?php if($login_id === '1'){ 
                    foreach($task as $var2){ ?>
                        <p><?php echo $var2['task_name'].$var2['task1'].$var2['task2']; ?></p>
                    <?php }
                }else{
                    foreach($task as $var3){
                        if($var3['task_name'] === $login_name){ ?>
                            <p><?php echo $var3['task_name'].$var3['task1'].$var3['task2']; ?></p>
                        <?php }
                    } 
                }
            }else{ ?>
                <p>パスワードが間違っています</p>
            <?php 
            } 
        }
    } ?>
    
</body>
</html>