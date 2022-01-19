<?php 
ob_start();
session_start();


	include 'baglan.php';

if (isset($_POST['admingiris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=md5($_POST['kullanici_password']);

		$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
  		$kullanicisor->execute(array(
  			'mail' => $kullanici_mail,
  			'password' => $kullanici_password,
  			'yetki' => 5
  ));

  		echo $say=$kullanicisor->rowCount();
  		
  		if ($say==1) {
  			
  			$_SESSION['kullanici_mail']=$kullanici_mail;
  			header("Location:../production/index.php?durum=no");
  			exit;





  		} else{

  			header("Location:../production/login.php?durum=no");
  			exit;
  		}


}




if (isset($_POST['genelayarkaydet'])) {

	 $ayarkaydet=$db->prepare("UPDATE ayar SET 

	 	ayar_title=:ayar_title,
	 	ayar_description=:ayar_description,
	 	ayar_keywords=:ayar_keywords,
	 	ayar_author=:ayar_author
	 	WHERE ayar_id=0	");


	 $update=$ayarkaydet->execute(array(

	 	'ayar_title' => $_POST['ayar_title'],
	 	'ayar_description' => $_POST['ayar_description'],
	 	'ayar_keywords' => $_POST['ayar_keywords'],
	 	'ayar_author' => $_POST['ayar_author']
	 ));
	

		if ($update) {
			
			header("Location:../production/genelayar.php?durum=ok");

		} else {

			header("Location:../production/genelayar.php?durum=no");
		}



}


if (isset($_POST['iletisimayarkaydet'])) {

	 $ayarkaydet=$db->prepare("UPDATE ayar SET 

	 	ayar_tel=:ayar_tel,
	 	ayar_gsm=:ayar_gsm,
	 	ayar_faks=:ayar_faks,
	 	ayar_mail=:ayar_mail,
	 	ayar_ilce=:ayar_ilce,
	 	ayar_il=:ayar_il,
	 	ayar_adres=:ayar_adres,
	 	ayar_mesai=:ayar_mesai
	 	WHERE ayar_id=0	");


	 $update=$ayarkaydet->execute(array(

	 	'ayar_tel' => $_POST['ayar_tel'],
	 	'ayar_gsm' => $_POST['ayar_gsm'],
	 	'ayar_faks' => $_POST['ayar_faks'],
	 	'ayar_mail' => $_POST['ayar_mail'],
	 	'ayar_ilce' => $_POST['ayar_ilce'],
	 	'ayar_il' => $_POST['ayar_il'],
	 	'ayar_adres' => $_POST['ayar_adres'],
	 	'ayar_mesai' => $_POST['ayar_mesai']
	 ));
	

		if ($update) {
			
			header("Location:../production/iletisimayar.php?durum=ok");

		} else {

			header("Location:../production/iletisimayar.php?durum=no");
		}



}


if (isset($_POST['apiayarkaydet'])) {

	 $ayarkaydet=$db->prepare("UPDATE ayar SET 

	 	ayar_analystic=:ayar_analystic,
	 	ayar_maps=:ayar_maps,
	 	ayar_zopim=:ayar_zopim
	 	WHERE ayar_id=0	");


	 $update=$ayarkaydet->execute(array(

	 	'ayar_analystic' => $_POST['ayar_analystic'],
	 	'ayar_maps' => $_POST['ayar_maps'],
	 	'ayar_zopim' => $_POST['ayar_zopim']
	 ));
	

		if ($update) {
			
			header("Location:../production/apiayar.php?durum=ok");

		} else {

			header("Location:../production/apiayar.php?durum=no");
		}



}

if (isset($_POST['sosyalayar'])) {

	 $ayarkaydet=$db->prepare("UPDATE ayar SET 

	 	ayar_facebook=:ayar_facebook,
	 	ayar_twitter=:ayar_twitter,
	 	ayar_google=:ayar_google,
	 	ayar_instagram=:ayar_instagram
	 	WHERE ayar_id=0	");


	 $update=$ayarkaydet->execute(array(

	 	'ayar_facebook' => $_POST['ayar_facebook'],
	 	'ayar_twitter' => $_POST['ayar_twitter'],
	 	'ayar_google' => $_POST['ayar_google'],
	 	'ayar_instagram' => $_POST['ayar_instagram']
	 ));
	

		if ($update) {
			
			header("Location:../production/sosyalayar.php?durum=ok");

		} else {

			header("Location:../production/sosyalayar.php?durum=no");
		}



}

if (isset($_POST['mailayar'])) {

	 $ayarkaydet=$db->prepare("UPDATE ayar SET 

	 	ayar_smtphost=:ayar_smtphost,
	 	ayar_smtppassword=:ayar_smtppassword,
	 	ayar_smtppassword=:ayar_smtppassword
	 	WHERE ayar_id=0	");


	 $update=$ayarkaydet->execute(array(

	 	'ayar_smtphost' => $_POST['ayar_smtphost'],
	 	'ayar_smtppassword' => $_POST['ayar_smtppassword'],
	 	'ayar_smtppassword' => $_POST['ayar_smtppassword']
	 ));
	

		if ($update) {
			
			header("Location:../production/mailayar.php?durum=ok");

		} else {

			header("Location:../production/mailayar.php?durum=no");
		}



}


if (isset($_POST['hakkimizdakaydet'])) {

	 $ayarkaydet=$db->prepare("UPDATE hakkimizda SET 

	 	hakkimizda_baslik=:hakkimizda_baslik,
	 	hakkimizda_icerik=:hakkimizda_icerik,
	 	hakkimizda_video=:hakkimizda_video,
	 	hakkimizda_vizyon=:hakkimizda_vizyon,
	 	hakkimizda_misyon=:hakkimizda_misyon
	 	WHERE hakkimizda_id=0	");


	 $update=$ayarkaydet->execute(array(

	 	'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
	 	'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
	 	'hakkimizda_video' => $_POST['hakkimizda_video'],
	 	'hakkimizda_vizyon' => $_POST['hakkimizda_vizyon'],
	 	'hakkimizda_misyon' => $_POST['hakkimizda_misyon']
	 ));
	

		if ($update) {
			
			header("Location:../production/hakkimizdaayar.php?durum=ok");

		} else {

			header("Location:../production/hakkimizdaayar.php?durum=no");
		}



}


if (isset($_POST['kullaniciduzenle'])) {

	$kullanici_id=$_POST['kullanici_id'];

	$ayarkaydet=$db->prepare("UPDATE kullanici SET
		kullanici_tc=:kullanici_tc,
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_durum=:kullanici_durum
		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(
		'kullanici_tc' => $_POST['kullanici_tc'],
		'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
		'kullanici_durum' => $_POST['kullanici_durum']
		));


	if ($update) {

		Header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=ok");

	} else {

		Header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=no");
	}

}


if ($_GET['kullanicisil']=="ok") {

	$sil=$db->prepare("DELETE from kullanici where kullanici_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['kullanici_id']
		));


	if ($kontrol) {


		header("location:../production/kullanici.php?sil=ok");


	} else {

		header("location:../production/kullanici.php?sil=no");

	}


}





?>