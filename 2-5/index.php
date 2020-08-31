<?php
$age = 18;

if($age >=20){
    echo "お酒が飲めるぞ！";
}  else{
    echo "お酒は二十歳になってから！";
}
?>

<?php
//学生かどうか
$is_student = true;

if($is_student){
    echo 'あなたは学生です。';
}

//年齢
$age = 20;
//学生かどうか
$is_student = true;

if($age < 25 && $is_student){
    echo '学割パックが使えるよ！';
} elseif($age < 25){
    echo '若者応援割引が使えるよ！';
}
echo '<br>';
?>

<?php
$blood = 'B';
switch($blood){
case'A':
    print 'A型です';
    break;
case'B':
    print 'B型です';
break;
default:
echo 'A/B/O/ABから選択してください';
}
echo '<br>';
?>


<?php
$name_taro = 'true';
$password_pass = 'true';
if($name_taro && $password_pass){
    echo 'ログイン成功です';
    }elseif($name_taro != $password_pass){
        echo 'パスワードが間違っています';
    }elseif($password_pass != $name_taro){
        echo '名前が間違っています';
    }else{
        echo '入力情報が間違っています';
    }
?>

<?php
echo '<br>';
echo "1.IDEとはソフトウェア開発に必要なソフトウェアを一つに組み合わせ、同じ操作画面から統一的な操作法で利用できるようにしたソフトウェアパッケージのこと。";
echo '<br>';
echo "2.JOINとは複数のテーブルのデータを合体させて一つにすること。";
echo '<br>';
echo "3.コンフリクトとは複数の装置やプログラムなどを同時に利用して競合状態になってしまうこと。";
?>

