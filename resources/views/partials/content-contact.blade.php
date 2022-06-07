@php $contact_texts=get_field('contact_texts') @endphp

@php

$url_lang=$get_current_lang;

foreach($contact_texts as $key => $lang){
  if($lang['language']==$url_lang) {
    //echo $key;
    $curr_lang=$key;
  }
}

@endphp

<div  class="bg-restaurant"></div>
<div  class="">
  <p  class="my title-restaurant" style="font-family: 'Prata', serif !important;">{{ $contact_texts[$curr_lang]['text_list']['title'] }}</p>
</div>
<div  class="dividier-restaurant"></div>
<div  class="content-restaurant my">
  <div  class="grid-restaurant my">
    <div  class="column-restaurant">
      <p  class="opening-restaurant">{{ $contact_texts[$curr_lang]['text_list']['email_title'] }}</p>
      <table  class="table-restaurant">
        <tr >
          <td  class="td-restaurant hour-restarant"> <a href="mailto:info@rastrello.com">{{ $contact_texts[$curr_lang]['text_list']['email'] }}</a></td>
        </tr>
      </table>
      <p  class="opening-restaurant">{{ $contact_texts[$curr_lang]['text_list']['phone_number_title'] }}</p>
      <table  class="table-restaurant">
        <tr >
          <td  class="td-restaurant hour-restarant">{!! $contact_texts[$curr_lang]['text_list']['phone_number_1'] !!}</a></td>
        </tr>
        <tr >
          <td  class="td-restaurant hour-restarant">{!! $contact_texts[$curr_lang]['text_list']['phone_number_2'] !!}</td>
        </tr>
      </table>
    </div>
    <div  class="column-restaurant">
      <div  class="slideshow-container">
        @php $images=get_field('images') @endphp
        <div class="room-slide contact-slide">
          @foreach($images as $image)
            <img src="{{ $image['image']['sizes']['room-slide'] }}" alt="">
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
