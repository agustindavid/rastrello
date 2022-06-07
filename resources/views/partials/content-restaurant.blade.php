@php $restaurant_texts=get_field('restaurant_texts') @endphp

@php

$url_lang=$get_current_lang;


foreach($restaurant_texts as $key => $lang){
  if($lang['language']==$url_lang) {
    //echo $key;
    $curr_lang=$key;
  }
}

@endphp
<div  class="bg-restaurant"></div>
<div  class="">
  <p  class="my title-restaurant" style="font-family: 'Prata', serif !important;">Cucina &amp; Giardino</p>
</div>
<div  class="dividier-restaurant"></div>
<div  class="my content-info-restaurant">
  <p  class="info-restaurant">{!! $restaurant_texts[$curr_lang]['text_list']['intro_text'] !!}</p>
</div>
<div  class="content-restaurant my">
  <div  class="grid-restaurant my">
    <div  class="column-restaurant">
      <p  class="opening-restaurant">{{ $restaurant_texts[$curr_lang]['text_list']['opening_hours_title'] }}</p>
      <table  class="table-restaurant">
        <tr >
          <td  class="td-restaurant hour-restarant">{{ $restaurant_texts[$curr_lang]['text_list']['opening_hours'] }}</td>
        </tr>
        <tr >
          <td  class="td-restaurant hour-restarant">{{ $restaurant_texts[$curr_lang]['text_list']['opening_hours_sunday'] }}</td>
        </tr>
      </table>
      <p  class="opening-restaurant">{{ $restaurant_texts[$curr_lang]['text_list']['reservation_phone_title'] }}</p>
      <table  class="table-restaurant">
        <tr >
          <td  class="td-restaurant hour-restarant"><a  href="tel:+390758379175"> {{ $restaurant_texts[$curr_lang]['text_list']['reservation_phone'] }}</a></td>
        </tr>
      </table>
      <p  class="opening-restaurant">{{ $restaurant_texts[$curr_lang]['text_list']['disclaimer'] }}</p>
      <div  class="my">
        <a  class="btn -primary" href="https://api.whatsapp.com/send?phone=393534126302&amp;text=Hi%20Cucina%20%26%20Giardino!%20I%20would%20like%20to%20reserve%20a%20table.%20Do%20you%20have%20availability%3F" target="_blank">{{ $restaurant_texts[$curr_lang]['text_list']['reserve_table_'] }}</a><br><br>
        <a  class="btn -primary" href="{{ $restaurant_texts[$curr_lang]['text_list']['monthly_menu_file'] }}" target="_blank">{{ $restaurant_texts[$curr_lang]['text_list']['monthly_menu'] }}</a><br><br>
        <a  class="btn -primary" href="{{ $restaurant_texts[$curr_lang]['text_list']['sunday_menu_file'] }}" target="_blank">{{ $restaurant_texts[$curr_lang]['text_list']['sunday_menu'] }}</a>
      </div>
    </div>
    <div  class="column-restaurant">
      <div  class="slideshow-container">
        @php $images=get_field('images') @endphp
        <div class="room-slide">
          @foreach($images as $image)
            <img src="{{ $image['image']['sizes']['room-slide'] }}" alt="">
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
