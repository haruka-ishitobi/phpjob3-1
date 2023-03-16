<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice2</title>
</head>
<body>
  <!-- ①フォームを作成しましょう -->
  <!-- ここにフォームを記述してください -->
<form action="result.php" method="get" >
    <p>好きな名前を入れてください</p>
    <input type="text" name="favorite_name">
    <br>
    <p>1～6の中で好きな数字を入れてください</p>
    <select name="number">
        <?php for ($i=1;$i<=6;$i++){ ?>
            <option value="<?php echo $i;?>">
            <?php echo $i;?>
             </option>

            <?php } ?>
    </select>
    <input type="submit" value="送信"/>


</form>
        
  
</body>
</html>


