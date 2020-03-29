<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta lang="es">
<meta charset="utf-8">
   <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
   <link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.5/listview-grid/listview-grid.css">
   <link href='img/zgtvlogo.png' rel='image_src'/>
   <meta name="title" content="ZGTv. Full Animes Videos Peliculas Gratis">



  <meta property="og:url"           content="http://zgrafic.com" />
  <meta property="og:type"          content="ZGTv." />
  <meta property="og:title"         content="ZGTv. Full Animes" />
  <meta property="og:description"   content="ZGTv. es una web es la que podras disfrutar del contenido completamente Gratis" />
  <meta property="og:image"         content="img/zgtvlogo.png" />



   <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
   <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
   <script src="http://zgrafic.com/list/code/tawk.js"></script>

<!--
<script type="text/javascript" src="//goraps.com/mobile_redir.php?section=General&pub=516552&ga=g&desktop=1"></script>
-->

<script type="text/javascript" src="//goraps.com/tup.php?section=zgtvtabup&pt=7&pub=516552&ga=g"></script>

   <!--inicioscrpgalleria-->
<script type="text/javascript" src="html5lightbox.js"></script>
<script type="text/javascript">
function LightboxGroupLink(id) {
var href = document.getElementById(id).getAttribute('href');
html5Lightbox.showItem(href);
}
</script>
<!--finscrpgalleria-->





<link href='../../img/zgtvlogo.png' rel='shortcut icon' type='image/png'/>

<title>ZGTv</title></head>

  <style>
  .textbox
  {
  font-size: 15px;
  }
 </style>

<style type="text/css">
#centro {
	width: 100%;
	position: absolute;
	top: 40%;
	left: 0;

}
    </style>

<body oncontextmenu="return false">
<div data-role="page" data-theme="b"  class="my-page" id="demo-page"><div  role="main" class="ui-content" align="center">

  <ul data-role="listview" data-inset="true" data-filter="true" data-input="#myFilter">

  <script>
  if (window.XMLHttpRequest)
  {
  	// Objeto para IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  }else{
  	// Objeto para IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

  // Abrimos el archivo que esta alojado en el servidor cd_catalog.xml
  xmlhttp.open("GET","list.xml?v=<?php $d=mt_rand(1,30); echo $d ; ?>",false);
  xmlhttp.send();

  // Obtenemos un objeto XMLDocument con el contenido del archivo xml del servidor
  xmlDoc=xmlhttp.responseXML;

  // Obtenemos todos los nodos denominados foro del archivo xml
  var foros=xmlDoc.getElementsByTagName("anime");

  // Hacemos un bucle por todos los elementos foro
  for(var i=0;i<foros.length;i++)
  {
  	// Del elemento foro, obtenemos del primer elemento denominado "titulo"
  	// el valor del primer elemento interno
  	titulo=foros[i].getElementsByTagName("titulo")[0].childNodes[0].nodeValue
  	cap=foros[i].getElementsByTagName("cap")[0].childNodes[0].nodeValue
  	iurl=foros[i].getElementsByTagName("iurl")[0].childNodes[0].nodeValue

  	document.write("<li>");
  		document.write("<a href='../../fembed/?id="+iurl+"&titulo=Capitulo "+cap+"' target='contenedor'>");
  		document.write("<img src='poster.png' class='ui-li-thumb'  height='100%'>");
  		document.write("<h2>"+titulo+"</h2>");
  		//document.write("<p>Code: "+code+"</p>");
  		document.write("<p class='ui-li-aside'>"+cap+"</p>");
  		//document.write("<a href='../../fembed/?id="+iurl+"' class='html5lightbox' title='"+titulo+"' data-icon='star'>Video Previo</a>");
  		document.write("</a>");
  	document.write("</li>");
  }
  </script>
  </ul>

<div data-role="header" data-position="fixed" data-theme="b" align="center">
<!--<img src="img/banner.png" width="979" height="140"> -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">




<div data-role="collapsible" data-theme="b" data-content-theme="b">
    <h4>Click para abrir o cerrar el Reproductor</h4>
    <iframe width="320px" height="247px" src="" frameborder="0" allowfullscreen name="contenedor" id="contenedor"></iframe><br>

	
<script type="text/javascript" src="//uprimp.com/bnr.php?section=dabanner468x60&pub=993114&format=468x60&ga=g"></script>
<noscript><a href="https://yllix.com/publishers/993114" target="_blank"><img src="//ylx-aff.advertica-cdn.com/pub/468x60.png" style="border:none;margin:0;padding:0;vertical-align:baseline;" alt="ylliX - Online Advertising Network" /></a></noscript>





    <script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
        }
    };
    xhttp.open("GET", "list.xml?v=<?php $d=mt_rand(1,30); echo $d ; ?>", true);
    xhttp.send();

    function myFunction(xml) {
        var xmlDoc = xml.responseXML;
        var x = xmlDoc.getElementsByTagName('iurl')[0];
        var y = x.childNodes[0];
        document.getElementById("contenedor").src = '../../fembed/?id='+y.nodeValue+'&titulo=Capitulo 1';

        //y.nodeValue;
    }
    </script>





  </div>	    
<!--    <a href="?a=estrenos" target="_parent"><button class="btn btn-danger navbar-btn">Animes en Estreno</button></a> -->
  </div>
</nav>



<!--
  <div data-role="navbar">
    <ul>
      <li><a href="http://video.zgrafic.com" target="_parent">Todos los animes</a></li>
      <li><a href="?a=estrenos" target="_parent">Animes en Estreno</a></li>
    </ul>
  </div>
-->
 </div>

<div data-role="footer" data-position="fixed" data-theme="b" align="center" >
	
<script type="text/javascript" src="//uprimp.com/bnr.php?section=dabanner728x90&pub=993114&format=728x90&ga=g"></script>
<noscript><a href="https://yllix.com/publishers/993114" target="_blank"><img src="//ylx-aff.advertica-cdn.com/pub/728x90.png" style="border:none;margin:0;padding:0;vertical-align:baseline;" alt="ylliX - Online Advertising Network" /></a></noscript>
	
	</div>

</div>

</body>
</html>
