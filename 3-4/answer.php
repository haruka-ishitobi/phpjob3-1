<link rel="stylesheet" href="reset.css">

    

<?php

//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$myname = $_POST['myname'];
$port_number = $_POST['port_numbers'];
$language = $_POST['languages'];
$commnd = $_POST['commands'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
if ($port_number = $answer1){
    $response1 = "正解！";
} else {
    $response1 = "残念・・・";
}

if($language = $answer2){
    $response2 = "正解！";
} else {
    $response2 = "残念・・・";
}
if($command = $answer3){
    $response3 = "正解！";
} else {
    $response3 = "残念・・・";
}

?>
<p><?php echo $myname; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $response1; ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $response2; ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
 <?php echo $response3; ?>
 