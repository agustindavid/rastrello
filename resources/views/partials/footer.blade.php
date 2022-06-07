@php $page_texts=get_field('page_texts', 'option') @endphp

@php

//print_r($page_texts);

$url_lang=$get_current_lang;

foreach($page_texts as $key => $lang){
  if($lang['language']==$url_lang) {
    //echo $key;
    $curr_lang=$key;
  }
}

@endphp

<div  class="footer">
  <div class="footer-logos">
    <div class="text-center">
      <img class="logo-footer"  alt="" src="@asset('images/logo.svg')">
    </div>
    <div class="text-center external-logos">
      <a href="https://www.designhotels.com/" target="_blank"><img class="hotels-logo" src="@asset('images/logo-hotels.svg')" alt=""></a>
      <br><br>
      <a target="_blank" href="https://www.mrandmrssmith.com/luxury-hotels?utm_content=brand&gclid=CjwKCAjwj42UBhAAEiwACIhADgFEnE37b9qYl78voOTOTFbay3WGVkZYHeL95DzOLPK9oUIRtPuvKhoClWwQAvD_BwE"><img class="hotels-logo" src="@asset('images/smithlogo.png')" alt=""></a>
    </div>
  </div>
  <div  class="menu">
    <div  class="list">
      <div class="title">{{ $page_texts[$curr_lang]['text_list']['hotel_footer_title'] }}</div>
      <div class="item open-booking">{{ $page_texts[$curr_lang]['text_list']['reservations_menu'] }}</div>
      <div class="item"><a href="{{ home_url() }}/#rooms">{{ $page_texts[$curr_lang]['text_list']['rooms_menu'] }}</a></div>
      <div class="item"><a href="{{ home_url() }}/about-us">{{ $page_texts[$curr_lang]['text_list']['press_menu'] }}</a></div>
      <div class="item"><a href="{{ home_url() }}/gallery">{{ $page_texts[$curr_lang]['text_list']['gallery_menu'] }}</div>
      <div class="item"><a href="{{ home_url() }}/restaurant">{{ $page_texts[$curr_lang]['text_list']['restaurant_menu'] }}</a></div>
      <div  class="item"><a href="@asset('images/faq.pdf')">{{ $page_texts[$curr_lang]['text_list']['faq_menu'] }}</a></div>
    </div>
    <div  class="list">
      <div class="title">{{ $page_texts[$curr_lang]['text_list']['experiences_footer_title'] }}</div>
      <div  class="item"><a href="{{ home_url() }}/panicale">{{ $page_texts[$curr_lang]['text_list']['panicale_menu'] }}</a></div>
      <div  class="item"><a href="{{ home_url() }}/experiences">{{ $page_texts[$curr_lang]['text_list']['nearby_menu'] }}</a> </div>
      <!-- <div  class="item"> FAQ </div> -->
    </div>
    <div  class="list">
      <div  class="title">{{ $page_texts[$curr_lang]['text_list']['follow_us_footer_title'] }}</div>
      <div  class="item"><a href="https://www.instagram.com/rastrello.panicale/" target="_blank">Instagram</a></div>
      <div  class="item"><a href="https://www.facebook.com/rastrello.panicale/" target="_blank">Facebook</a></div>
      <div  class="item"><a href="https://vsco.co/rastrellopanicale/gallery" target="_blank">VSCO</a></div>
    </div>
  </div>
</div>
<div class="banner-bt">
  <div  class="start">
    <div >
      <img  alt="" src="@asset('images/telephone-handle-silhouette.svg')">
      <a  class="content" href="tel:+393534126302" style="color: white"> &#x202D;+39 353 4126302</a>
      <a  class="content" href="tel:+39075837246" style="color: white"> +39 075 837246</a>
    </div>
    <div >
      <img  alt="" src="@asset('images/black-back-closed-envelope-shape.svg')">
      <a  class="content" href="mailto:info@rastrello.com" style="color: white">INFO@RASTRELLO.COM</a>
    </div>
  </div>
  <div  class="end">
    <img  alt="" src="@asset('images/maps-and-flags.svg')">
    <a  class="content" href="https://rastrello.com/location/" style="color: white">VIA GROSSI 10, PANICALE (PG), ITALY</a>
  </div>
</div>
