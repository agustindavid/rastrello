@php $internal_texts=get_field('internal_texts') @endphp

@php

$url_lang=$get_current_lang;

foreach($internal_texts as $key => $lang){
  if($lang['language']==$url_lang) {
    //echo $key;
    $curr_lang=$key;
  }
}

@endphp

<div class="press-banner" style="background-image: url('{{ get_the_post_thumbnail_url() }}')"></div>
<div class="i-title">
  <h1 class="text-center">
   {{ $internal_texts[$curr_lang]['text_list']['title'] }}
  </h1>
</div>



<div class="content-internal">
  {!!  $internal_texts[$curr_lang]['text_list']['content'] !!}
</div>
