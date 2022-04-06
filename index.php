<!DOCTYPE html>
<html>
<head>
 <title>Home</title>
 <?php include "conf/info.php"; ?>
</head>
<body>
 <div align="center">
  <h2><b>HOME</b></h2>
  <h4><b>Data Movie</b></h4>
  <table>
   <?php
   $kolom =3;
   $i=1;
   include_once "api/api_toprated.php";
   foreach($toprated->Search as $p){
    if(($i) % $kolom== 1) { 
  echo '<td><a href="movie.php?id='  . $p->id  .  '"><img src="'. $p->Poster . '"><h4>' . $p->Title . " (" . substr($p->Year, 0, 4) . ")</h4><h5><em>IMDB : " . $p->imdbID . " |  Type : " . $p->Type . "</b></td>";
     
}
$i++;
}
   ?>
  </table>
  <br>
  <h2><a href="" target="_blank"></a> </h2> <br> <br>
 </div>
</body>
</html>