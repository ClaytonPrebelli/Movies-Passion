<?php
$clicado_busca=false;

function exibe_geral(){
$images_path = 'https://image.tmdb.org/t/p/w500';
$api_key = '4ec327e462149c3710d63be84b81cf4f';
$url = "https://api.themoviedb.org/3/trending/all/week?api_key=4ec327e462149c3710d63be84b81cf4f&sort_by=original_title.asc&language=pt-BR";
$json = json_decode(file_get_contents($url),true);
$i=0;
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
  if(strlen($json['overview']) > 200){
    $sinopse = (substr($json['overview'], 0, 220))." ...";
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
  echo '<div class="card" id="card'.$i.'">
  <h5 class="tit_filme">'.$json['title'].'</h5>
  <button class="bt_capa" style="background-image:url('.$images_path.$json['poster_path'].');" onclick="abremodal('.$json['id'].')"></button>
    <h6>Sinopse:</h6><p>'.$sinopse.'</p>
        <div class="lanc_gen">
          <div class="info">
            <h6>Lançamento</h6><p>'.$data.'</p>
          </div>
          <div class="info">
          <h6>Gênero</h6><p>'.$genero_desc.'</p>
          </div>
        </div>
        </div>
        <div class="modal_filme" id="'.$json['id'].'">
        <div class="conteudo_modal">
          <div class="modal_image">
          <img src="'.$images_path.$json['poster_path'].'" alt="capa">
          </div>
        
        <div class="modal_descricao">
          <div id="titulo_desc">
            <h4>Título: '.$json['title'],'</h4>
            <h6>Título Original: '.$json['original_title'].'</h6>
            <div class="sino">
            <h6>Sinopse:</h6>
            <p>'.$json['overview'].'</p>
            </div>
            <div class="info_adc1">
              <div class="in">
                <h6>Gênero</h6>
                <p><i class="fas fa-bookmark ic"></i>'.$genero_desc.'</p>
              </div>
              <div class="in">
                <h6>Lançamento</h6>
                <p><i class="fas fa-calendar-day ic"></i>'.$data.'</p>
              </div>
              <div class="in">
                <h6>Nota</h6>
                <p><i class="fas fa-star" id="star"></i>'.$json['vote_average'].'</p>
              </div>
              <div class="in">
                <h6>Votos</h6>
                <p><i class="fas fa-poll ic"></i>'.$json['vote_count'].'</p>
              </div>
              <div class="in">
                <h6>Popularidade</h6>
                <p><i class="fas fa-heart" id="coracao"></i>'.$json['popularity'].'</p>
              </div>
              <div class="in">
                <h6>Idioma Original</h6>
                <p><i class="fas fa-language ic"></i>'.$json['original_language'].'</p>
              </div>
            </div>
            <div class="info_adc2">
              <button id="voltar" onclick="voltar('.$json['id'].')">Voltar</button>
              </div>
          </div>
        </div>
        </div>
      </div>';

}}};




