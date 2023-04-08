<link rel="stylesheet" href="index.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name=$_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$port_numbers = [80,22,20,21];
$languages = ["PHP","Python","JAVA","HTML"];
$commands = ["join","select","insert","update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>
<p>お疲れ様です<?php echo "${my_name}<!--POST通信で送られてきた名前を出力-->さん"?></p>
<!--フォームの作成 通信はPOST通信で-->
<form action = "answer.php" method = "post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
foreach ($port_numbers as $value) {?>

<input type="radio" name="port_numbers" value = <?php echo $value; ?> >
<?php echo $value;}?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach ($languages as $value) {?>
<input type="radio" name="languages" value = <?php echo $value; ?>>
<?php echo $value; }?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach ($commands as $value) {?>
<input type="radio" name="commands" value = <?php echo $value; ?>>
<?php echo $value; }?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<br/>
<div class="submit">
<input type="submit" value="回答する">
</div>
<input type="hidden" name = answer1 value = 80>
<input type="hidden" name = answer2 value = "HTML">
<input type="hidden" name = answer3 value = "select">
<input type="hidden" name = myname value = "<?php echo $my_name;?>" >
</form>

