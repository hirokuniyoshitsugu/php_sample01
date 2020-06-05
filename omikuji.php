<?php
// phpタグの中身はサーバで実行される

// 乱数の生成
$rand = rand(1, 5);
// echo ($rand);

// 条件分岐
if ($rand == 1) {
    $result = "大吉";
}
if ($rand == 2) {
    $result = "中吉";
}
if ($rand == 3) {
    $result = "吉";
}
if ($rand == 4) {
    $result = "凶";
}
if ($rand == 5) {
    $result = "大凶";
}
// echo ($result);




$randAry = rand(0, 4);
$resultAry = ['大吉', '中吉', '吉', '大凶', 'happy'];
$result2 = $resultAry[$randAry];

// 動作確認

// PHPのあとにhtmlを追加しよう
// !->tabでフォーマット作成が可能（通常のhtmlファイルと同様）

// 動作確認
// サーバでPHPが実行->生成されたhtmlがブラウザに送られて表示される

// htmlと組み合わせるときはPHPタグを省略しないこと（PHPとhtmlの区別がつかなくなるため）
?>

<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>

<body>
    <h1>今日の運勢は<?= $result2 ?>です</h1>
</body>


<!-- 
<script>
    console.log(<?= $result ?>);
</script> -->

</html>