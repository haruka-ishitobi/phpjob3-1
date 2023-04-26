<?php




function connect(){

$host = "localhost";
$dbname = "checktest4";
$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8',$host,$dbname);
$user = "root";
$pass = "";


try{
$dbh = new PDO ($dsn,$user,$pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
echo "ok";
} catch(PDOException $e) {
    echo 'Error:' . $e->getMessage();
    die();
};

return $dbh;
$dbh=null;
}

?>

