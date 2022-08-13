<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
$raw_pwd = 123;
$hashed_pwd = hash('sha512', $raw_pwd);
$pwd_ready = password_hash($hashed_pwd, PASSWORD_BCRYPT, ['cost' => 12]);

echo $hashed_pwd . "<br> Duzina stringa je " . strlen($hashed_pwd) . " karaktera.<br>";
echo $pwd_ready . "<br> Duzina stringa je " . strlen($pwd_ready) . " karaktera.<br>";

$raw_pwd2 = 123;
$hashed_pwd2 = hash('sha512', $raw_pwd2);
//$pwd_ready2 = password_hash($hashed_pwd, PASSWORD_BCRYPT, ['cost' => 12]);

if(password_verify($hashed_pwd2, $pwd_ready)){
    echo "<br><br>iste sifre";
} else {
    echo "<br><br>Razlicite sifre";
}

//echo "<pre>";
//print_r(hash_algos());
//echo "</pre>";
