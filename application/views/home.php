<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Ruthie" rel="stylesheet">
  <meta charset="UTF-8">  
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}
    
header {
    padding: 1em;
    color: black;
    background-color: papayawhip;
    clear: left;
    text-align: center; } 
h1{
    display: inline;
    font-family: 'Ruthie', cursive;
    text-align: center;
    font-size: 80px;
    margin:0 3px 3px;
}
#navegador ul{
   list-style-type: none;
   text-align: left;
}
#navegador li{
   display: inline;
   text-align: center;
   margin: 0 10px 0 0;
}
#navegador li a {
   padding: 2px 7px 2px 7px;
   color: dimgrey;
   background-color: whitesmoke;
   border: 1px solid black;
   text-decoration: none;
}
#navegador li a: hover{
   background-color: lightcyan;
   color: lightcoral;
}
enlaces
    nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
    clear: left;
}
#tabla {
    text-align: center;
    clear: center;
    
        
    }
footer {
    padding: 1em;
    color: white;
    background-color: dimgray;
    clear: left;
    text-align: center;
    
</style>
    
</head>
   <h1><center>¡Bienvenidos a HappyReads!</center></h1>
    <hr> 
<body>
<div class="container">
    <div id="navegador">
 <ul>
     <li><b><a href="#">Principal</a></b></li> 
    <li><b><a href="#">Recientes</a></b></li> 
    <li><b><a href="#">Populares</a></b></li> 
     <li><b><a href="#">Archivos</a></b></li> 
    <li><b><a href="#">Sobre mí</a></b></li>
    <li><b><a href="<?php echo base_url().'panel'?>">Configuración</a></b></li>
</ul>
<hr>
</div>
</div>
    
<div id=galeria1><marquee scrolldelay="5" direction="left" onmouseover="stop()"onmouseout="start()" scrollamount="5">
<img src="Imagenes/Harmony_House-TAPA-ALTA.jpg" width="200px" height="220px">
<img src="Imagenes/bara.jpg" width="200px" height="220px"/>
<img src="Imagenes/883.jpg" width="200px" height="220px"/></marquee></div>

    
    <div id=enlaces align="left">Enlaces
    <nav>
  <ul>
    <li><b><a href="#">1</a></b></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
  </ul>
</nav>
        </div>
   <article> 
 <h2>Galería: novedades</h2>
    
<div id="tabla">
    <center><table border="0" cellpadding="100" cellspacing="0"> 
     <tr> 
         <td>1</td> <td> 2 </td> <td> 3 </td>
     </tr>
        <tr> 
          <td>4 </td> <td> 5 </td> <td> 6 </td>
    </tr>
    <tr> 
          <td>7 </td>  <td> 8 </td> <td> 9 </td>
    </tr>

    
    </table> </center>
</div> 
 </article>  
     
<footer>Copyright &copy; happyReads2017</footer>
</body>
</html>