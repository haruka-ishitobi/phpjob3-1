<?php
$favorite_name = $_GET['favorite_name'];
$number = $_GET['number'];
?>



<?php
$a=mt_rand(1,6);
$result=$number*$a;
if ($result<=10) {
    $b="凶";
} elseif ($result<=15) { 
    $b="小吉";
} elseif ($result<=20) {
    $b="中吉";
} elseif ($result<=25) {
    $b="吉";
} elseif ($result<=36) {
    $b="大吉";
} else {
    $b="残念";
}
date_default_timezone_set('Asia/Tokyo');
echo date("Y-m-d h:i:s", time());
echo '<br>';
echo "名前は${favorite_name}です。";
echo '<br>';
echo "番号は${result}です。";
echo '<br>';
echo "結果は${b}です。";
?>