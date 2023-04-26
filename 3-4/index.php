<?php
require_once("pdo.php");
require_once("getData.php");
$dbc = new Dbc();


$UserData=$dbc->getUserData();
$PostData=$dbc->getPostData();


function setCategoryName($category_number) {
    
    if ($category_number == "1") {
        return "食事";
    } elseif ($category_number =="2") {
        return "旅行";
    } else{
        return "その他";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <div class="left">
            <img src="1599315827_logo.png" class="logo">
        </div>
        <div class="right">
        <?php foreach ($UserData as $column1): ?>
            <div class="top">
                
                <p>ようこそ<?php echo $column1["last_name"],$column1["first_name"];?>さん</p>
                </div>
            <div class="bottom">
                <p>最終ログイン日：<?php echo $column1["last_login"] ?></p>
            <?php endforeach; ?>

            </div>
        </div>
    </header>
    <main>
        <table>
            <tr class="tr1">
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>
            </tr>
            <tbody>
            <?php foreach ($PostData as $column2):?>

            <tr class ="tr2">
                <td><?php echo $column2["id"]; ?></td>
                <td><?php echo $column2["title"]; ?></td>
                <td><?php echo setCategoryName($column2["category_no"]); ?></td>
                <td><?php echo $column2["comment"]; ?></td>
                <td><?php echo $column2["created"]; ?></td>
            </tr> 
           <?php endforeach; ?>
            </tbody>           

        </table>
    </main>
    
    <footer>
        <p>Y&I group.inc</p>
    </footer>
</body>
</html>