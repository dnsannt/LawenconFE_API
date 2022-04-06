<?php
  include "conf/info.php";
  $title="Welcome to";
  include_once "header.php";
?>
    <h1>~ Top Rated Movies ~</h1>
    <hr>
    <ul>
      <?php
        include_once "api/api_toprated.php";
        foreach($toprated->Search as $p){
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="'. $p->Poster . '"><h4>' . $p->Title . " (" . substr($p->Year, 0, 4) . ")</h4><h5><em>IMDB : " . $p->imdbID . " |  Type : " . $p->Type . "</em></h5></a></li>";
        }
      ?> 
    </ul>
    <?php
    <li></li>

<?php
  include_once "footer.php";
?>