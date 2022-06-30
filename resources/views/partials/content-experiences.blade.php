@php
  $experiences_texts=get_field('experiences_texts');
  $experiences=get_field('experiences');
@endphp

@php

$url_lang=$get_current_lang;


foreach($experiences_texts as $key => $lang){
  if($lang['language']==$url_lang) {
    //echo $key;
    $curr_lang=$key;
  }
}

@endphp

<div class="experience-space exp-content">
  <div class="category-img">
    <iframe height="500" src="https://www.google.com/maps/d/u/0/embed?mid=1Juj1DiBO0c9SCe4arDMklYuC9Vk-4Lp5" width="80%"></iframe>
  </div>
  <div class="experiences-col">
    <div class="category">
      <h1>{{ $experiences_texts[$curr_lang]['text_list']['tagline'] }}</h1>
{{--       <a href="https://www.visittuscany.com/en/destinations/montepulciano/" target="_blank">Montepulciano</a>
      <a href="https://www.visittuscany.com/en/destinations/cortona/" target="_blank">Cortona</a>
      <a href="https://www.cortonamia.com/en/convento-le-celle/" target="_blank">Le Celle</a>
      <a href="https://www.visittuscany.com/en/destinations/siena/" target="_blank">Siena</a>
      <a href="https://www.visittuscany.com/en/destinations/pienza/" target="_blank">Pienza</a>
      <a href="https://www.visittuscany.com/en/destinations/arezzo/" target="_blank">Arezzo</a>
      <a href="https://www.umbriatourism.it/web/umbria/-/paciano-borgo-medievale-sulle-colline-del-trasimeno 1" target="_blank">Lago Trasimeno</a>
      <a href="https://www.umbriatourism.it/web/umbria/-/isola-maggiore" target="_blank">Isola Maggiore</a>
      <a href="https://www.umbriatourism.it/web/umbria/-/rocca-di-isola-polvese" target="_blank">Isola Polvese</a>
      <a href="https://www.umbriatourism.it/-/montefalco" target="_blank">Montefalco</a>
      <a href="https://www.umbriatourism.it/-/perugia" target="_blank">Perugia</a>
      <a href="https://www.umbriatourism.it/-/orvieto" target="_blank">Orvieto</a>
      <a href="https://www.umbriatourism.it/web/umbria/-/tane-del-diavolo-parrano" target="_blank">Monteleone d’Orvieto (caves) and “Devil’s Bath” (close to Citta Della Pieve)</a>
      <a href="https://www.umbriatourism.it/-/gubb-1" target="_blank">Gubbio</a>
      <a href="https://www.umbriatourism.it/-/spoleto" target="_blank">Spoleto</a> --}}
      @foreach($experiences as $experience)
      <a href="{{ $experience['experience']['url'] }}" target="_blank">{{ $experience['experience']['title'] }}</a>
    @endforeach
    </div>
  </div>
