@php $panicale_texts=get_field('panicale_texts') @endphp

@php

$url_lang=$get_current_lang;

echo $url_lang;


foreach($panicale_texts as $key => $lang){
  if($lang['language']==$url_lang) {
    //echo $key;
    $curr_lang=$key;
  }
}

@endphp

<div class="experience-space">
  <div class="category-img">
    <img alt="" src="@asset('images/mappanicale.svg')">
  </div>
  <div class="experiences-col">
    <div class="category">
      <h1>{{ $panicale_texts[$curr_lang]['text_list']['tagline'] }}</h1>
      <a href="https://www.umbriatourism.it/web/umbria/-/panica-1" target="_blank">Panicale</a>
      <a href="https://www.umbriatourism.it/en_US/-/teatro-cesare-caporali-panicale?p=/cultura&amp;t=Cultura" target="_blank">Cesare Caporali Theatre</a>
      <a href="https://www.umbriatourism.it/web/umbria/-/chiesa-di-san-sebastiano-panicale" target="_blank">Fresco of “St. Sebastian’s Martyr”, by Pietro Perugino: Church of St. Sebastian</a>
      <a href="https://www.umbriatourism.it/web/umbria/-/collegiata-di-san-michele-arcangelo" target="_blank">The Collegiate Church of Michele Arcangelo</a>
      <a href="https://www.umbriatourism.it/-/museo-del-tulle-anita-belleschi-grifoni-panicale" target="_blank">Lace Museum: Museo del Tulle</a>
      <a href="http://www.portal-pacianopanicalepiegaro.it/en/tourism/panicale-en/madonna-della-sbarra-church/" target="_blank">Chiesa della Madonna della Sbarra</a>
    </div>
  </div>
