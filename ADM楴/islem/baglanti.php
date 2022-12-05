<?php



try {
    $baglanti=new PDO("mysql:host=localhost; dbname=bluetech ",  'root' ,''); 
    echo "baglanti basarili";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>