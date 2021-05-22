<?php
$images_path = 'https://image.tmdb.org/t/p/w500/';
$api_key = '4ec327e462149c3710d63be84b81cf4f';
$url = "https://api.themoviedb.org/3/trending/all/week?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR";
$json = json_decode(file_get_contents($url),true);
foreach($json['results'] as $json)
{
  if($json['title']==null){}else{
 echo '<h1>'.$json['title'].'</h1>  ';
 echo '<img src="'.$images_path.$json['poster_path'].'" widht="100px" height="150px">';
 echo '<p>'.$json['overview'].'</p><br />';
}}
