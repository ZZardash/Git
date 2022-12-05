<?php

require_once 'baglanti.php';

if(isset($_POST['ayarkaydet'])){

$duzenle=$baglanti->prepare("UPTADE ayarlar SET

baslik=:baslik,
aciklama=:aciklama,
anahtarkelime=:anahtarkelime

WHERE ID=1

");

$uptade =$duzenle->execute(array(
'baslik'=>$_POST['baslik'],
'aciklama'=>$_POST['aciklama'],
'anahtarkelime'=>$_POST['anahtarkelime']
));
}

?>