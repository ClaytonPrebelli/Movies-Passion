<?php


function exibe_geral(){
$images_path = 'https://image.tmdb.org/t/p/w500';
$api_key = '4ec327e462149c3710d63be84b81cf4f';
$url = "https://api.themoviedb.org/3/trending/all/week?api_key=4ec327e462149c3710d63be84b81cf4f&sort_by=original_title.asc&language=pt-BR";
$json = json_decode(file_get_contents($url),true);
foreach($json['results'] as $json)
{
  if($json['title']==null){}else{
   $genero = $json['genre_ids'];
  switch($genero[0]){
    case 28: $genero_desc="Ação";
    break;
    case 12: $genero_desc="Aventura";
    break;
    case 16: $genero_desc="Animação";
    break;
    case 35: $genero_desc="Comédia";
    break;
    case 80: $genero_desc="Crime";
    break;
    case 99: $genero_desc="Documentário";
    break;
    case 18: $genero_desc="Drama";
    break;
    case 10751: $genero_desc="Família";
    break;
    case 14: $genero_desc="Fantasia";
    break;
    case 36: $genero_desc="História";
    break;
    case 27: $genero_desc="Terror";
    break;
    case 10402: $genero_desc="Música";
    break;
    case 9648: $genero_desc="Mistério";
    break;
    case 10749: $genero_desc="Romance";
    break;
    case 878: $genero_desc="Ficção científica";
    break;
    case 10770: $genero_desc="Cinema TV";
    break;
    case 53: $genero_desc="Thriller";
    break;
    case 10752: $genero_desc="Guerra";
    break;
    case 37: $genero_desc="Faroeste";
    break;
    default:$genero_desc="Gênero não definido"; 
  }
  if(strlen($json['overview']) > 197){
    $sinopse = (substr($json['overview'], 0, 196))."...";
}
else{
    $sinopse = $json['overview'];
}
 // Quebra as strings nos "-" e transforma cada pedaço numa matriz
 $data_recebida = explode("-", $json['release_date']);
  // Inverte os pedaços
 $reversdata = array_reverse($data_recebida);
 // Junta novamente a matriz em texto separado por tracinho (-)
 $data = implode("/", $reversdata);
  echo '<div class="card">
  <h5 class="tit_filme">'.$json['title'].'</h5>
    <img src="'.$images_path.$json['poster_path'].'" alt="" width="150px" height="200px">
    <h6>Sinopse:</h6><p>'.$sinopse.'</p>
        <div class="lanc_gen">
          <div class="info">
            <h6>Lançamento</h6><p>'.$data.'</p>
          </div>
          <div class="info">
          <h6>Gênero</h6><p>'.$genero_desc.'</p>
          </div>
        </div>
    </div>';
}}};




